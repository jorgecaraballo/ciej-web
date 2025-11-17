/* 
Funcionalidades que ya tienes:
✅ Sistema de tema claro/oscuro con persistencia
✅ Menú móvil funcional
✅ Scroll suave para navegación interna
✅ Header con efecto al hacer scroll
✅ Formulario de contacto con feedback visual
✅ Detección de preferencia del sistema
*/

class ThemeManager {
    constructor() {
        this.themeToggle = document.getElementById('themeToggle');
        this.systemPreference = window.matchMedia('(prefers-color-scheme: dark)');
        this.currentTheme = this.getSavedTheme();
        
        this.init();
    }
    
    init() {
        this.applyTheme(this.currentTheme);
        this.setupEventListeners();
        this.setupMobileMenu();
    }
    
    getSavedTheme() {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) return savedTheme;
        
        return this.systemPreference.matches ? 'dark' : 'light';
    }
    
    setupEventListeners() {
        this.themeToggle.addEventListener('click', () => this.toggleTheme());
        
        // Escuchar cambios en las preferencias del sistema
        this.systemPreference.addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                this.applyTheme(e.matches ? 'dark' : 'light');
            }
        });
    }
    
    setupMobileMenu() {
        const navToggle = document.getElementById('navToggle');
        const navMenu = document.querySelector('.nav__menu');
        
        if (navToggle && navMenu) {
            navToggle.addEventListener('click', () => {
                navMenu.classList.toggle('nav__menu--active');
                navToggle.classList.toggle('nav__toggle--active');
            });
            
            // Cerrar menú al hacer clic en un enlace
            document.querySelectorAll('.nav__link').forEach(link => {
                link.addEventListener('click', () => {
                    navMenu.classList.remove('nav__menu--active');
                    navToggle.classList.remove('nav__toggle--active');
                });
            });
        }

// En setupMobileMenu(), podrías agregar esto para cerrar el menú al hacer clic fuera
document.addEventListener('click', (e) => {
    if (!e.target.closest('.nav') && navMenu.classList.contains('nav__menu--active')) {
        navMenu.classList.remove('nav__menu--active');
        navToggle.classList.remove('nav__toggle--active');
    }
});

    }
    
    applyTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        this.currentTheme = theme;
        this.updateThemeColor(theme);
    }
    
    toggleTheme() {
        const newTheme = this.currentTheme === 'light' ? 'dark' : 'light';
        this.applyTheme(newTheme);
    }
    
    updateThemeColor(theme) {
        const themeColor = theme === 'dark' ? '#1a202c' : '#1a365d';
        let metaThemeColor = document.querySelector('meta[name="theme-color"]');
        
        if (!metaThemeColor) {
            metaThemeColor = document.createElement('meta');
            metaThemeColor.name = 'theme-color';
            document.head.appendChild(metaThemeColor);
        }
        
        metaThemeColor.setAttribute('content', themeColor);
    }
}

// Validación básica de email
function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

// Smooth scrolling para enlaces internos
document.addEventListener('DOMContentLoaded', () => {
    new ThemeManager();
    
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Header con efecto de scroll
    let lastScrollY = window.scrollY;
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.style.background = 'var(--color-surface)';
            header.style.boxShadow = 'var(--shadow-md)';
        } else {
            header.style.background = 'var(--color-surface)';
            header.style.boxShadow = 'var(--shadow-sm)';
        }
        
        lastScrollY = window.scrollY;
    });
});

// Manejo básico del formulario
document.addEventListener('DOMContentLoaded', () => {
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


    // Inicializar acordeón de Justipedia si existe
    if (document.querySelector('.justification-accordion')) {
        initJustipediaAccordion();
    }

    // Inicializar mosaico con filtros si existe
    if (document.querySelector('.mosaic-filters')) {
        initMosaicFilters();
    }

    // Inicializar campos mejorados
    if (document.querySelector('.enhanced-field')) {
        initEnhancedFields();
    }

});


// Agregar esta función al final del archivo theme.js
function initJustipediaAccordion() {
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
}


// Agregar esta función al final del archivo theme.js
function initMosaicFilters() {
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
}

// Función para los campos con información adicional
function initEnhancedFields() {
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
}
