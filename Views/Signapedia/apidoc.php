<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page_title']; ?></title>
    <meta name="description" content="API Signapedia: Documentación para usar la API de la biblioteca virtual Signapedia">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
 <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= media(); ?>css/reset.css">
    <link rel="stylesheet" href="<?= media(); ?>css/styles.css">
    <link rel="stylesheet" href="<?= media(); ?>css/justipedia.css">
    <link rel="stylesheet" href="<?= media(); ?>css/signapedia.css">
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__brand">
                <img src="<?= media(); ?>images/webp/ciej_logo_nav_2.webp" alt="CIEJ" class="logo" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjUwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxNTAiIGhlaWdodD0iNTAiIGZpbGw9IiMxYTM2NWQiLz48dGV4dCB4PSI3NSIgeT0iMjUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGRvbWluYW50LWJhc2VsaW5lPSJtaWRkbGUiPkNJRUo8L3RleHQ+PC9zdmc+'">
            </div>
            
            <ul class="nav__menu">
                <li><a href="<?= base_url(); ?>" class="nav__link">Inicio</a></li>
                <li><a href="<?= base_url(); ?>justipedia" class="nav__link">Justipedia</a></li>
                <li><a href="<?= base_url(); ?>signapedia" class="nav__link nav__link--active">Signapedia</a></li>
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

    <!-- Hero Section para Documentación API -->
    <section id="inicio" class="hero hero--api">
        <div class="hero__content container">
                <div class="signapedia-hero-logo-fondo-blanco">
                    <img src="<?= media(); ?>images/webp/logo_signapedia_350.webp" alt="Signapedia" class="signapedia-hero-logo__img">
                </div>
            <div class="api-hero-logo">
                <h1 class="hero__title">Documentación de la API</h1>
            </div>
            <p class="hero__subtitle">Guía completa para desarrolladores - Integra el contenido normativo en tus aplicaciones</p>
            <div class="hero__actions">
                <a href="#autenticacion" class="btn btn--signapedia">Comenzar con la Autenticación</a>
                <a href="#filtros" class="btn btn--secondary">Ver Filtros Disponibles</a>
            </div>
        </div>
        <div class="hero__pattern"></div>
    </section>

        <!-- Sección: API de Signapedia -->
        <section class="section api-section" id="documentacion">
            <div class="container">
                <h2 class="section__title">API de Signapedia</h2>
                <p class="section__subtitle">Acceso automatizado al contenido normativo para desarrolladores</p>

                <div class="info-highlight-card">
                    <div class="info-highlight-content">
                        <span class="info-highlight-icon">🔧</span>
                        <p class="info-highlight-text">
                            Dentro del contexto de las herramientas tecnológicas con las cuales trabajamos, en el CIEJ nos mantenemos al día con los tiempos que corren. Signapedia cuenta con una API para proveer a los desarrolladores de aplicaciones, el acceso automatizado al contenido de Signapedia para su posterior uso.
                        </p>
                    </div>
                </div>

                <div class="api-content">
                    <!-- Antes de comenzar -->
                    <div class="api-subsection">
                        <h3 class="api-subtitle">🎓 Antes de comenzar</h3>
                        <div class="api-description">
                            <p>Si no viene del mundo de la programación, puede tener dificultades para comprender el contenido de esta documentación.</p>
                            <p>Nuestro API endpoint requiere autenticación, para lo cual necesitará contar con las respectivas credenciales (suministradas por el CIEJ) para poder acceder a los recursos de la API.</p>
<!-- En la sección "Antes de comenzar" -->
<div class="api-note">
    <strong>💡 Nota:</strong> Para más información acerca de cómo obtener las credenciales, o cualquier información adicional relacionada con la API de Signapedia, puede <a href="<?= base_url(); ?>#contacto">contactarnos haciendo click en el botón a continuación</a>.
    <div style="margin-top: var(--space-sm);">
        <a href="<?= base_url(); ?>#contacto" class="btn btn--signapedia" style="padding: 8px 16px; font-size: 0.9rem;">
            <i class="fas fa-envelope"></i>
            Solicitar Acceso
        </a>
    </div>
