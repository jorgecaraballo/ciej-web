'use strict';
class Modelo {
	constructor(controlador, metodo) {
		this.controlador = controlador;
		this.metodo = metodo;
		}
	getControlador = () => {
		return this.controlador;
		};
	getMetodo = () => {
		return this.metodo;
		};
	_serialize(obj) {
		var str = [];
		for (var p in obj) {
			if (obj.hasOwnProperty(p)) {
				str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
				}
			}
		return str.join("&");
		}
	_ajax(method, metodo, payload, callback, toJson = true) {
		var ajaxUrl = `${base_url}${this.controlador}/${metodo}`;
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		request.onreadystatechange = function() {
			if (this.readyState == 4) {
				if (this.status == 200) {
					try {
						if (toJson) {
							callback(null, JSON.parse(this.responseText));
							}
						else {
							callback(null, this.responseText);
							}
						}
					catch (e) {
						callback(e, this.responseText);
						}
					}
				else {
					callback(this.status, this.statusText);
					}
				}
			};
		request.open(method, ajaxUrl, true);
		
		/*
		 * Al parecer request.setRequestHeader se "setea" automáticamente de acuerdo a la data enviada en request.send
		 * Entonces parece que no es necesario setear esto (de hecho se obtiene un error si lo colocamos). 
		 * De hecho, el formulario formPerfil tiene enctype="multipart/form-data"
		 * 
		request.setRequestHeader("Content-type","application/x-www-form-urlencoded"); // Esto hay que hacerlo despues del método open.
		
		* Entonces al parecer, de acuerdo al enctype del formulario, parece que se setea automáticamente el request.setRequestHeader
		*/
		
		if (method == 'POST') {
			if (payload instanceof FormData) { // Acá no es necesario "setear" el Content-type
				request.send(payload);
				}
			else {
				request.setRequestHeader("Content-type","application/x-www-form-urlencoded"); // Es necesario en este caso. Comprobado. Si no, no reconoce el $_POST en el controlador. 
				request.send(this._serialize(payload || {})); // http://localhost:8200/tarea.php?numero_tarea=2567
				}
			}
		else {
			request.send();
			}
		request.onerror = request.ontimeout = function(e) {
			callback(`${e.type}`, null);
			};
		}
	setCookie = (cname, cvalue, exdays, callback) => {
		const d = new Date();
		d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
		let expires = "expires="+d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/" + ";SameSite=Lax";
		callback();
		};
	getCookie = (cname) => {
		let name = cname + "=";
		// document.cookie will return all cookies in one string much like: cookie1=value; cookie2=value; cookie3=value;
		//console.log(document.cookie);
		let decodedCookie = decodeURIComponent(document.cookie);
		let ca = decodedCookie.split(';');
		for(let i = 0; i <ca.length; i++) {
			let c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
				}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
				}
			}
		return "";
		};
	checkCookieTema = (cname, cvalue, exdays, callback) => {
		const self = this;
		let tema = this.getCookie(cname);
		if (tema != "") { // Ya existe una cookie donde se ha guardado el tema
			this.tema = tema; // tema es el cvalue de la cookie
			callback();
			}
		else { // No existe la cookie tema. La creamos.
			this.setCookie(cname, cvalue, exdays, function() {
				self.checkCookieTema(cname, cvalue, exdays, callback);
				});
			}
		};
	checkCookieClaroscuro = (cname, cvalue, exdays, callback) => {
		var self = this;
		let claroscuro = this.getCookie(cname);
		if (claroscuro != "") { // Ya existe una cookie donde se ha guardado el tema
			this.claroscuro = claroscuro; // tema es el cvalue de la cookie. Línea importante
			callback();
			}
		else { // No existe la cookie tema. La creamos.
			this.setCookie(cname, cvalue, exdays, function() {
				self.checkCookieClaroscuro(cname, cvalue, exdays, callback);
				});
			}
		};
	}
