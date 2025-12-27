'use strict';

class SnowView {
    constructor() {
        this.snowContainer = null;
        this.toggleButton = null;
        this.createContainer();
    }

createContainer() {
    // Crear contenedor para copos de nieve
    this.snowContainer = document.createElement('div');
    this.snowContainer.id = 'snow-container';
    this.snowContainer.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 9998;
        /* REMOVER overflow: hidden de aquí */
    `;
    document.body.appendChild(this.snowContainer);
}

    createToggleButton() {
        // Crear botón para activar/desactivar la nieve
        this.toggleButton = document.createElement('button');
        this.toggleButton.id = 'snow-toggle';
        this.toggleButton.innerHTML = '❄️';
        this.toggleButton.title = 'Activar/Desactivar efecto de nieve';
        this.toggleButton.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--color-primary);
            color: white;
            border: none;
            cursor: pointer;
            z-index: 10000;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        `;
        
        this.toggleButton.addEventListener('mouseenter', () => {
            this.toggleButton.style.transform = 'scale(1.1)';
        });
        
        this.toggleButton.addEventListener('mouseleave', () => {
            this.toggleButton.style.transform = 'scale(1)';
        });
        
        document.body.appendChild(this.toggleButton);
        return this.toggleButton;
    }

    renderSnowflake(snowflakeData) {
        let snowflake = document.getElementById(`snowflake-${snowflakeData.id}`);
        
        if (!snowflake) {
            snowflake = document.createElement('div');
            snowflake.id = `snowflake-${snowflakeData.id}`;
            snowflake.className = 'snowflake';
            this.snowContainer.appendChild(snowflake);
        }
        
        snowflake.style.cssText = `
            position: absolute;
            left: ${snowflakeData.x}px;
            top: ${snowflakeData.y}px;
            width: ${snowflakeData.size}px;
            height: ${snowflakeData.size}px;
            background-color: rgba(255, 255, 255, ${snowflakeData.opacity});
            border-radius: 50%;
            pointer-events: none;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        `;
    }

    removeSnowflake(id) {
        const snowflake = document.getElementById(`snowflake-${id}`);
        if (snowflake) {
            snowflake.remove();
        }
    }

    clearSnowflakes() {
        while (this.snowContainer.firstChild) {
            this.snowContainer.removeChild(this.snowContainer.firstChild);
        }
    }

    updateButton(isActive) {
        if (this.toggleButton) {
            this.toggleButton.innerHTML = isActive ? '❄️' : '❄️';
            this.toggleButton.style.background = isActive ? 'var(--color-accent)' : 'var(--color-primary)';
        }
    }

    show() {
        this.snowContainer.style.display = 'block';
    }

    hide() {
        this.snowContainer.style.display = 'none';
    }
}

class View extends Vista {
	originalText = ''; // Propiedad de clase (no necesitas this en el constructor)
	constructor(tituloPrincipal) {
		super(tituloPrincipal);
		this.contactForm = document.querySelector('.contact__form');
		this.submitBtn = this.contactForm.querySelector('button[type="submit"]');
		this.footer_ano = document.querySelector('#footer_ano');
		}
	muestraVisitas = (objData) => {
		//console.log(objData);
		document.getElementById('visitas').textContent = objData.data.visitas;
		};
	manejoFormulario = (handleFormulario) => {
		if (this.contactForm) {

		let formulario = new Formulario(handleFormulario, this);
		// Guardar referencia para poder llamar a los métodos desde el controlador
		this.formularioInstancia = formulario;

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
// Luego en resultadoDatosFormulario:
resultadoDatosFormulario = (objData) => {
	if (objData.status && objData.msg == 'OK') {
		// Llamar al método de éxito del formulario
		if (this.formularioInstancia) {
			this.formularioInstancia.onSubmitSuccess(objData);
			}
		else {
			// Fallback al método original
			this.submitBtn.textContent = 'Mensaje Enviado ✓';
			this.submitBtn.disabled = true;
			setTimeout(() => {
				this.submitBtn.textContent = this.originalText;
				this.submitBtn.disabled = false;
				this.contactForm.reset();
				}, 3000);
			}
		}
	else {
		// Llamar al método de error del formulario
		if (this.formularioInstancia) {
			this.formularioInstancia.onSubmitError(objData.msg);
		}
	}
};
	footerAno = () => {
		if (this.footer_ano) {
			this.footer_ano.textContent = (new Date()).getFullYear();
			}
		else {
			console.log('No se encontró footer_ano');
			}
		};
	}