</div>

                        </div>
                    </div>

                    <!-- Haciendo una solicitud -->
                    <div class="api-subsection">
                        <h3 class="api-subtitle">🌐 Haciendo una solicitud (request) a la API</h3>
                        <div class="api-description">
                            <p>Las solicitudes a nuestra API necesitan tener <code>Content-Type: application/json</code> y ser enviadas al endpoint correspondiente, como un HTTP GET, POST, PATCH o DELETE. Cuando se está consultando información de la Signapedia, se requiere incluir en el HTTP header, el token de acceso previamente obtenido luego de la autenticación.</p>
                        </div>
                    </div>

                    <!-- Obtención del access token -->
                    <div class="api-subsection">
                        <h3 class="api-subtitle">🔑 Obtención del access token</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Ejemplo con cURL</span>
                                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                            </div>
                            <pre><code>curl -H 'Content-Type: application/json' \
-d '{"username":"ejemplo","password":"passwordDeEjemplo"}' \
https://api.ciejvenezuela.com/asamblea/v1/controller/sessions.php</code></pre>
                        </div>
                        <div class="api-note">
                            <strong>Endpoint utilizado:</strong> <code>https://api.ciejvenezuela.com/asamblea/v1/controller/sessions.php</code><br>
                            Es el endpoint para la obtención del token de acceso, así como para manejar las solicitudes relacionadas con el token de acceso.
                        </div>
                    </div>

                    <!-- Respuesta del token -->
                    <div class="api-subsection">
                        <h3 class="api-subtitle">📄 Respuesta del access token</h3>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Respuesta JSON</span>
                                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                            </div>
                            <pre><code>{
    "statusCode": 201,
    "success": true,
    "messages": ["Token created"],
    "data": {
        "session_id": 30,
        "access_token": "YjA2NDBkMjQzZjAxM2FjMTNjYmM0ODY4OGJjN2Q2MGUxZjU5MDkxZWY5NjQ0YjA2MTYyMzk0NDY3Ng==",
        "access_token_expires_in": 21600,
        "refresh_token": "Yzk3OWFjYzQ3ZTY0NWNiNTkzM2VlYjA1MzVkMjFjZmI3ZTA4OGE2NzQxZmY4NTA2MTYyMzk0NDY3Ng==",
        "refresh_token_expires_in": 1209600
    }
}</code></pre>
                        </div>
                    </div>

                    <!-- Refresh token -->
                    <div class="api-subsection">
                        <h3 class="api-subtitle">🔄 Refresh token</h3>
                        <div class="api-description">
                            <p>Una vez que expira el <code>access_token</code> (luego de transcurridas 6 horas desde su creación), será necesario reemplazarlo por uno nuevo utilizando el <code>refresh_token</code> obtenido cuando se creó el access_token.</p>
                        </div>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Ejemplo de refresh token</span>
                                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                            </div>
                            <pre><code>curl -H 'Content-Type: application/json' \
-H 'Authorization: YjA2NDBkMjQzZjAxM2FjMTNjYmM0ODY4OGJjN2Q2MGUxZjU5MDkxZWY5NjQ0YjA2MTYyMzk0NDY3Ng==' \
--request PATCH \
-d '{"refresh_token": "Yzk3OWFjYzQ3ZTY0NWNiNTkzM2VlYjA1MzVkMjFjZmI3ZTA4OGE2NzQxZmY4NTA2MTYyMzk0NDY3Ng=="}' \
https://api.ciejvenezuela.com/asamblea/v1/controller/sessions.php?sessionid=30</code></pre>
                        </div>
                    </div>

                    <!-- Consulta de fichas -->
                    <div class="api-subsection">
                        <h3 class="api-subtitle">📊 Consulta de fichas</h3>
                        <div class="api-description">
                            <p>Una vez tenemos un token de acceso (<code>access_token</code>) válido, podemos consultar la información de Signapedia (fichas).</p>
                        </div>
                        <div class="code-block">
                            <div class="code-header">
                                <span>Consulta de fichas</span>
                                <button class="copy-btn" onclick="copyCode(this)">📋 Copiar</button>
                            </div>
                            <pre><code>curl -H 'Content-Type: application/json' \
