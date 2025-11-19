'use strict';
class Controller extends Controlador {
	constructor(model, view) {
		super(model, view);
		this.checkCookie();
		this.acordeonJustipedia();
		this.filtrosMosaico();
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
	acordeonJustipedia = () => {
		this.view.acordeonJustipedia();
		};
	filtrosMosaico = () => {
		this.view.filtrosMosaico();
		};
	}
