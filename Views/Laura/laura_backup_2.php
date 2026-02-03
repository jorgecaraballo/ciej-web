<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laura Aguerrevere F. | Abogada y Directora del CIEJ</title>
    <meta name="description" content="Laura Aguerrevere F. - Abogada especialista en Derecho Administrativo, Directora del CIEJ con más de 15 años de experiencia en el área judicial">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= media(); ?>css/reset.css">
    <link rel="stylesheet" href="<?= media(); ?>css/styles.css">
    <link rel="stylesheet" href="<?= nodeModules(); ?>sweetalert2/dist/sweetalert2.min.css">
    <!-- Estilos adicionales específicos para esta página -->
    <style>
    /* Estilos para la sección de contacto mejorada */
    .contact__item a {
        color: var(--color-primary);
        text-decoration: none;
        transition: var(--transition);
    }
    
    .contact__item a:hover {
        color: var(--color-accent);
        text-decoration: underline;
    }
    
    /* Estilos para la sección en inglés */
    .section h3 {
        font-family: var(--font-serif);
        font-size: 1.5rem;
        margin-bottom: var(--space-sm);
    }
    
    /* Ajustes responsive adicionales */
    @media (max-width: 768px) {
        .contact__item > div {
            font-size: 0.9rem;
        }
        
        .feature-stats {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .stat__number {
            font-size: 2rem;
        }
        
        .stat__label {
            font-size: 0.75rem;
        }
    }
    
    @media (max-width: 480px) {
        .feature-stats {
            grid-template-columns: 1fr;
            gap: var(--space-sm);
        }
        
        .hero__title {
            font-size: 2rem;
        }
        
        .hero__subtitle {
            font-size: 1rem;
        }
    }
    
    /* Efecto hover para tarjetas de contacto */
    .contact__item {
        padding: var(--space-sm);
        border-radius: var(--border-radius);
        transition: var(--transition);
    }
    
    .contact__item:hover {
        background: var(--color-background-alt);
    }
    
    /* Estilos para el botón de contacto principal */
    .contact-button-container {
        text-align: center;
        margin-top: var(--space-xl);
        padding: var(--space-lg);
        background: var(--color-surface);
        border-radius: var(--border-radius);
        border: 1px solid var(--color-border);
        box-shadow: var(--shadow-sm);
    }
    
    .contact-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: var(--space-sm);
        padding: 16px 40px;
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        font-size: 1.1rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(26, 54, 93, 0.2);
    }
    
    .contact-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(26, 54, 93, 0.3);
        background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-primary) 100%);
    }
    
    .contact-button:active {
        transform: translateY(-1px);
    }
    
    .contact-button i {
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }
    
    .contact-button:hover i {
        transform: translateX(4px);
    }
    
    .contact-button-description {
        color: var(--color-text-light);
        margin-top: var(--space-md);
        font-size: 0.95rem;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
    
    /* Estilos para modo oscuro */
    [data-theme="dark"] .contact-button {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }
    
    [data-theme="dark"] .contact-button:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }
    </style>
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
        <!-- Hero Section Específico para Laura -->
        <section class="hero">
            <div class="hero__content container">
                <div class="about__content">
                    <div class="about__text">
                        <h1 class="hero__title">Laura Aguerrevere F.</h1>
                        <p class="hero__subtitle">Abogada | Directora del CIEJ | Profesora Universitaria</p>
                        
                        <div class="team-member__image" style="text-align: center; margin: var(--space-lg) 0;">
                            <img src="<?= media(); ?>images/webp/laura.webp" alt="Laura Aguerrevere F." class="team-member__img" style="width: 200px; height: 200px; object-fit: cover;" onerror="this.src='<?= media(); ?>images/svg/person_placeholder.svg'">
                        </div>

                        <div class="about__description">
                            <p>Abogada y especialista en Derecho Administrativo (UCAB), Magister en Gerencia Pública (IESA), 
                            cursante del Doctorado en Ciencias Políticas, mención Relaciones Internacionales (USB) y profesora universitaria (UCV).</p>
                            
                            <p style="margin-top: var(--space-md); font-weight: 500;">Con más de 15 años de experiencia en el área judicial, 
                            como abogado en la Sala Político-Administrativa y la Sala Constitucional del Tribunal Supremo de Justicia.</p>
                        </div>

                        <div class="feature-stats">
                            <div class="stat">
                                <span class="stat__number">15+</span>
                                <span class="stat__label">Años de experiencia</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">3</span>
                                <span class="stat__label">Grados académicos</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">100%</span>
                                <span class="stat__label">Compromiso profesional</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Formación Académica -->
        <section class="section">
            <div class="container">
                <h2 class="section__title">Formación Académica</h2>
                <div class="services__grid">
                    <div class="service-card">
                        <div class="service-card__icon">🎓</div>
                        <h3 class="service-card__title">Abogada y Especialista</h3>
                        <p class="service-card__description">
                            <strong>Especialista en Derecho Administrativo</strong><br>
                            Universidad Católica Andrés Bello (UCAB)<br>
                            Título de Abogada con especialización en Derecho Administrativo
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-card__icon">📚</div>
                        <h3 class="service-card__title">Maestría</h3>
                        <p class="service-card__description">
                            <strong>Magister en Gerencia Pública</strong><br>
                            Instituto de Estudios Superiores de Administración (IESA)<br>
                            Programa de postgrado en gestión y administración pública
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-card__icon">🔬</div>
                        <h3 class="service-card__title">Doctorado en curso</h3>
                        <p class="service-card__description">
                            <strong>Doctorado en Ciencias Políticas</strong><br>
                            Mención: Relaciones Internacionales<br>
                            Universidad Simón Bolívar (USB)<br>
                            <em>Cursante</em>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Experiencia Profesional -->
        <section class="section" style="background: var(--color-background-alt);">
            <div class="container">
                <h2 class="section__title">Experiencia Profesional</h2>
                <div class="services__grid">
                    <div class="service-card">
                        <div class="service-card__icon">⚖️</div>
                        <h3 class="service-card__title">Tribunal Supremo de Justicia</h3>
                        <p class="service-card__description">
                            <strong>Más de 15 años de experiencia</strong><br><br>
                            • Abogado en la <strong>Sala Político-Administrativa</strong><br>
                            • Abogado en la <strong>Sala Constitucional</strong><br>
                            • Amplia experiencia en litigio y asesoría jurídica en las más altas instancias judiciales del país
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-card__icon">🏛️</div>
                        <h3 class="service-card__title">SENIAT - Venezuela</h3>
                        <p class="service-card__description">
                            <strong>Jefe de División</strong><br>
                            Adscrita a la Oficina de Políticas Públicas<br><br>
                            • Participación en el proceso de elaboración, discusión y suscripción de los <strong>Tratados de doble tributación</strong> suscritos por Venezuela con distintos países
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-card__icon">👩‍🏫</div>
                        <h3 class="service-card__title">Profesora Universitaria</h3>
                        <p class="service-card__description">
                            <strong>Universidad Central de Venezuela (UCV)</strong><br><br>
                            • Docencia en derecho administrativo y áreas afines<br>
                            • Formación de nuevas generaciones de abogados<br>
                            • Integración de teoría y práctica jurídica
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Dirección en el CIEJ -->
        <section class="section">
            <div class="container">
                <h2 class="section__title">Dirección en el CIEJ</h2>
                <p class="section__subtitle">Desde 2019, aplicando nuevas tecnologías a la investigación jurídica</p>
                
                <div class="about__content">
                    <div class="about__text">
                        <div class="about__description">
                            <p>Como <strong>Directora del CIEJ</strong>, se ha dedicado a la aplicación de nuevas tecnologías 
                            a la investigación jurídica, teniendo la oportunidad de participar, entre otros, en el desarrollo 
                            de una biblioteca virtual de documentos históricos y legales relacionados con el juicio contra 
                            Venezuela en la Corte Internacional de Justicia por la Zona en Reclamación del Esequibo.</p>
                            
                            <h3 style="margin-top: var(--space-lg); color: var(--color-primary);">Proyecto Destacado:</h3>
                            <p><strong>Biblioteca Virtual Esequibo</strong> - Desarrollo de una plataforma digital que compila 
                            y organiza documentos históricos y legales fundamentales para la defensa de Venezuela en la 
                            Corte Internacional de Justicia, apoyando al equipo de abogados defensores.</p>
                        </div>
                        
                        <div class="feature-stats" style="margin-top: var(--space-lg);">
                            <div class="stat">
                                <span class="stat__number">2019</span>
                                <span class="stat__label">Inicio como Directora</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">1</span>
                                <span class="stat__label">Biblioteca Virtual desarrollada</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">+5</span>
                                <span class="stat__label">Proyectos tecnológicos</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="about__image">
                        <div class="image-placeholder" style="height: 400px; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: var(--space-md);">
                            <div class="service-card__icon" style="font-size: 4rem; margin-bottom: var(--space-md);">💻</div>
                            <h3 style="color: var(--color-primary); margin-bottom: var(--space-sm);">Tecnología & Derecho</h3>
                            <p style="text-align: center; color: var(--color-text-light);">
                                Innovación en investigación jurídica mediante herramientas tecnológicas avanzadas
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Publicaciones y Logros -->
        <section class="section" style="background: var(--color-background-alt);">
            <div class="container">
                <h2 class="section__title">Áreas de Especialización</h2>
                <div class="services__grid">
                    <div class="service-card">
                        <h3 class="service-card__title">Derecho Administrativo</h3>
                        <p class="service-card__description">
                            Especialización en derecho público, administración y relaciones entre el Estado y los ciudadanos.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <h3 class="service-card__title">Derecho Tributario Internacional</h3>
                        <p class="service-card__description">
                            Experiencia en tratados de doble tributación y políticas fiscales internacionales.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <h3 class="service-card__title">Derecho Constitucional</h3>
                        <p class="service-card__description">
                            Conocimiento profundo de la constitución y jurisprudencia constitucional venezolana.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <h3 class="service-card__title">Tecnología Jurídica</h3>
                        <p class="service-card__description">
                            Aplicación de nuevas tecnologías a la investigación y práctica del derecho.
                        </p>
                    </div>
                    
                    <div class="service-card">
                        <h3 class="service-card__title">Relaciones Internacionales</h3>
                        <p class="service-card__description">
                            Estudio de las relaciones entre estados y organismos internacionales.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Contacto Actualizada -->
        <section id="contacto" class="contact section">
            <div class="container">
                <h2 class="section__title">Contactar a Laura Aguerrevere</h2>
                <p class="section__subtitle">Para consultas profesionales, colaboraciones académicas o asesoría jurídica especializada</p>
                
                <div class="contact__content">
                    <div class="contact__info">
                        <div class="contact__details">
                            <div class="contact__item">
                                <span class="contact__icon">📧</span>
                                <div>
                                    <strong>Email profesional:</strong><br>
                                    <a href="mailto:lauraguerrevere@gmail.com" style="color: var(--color-primary);">lauraguerrevere@gmail.com</a><br>
                                    <a href="mailto:justipediabogado@gmail.com" style="color: var(--color-primary);">justipediabogado@gmail.com</a>
                                </div>
                            </div>
                            
                            <div class="contact__item">
                                <span class="contact__icon">📱</span>
                                <div>
                                    <strong>Teléfono / WhatsApp:</strong><br>
                                    <a href="tel:+584129389420" style="color: var(--color-primary);">+58 412 9389420</a>
                                </div>
                            </div>
                            
                            <div class="contact__item">
                                <span class="contact__icon">🌐</span>
                                <div>
                                    <strong>Instagram profesional:</strong><br>
                                    <a href="https://instagram.com/aguerreverelaura" target="_blank" style="color: var(--color-primary);">@aguerreverelaura</a>
                                </div>
                            </div>
                            
                            <div class="contact__item">
                                <span class="contact__icon">🏢</span>
                                <div>
                                    <strong>Sitio web institucional:</strong><br>
                                    <a href="https://www.ciejvenezuela.com" target="_blank" style="color: var(--color-primary);">www.ciejvenezuela.com</a>
                                </div>
                            </div>
                            
                            <div class="contact__item">
                                <span class="contact__icon">⚖️</span>
                                <div>
                                    <strong>Áreas de práctica:</strong><br>
                                    Derecho Administrativo, Constitucional,<br>
                                    Tributario Internacional y Tecnología Jurídica
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botón de contacto en lugar del formulario -->
                    <div class="contact-button-container">
                        <h3 style="color: var(--color-primary); margin-bottom: var(--space-md); text-align: center;">
                            ¿Desea contactar a Laura Aguerrevere?
                        </h3>
                        <p class="contact-button-description" style="text-align: center;">
                            Utilice el formulario de contacto principal del sitio web del CIEJ para enviar su consulta, 
                            propuesta de colaboración o solicitud de asesoría. Laura recibirá directamente su mensaje.
                        </p>
                        
                        <a href="http://192.168.11.113:8121/#contacto" class="contact-button">
                            <i class="fas fa-comments"></i>
                            Ir al Formulario de Contacto
                        </a>
                        
                        <p class="contact-button-description" style="margin-top: var(--space-md);">
                            Será redirigido a la sección de contacto principal del sitio web del CIEJ.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección en inglés (para alcance internacional) -->
        <section class="section" style="background: var(--color-justipedia-light);">
            <div class="container">
                <h2 class="section__title">Professional Profile (English)</h2>
                <div class="about__content">
                    <div class="about__text">
                        <div class="about__description">
                            <p><strong>Laura Aguerrevere F.</strong> - Lawyer and specialist in Administrative Law (UCAB), 
                            Master in Public Management (IESA), currently pursuing a Doctorate in Political Science 
                            with a specialization in International Relations (USB), and university professor (UCV).</p>
                            
                            <p style="margin-top: var(--space-md);"><strong>Professional Experience:</strong> With over 15 years 
                            of experience in the judicial field, as a lawyer in the Political-Administrative Chamber 
                            and the Constitutional Chamber of the Supreme Court of Justice.</p>
                            
                            <p style="margin-top: var(--space-md);"><strong>Government Service:</strong> She also served as 
                            Division Head at the Venezuelan National Integrated Customs and Tax Administration Service 
                            (SENIAT), attached to the Public Policy Office, where she had the opportunity to participate 
                            in the drafting, discussion, and signing of the double taxation treaties signed by Venezuela 
                            with several countries.</p>
                            
                            <p style="margin-top: var(--space-md);"><strong>CIEJ Leadership:</strong> As Director of the 
                            Center for Legal Research (CIEJ), since 2019, she has dedicated herself to the application of 
                            new technologies to legal research, having had the opportunity to participate, among other things, 
                            in the development of a virtual library of historical and legal documents related to the case 
                            against Venezuela before the International Court of Justice regarding the Essequibo disputed territory. 
                            This was in support of the team of lawyers defending Venezuela.</p>
                        </div>
                        
                        <div style="margin-top: var(--space-lg);">
                            <h3 style="color: var(--color-primary); margin-bottom: var(--space-sm);">Contact Information:</h3>
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: var(--space-md);">
                                <div>
                                    <strong>Email:</strong><br>
                                    lauraguerrevere@gmail.com<br>
                                    justipediabogado@gmail.com
                                </div>
                                <div>
                                    <strong>Phone:</strong><br>
                                    +58 412 9389420
                                </div>
                                <div>
                                    <strong>Instagram:</strong><br>
                                    @aguerreverelaura
                                </div>
                                <div>
                                    <strong>Website:</strong><br>
                                    www.ciejvenezuela.com
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script type="text/javascript">
    window.addEventListener('load', function() {
        const app = new Controller(new Model("<?= $data['controller']; ?>".toLowerCase(), "<?= $data['page_name']; ?>"), new View("<?= $data['controller']; ?>"));
    }, false);
    
    // Actualizar año del footer
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('footer_ano').textContent = new Date().getFullYear();
    });
    </script>
    
</body>
</html>