-H 'Authorization: MDM5ZjczN2Y5ZTFhMmJhYWRiNmE1ZDdjM2Q5N2FjMDY5OWY0ZmZmYTIwMzQ3MzU3MTYyMzk1NzcyMQ==' \
https://api.ciejvenezuela.com/asamblea/v1/controller/fichas.php</code></pre>
                        </div>
                        <div class="api-note">
                            <strong>Endpoint:</strong> <code>https://api.ciejvenezuela.com/asamblea/v1/controller/fichas.php</code><br>
                            Es el endpoint para consultar las fichas y solo acepta el método GET.
                        </div>
                    </div>

                    <!-- Filtros disponibles -->
                    <div class="api-subsection">
                        <h3 class="api-subtitle">🔍 Filtros disponibles</h3>
                        <div class="filters-grid">
                            <div class="filter-item">
                                <h4>titulo</h4>
                                <p>Filtra por palabras en el título del acto</p>
                                <code>?titulo=Decreto</code>
                            </div>
                            <div class="filter-item">
                                <h4>vigente</h4>
                                <p>Filtra por estado de vigencia</p>
                                <code>?vigente=Sí</code> o <code>?vigente=No</code>
                            </div>
                            <div class="filter-item">
                                <h4>tipo_acto</h4>
                                <p>Filtra por tipo de acto normativo</p>
                                <code>?tipo_acto=Ley</code>
                            </div>
                            <div class="filter-item">
                                <h4>autor_acto</h4>
                                <p>Filtra por órgano emisor</p>
                                <code>?autor_acto=Congreso</code>
                            </div>
                            <div class="filter-item">
                                <h4>sector</h4>
                                <p>Filtra por sector competencial</p>
                                <code>?sector=Finanzas</code>
                            </div>
                            <div class="filter-item">
                                <h4>materia</h4>
                                <p>Filtra por materia especializada</p>
                                <code>?materia=Tributos</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="section cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2 class="section__title">¿Listo para integrar la API?</h2>
                    <p class="section__subtitle">Comienza a desarrollar con Signapedia hoy mismo</p>
                    <div class="cta-actions">
                        <a href="<?= base_url(); ?>#contacto" class="btn btn--signapedia btn--large">
                            <i class="fas fa-key"></i>
                            Solicitar Credenciales
                        </a>
                        <a href="#documentacion" class="btn btn--secondary">
                            <i class="fas fa-book"></i>
                            Revisar Documentación
                        </a>
                    </div>
                    <div class="cta-features">
                        <div class="cta-feature">
                            <i class="fas fa-shield-alt"></i>
                            <span>Autenticación segura</span>
                        </div>
                        <div class="cta-feature">
                            <i class="fas fa-bolt"></i>
                            <span>Respuestas rápidas</span>
                        </div>
                        <div class="cta-feature">
                            <i class="fas fa-filter"></i>
                            <span>Filtros avanzados</span>
                        </div>
                        <div class="cta-feature">
                            <i class="fas fa-code"></i>
                            <span>JSON estandarizado</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__brand">
                    <img src="<?= media(); ?>images/webp/ciej_logo_nav_2.webp" alt="CIEJ" class="logo" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjUwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxNTAiIGhlaWdodD0iNTAiIGZpbGw9IiMxYTM2NWQiLz48dGV4dCB4PSI3NSIgeT0iMjUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGRvbWluYW50LWJhc2VsaW5lPSJtaWRkbGUiPkNJRUo8L3RleHQ+PC9zdmc+'">
                    <p class="footer__description">
                        Centro de Investigación Enciclopédica de Jurisprudencia - Excelencia en investigación jurídica desde 2008.
                    </p>
                </div>

                <div class="footer__links">
                    <div class="footer__column">
                        <h4>Enlaces Rápidos</h4>
                        <ul>
                            <li><a href="<?= base_url(); ?>#inicio">Inicio</a></li>
                            <li><a href="<?= base_url(); ?>justipedia">Justipedia</a></li>
                            <li><a href="<?= base_url(); ?>signapedia">Signapedia</a></li>
                            <li><a href="<?= base_url(); ?>#servicios">Investigaciones</a></li>
                            <li><a href="<?= base_url(); ?>#equipo">Equipo</a></li>
                            <li><a href="<?= base_url(); ?>#contacto">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="footer__column">
                        <h4>Contacto</h4>
                        <ul>
                            <li style="display: none;"><a href="mailto:investigacion@ciejvenezuela.com">Correo Electrónico</a></li>
                            <li style="display: none;"><a href="tel:+582125550100">Teléfono</a></li>
                            <li><a href="<?= base_url(); ?>#contacto">Formulario de Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy; 2024 CIEJ - Centro de Investigación Enciclopédica de Jurisprudencia. Todos los derechos reservados.</p>

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

    <script src="<?= media(); ?>js/theme.js"></script>
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
