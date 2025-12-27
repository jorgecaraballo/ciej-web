class Formulario {
	constructor(handleFormulario, view) {
		this.handleFormulario = handleFormulario;
		this.view = view;
		this.isSubmitting = false;
		
		// Inicializar referencias DOM
		this.contactForm = document.getElementById('contactForm');
		this.categorySelect = document.getElementById('category');
		this.reasonSelect = document.getElementById('reason');
		this.subjectInput = document.getElementById('subject');
		this.editSubjectBtn = document.getElementById('editSubject');
		this.otherReasonGroup = document.getElementById('otherReasonGroup');
		this.otherReasonInput = document.getElementById('otherReason');
		this.formMessage = document.getElementById('formMessage');
		this.nameInput = document.getElementById('name');
		this.emailInput = document.getElementById('email');
		this.messageInput = document.getElementById('message');
		this.submitBtn = this.contactForm ? this.contactForm.querySelector('button[type="submit"]') : null;
		
		// Validar que todos los elementos necesarios existan
		if (!this.contactForm || !this.categorySelect || !this.reasonSelect) {
			console.error('Elementos esenciales del formulario no encontrados');
			return;
		}
		
		// Mapeo de valores a texto legible
		this.categoryMap = {
			'justipedia': 'Justipedia',
			'signapedia': 'Signapedia',
			'ambos': 'Justipedia y Signapedia',
			'ciej': 'Otra área del CIEJ',
			'otro': 'Otro'
		};
		
		this.reasonMap = {
			'informacion': 'Información general',
			'suscripcion': 'Suscripción / Acceso',
			'soporte': 'Soporte técnico',
			'sugerencia': 'Sugerencia o comentario',
			'otro': 'Otro'
		};
		
		// Configurar eventos
		this.configurarEventos();
		
		// Inicializar estado
		this.generateSubject();
		this.toggleOtherReason();
		
		// Guardar texto original del botón
		this.originalBtnText = this.submitBtn ? this.submitBtn.innerHTML : 'Enviar Mensaje';
	}
	
	// Configurar todos los event listeners
	configurarEventos = () => {
		this.categorySelect.addEventListener('change', this.generateSubject);
		this.reasonSelect.addEventListener('change', () => {
			this.generateSubject();
			this.toggleOtherReason();
		});
		this.otherReasonInput.addEventListener('input', this.generateSubject);
		this.editSubjectBtn.addEventListener('click', this.toggleSubjectEdit);
		this.contactForm.addEventListener('submit', this.handleSubmit);
	};
	
	// Generar asunto automáticamente
	generateSubject = () => {
		if (!this.subjectInput || !this.subjectInput.readOnly) return;
		
		const category = this.categorySelect.value;
		const reason = this.reasonSelect.value;
		
		if (category && reason) {
			const categoryText = this.categoryMap[category] || '';
			const reasonText = this.reasonMap[reason] || '';
			
			if (reason === 'otro' && this.otherReasonInput.value) {
				this.subjectInput.value = `[${categoryText}] ${this.otherReasonInput.value}`;
			} else {
				this.subjectInput.value = `[${categoryText}] ${reasonText}`;
			}
		} else {
			this.subjectInput.value = '';
		}
	};
	
	// Mostrar/ocultar campo "Otro" específico
	toggleOtherReason = () => {
		if (!this.otherReasonGroup || !this.otherReasonInput) return;
		
		if (this.reasonSelect.value === 'otro') {
			this.otherReasonGroup.style.display = 'block';
			this.otherReasonInput.required = true;
			this.otherReasonInput.focus();
		} else {
			this.otherReasonGroup.style.display = 'none';
			this.otherReasonInput.required = false;
			this.otherReasonInput.value = '';
		}
	};
	
	// Habilitar/deshabilitar edición del asunto
	toggleSubjectEdit = () => {
		if (!this.subjectInput || !this.editSubjectBtn) return;
		
		if (this.subjectInput.readOnly) {
			this.subjectInput.readOnly = false;
			this.subjectInput.placeholder = "Personalice el asunto de su mensaje";
			this.editSubjectBtn.innerHTML = '<i class="fas fa-lock"></i>';
			this.editSubjectBtn.title = "Bloquear asunto (generar automático)";
			this.subjectInput.focus();
		} else {
			this.subjectInput.readOnly = true;
			this.subjectInput.placeholder = "Se generará automáticamente según su selección";
			this.editSubjectBtn.innerHTML = '<i class="fas fa-edit"></i>';
			this.editSubjectBtn.title = "Editar asunto";
			this.generateSubject();
		}
	};
	
	// Validación de email
	validateEmail = (email) => {
		const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		return re.test(email);
	};
	
	// Validación y envío del formulario
	handleSubmit = (e) => {
		e.preventDefault();
		
		// Prevenir doble envío
		if (this.isSubmitting) return;
		this.isSubmitting = true;
		
		// Validación básica del formulario
		if (!this.contactForm.checkValidity()) {
			this.showMessage('Por favor, complete todos los campos obligatorios correctamente.', 'error');
			this.isSubmitting = false;
			return;
		}
		
		// Validación específica de email
		if (!this.validateEmail(this.emailInput.value)) {
			this.showMessage('Por favor ingrese un correo electrónico válido.', 'error');
			this.isSubmitting = false;
			return;
		}
		
		// Validar longitud mínima del mensaje
		if (this.messageInput.value.trim().length < 10) {
			this.showMessage('El mensaje debe tener al menos 10 caracteres.', 'error');
			this.isSubmitting = false;
			return;
		}
		
		// Cambiar estado del botón a "enviando"
		if (this.submitBtn) {
			this.submitBtn.innerHTML = 'Enviando... <i class="fas fa-spinner fa-spin"></i>';
			this.submitBtn.disabled = true;
			this.submitBtn.style.cursor = 'not-allowed';
		}
		
		// Preparar datos para envío
		const formData = new FormData();
		formData.append('name', this.nameInput.value.trim());
		formData.append('email', this.emailInput.value.trim());
		formData.append('category', this.categorySelect.value);
		formData.append('categoryText', this.categorySelect.options[this.categorySelect.selectedIndex].text);
		formData.append('reason', this.reasonSelect.value);
		formData.append('reasonText', this.reasonSelect.options[this.reasonSelect.selectedIndex].text);
		formData.append('otherReason', this.otherReasonInput.value.trim());
		formData.append('subject', this.subjectInput.value.trim());
		formData.append('message', this.messageInput.value.trim());
		formData.append('timestamp', new Date().toISOString());
		
		// Mostrar en consola para debug (quitar en producción)
		console.log('Datos del formulario a enviar:');
		for (let [key, value] of formData.entries()) {
			console.log(`${key}: ${value}`);
		}
		
		// Llamar al manejador del controlador
		if (typeof this.handleFormulario === 'function') {
			try {
				this.handleFormulario(formData);
			} catch (error) {
				console.error('Error al enviar formulario:', error);
				this.showMessage('Error al procesar la solicitud. Por favor intente nuevamente.', 'error');
				this.resetSubmitButton();
				this.isSubmitting = false;
			}
		} else {
			console.error('handleFormulario no es una función');
			this.showMessage('Error en el sistema. Por favor intente más tarde.', 'error');
			this.resetSubmitButton();
			this.isSubmitting = false;
		}
	};
	
	// Mostrar mensajes al usuario
	showMessage = (text, type) => {
		if (!this.formMessage) return;
		
		this.formMessage.textContent = text;
		this.formMessage.className = `form__message ${type}`;
		this.formMessage.style.display = 'block';
		
		// Scroll suave al mensaje
		this.formMessage.scrollIntoView({ 
			behavior: 'smooth', 
			block: 'nearest',
			inline: 'nearest'
		});
		
		// Ocultar mensaje después de 5 segundos si es éxito
		if (type === 'success') {
			setTimeout(() => {
				if (this.formMessage) {
					this.formMessage.style.display = 'none';
				}
			}, 7000);
		}
	};
	
	// Restaurar el botón de envío a su estado original
	resetSubmitButton = () => {
		if (this.submitBtn) {
			this.submitBtn.innerHTML = this.originalBtnText;
			this.submitBtn.disabled = false;
			this.submitBtn.style.cursor = 'pointer';
		}
		this.isSubmitting = false;
	};
	
	// Método para resetear el formulario (puede ser llamado desde fuera)
	resetForm = () => {
		if (this.contactForm) {
			// Restaurar botón
			this.resetSubmitButton();
			
			// Resetear formulario
			this.contactForm.reset();
			
			// Restaurar estado del asunto
			if (this.subjectInput) {
				this.subjectInput.readOnly = true;
				this.subjectInput.placeholder = "Se generará automáticamente según su selección";
			}
			
			// Restaurar botón de edición
			if (this.editSubjectBtn) {
				this.editSubjectBtn.innerHTML = '<i class="fas fa-edit"></i>';
				this.editSubjectBtn.title = "Editar asunto";
			}
			
			// Ocultar campo "otro"
			if (this.otherReasonGroup) {
				this.otherReasonGroup.style.display = 'none';
				this.otherReasonInput.required = false;
				this.otherReasonInput.value = '';
			}
			
			// Ocultar mensajes
			if (this.formMessage) {
				this.formMessage.style.display = 'none';
			}
			
			// Regenerar asunto inicial después de un pequeño delay
			setTimeout(() => this.generateSubject(), 100);
		}
	};
	
	// Método para manejar respuesta exitosa (llamado desde el controlador)
	onSubmitSuccess = (objData) => {
		this.showMessage('¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.', 'success');
		
		// Mostrar confirmación en el botón
		if (this.submitBtn) {
			this.submitBtn.innerHTML = '¡Enviado! <i class="fas fa-check"></i>';
			this.submitBtn.style.backgroundColor = 'var(--color-justipedia)';
			this.submitBtn.style.borderColor = 'var(--color-justipedia)';
		}
		
		// Resetear formulario después de 3 segundos
		setTimeout(() => {
			this.resetForm();
			
			// Restaurar color original del botón
			if (this.submitBtn) {
				setTimeout(() => {
					if (this.submitBtn) {
						this.submitBtn.style.backgroundColor = '';
						this.submitBtn.style.borderColor = '';
					}
				}, 100);
			}
		}, 5000);
		
		this.isSubmitting = false;
	};
	
	// Método para manejar error (llamado desde el controlador)
	onSubmitError = (errorMessage) => {
		this.showMessage(errorMessage || 'Error al enviar el mensaje. Por favor intente nuevamente.', 'error');
		this.resetSubmitButton();
		this.isSubmitting = false;
	};
}
