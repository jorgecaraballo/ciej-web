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
});

