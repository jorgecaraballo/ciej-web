'use strict';
class Vista {
	constructor(tituloPrincipal) {
		this.tituloPrincipal = tituloPrincipal;
		this.divLoading = document.getElementById('divLoading');
		}
	// Validación básica de email
	isValidEmail(email) {
		return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
		}
	smoothScrolling = () => {
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
		};
	themeManager = () => {
		new ThemeManager();
		};
	headerScroll = () => { // Header con efecto de scroll
		let lastScrollY = window.scrollY;
		const header = document.querySelector('.header');
		window.addEventListener('scroll', () => {
			if (window.scrollY > 100) {
				header.style.background = 'var(--color-surface)';
				header.style.boxShadow = 'var(--shadow-md)';
				}
			else {
				header.style.background = 'var(--color-surface)';
				header.style.boxShadow = 'var(--shadow-sm)';
				}
			lastScrollY = window.scrollY;
			});
		};
	}
