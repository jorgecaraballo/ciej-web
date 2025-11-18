'use strict';
class Controlador {
	constructor(model, view) {
		this.model = model;
		this.view = view;
		//this.getCookies(); // Busco la "configuración" de las cookies en Config.php
		}
	getCookies = () => {
		this.model._ajax('GET', 'getCookies', null, this.handleGetCookies);
		};
	handleGetCookies = (err, objData) => {
		if (!err) {
			try {
				this.model.cookieConfig = objData; // Guardo "la coniguración" de las cookies en el modelo
				//console.log(this.model.cookieConfig);
				// Ya sabiendo "la configuración de las cookies" puedo hacer el chequeo de la cookie que tiene que ver con el tema y la guardo en el modelo.
				this.model.checkCookieTema(objData.color.cname, objData.color.cvalue, objData.color.exdays, this.handleCookieTema); // checkCookie actualiza la propiedad tema en el modelo.
				this.model.checkCookieClaroscuro(objData.claroscuro.cname, objData.claroscuro.cvalue, objData.claroscuro.exdays, this.handleCookieClaroscuro); // checkCookie actualiza la propiedad claroscuro en el modelo.
				//this.view.displayResultadoPutPerfil(objData);
				}
			catch (e) {
				console.log(e);
				}
			}
		else {
			console.log(err);
			}
		};
	handleCookieTema = () => {
		this.view.temaAlInicio(this.model.tema);
		// Aquí es que puedo dar "luz verde" a las inicializaciones que tengan que ver con el tema
		// porque ya tengo definida la propiedad tema en el model, antes no (y por ende es undefined)
		this.inicializadorTema();
		};
	handleCookieClaroscuro = () => {
		this.view.claroscuroAlInicio(this.model.claroscuro);
		// Aquí es que puedo dar "luz verde" a las inicializaciones que tengan que ver con el tema
		// porque ya tengo definida la propiedad tema en el model, antes no (y por ende es undefined)
		this.inicializadorClaroscuro();
		};
	}
