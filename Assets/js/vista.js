'use strict';
class Vista {
	constructor(tituloPrincipal) {
		this.tituloPrincipal = tituloPrincipal;
		this.divLoading = document.getElementById('divLoading');
		}
	spinner = (elemento) => {
		var contenedorSpinner = document.createElement('span');
		contenedorSpinner.className = 'form-control';
			var divSpinner = document.createElement('span');
			divSpinner.className = 'spinner-grow text-primary';
			divSpinner.setAttribute("role", "status");
				var spanSpinner = document.createElement('span');
				spanSpinner.className = 'sr-only';
				spanSpinner.textContent = 'Loading...';
			divSpinner.appendChild(spanSpinner);
		contenedorSpinner.appendChild(divSpinner);
		elemento.appendChild(contenedorSpinner);
		return contenedorSpinner;
		};
	bindEstilo(elemento) {
		elemento.style.backgroundColor = '#2f4050';
		elemento.style.color = 'white';
		elemento.addEventListener('focus', function() {
				this.style.backgroundColor = '#333';
				this.style.color = 'lightblue';
				});
		elemento.addEventListener('blur', function() {
				this.style.backgroundColor = '#2f4050';
				});
		}
	}
