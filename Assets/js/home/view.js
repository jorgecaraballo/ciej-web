'use strict';
class View extends Vista {
	constructor(tituloPrincipal) {
		super(tituloPrincipal);
		}
	muestraVisitas = (objData) => {
		//console.log(objData);
		document.getElementById('visitas').textContent = objData.data.visitas;
		};
	manejoFormulario = (handleFormulario) => {
		const contactForm = document.querySelector('.contact__form');

		if (contactForm) {
			let self = this;
			contactForm.addEventListener('submit', function(e) {
				e.preventDefault();
				//self.logicaOriginalFormulario(this); 
				let formData = new FormData();
				formData.append("name", this["name"].value.trim());
				formData.append("email", this["email"].value.trim());
				formData.append("subject", this["subject"].value.trim());
				formData.append("message", this["message"].value.trim());
				handleFormulario(formData);
				});
			}
		};
	logicaOriginalFormulario = (self) => {
				// Aquí iría la lógica para enviar el formulario
				const formData = new FormData(self);
				console.log('Datos del formulario:', Object.fromEntries(formData));

				// Mensaje de éxito (temporal)
				const submitBtn = self.querySelector('button[type="submit"]');
				const originalText = submitBtn.textContent;
				submitBtn.textContent = 'Mensaje Enviado ✓';
				submitBtn.disabled = true;

				setTimeout(() => {
					submitBtn.textContent = originalText;
					submitBtn.disabled = false;
					self.reset();
					}, 3000);
		};
	resultadoDatosFormulario = (objData) => {
		console.log(objData);
		};
	}
