<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justipedia - Biblioteca Virtual de Jurisprudencia | CIEJ</title>
    <meta name="description" content="Justipedia: Biblioteca virtual especializada en jurisprudencia venezolana con más de 6,000 criterios jurídicos del Máximo Tribunal">
    <!-- Mismos recursos que index.html -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
 <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= media(); ?>css/reset.css">
    <link rel="stylesheet" href="<?= media(); ?>css/styles.css">
    <link rel="stylesheet" href="<?= media(); ?>css/justipedia.css">
</head>
<body>
    <!-- Mismo Header que index.html -->
    <header class="header">
        <nav class="nav container">
            <div class="nav__brand">
                <img src="<?= media(); ?>images/webp/ciej_logo_nav_2.webp" alt="CIEJ" class="logo" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjUwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxNTAiIGhlaWdodD0iNTAiIGZpbGw9IiMxYTM2NWQiLz48dGV4dCB4PSI3NSIgeT0iMjUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGRvbWluYW50LWJhc2VsaW5lPSJtaWRkbGUiPkNJRUo8L3RleHQ+PC9zdmc+'">
            </div>
            
            <ul class="nav__menu">
                <li><a href="<?= base_url(); ?>" class="nav__link">Inicio</a></li>
		<li><a href="<?= base_url(); ?>justipedia" class="nav__link nav__link--active">Justipedia</a></li>
		<li><a href="<?= base_url(); ?>#signapedia" class="nav__link">Signapedia</a></li>
		<li><a href="<?= base_url(); ?>#servicios" class="nav__link">Investigaciones</a></li>
		<li><a href="<?= base_url(); ?>#equipo" class="nav__link">Equipo</a></li>
		<li><a href="<?= base_url(); ?>#contacto" class="nav__link">Contacto</a></li>
            </ul>
            
            <div class="nav__actions"> <!-- Mismo theme switcher -->
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
        <!-- Hero Section Específico para Justipedia -->
        <section class="hero">
            <div class="hero__content container">
                <div class="justipedia-hero-logo">
                    <img src="<?= media(); ?>images/webp/JustipediaSinFondo.webp" alt="Justipedia" class="justipedia-hero-logo__img">
                </div>
                <p class="hero__subtitle">Biblioteca Virtual de Jurisprudencia Venezolana</p>
                <div class="hero__actions">
                    <a href="https://justipedia.ciejvenezuela.com/" class="btn btn--justipedia" target="_blank">Acceder a Justipedia</a>
                    <a href="#informacion" class="btn btn--secondary">Conocer Más</a>
                </div>
            </div>
        </section>

        <!-- Sección: Qué es Justipedia -->
        <section id="informacion" class="justipedia-section section">
            <div class="container">
                <div class="about__content">
                    <div class="about__text">
                        <h2 class="section__title">¿Qué es Justipedia?</h2>
                        <p class="about__description">
                            Es una biblioteca virtual de jurisprudencia, que contiene los criterios jurídicos emanados del Máximo Tribunal de la República, clasificados por materia, sala, ponente, tipo de procedimiento, debidamente titulados y presentados de manera cronológica. Dicha biblioteca es manejada por una herramienta tecnológica que permite su fácil e inmediato acceso a través de un portal web.
                        </p>
                        <div class="feature-stats">
                            <div class="stat">
                                <span class="stat__number">6000+</span>
                                <span class="stat__label">Criterios jurídicos</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">20+</span>
                                <span class="stat__label">Materias especializadas</span>
                            </div>
                            <div class="stat">
                                <span class="stat__number">100%</span>
                                <span class="stat__label">Acceso inmediato</span>
                            </div>
                        </div>
                    </div>
                    <div class="about__image">
                        <div class="video-container video-container--justipedia">
                            <iframe src="https://www.youtube.com/embed/I1EmvVekg3Q?si=r78g-aycRHVz6Jyr" 
                                    title="Video tutorial Justipedia" 
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
                <h2 class="section__title">Objetivos de Justipedia</h2>
                <div class="objectives-grid">
                    <div class="objective-card">
			<div class="objective-number">
				<i class="fas fa-map-marker location-icon"></i>
			</div>
                        <h3 class="objective-title">Base de Datos Organizada</h3>
                        <p class="objective-description">
                            Establecer una base de datos, organizada de manera clara y precisa acerca de todos y cada uno de los criterios jurisprudenciales establecidos por el Máximo Tribunal de la República.
                        </p>
                    </div>
                    <div class="objective-card">
			<div class="objective-number">
				<i class="fas fa-map-marker location-icon"></i>
			</div>
                        <h3 class="objective-title">Herramienta Tecnológica</h3>
                        <p class="objective-description">
                            Permitir el acceso inmediato a la información, con la utilización simultánea de varios parámetros de búsqueda.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección: Justificación e Importancia -->

