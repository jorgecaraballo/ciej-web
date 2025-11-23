'use strict';
class View extends Vista {
	originalText = ''; // Propiedad de clase (no necesitas this en el constructor)
	constructor(tituloPrincipal) {
		super(tituloPrincipal);
		this.contactForm = document.querySelector('.contact__form');
		this.submitBtn = this.contactForm.querySelector('button[type="submit"]');
		}
	muestraVisitas = (objData) => {
		//console.log(objData);
		document.getElementById('visitas').textContent = objData.data.visitas;
		};
	manejoFormulario = (handleFormulario) => {
		if (this.contactForm) {
			this.contactForm.addEventListener('submit', (e) => {
				e.preventDefault();
				//self.logicaOriginalFormulario(this); 
				let formData = new FormData();
				formData.append("name", this.contactForm["name"].value.trim());
				formData.append("email", this.contactForm["email"].value.trim());
				formData.append("subject", this.contactForm["subject"].value.trim());
				formData.append("message", this.contactForm["message"].value.trim());
				this.originalText = this.submitBtn.textContent;
				this.submitBtn.innerHTML = 'Procesando... <dots-spinner speed="fast" colors="red,blue,green"></dots-spinner>';
				this.submitBtn.disabled = true;
				this.submitBtn.style.cursor = 'not-allowed'; // ❌ No permitido
				handleFormulario(formData);
				});
			}
		else {
			console.log('Formulario inválido');
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
		this.submitBtn.textContent = 'Mensaje Enviado ✓';
		this.submitBtn.disabled = true;
		setTimeout(() => {
			this.submitBtn.textContent = this.originalText;
			this.submitBtn.disabled = false;
			this.submitBtn.style.cursor = 'pointer'; // 👆 Mano para
			this.contactForm.reset();
			}, 3000);
		};
	}
