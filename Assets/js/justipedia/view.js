'use strict';
class View extends Vista {
	constructor(tituloPrincipal) {
		super(tituloPrincipal);
		}
	muestraVisitas = (objData) => {
		//console.log(objData);
		document.getElementById('visitas').textContent = objData.data.visitas;
		};
	}