<!-- Sección: Justificación e Importancia - NUEVA VERSIÓN CON ACORDEÓN -->

<!-- 
✨ Características Implementadas:
✅ Diseño visual coherente con el resto del sitio

✅ Animaciones suaves al abrir/cerrar

✅ Responsive para móviles y tablets

✅ Accesibilidad con botones clickeables

✅ Solo un ítem abierto a la vez

✅ Primer ítem abierto por defecto

✅ Iconos descriptivos para cada sección

✅ Mantiene los colores de la marca Justipedia
-->
<section class="section justification-section">
    <div class="container">
        <h2 class="section__title">Justificación e Importancia</h2>

        <div class="justification-accordion">
            <!-- Ítem 1 -->
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-title">
                        <span class="accordion-icon">⚖️</span>
                        <h3>Definición y Valor Fundamental de la Jurisprudencia</h3>
                    </div>
                    <span class="accordion-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>La jurisprudencia puede ser definida como el conjunto de sentencias y demás resoluciones judiciales emitidas en un mismo sentido por los órganos judiciales de un ordenamiento jurídico determinado. Tiene un valor fundamental como fuente de conocimiento del derecho positivo, con el cual se procura evitar que una misma situación jurídica sea interpretada en forma distinta por los tribunales.</p>
                </div>
            </div>

            <!-- Ítem 2 -->
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-title">
                        <span class="accordion-icon">🔍</span>
                        <h3>Relevancia de los Criterios Jurisprudenciales</h3>
                    </div>
                    <span class="accordion-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>Partiendo de lo anterior, entonces un criterio jurisprudencial es la aplicación del ordenamiento jurídico a una situación concreta, por parte de un juez, con la finalidad de resolver un conflicto determinado. De allí, la relevancia que tiene la interpretación que realiza el Juez, en cuanto al sentido y alcance de las normas jurídicas, ya que de ello dependerá la resolución de una situación jurídica concreta acaecida entre partes con posiciones contrapuestas.</p>
                </div>
            </div>

            <!-- Ítem 3 -->
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-title">
                        <span class="accordion-icon">🏛️</span>
                        <h3>Papel Preponderante en la Sociedad y Estado de Derecho</h3>
                    </div>
                    <span class="accordion-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>En tal sentido, la jurisprudencia juega un papel preponderante en el desenvolvimiento de la sociedad y del Estado de Derecho en general; primordialmente, como consecuencia de la concepción del sistema jurisdiccional venezolano como un sistema nacionalizado y estrictamente jerárquico, lo cual hace indispensable el conocimiento por parte de los operadores jurídicos y de los jueces inferiores, de los criterios plasmados por los jueces superiores dentro de sus propias jurisdicciones y más allá, el conocimiento y la existencia de algún criterio jurisprudencial que de conformidad con nuestro ordenamiento jurídico actual sea vinculante o de obligatorio cumplimiento.</p>
                </div>
            </div>

            <!-- Ítem 4 -->
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-title">
                        <span class="accordion-icon">🚀</span>
                        <h3>Herramienta de Acceso Inmediato para Operadores Jurídicos</h3>
                    </div>
                    <span class="accordion-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>El poder acceder a una herramienta que proporcione de manera inmediata, clara y precisa cómo ha evolucionado un criterio jurisprudencial a través del tiempo podría resultar de gran utilidad no sólo para los jueces que forman parte del sistema de justicia, sino para todos los operadores jurídicos que forman parte del él e incluso al público en general, en tanto y en cuanto son posibles sujetos de aplicación del ordenamiento jurídico y en consecuencia, ser objeto de alguna decisión judicial o administrativa en ejecución de algún criterio jurisprudencial.</p>
                </div>
            </div>

            <!-- Ítem 5 -->
            <div class="accordion-item">
                <button class="accordion-header">
                    <div class="accordion-title">
                        <span class="accordion-icon">📊</span>
                        <h3>Herramienta para Investigación y Políticas Públicas</h3>
                    </div>
                    <span class="accordion-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </button>
                <div class="accordion-content">
                    <p>Para los investigadores y hacedores de políticas públicas, puede resultar también una herramienta muy útil, ya que el acceso a información cronológica y precisa, clasificada por temas y materias; así como el establecimiento de indicadores de eficiencia y eficacia, pueden servir como insumo para el diagnóstico de los principales problemas que enfrenta el Poder Judicial y el establecimiento de posibles reformas y mejoras del sistema de justicia y del funcionamiento del estado en general.</p>
                </div>
            </div>
        </div>

        <!-- Mantenemos los puntos de importancia -->
        <div class="importance-points">
            <div class="importance-card">
                <h4>🔄 Evolución de Criterios</h4>
                <p>Acceso inmediato a cómo ha evolucionado un criterio jurisprudencial a través del tiempo</p>
            </div>
            <div class="importance-card">
                <h4>👥 Para Todos los Operadores</h4>
                <p>Utilidad para jueces, abogados, investigadores y público en general</p>
            </div>
            <div class="importance-card">
                <h4>📊 Herramienta de Diagnóstico</h4>
                <p>Insumo para el análisis y mejora del sistema de justicia</p>
            </div>
        </div>
    </div>
