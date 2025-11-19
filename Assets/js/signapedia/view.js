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
	initJustipediaAccordion = () => { // Inicializar acordeón de Justipedia si existe
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
	copyCode = (button) => { // Función para copiar código
		const codeBlock = button.closest('.code-block');
		const code = codeBlock.querySelector('code').textContent;
		navigator.clipboard.writeText(code).then(() => {
			const originalText = button.textContent;
			button.textContent = '✅ Copiado!';
			setTimeout(() => {
				button.textContent = originalText;
				}, 2000);
			});
		};
	}
