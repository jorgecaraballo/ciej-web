'use strict';
class View extends Vista {
	constructor(tituloPrincipal) {
		super(tituloPrincipal);
		}
	muestraVisitas = (objData) => {
		//console.log(objData);
		document.getElementById('visitas').textContent = objData.data.visitas;
		};
	manejoFormulario = () => {
		const contactForm = document.querySelector('.contact__form');

		if (contactForm) {
			contactForm.addEventListener('submit', function(e) {
				e.preventDefault();

				// Aquí iría la lógica para enviar el formulario
				const formData = new FormData(this);
				console.log('Datos del formulario:', Object.fromEntries(formData));

				// Mensaje de éxito (temporal)
				const submitBtn = this.querySelector('button[type="submit"]');
				const originalText = submitBtn.textContent;
				submitBtn.textContent = 'Mensaje Enviado ✓';
				submitBtn.disabled = true;

				setTimeout(() => {
					submitBtn.textContent = originalText;
					submitBtn.disabled = false;
					this.reset();
					}, 3000);
				});
			}
		};
	}
