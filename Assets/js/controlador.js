'use strict';
class Controlador {
	constructor(model, view) {
		this.model = model;
		this.view = view;
		//this.getCookies(); // Busco la "configuración" de las cookies en Config.php
		this.smoothScrolling();
		this.themeManager();
		this.headerScroll();
		}
	smoothScrolling = () => { // Smooth scrolling para enlaces internos
		this.view.smoothScrolling();
		};
	themeManager = () => {
		this.view.themeManager();
		};
	headerScroll = () => {
		this.view.headerScroll();
		};
	}
