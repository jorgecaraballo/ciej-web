'use strict';
class Controller extends Controlador {
	constructor(model, view) {
		super(model, view);
		this.checkCookie();
		//this.manejoFormulario();
		this.footerAno();
		}
	checkCookie = () => {
		let laCookie = this.model.getCookie(this.model.getMetodo());
		if (laCookie != "") {
			this.model._ajax('GET', `getVisitas/${this.model.getMetodo()}`, null, this.handleCheckCookie);
			}
		else {
			this.model._ajax('POST', `postVisitas/${this.model.getMetodo()}`, null, (err, objData) => {
				if (!err) {
					this.model.setCookie(this.model.getMetodo(), this.model.getMetodo(), 365, this.checkCookie);
					}
				else {
					console.log(err, objData);
					}
				});
			}
		};
	handleCheckCookie = (err, objData) => {
		if (!err) {
			this.view.muestraVisitas(objData);
			}
		else {
			console.log(err, objData);
			}
		};
	manejoFormulario = () => {
			this.view.manejoFormulario(this.handleFormulario);
			};
	handleFormulario = (formData) => {
		this.model._ajax("POST", "insertaContacto", formData, this.resultadoDatosFormulario);
		};
	resultadoDatosFormulario = (err, objData) => {
		if (!err) {
			this.view.resultadoDatosFormulario(objData);
			}
		else {
			console.log(err);
			console.log(objData);
			}
		};
	footerAno = () => {
		this.view.footerAno();
		};
	}
