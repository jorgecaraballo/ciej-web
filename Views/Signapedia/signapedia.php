<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signapedia - Biblioteca Virtual de Normativa Venezolana | CIEJ</title>
    <meta name="description" content="Signapedia: Biblioteca virtual especializada en normativa venezolana con instrumentos de contenido normativo organizados sistemáticamente">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= media(); ?>css/reset.css">
    <link rel="stylesheet" href="<?= media(); ?>css/styles.css">
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
        <!-- Hero Section Específico para Signapedia -->
        <section id="inicio" class="hero">
            <div class="hero__content container">
                <div class="signapedia-hero-logo">
                    <img src="<?= media(); ?>images/webp/SignapediaSinFondo.webp" alt="Signapedia" class="signapedia-hero-logo__img">
                </div>
                <p class="hero__subtitle">Biblioteca Virtual de Normativa Venezolana</p>
                <div class="hero__actions">
                    <a href="https://signapedia.ciejvenezuela.com/" class="btn btn--signapedia" target="_blank">Acceder a Signapedia</a>
                    <a href="#informacion" class="btn btn--secondary">Conocer Más</a>
                </div>
            </div>
        </section>

        <!-- Sección: Qué es Signapedia -->
        <section id="informacion" class="signapedia-section section">
            <div class="container">
                <div class="about__content">
                    <div class="about__text">
                        <h2 class="section__title">¿Qué es Signapedia?</h2>
                        <p class="about__description">
                            Es una biblioteca virtual de todos los instrumentos de contenido normativo publicados oficialmente en Venezuela, organizados de manera sistemática, por sectores y materias, señalando además su vigencia temporal y otros datos relevantes que faciliten su análisis, comprensión y ámbito de aplicación.
                        </p>
                        <div class="feature-stats">
                            <div class="stat">
                                <span class="stat__number">10000+</span>
                                <span class="stat__label">Instrumentos normativos</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">30+</span>
                                <span class="stat__label">Sectores especializados</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">100%</span>
                                <span class="stat__label">Acceso organizado</span>
                            </div>
                        </div>
                    </div>
                    <div class="about__image">
                        <div class="video-container video-container--signapedia">
                            <iframe src="https://www.youtube.com/embed/JxVVetjW2pE?si=5n-f9Ueu-KVZVs94" 
                                    title="Video tutorial Signapedia" 
                                    frameborder="0" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección: Objetivos -->
        <section id="objetivos" class="section objectives-section">
            <div class="container">
                <h2 class="section__title">Objetivos de Signapedia</h2>
                <div class="objectives-grid">
                    <div class="objective-card">
                        <div class="objective-number">
                            <i class="fas fa-database location-icon"></i>
                        </div>
                        <h3 class="objective-title">Base de Datos Completa</h3>
                        <p class="objective-description">
                            Crear una base de datos con todas las normas publicadas oficialmente en Venezuela, organizadas de manera sistemática y precisa.
                        </p>
                    </div>
                    <div class="objective-card">
                        <div class="objective-number">
                            <i class="fas fa-search location-icon"></i>
                        </div>
                        <h3 class="objective-title">Herramienta Tecnológica Avanzada</h3>
                        <p class="objective-description">
                            Desarrollar una herramienta tecnológica que permita acceder de manera organizada, cronológica e inmediata a cualquier acto normativo publicado en la Gaceta Oficial.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección: Justificación e Importancia -->
        <section class="section justification-section">
            <div class="container">
                <h2 class="section__title">Justificación e Importancia</h2>

                <div class="justification-accordion">
                    <!-- Ítem 1 -->
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <div class="accordion-title">
                                <span class="accordion-icon">🏛️</span>
                                <h3>Complejidad del Entramado Normativo Venezolano</h3>
                            </div>
                            <span class="accordion-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>Venezuela posee un entramado normativo sumamente complejo, que con el devenir de los años se ha complicado de tal manera, que se ha convertido en un verdadero problema el poder determinar de manera clara y precisa cuál es el ordenamiento jurídico aplicable en un asunto determinado.</p>
                        </div>
                    </div>

                    <!-- Ítem 2 -->
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <div class="accordion-title">
                                <span class="accordion-icon">🔍</span>
                                <h3>Factores de Complejidad Normativa</h3>
                            </div>
                            <span class="accordion-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>Esta situación se debe a múltiples factores: la multiplicidad de fuentes normativas (muchos órganos y entes del Poder Público tienen atribuida competencia normativa); la falta de coordinación entre los distintos niveles del Poder Público; la inexistencia de un organismo que efectivamente ejerza la competencia de recopilación y determinación de leyes y normas vigentes; a todo lo cual se suma la crisis institucional que atraviesa nuestro país actualmente.</p>
                        </div>
                    </div>

                    <!-- Ítem 3 -->
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <div class="accordion-title">
                                <span class="accordion-icon">🎯</span>
                                <h3>Objetivo Principal de Signapedia</h3>
                            </div>
                            <span class="accordion-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>El objetivo principal de Signapedia es proporcionar una herramienta tecnológica en la que se pueda consultar de manera organizada, clara, precisa y cronológica toda la información normativa publicada en Venezuela; a través del análisis y organización del único órgano de divulgación oficial del país: La Gaceta Oficial de la República.</p>
                        </div>
                    </div>

                    <!-- Ítem 4 -->
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <div class="accordion-title">
                                <span class="accordion-icon">📊</span>
                                <h3>Análisis Exhaustivo y Organización</h3>
                            </div>
                            <span class="accordion-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>La idea no sólo es proporcionar la versión digitalizada de dicho órgano divulgativo, sino el análisis exhaustivo de todos y cada uno de los instrumentos normativos publicados en él, organizarlos por materias y sectores competenciales, establecer su vigencia temporal, su naturaleza jurídica, así como su rango de aplicación dentro de nuestro ordenamiento jurídico.</p>
                        </div>
                    </div>

                    <!-- Ítem 5 -->
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <div class="accordion-title">
                                <span class="accordion-icon">👥</span>
                                <h3>Utilidad para Todos los Operadores Jurídicos</h3>
                            </div>
                            <span class="accordion-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="accordion-content">
                            <p>Esta herramienta resultará de suma importancia no sólo para abogados litigantes y operadores del sistema de justicia, sino para cualquier ciudadano que requiera información acerca del marco jurídico aplicable en nuestro país a una situación fáctica específica; toda vez que las leyes y normas rigen todos y cada uno de los sectores de la sociedad y de la convivencia humana.</p>
                        </div>
                    </div>
                </div>
            </div>
	</section>

        <!-- Sección: Datos Contenidos en una Ficha -->
        <section class="section card-info-section">
            <div class="container">
                <h2 class="section__title">Datos Contenidos en una Ficha Normativa</h2>
                <p class="section__subtitle">Cada ficha en Signapedia contiene información detallada y organizada en diferentes categorías</p>

                <!-- Filtros -->
                <div class="mosaic-filters">
                    <button class="filter-btn active" data-filter="all">Todos los Campos</button>
                    <button class="filter-btn" data-filter="identificacion">Identificación</button>
                    <button class="filter-btn" data-filter="contenido">Contenido</button>
                    <button class="filter-btn" data-filter="clasificacion">Clasificación</button>
                    <button class="filter-btn" data-filter="gaceta">Gaceta Oficial</button>
                </div>

                <!-- Grid de Campos -->
                <div class="mosaic-grid">
                    <!-- Categoría: Identificación -->
                    <div class="mosaic-item" data-category="identificacion">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">📝</span>
                            <h4>NOMBRE DEL ACTO</h4>
                        </div>
                        <p>Denominación oficial del instrumento normativo</p>
                    </div>

                    <div class="mosaic-item" data-category="identificacion">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">📅</span>
                            <h4>FECHA DEL ACTO</h4>
                        </div>
                        <p>Fecha de emisión del instrumento normativo</p>
                    </div>

                    <div class="mosaic-item" data-category="identificacion">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">⏰</span>
                            <h4>VIGENCIA</h4>
                        </div>
                        <p>Estado actual de vigencia del acto normativo</p>
                    </div>

                    <!-- Categoría: Clasificación -->
                    <div class="mosaic-item" data-category="clasificacion">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">📋</span>
                            <h4>TIPO DE ACTO</h4>
                        </div>
                        <p>Naturaleza jurídica del instrumento (Ley, Decreto, Resolución, etc.)</p>
                    </div>

                    <div class="mosaic-item" data-category="clasificacion">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">👤</span>
                            <h4>AUTOR DEL ACTO</h4>
                        </div>
                        <p>Órgano o ente emisor del instrumento normativo</p>
                    </div>

                    <div class="mosaic-item" data-category="clasificacion">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">🏢</span>
                            <h4>SECTOR</h4>
                        </div>
                        <p>Clasificación por sector según el decreto de organización del Poder Público</p>
                    </div>

                    <div class="mosaic-item" data-category="clasificacion">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">📚</span>
                            <h4>MATERIA</h4>
                        </div>
                        <p>Clasificación por materia especializada según el sistema Signapedia</p>
                    </div>

                    <div class="mosaic-item" data-category="clasificacion">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">🔑</span>
                            <h4>PALABRAS CLAVE</h4>
                        </div>
                        <p>Términos relevantes para búsqueda y categorización</p>
                    </div>

                    <!-- Categoría: Contenido -->
                    <div class="mosaic-item" data-category="contenido">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">⚖️</span>
                            <h4>FUNDAMENTO NORMATIVO</h4>
                        </div>
                        <p>Base legal que sustenta la emisión del acto</p>
                    </div>

                    <div class="mosaic-item" data-category="contenido">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">🎯</span>
                            <h4>ATRIBUCIÓN DE COMPETENCIAS</h4>
                        </div>
                        <p>Indica si el acto atribuye competencias a órganos o entes</p>
                    </div>

                    <div class="mosaic-item" data-category="contenido">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">🏛️</span>
                            <h4>CREA, MODIFICA O SUPRIME ÓRGANOS O ENTES</h4>
                        </div>
                        <p>Efectos del acto sobre la estructura organizativa del Estado</p>
                    </div>

                    <div class="mosaic-item" data-category="contenido">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">🚫</span>
                            <h4>DISPOSICIÓN DEROGATORIA</h4>
                        </div>
                        <p>Cláusulas que derogan normativa anterior</p>
                    </div>

                    <!-- Categoría: Gaceta Oficial -->
                    <div class="mosaic-item" data-category="gaceta">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">📰</span>
                            <h4>Nº DE GACETA</h4>
                        </div>
                        <p>Número de la Gaceta Oficial donde fue publicado</p>
                    </div>

                    <div class="mosaic-item" data-category="gaceta">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">🔢</span>
                            <h4>TIPO DE Nº</h4>
                        </div>
                        <p>Clasificación como Ordinario o Extraordinario</p>
                    </div>

                    <div class="mosaic-item" data-category="gaceta">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">🗓️</span>
                            <h4>FECHA DE LA GACETA</h4>
                        </div>
                        <p>Fecha de publicación en la Gaceta Oficial</p>
                    </div>

                    <div class="mosaic-item" data-category="gaceta">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">📄</span>
                            <h4>PÁGINA DE INICIO DEL ACTO</h4>
                        </div>
                        <p>Página donde comienza la publicación del acto</p>
                    </div>

                    <div class="mosaic-item" data-category="contenido">
                        <div class="mosaic-header">
                            <span class="mosaic-icon">📝</span>
                            <h4>NOTAS</h4>
                        </div>
                        <p>Observaciones, relaciones con otros actos y datos complementarios</p>
                    </div>
                </div>

                <div class="mosaic-footer">
                    <p class="mosaic-note">💡 <strong>Total de campos disponibles:</strong> 17 campos organizados en 5 categorías para un análisis normativo completo</p>
                </div>
            </div>
        </section>

        <!-- Sección: Sectores y Materias -->
        <section class="section subjects-section">
            <div class="container">
                <h2 class="section__title">Sectores y Materias de Signapedia</h2>
                <p class="section__subtitle">Clasificación especializada para búsqueda y análisis preciso de instrumentos normativos</p>

                <div class="info-highlight-card">
                    <div class="info-highlight-content">
                        <span class="info-highlight-icon">🏷️</span>
                        <p class="info-highlight-text">
                            Cada ficha elaborada por el equipo de Signapedia ha sido clasificada por Sector (siguiendo la clasificación del decreto de organización del Poder Público) y Materia, para facilitar la búsqueda al usuario una vez que ha iniciado sesión en Signapedia.
                        </p>
                    </div>
                </div>

                <div class="sectors-materias-grid">
                    <!-- Sectores -->
                    <div class="classification-section">
                        <h3 class="classification-title">Sectores</h3>
                        <div class="classification-grid">
                            <div class="classification-item">
                                <span class="classification-badge">Agricultura</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Alimentación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Ambiental</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Ciencia y Tecnología</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Comercio</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Comercio Exterior</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Comunal</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Comunicación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Contraloría</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Cultura</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Deportes</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Educación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Energético</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Finanzas</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Hidrocarburos</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Indígena</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Industria</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Justicia</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Laboral</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Minería</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Obras Públicas</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Organización y Funcionamiento</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Participación Política</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Planificación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Relaciones Exteriores</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Relaciones Interiores</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Salud</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Seguridad y Defensa</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Sindical</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Transporte</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Turismo</span>
                            </div>
                        </div>
                    </div>

                    <!-- Materias -->
                    <div class="classification-section">
                        <h3 class="classification-title">Materias</h3>
                        <div class="classification-grid">
                            <div class="classification-item">
                                <span class="classification-badge">Acuicultura y Pesca</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Aduanas</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Agricultura</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Alimentación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Bancario</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Cajas de Ahorro</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Ciencia y Tecnología</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Comercial</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Comercio Exterior</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Comunal</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Contraloría</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Cultura</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Ecología</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Economía</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Educación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Electoral</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Energía</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Funcionarial</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Gas</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Género</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Identificación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Indígena</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Industrial</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Infraestructura</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Internacionales</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Inversiones Extranjeras</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Justicia</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Laboral</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Medios de Comunicación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Mercado de Valores</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Militar</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Minería</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Ordenación territorial</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Organización administrativa</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Petróleo</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Petroquímica</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Planificación</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Política Exterior</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Presupuesto</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Propiedad Intelectual</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Publicidad</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Recursos Naturales</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Registros y Notarías</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Relaciones Diplomáticas</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Relaciones Exteriores</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Salud</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Seguridad Ciudadana</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Seguros</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Servicio Postal</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Servicios Penitenciarios</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Sindical</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Telecomunicaciones</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Transporte</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Tributos</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Turismo</span>
                            </div>
                            <div class="classification-item">
                                <span class="classification-badge">Vivienda y Hábitat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</section>

        <!-- Sección: API de Signapedia -->
        <section class="section api-section">
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
                            <div class="api-note">
                                <strong>💡 Nota:</strong> Para más información acerca de cómo obtener las credenciales, o cualquier información adicional relacionada con la API de Signapedia, puede <a href="<?= base_url(); ?>#contacto">contactarnos aquí</a>.
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
                    <h2 class="section__title">¿Listo para explorar Signapedia?</h2>
                    <p class="section__subtitle">Accede a más de 10,000 instrumentos normativos organizados y actualizados</p>
                    <div class="cta-actions">
                        <a href="https://signapedia.ciejvenezuela.com/" class="btn btn--signapedia btn--large" target="_blank">
                            Ir a Signapedia
                        </a>
                        <a href="<?= base_url(); ?>#contacto" class="btn btn--secondary">
                            Contactar al Equipo
                        </a>
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
            </div>
        </div>
    </footer>

    <script src="<?= media(); ?>js/theme.js"></script>
    <script>
        // Función para copiar código
        function copyCode(button) {
            const codeBlock = button.closest('.code-block');
            const code = codeBlock.querySelector('code').textContent;
            navigator.clipboard.writeText(code).then(() => {
                const originalText = button.textContent;
                button.textContent = '✅ Copiado!';
                setTimeout(() => {
                    button.textContent = originalText;
                }, 2000);
            });
        }

        // Inicializar componentes específicos de Signapedia
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar acordeón si existe
            if (document.querySelector('.justification-accordion')) {
                initJustipediaAccordion();
            }

            // Inicializar mosaico si existe
            if (document.querySelector('.mosaic-filters')) {
                initMosaicFilters();
            }
        });
    </script>
</body>
</html>