</section>

        <!-- Sección: Información de una Ficha -->
<!-- Sección: Información de una Ficha - NUEVA VERSIÓN CON MOSAICO -->
<!-- 
✨ Características Implementadas:
✅ 16 campos completos organizados en 5 categorías

✅ Sistema de filtros intuitivo con botones

✅ Animaciones suaves al filtrar

✅ Diseño responsive para todos los dispositivos

✅ Efectos hover para mejor interactividad

✅ Contador total de campos disponibles

✅ Iconos descriptivos para cada campo

✅ Transiciones CSS optimizadas

¡El sistema está listo! Los usuarios pueden:

Ver todos los campos haciendo clic en "Todos los Campos"

Filtrar por categoría específica (Identificación, Procedimiento, etc.)

Explorar visualmente la relación entre campos

Entender la estructura completa de las fichas jurisprudenciales
-->

<!-- 
🎯 Opciones para Información Adicional
✨ Características Implementadas:
✅ Sistema no intrusivo - información oculta inicialmente

✅ Un campo abierto a la vez para evitar sobrecarga visual

✅ Ejemplos concretos y útiles para cada campo

✅ Animaciones suaves al expandir/contraer

✅ Totalmente responsive

✅ Accesible con soporte para lectores de pantalla

-->
<section class="section card-info-section">
    <div class="container">
        <h2 class="section__title">Información de una Ficha Jurisprudencial</h2>
        <p class="section__subtitle">Cada ficha en Justipedia contiene información detallada y organizada en diferentes categorías</p>

        <!-- Filtros -->
        <div class="mosaic-filters">
            <button class="filter-btn active" data-filter="all">Todos los Campos</button>
            <button class="filter-btn" data-filter="identificacion">Identificación</button>
            <button class="filter-btn" data-filter="procedimiento">Procedimiento</button>
            <button class="filter-btn" data-filter="contenido">Contenido</button>
            <button class="filter-btn" data-filter="clasificacion">Clasificación</button>
        </div>

        <!-- Grid de Campos -->
        <div class="mosaic-grid">
            <!-- Categoría: Identificación -->
            <div class="mosaic-item" data-category="clasificacion"> <!-- TRIBUNAL -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">🏛️</span>
                    <h4>TRIBUNAL</h4>
                </div>
                <p>Distinción entre la Extinta Corte Suprema y el actual Tribunal Supremo de Justicia</p>
            </div>

            <div class="mosaic-item" data-category="clasificacion"> <!-- SALA -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">🏢</span>
                    <h4>SALA</h4>
                </div>
                <p>Cada una de las Salas de la CSJ y el TSJ incluyendo a la Sala Plena</p>
            </div>

