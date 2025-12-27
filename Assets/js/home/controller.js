'use strict';

class SnowController {
    constructor(model, view) {
        this.model = model;
        this.view = view;
        this.animationFrameId = null;
        this.intervalId = null;
        this.init();
    }

    init() {
        this.view.createToggleButton();
        this.bindEvents();
    }

    bindEvents() {
        // Evento del botón toggle
        this.view.toggleButton.addEventListener('click', () => {
            this.toggleSnow();
        });

        // Ajustar nieve al redimensionar ventana
        window.addEventListener('resize', () => {
            if (this.model.getStatus()) {
                this.view.clearSnowflakes();
                this.model.clearSnowflakes();
            }
        });
    }

    toggleSnow() {
        const isActive = this.model.toggleSnow();
        
        if (isActive) {
            this.startSnow();
        } else {
            this.stopSnow();
        }
        
        this.view.updateButton(isActive);
    }

    startSnow() {
        this.view.show();
        
        // Crear copos iniciales
        for (let i = 0; i < 30; i++) {
            this.model.addSnowflake();
        }
        
        // Intervalo para añadir nuevos copos
        this.intervalId = setInterval(() => {
            this.model.addSnowflake();
        }, 300);
        
        // Iniciar animación
        this.animate();
    }

    stopSnow() {
        this.view.hide();
        this.view.clearSnowflakes();
        this.model.clearSnowflakes();
        
        if (this.intervalId) {
            clearInterval(this.intervalId);
            this.intervalId = null;
        }
        
        if (this.animationFrameId) {
            cancelAnimationFrame(this.animationFrameId);
            this.animationFrameId = null;
        }
    }

    animate() {
        // Actualizar posición de los copos
        const snowflakes = this.model.getSnowflakes();
        
        snowflakes.forEach(snowflake => {
            const updatedSnowflake = this.model.updateSnowflake(snowflake);
            this.view.renderSnowflake(updatedSnowflake);
        });
        
        // Continuar animación
        this.animationFrameId = requestAnimationFrame(() => this.animate());
    }

    // Método para integrar con el controlador principal
    static integrateWithMainController(mainController) {
        const snowModel = new SnowModel();
        const snowView = new SnowView();
        const snowController = new SnowController(snowModel, snowView);
        
        // Opcional: iniciar automáticamente en diciembre
        const currentMonth = new Date().getMonth() + 1; // 1-12
        if (currentMonth === 12) { // Diciembre
            setTimeout(() => {
                snowController.toggleSnow();
            }, 2000);
        }
        
        return snowController;
    }
}

class Controller extends Controlador {
	constructor(model, view) {
		super(model, view);
		this.checkCookie();
		this.manejoFormulario();
		this.footerAno();
		this.initSnowEffect(); // Nueva línea
		}
    initSnowEffect() {
        // Integrar efecto de nieve (opcional - se puede activar/desactivar)
        this.snowController = SnowController.integrateWithMainController(this);
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
