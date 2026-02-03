<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactar a Jorge Caraballo | CIEJ</title>
    <meta name="description" content="Contacta a Jorge Caraballo - Desarrollador web especializado en herramientas tecnológicas para investigación jurídica">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= media(); ?>css/reset.css">
    <link rel="stylesheet" href="<?= media(); ?>css/styles.css">
<link rel="stylesheet" href="<?= nodeModules(); ?>sweetalert2/dist/sweetalert2.min.css">
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__brand">
                <img src="<?= media(); ?>images/webp/ciej_logo_nav_2.webp" alt="CIEJ" class="logo" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjUwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxNTAiIGhlaWdodD0iNTAiIGZpbGw9IiMxYTM2NWQiLz48dGV4dCB4PSI3NSIgeT0iMjUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGRvbWluYW50LWJhc2VsaW5lPSJtaWRkbGUiPkNJRUo8L3RleHQ+PC9zdmc+'">
            </div>
            
            <ul class="nav__menu">
                <li><a href="<?= base_url(); ?>#inicio" class="nav__link">Inicio</a></li>
                <li><a href="<?= base_url(); ?>#justipedia" class="nav__link">Justipedia</a></li>
                <li><a href="<?= base_url(); ?>#signapedia" class="nav__link">Signapedia</a></li>
                <li><a href="<?= base_url(); ?>#servicios" class="nav__link">Investigaciones</a></li>
                <li><a href="<?= base_url(); ?>#equipo" class="nav__link">Equipo</a></li>
                <li><a href="<?= base_url(); ?>#contacto" class="nav__link">Contacto</a></li>
            </ul>
            
            <div class="nav__actions">
                <div class="theme-switcher">
                    <button class="theme-switcher__btn" id="themeToggle" aria-label="Cambiar modo claro/oscuro">
                        <span class="theme-switcher__icon theme-switcher__icon--light">☀️</span>
                        <span class="theme-switcher__icon theme-switcher__icon--dark">🌙</span>
                    </button>
                </div>
                <button class="nav__toggle" id="navToggle" aria-label="Abrir menú">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section Específico para Jorge -->
        <section class="hero">
            <div class="hero__content container">
                <div class="about__content">
                    <div class="about__text">
                        <h1 class="hero__title">Jorge Caraballo</h1>
                        <p class="hero__subtitle">Desarrollador Web</p>
                        
                        <div class="team-member__image" style="text-align: center; margin: var(--space-lg) 0;">
                            <img src="<?= media(); ?>images/webp/jorge.webp" alt="Jorge Caraballo" class="team-member__img" style="width: 200px; height: 200px;">
                        </div>

                        <div class="about__description">
                            <p>Especializado en el desarrollo de herramientas tecnológicas avanzadas para la investigación jurídica, 
                            con más de 5 años de experiencia en creación de plataformas digitales y sistematización de información legal compleja.</p>
                        </div>

                        <div class="feature-stats">
                            <div class="stat">
                                <span class="stat__number">10+</span>
                                <span class="stat__label">Años de experiencia</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">3+</span>
                                <span class="stat__label">Plataformas desarrolladas para el CIEJ</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">100%</span>
                                <span class="stat__label">Enfoque en innovación</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Especialidades -->
        <section class="section">
            <div class="container">
                <h2 class="section__title">Áreas de Especialización</h2>
                <div class="services__grid">
                    <div class="service-card">
                        <div class="service-card__icon">🌐</div>
                        <h3 class="service-card__title">Desarrollo Web</h3>
                        <p class="service-card__description">
                            Creación de plataformas web robustas y escalables utilizando tecnologías modernas 
                            y mejores prácticas de desarrollo.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-card__icon">⚖️</div>
                        <h3 class="service-card__title">Tecnología Jurídica</h3>
                        <p class="service-card__description">
                            Desarrollo de herramientas especializadas para la investigación, análisis y 
                            gestión de información legal.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-card__icon">📊</div>
                        <h3 class="service-card__title">Sistematización de Datos</h3>
                        <p class="service-card__description">
                            Organización y estructuración de grandes volúmenes de información jurídica 
                            para facilitar su acceso y análisis.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Proyectos Destacados -->
        <section class="section" style="background: var(--color-background-alt);">
            <div class="container">
                <h2 class="section__title">Proyectos Destacados</h2>
                <div class="services__grid">
                    <div class="service-card">
                        <h3 class="service-card__title">Justipedia</h3>
                        <p class="service-card__description">
                            Biblioteca virtual de jurisprudencia venezolana con más de 6,000 criterios 
                            jurídicos organizados y clasificados para acceso inmediato.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <h3 class="service-card__title">Signapedia</h3>
                        <p class="service-card__description">
                            Plataforma de instrumentos normativos venezolanos, organizados sistemáticamente 
                            con información de vigencia y aplicación.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <h3 class="service-card__title">Sitio Web CIEJ</h3>
                        <p class="service-card__description">
                            Diseño, desarrollo e implementación completa de la plataforma digital 
                            institucional del Centro de Investigación.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <h3 class="service-card__title">Biblioteca Esequibo</h3>
                        <p class="service-card__description">
                            Diseño, desarrollo e implementación completa de la Biblioteca Esequibo para la Procuraduría General de la República.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <h3 class="service-card__title">Otros proyectos en Workana</h3>
			<p class="service-card__description">
				<a class="btn btn-jorge" href="https://www.workana.com/freelancer/630c2e82ddc6cde8fd8ddb682fb9e470" target="_blank">Ver perfil en Workana</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Formulario de Contacto -->
        <section id="contacto" class="contact section">
            <div class="container">
                <h2 class="section__title">Contactar a Jorge</h2>
                <p class="section__subtitle">¿Tienes un proyecto en mente? Hablemos sobre cómo puedo ayudarte</p>
                
                <div class="contact__content">
                    <div class="contact__info">
                        <div class="contact__details">
                            <div class="contact__item">
                                <span class="contact__icon">💼</span>
                                <span>Desarrollador Web Especializado</span>
                            </div>
                            <div class="contact__item">
                                <span class="contact__icon">⚖️</span>
                                <span>Tecnología Aplicada al Derecho</span>
                            </div>
                            <div class="contact__item">
                                <span class="contact__icon">🎯</span>
                                <span>Soluciones Personalizadas</span>
                            </div>
                        </div>
                    </div>
                    
                    <form class="contact__form" id="contactForm">
                        <div class="form__group">
                            <label for="name" class="form__label">Nombre Completo</label>
                            <input type="text" id="name" name="name" class="form__input" required>
                        </div>
                        
                        <div class="form__group">
                            <label for="email" class="form__label">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="form__input" required>
                        </div>
                        
                        <div class="form__group">
                            <label for="subject" class="form__label">Asunto</label>
                            <input type="text" id="subject" name="subject" class="form__input" required>
                        </div>
                        
                        <div class="form__group">
                            <label for="message" class="form__label">Mensaje</label>
                            <textarea id="message" name="message" class="form__textarea" rows="6" required placeholder="Describe tu proyecto o consulta..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn--justipedia btn--large">
                            <i class="fas fa-paper-plane"></i> Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__brand">
                    <img src="<?= media(); ?>images/webp/ciej_logo_nav_2.webp" alt="CIEJ" class="logo">
                    <p class="footer__description">
                        Centro de Investigación Enciclopédica de Jurisprudencia - Excelencia en investigación jurídica desde 2019.
                    </p>
                </div>
                
                <div class="footer__links">
                    <div class="footer__column">
                        <h4>Enlaces Rápidos</h4>
                        <ul>
                            <li><a href="<?= base_url(); ?>#inicio">Inicio</a></li>
                            <li><a href="<?= base_url(); ?>#justipedia">Justipedia</a></li>
                            <li><a href="<?= base_url(); ?>#signapedia">Signapedia</a></li>
                            <li><a href="<?= base_url(); ?>#servicios">Investigaciones</a></li>
                            <li><a href="<?= base_url(); ?>#equipo">Equipo</a></li>
                            <li><a href="<?= base_url(); ?>#contacto">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; <span id="footer_ano"></span> CIEJ - Centro de Investigación Enciclopédica de Jurisprudencia. RIF : J-31720806-4 Todos los derechos reservados.</p>

		    <div class="footer__stats">
			<div class="visitas-counter">
			    <span class="visitas-icon">👁️</span>
			    <span class="visitas-text">Visitas:</span>
			    <b id="visitas"></b>
			</div>
		    </div>

            </div>
        </div>
    </footer>

<script src="<?= nodeModules(); ?>sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?= media(); ?>js/theme.js"></script>
<script type="text/javascript" src="<?= media(); ?>js/dots-spinner.js"></script>
<script>
'use strict';
const base_url = "<?= base_url(); ?>";
</script>
<script type="text/javascript" src="<?= media(); ?>js/modelo.js"></script> <!-- Parent Class -->
<script type="text/javascript" src="<?= media(); ?>js/vista.js"></script> <!-- Parent Class -->
<script type="text/javascript" src="<?= media(); ?>js/controlador.js"></script> <!-- Parent Class -->
<script src="<?= media(); ?>js/<?= $data['page_name']; ?>/model.js"></script>
<script src="<?= media(); ?>js/<?= $data['page_name']; ?>/view.js"></script>
<script src="<?= media(); ?>js/<?= $data['page_name']; ?>/controller.js"></script>
<script type="text/javascript" >
window.addEventListener('load', function() {
const app = new Controller(new Model("<?= $data['controller']; ?>".toLowerCase(), "<?= $data['page_name']; ?>"), new View("<?= $data['controller']; ?>"));
        }, false);
</script>
</body>
</html>