<!-- Campo CASO con información adicional -->
            <div class="mosaic-item enhanced-field" data-category="identificacion"> <!-- CASO -->
                <div class="mosaic-header">
			<span class="mosaic-icon">📝</span>
			<div class="field-title-wrapper">
			    <h4>CASO</h4>
			    <button class="field-info-trigger" data-field="caso">
				<span class="info-indicator">💡</span>
				<span class="sr-only">Más información sobre este campo</span>
			    </button>
			</div>
                </div>
                <p>El nombre del caso</p>
		    <div class="field-additional-info">
			<div class="info-content">
			    <p class="info-note">En este punto hay que tomar en cuenta que en el contencioso-administrativo, tributario, electoral o constitucional se utiliza únicamente el nombre del recurrente. En las demandas civiles o laborales se utiliza el nombre del demandante y el demandado y en los casos penales se utiliza el nombre del imputado.</p>
			</div>
		    </div>
            </div>

            <!-- Categoría: Clasificación -->
<!-- Campo MATERIA con información adicional -->
            <div class="mosaic-item enhanced-field " data-category="clasificacion"> <!-- MATERIA -->
		    <div class="mosaic-header">
			<span class="mosaic-icon">📚</span>
			<div class="field-title-wrapper">
			    <h4>MATERIA</h4>
			    <button class="field-info-trigger" data-field="materia">
				<span class="info-indicator">💡</span>
				<span class="sr-only">Más información sobre este campo</span>
			    </button>
			</div>
		    </div>
                <p>Clasificación por materia según el listado especializado de Justipedia</p>
		    <div class="field-additional-info">
			<div class="info-content">
			    <p class="info-note">El equipo de justipedia ha preparado un listado de materias asociadas con el criterio jurisprudencial fichado, cuyo menú y explicación te ofrecemos más abajo, en la sección <a style="" href="#materias">Materias de la Justipedia</a>.</p>
			</div>
		    </div>
            </div>

            <!-- Categoría: Procedimiento -->
            <div class="mosaic-item" data-category="clasificacion"> <!-- TIPO DE PROCEDIMIENTO -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">📋</span>
                    <h4>TIPO DE PROCEDIMIENTO</h4>
                </div>
                <p>Se refiere al tipo de procedimiento resuelto específicamente en la sentencia fichada</p>
            </div>

            <div class="mosaic-item" data-category="identificacion"> <!-- Nº EXP. -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">📁</span>
                    <h4>Nº EXP.</h4>
                </div>
                <p>El número de expediente otorgado por la Sala</p>
            </div>

<div class="mosaic-item" data-category="identificacion"> <!-- SENTENCIA -->
    <div class="mosaic-header">
        <span class="mosaic-icon">⚖️</span>
        <h4>SENTENCIA</h4>
    </div>
    <p>El número de sentencia otorgado por la Sala</p>
