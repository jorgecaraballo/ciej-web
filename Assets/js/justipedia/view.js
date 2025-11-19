'use strict';
class View extends Vista {
	constructor(tituloPrincipal) {
		super(tituloPrincipal);
		}
	muestraVisitas = (objData) => {
		//console.log(objData);
		document.getElementById('visitas').textContent = objData.data.visitas;
		};
	acordeonJustipedia = () => {
		// Inicializar acordeón de Justipedia si existe
		if (document.querySelector('.justification-accordion')) {
			this.initJustipediaAccordion();
			}
		};
	filtrosMosaico = () => {
    // Inicializar mosaico con filtros si existe
    if (document.querySelector('.mosaic-filters')) {
        this.initMosaicFilters();
    }
		};
	camposMejorados = () => {
    // Inicializar campos mejorados
    if (document.querySelector('.enhanced-field')) {
        this.initEnhancedFields();
    }
		};
	initJustipediaAccordion = () => { // Inicializar acordeón de Justipedia si existe
		// Agregar esta función al final del archivo theme.js
		const accordionItems = document.querySelectorAll('.accordion-item');

		accordionItems.forEach(item => {
			const header = item.querySelector('.accordion-header');

			header.addEventListener('click', () => {
				// Cerrar otros items abiertos
				accordionItems.forEach(otherItem => {
					if (otherItem !== item && otherItem.classList.contains('active')) {
						otherItem.classList.remove('active');
						}
					});

				// Alternar el item actual
				item.classList.toggle('active');
				});
			});

		// Abrir el primer item por defecto
		if (accordionItems.length > 0) {
			accordionItems[0].classList.add('active');
			}
		};
	initMosaicFilters = () => { // Inicializar mosaico con filtros si existe
    const filterButtons = document.querySelectorAll('.filter-btn');
    const mosaicItems = document.querySelectorAll('.mosaic-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remover clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));

            // Agregar clase active al botón clickeado
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            // Aplicar filtro con animación
            mosaicItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');

                if (filterValue === 'all' || itemCategory === filterValue) {
                    // Mostrar item
                    item.classList.remove('hidden');
                    setTimeout(() => {
                        item.classList.remove('fade-out');
                    }, 50);
                } else {
                    // Ocultar item con animación
                    item.classList.add('fade-out');
                    setTimeout(() => {
                        item.classList.add('hidden');
                    }, 300);
                }
            });
        });
    });
		};
	initEnhancedFields = () => { // Función para los campos con información adicional
    const infoTriggers = document.querySelectorAll('.field-info-trigger');

    infoTriggers.forEach(trigger => {
        trigger.addEventListener('click', function() {
            const fieldItem = this.closest('.enhanced-field');
            const isCurrentlyActive = fieldItem.classList.contains('active');

            // Cerrar todos los campos abiertos
            document.querySelectorAll('.enhanced-field.active').forEach(activeField => {
                if (activeField !== fieldItem) {
                    activeField.classList.remove('active');
                    activeField.querySelector('.field-info-trigger').classList.remove('active');
                }
            });

            // Alternar el campo actual
            if (!isCurrentlyActive) {
                fieldItem.classList.add('active');
                this.classList.add('active');
            } else {
                fieldItem.classList.remove('active');
                this.classList.remove('active');
            }
        });
    });

    // Cerrar al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.enhanced-field')) {
            document.querySelectorAll('.enhanced-field.active').forEach(field => {
                field.classList.remove('active');
                field.querySelector('.field-info-trigger').classList.remove('active');
            });
        }
    });
		};
	}