</div>

            <div class="mosaic-item" data-category="clasificacion"> <!-- PONENTE -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">👨‍⚖️</span>
                    <h4>PONENTE</h4>
                </div>
                <p>Puede ser un Magistrado o la combinación de todos bajo la denominación Ponencia Conjunta</p>
            </div>

            <div class="mosaic-item" data-category="identificacion"> <!-- FECHA SENTENCIA -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">📅</span>
                    <h4>FECHA SENTENCIA</h4>
                </div>
                <p>Fecha de publicación por la Sala</p>
            </div>

            <!-- Categoría: Contenido -->
            <div class="mosaic-item" data-category="contenido"> <!-- TÍTULO -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">✍️</span>
                    <h4>TÍTULO</h4>
                </div>
                <p>La manera como el equipo de Justipedia identifica al tema tratado por el criterio fichado</p>
            </div>

            <div class="mosaic-item" data-category="contenido"> <!-- SÍNTESIS -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">📄</span>
                    <h4>SÍNTESIS</h4>
                </div>
                <p>Breve explicación del criterio jurisprudencial fichado</p>
            </div>

            <div class="mosaic-item" data-category="contenido"> <!-- TRANSCRIPCIÓN -->
                <div class="mosaic-header">
                    <span class="mosaic-icon">🖊️</span>
                    <h4>TRANSCRIPCIÓN</h4>
                </div>
                <p>La transcripción de lo dicho por la Sala con respecto al criterio fichado</p>
            </div>

            <div class="mosaic-item" data-category="contenido"> <!-- DECISIÓN -->
                <div class="mosaic-header">
                    <span class="mosaic-icon"><i class="fas fa-gavel"></i></span>
                    <h4>DECISIÓN</h4>
                </div>
                <p>Resumen de la dispositiva del fallo fichado</p>
            </div>

            <div class="mosaic-item" data-category="procedimiento">
                <div class="mosaic-header">
                    <span class="mosaic-icon"><i class="fas fa-vote-yea"></i></span>
                    <h4>VOTO SALVADO Y/O RECURRENTE</h4>
                </div>
                <p>Aquí se expresará si algún Magistrado salvó su voto o concurre con su voto, acompañado de un breve de resumen de las razones del mismo</p>
            </div>

            <div class="mosaic-item" data-category="contenido"> <!-- NOTAS -->
                <div class="mosaic-header">
                    <span class="mosaic-icon"><i class="fas fa-sticky-note"></i></span>
                    <h4>NOTAS</h4>
                </div>
                <p>Relaciones con otras sentencias y criterios jurisprudenciales</p>
            </div>

            <!-- Categoría: Datos Técnicos -->
            <div class="mosaic-item" style="display: none;" data-category="tecnicos">
                <div class="mosaic-header">
                    <span class="mosaic-icon">🆔</span>
                    <h4>ID ÚNICO</h4>
                </div>
                <p>Identificador único de la ficha en el sistema Justipedia</p>
            </div>

        </div>

        <div class="mosaic-footer">
            <p class="mosaic-note">💡 <strong>Total de campos disponibles:</strong> 15 campos organizados en 5 categorías para una búsqueda y análisis precisos</p>
        </div>
    </div>
</section>

        <!-- Sección: Materias de Justipedia -->
        <section id="materias" class="section subjects-section">
            <div class="container">
                <h2 class="section__title">Materias de Justipedia</h2>
                <p class="section__subtitle">22 materias especializadas para búsqueda precisa</p>
                
                <div class="subjects-grid">
                    <div class="subject-card">
                        <h4>1. Administrativo</h4>
                        <p>Criterios que resuelvan algún asunto relacionado con la parte positiva del derecho administrativo.</p>
                    </div>
                    <div class="subject-card">
                        <h4>2. Aduanas</h4>
                        <p>Criterios relativos a los procedimientos de importación y exportación de mercancías.</p>
                    </div>
                    <div class="subject-card">
                        <h4>3. Agrario</h4>
                        <p>Criterios relativos a los procesos agrarios.</p>
                    </div>
                    <!-- Continuar con las demás materias... -->
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="section cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2 class="section__title">¿Listo para explorar Justipedia?</h2>
                    <p class="section__subtitle">Accede a más de 6,000 criterios jurisprudenciales organizados y actualizados</p>
                    <div class="cta-actions">
                        <a href="https://justipedia.ciejvenezuela.com/" class="btn btn--justipedia btn--large" target="_blank">
                            Ir a Justipedia
                        </a>
                        <a href="index.html#contacto" class="btn btn--secondary">
                            Contactar al Equipo
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Mismo Footer que index.html -->
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
				<li><a href="#inicio">Inicio</a></li>
				<li><a href="#justipedia">Justipedia</a></li>
				<li><a href="#signapedia">Signapedia</a></li>
				<li><a href="#servicios">Investigaciones</a></li>
				<li><a href="#equipo">Equipo</a></li>
				<li><a href="#contacto">Contacto</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer__column">
                        <h4>Contacto</h4>
                        <ul>
                            <li><a href="mailto:investigacion@ciejvenezuela.com">Correo Electrónico</a></li>
                            <li><a href="tel:+582125550100">Teléfono</a></li>
                            <li><a href="#contacto">Formulario de Contacto</a></li>
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
</body>
</html>
