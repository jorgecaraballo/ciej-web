<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIEJ - Centro de Investigación Enciclopédica de Jurisprudencia</title>
    <meta name="description" content="Centro de Investigación Enciclopédica de Jurisprudencia - Rigor académico y análisis profundo para el futuro del derecho">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= media(); ?>css/reset.css">
    <link rel="stylesheet" href="<?= media(); ?>css/styles.css">
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__brand">
                <img src="<?= media(); ?>images/webp/ciej_logo_nav_2.webp" alt="CIEJ" class="logo" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjUwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxNTAiIGhlaWdodD0iNTAiIGZpbGw9IiMxYTM2NWQiLz48dGV4dCB4PSI3NSIgeT0iMjUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGRvbWluYW50LWJhc2VsaW5lPSJtaWRkbGUiPkNJRUo8L3RleHQ+PC9zdmc+'">
            </div>
            
            <ul class="nav__menu">
                <li><a href="#inicio" class="nav__link">Inicio</a></li>
		<li><a href="#justipedia" class="nav__link">Justipedia</a></li>
		<li><a href="#signapedia" class="nav__link">Signapedia</a></li>
                <li><a href="#servicios" class="nav__link">Investigaciones</a></li>
                <li><a href="#equipo" class="nav__link">Equipo</a></li>
                <li><a href="#contacto" class="nav__link">Contacto</a></li>
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
        <!-- Hero Section -->
        <section id="inicio" class="hero">
            <div class="hero__content container">
                <h1 class="hero__title">Centro de Investigación Enciclopédica de Jurisprudencia</h1>
                <p class="hero__subtitle">Tecnología al servicio de la investigación jurídica</p>
                <div class="hero__actions">
                    <a href="#servicios" class="btn btn--primary">Nuestros Servicios</a>
                    <a href="#contacto" class="btn btn--secondary">Contactar Especialistas</a>
                </div>
            </div>
            <div class="hero__pattern"></div>
        </section>


<!-- Sección Justipedia -->
<section id="justipedia" class="justipedia-section section">

            <div class="container">
                <div class="about__content">
                    <div class="about__text">
			
			<!-- Logo arriba del título -->
			<div class="justipedia-logo">
			    <img src="<?= media(); ?>images/webp/logo_justipedia_350.webp" alt="Justipedia" class="justipedia-logo__img">
			</div>
			
                        <p class="about__description">
                            Es una biblioteca virtual de jurisprudencia, que contiene los criterios jurídicos emanados del Máximo Tribunal de la República, clasificados por materia, sala, ponente, tipo de procedimiento, debidamente titulados y presentados de manera cronológica. Dicha biblioteca es manejada por una aplicación web que permite su fácil e inmediato acceso.
                        </p>
                        <div class="about__stats">
                            <div class="stat">
                                <span class="stat__number">6000+</span>
                                <span class="stat__label">Criterios jurídicos</span>
                            </div>
                            <div class="stat">
                                <a href="https://justipedia.ciejvenezuela.com/" class="btn btn--justipedia" target="_blank">Ir a Justipedia</a>
                            </div>
                            <div class="stat">
			    <a class="btn btn--read-more" href="<?= base_url(); ?>justipedia">Leer más →</a>
                            </div>
                        </div>
                    </div>

			<div class="about__image">
			    <div class="video-container video-container--justipedia">
<iframe src="https://www.youtube.com/embed/I1EmvVekg3Q?si=r78g-aycRHVz6Jyr" title="Video tutorial Justipedia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			    </div>
			</div>

                </div>
            </div>
</section>


<!-- Sección Signapedia -->
<section id="signapedia" class="signapedia-section section">
            <div class="container">
                <div class="about__content">
                    <div class="about__text">
			<!-- Logo de Signapedia -->
			<div class="signapedia-logo">
			    <img src="<?= media(); ?>images/webp/logo_signapedia_350.webp" alt="Signapedia" class="signapedia-logo__img">
			</div>
                        <p class="about__description">
			Es una biblioteca virtual de todos los instrumentos de contenido normativo publicados oficialmente en Venezuela, organizados de manera sistemática, por sectores y materias, señalando además su vigencia temporal y otros datos relevantes que faciliten su análisis, comprensión y ámbito de aplicación.
                        </p>
                        <div class="about__stats">
                            <div class="stat">
                                <span class="stat__number">10000+</span>
                                <span class="stat__label">Instrumentos de contenido normativo</span>
                            </div>
                            <div class="stat">
                                <a href="https://signapedia.ciejvenezuela.com/" class="btn btn--signapedia" target="_blank">Ir a Signapedia</a>
                            </div>
                            <div class="stat">
				    <a class="btn btn--read-more" href="#" target="_blank">Leer más →</a>
                            </div>
                        </div>
                    </div>

			<div class="about__image">
			    <div class="video-container video-container--signapedia">
<iframe src="https://www.youtube.com/embed/JxVVetjW2pE?si=5n-f9Ueu-KVZVs94" title="Video tutorial Signapedia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			    </div>
			</div>

                </div>
            </div>
</section>	

        <!-- Services Section -->
        <section id="servicios" class="services section">
            <div class="container">
                <h2 class="section__title">Nuestros Servicios de Investigación</h2>
                <p class="section__subtitle"></p>
                
                <div class="services__grid">
                    
                    <div class="service-card">
                        <div class="service-card__icon">📊</div>
                        <h3 class="service-card__title">Indicadores de Gestión Judicial</h3>
                        <p class="service-card__description">
			El CIEJ se ha planteado como uno de sus objetivos, el levantamiento de toda la información sobre lo que ha decidido el Tribunal Supremo de Justicia a través de los años y décadas, cómo lo ha hecho y cuáles son los costos asociados a dichas decisiones en términos de presupuesto, tiempo, y talento humano. Ello, con la intención de formular propuestas que puedan mejorar la eficiencia y eficacia de la labor jurisdiccional.
                        </p>
                    </div>

                    <div class="service-card">
                        <div class="service-card__icon">🔍</div>
                        <h3 class="service-card__title">Otras Investigaciones</h3>
                        <p class="service-card__description">
			Adicionalmente, nuestro equipo multidisciplinario, se encuentra en la capacidad de realizar cualquier tipo de investigación que implique el tratamiento dado por el Tribunal Supremo de Justicia o su predecesora, la Corte Suprema de Justicia, a cualquier tema en el ámbito jurídico, procesal o de derechos humanos, civiles y políticos.
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>


        <!-- Team Section -->
        <section id="equipo" class="team section">
            <div class="container">
                <h2 class="section__title">Nuestro Equipo</h2>
		<p class="section__subtitle">Profesionales especializados en diversas áreas del derecho y otras áreas</p>

        <!-- Nueva Subsección: Misión -->
        <div class="team-mission-vision">
            <div class="mission-vision-grid">
                <div class="mission-vision-card">
                    <div class="mission-vision-icon">🎯</div>
                    <h3 class="mission-vision-title">Misión</h3>
                    <p class="mission-vision-text">
                        Un equipo multidisciplinario de análisis jurisprudencial, normativo y de gestión judicial, que persigue proporcionar herramientas, datos e información que sirvan para mejorar los procesos jurídicos.
                    </p>
                </div>
                
                <div class="mission-vision-card">
                    <div class="mission-vision-icon">🔭</div>
                    <h3 class="mission-vision-title">Visión</h3>
                    <p class="mission-vision-text">
                        Aplicar conocimientos y tecnologías para lograr mejoras en el estudio y la aplicación de los procesos jurídicos; lo cual a su vez pueda redundar en un mejor funcionamiento del sistema de justicia venezolano.
                    </p>
                </div>
            </div>
        </div>

        <!-- Nueva Subsección: Organigrama -->
        <div class="team-org-chart">
            <h3 class="org-chart-title">Estructura Organizacional</h3>
            <div class="org-chart-container">
                <img src="<?= media(); ?>images/webp/organigrama.webp" 
                     alt="Organigrama del Centro de Investigación Enciclopédica de Jurisprudencia" 
                     class="org-chart-image"
                     width="578" 
                     height="331">
                <p class="org-chart-caption">Diagrama organizacional que muestra la estructura y relaciones del equipo CIEJ</p>
            </div>
        </div>
                
                <div class="team__grid">
                    
<div class="team-member"> <!-- Laura -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/laura.webp" alt="Laura Aguerrevere" class="team-member__img">
    </div>
    <h3 class="team-member__name">Laura Aguerrevere</h3>
    <p class="team-member__position">Abogado (<a href="https://www.ucab.edu.ve/" target="_blank">UCAB</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Especialista en Derecho Administrativo (<a href="https://www.ucab.edu.ve/" target="_blank">UCAB</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📚</span>
            <span>Magister en Gerencia Pública (<a href="https://www.iesa.edu.ve/" target="_blank">IESA</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">👩</span>
            <span>Profesora en Derecho Tributario (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">⚖️</span>
            <span>15 años al servicio del Poder Judicial</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🏛️</span>
            <span>8 años de servicio en la Administración Pública</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:justipediabogado@gmail.com">justipediabogado@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--justipedia team-badge--principal">Equipo Justipedia</span>
        </div>
    </div>


</div>

<div class="team-member"> <!-- La kiki -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/kiki.webp" alt="Ángela Aguerrevere" class="team-member__img">
    </div>
    <h3 class="team-member__name">Ángela Aguerrevere</h3>
    <p class="team-member__position">Ingeniero Agrónomo (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🏛️</span>
            <span>8 años al servicio de la Administración Pública en el área de proyectos y financiamiento</span>
        </div>
        <div class="credential-item">
	    <span class="credential-icon">💼</span>
            <span>9 años en el sector privado en las áreas de formulación, desarrollo, implementación y seguimiento de proyectos</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:amaguerrevere@gmail.com">amaguerrevere@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--signapedia team-badge--principal">Equipo Signapedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- Carol -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/carol.webp" alt="Carol Urbina" class="team-member__img">
    </div>
    <h3 class="team-member__name">Carol Urbina P.</h3>
    <p class="team-member__position">Abogado (<a href="https://usm.edu.ve/" target="_blank">USM</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Especialista en Derecho Administrativo (<a href="https://usm.edu.ve/" target="_blank">USM</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Estudios en Economía y Administración de Hidrocarburos (FACES <a href="http://www.ucv.ve/" target="_blank">UCV</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🏛️</span>
            <span>27 años al servicio de la Administración Pública en el área de análisis e investigación jurídica; análisis, redacción y formulación de normas, entre otras.</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:carolurbinap.ciej@gmail.com">carolurbinap.ciej@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--signapedia team-badge--principal">Equipo Signapedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- Paulita -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/paulita.webp" alt="Paula Escalante" class="team-member__img">
    </div>
    <h3 class="team-member__name">Paula Escalante</h3>
    <p class="team-member__position">Abogado (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Especialización en Derecho del Trabajo en el Centro de Estudios de Postgrado <a href="http://www.ucv.ve/" target="_blank">UCV</a></span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Posee Diplomas en Derecho del Trabajo, Derecho Administrativo, Derechos Humanos y Justicia Transicional.</span>
        </div>
<div class="credential-item">
    <span class="credential-icon">⚔️</span>
    <span>Cuenta con experiencia en el litigio en las ramas del Derecho del Trabajo y Contencioso Administrativo Laboral</span>
</div>
<div class="credential-item">
    <span class="credential-icon">📖</span>
    <span>En 2018 realizó su primera publicación sobre "Comentarios a la Ley Constitucional de los Consejos Productivos de Trabajadoras y Trabajadores"</span>
</div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:paulasylvanaescalante@gmail.com">paulasylvanaescalante@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--justipedia team-badge--principal">Equipo Justipedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- Tiko -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/tiko.webp" alt="Alberto Caraballo" class="team-member__img">
    </div>
    <h3 class="team-member__name">Alberto Caraballo</h3>
    <p class="team-member__position">TSU Informática (<a href="https://iutv.terna.net/" target="_blank">IUTV</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🏛️</span>
            <span>8 años de servicio en la Administración Pública</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:carabatikoj@hotmail.com">carabatikoj@hotmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--tecnologico team-badge--principal">Equipo Tecnológico</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- Arriaga -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/arriaga.webp" alt="Luis Arriaga" class="team-member__img">
    </div>
    <h3 class="team-member__name">Luis Arriaga</h3>
    <p class="team-member__position">Ingeniero Agrónomo (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
	    <span>Postgrado en planificación de recursos naturales (<a href="https://www.mcgill.ca/" target="_blank">MgGill University</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
	    <span>Políticas Agrícolas, Agroalimentarias y Ajustes/Estabilización Macroeconómica (<a href="https://www.harvard.edu/" target="_blank">Harvard University</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Investigación y Desarrollo (<a href="https://www.iesa.edu.ve/" target="_blank">IESA</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Política Comercial (OMC)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🏛️</span>
            <span>20 años de servicio en la Administración Pública</span>
        </div>
        <div class="credential-item">
	    <span class="credential-icon">💼</span>
            <span>20 años de servicio en el sector privado</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:arriagacarrillo@gmail.com">arriagacarrillo@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--signapedia team-badge--principal">Equipo Signapedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- Lucía -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/lucia.webp" alt="Lucía Hernández Ríos" class="team-member__img">
    </div>
    <h3 class="team-member__name">Lucía Hernández Ríos</h3>
    <p class="team-member__position">Abogado (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Magister en Derecho Penal y Criminología (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">👩</span>
	    <span>Docente en la Facultad de Derecho de la <a href="http://www.ucv.ve/" target="_blank">UCV</a> y en las Carreras de Turismo y Hotelería del Núcleo del Litoral (<a href="http://www.usb.ve/" target="_blank">USB</a>)</span>
        </div>
	<div class="credential-item">
	    <span class="credential-icon">⚖️</span>
	    <span><strong>Juez Penal</strong> durante 20 años en el Área Metropolitana de Caracas</span>
	</div>
<div class="credential-item">
    <span class="credential-icon">👥</span>
    <span>Integrante de la Comisión de Implementación del Código Orgánico Procesal en la cual jueces de todo el país nos formamos para el nuevo paradigma procesal y cambios profundos en las normas y funciones judiciales con el objetivo de capacitar a los jueces y otros operadores de justicia.</span>
</div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:lherndzr@gmail.com">lherndzr@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--justipedia team-badge--principal">Equipo Justipedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- Armando -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/armando.webp" alt="Armando Blanco" class="team-member__img">
    </div>
    <h3 class="team-member__name">Armando Blanco</h3>
    <p class="team-member__position">Abogado (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Especialista en derecho administrativo (<a href="https://www.ucab.edu.ve/" target="_blank">UCAB</a>)</a></span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Doctorado en derecho (<a href="https://www.ucab.edu.ve/" target="_blank">UCAB</a>)</a></span>
        </div>
<div class="credential-item">
    <span class="credential-icon">👨</span>
    <span>Profesor de postgrado en la <a href="https://www.uma.edu.ve/" target="_blank">Universidad Monteavila</a></span>
</div>
<div class="credential-item">
    <span class="credential-icon">👥</span>
    <span>Miembro de la asociación mundial de justicia constitucional y de la asociación Euroamericana de derechos fundamentales.</span>
</div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:albg74@gmail.com">albg74@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--justipedia team-badge--principal">Equipo Justipedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- María Oropeza -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/oropeza.webp" alt="María Oropeza" class="team-member__img">
    </div>
    <h3 class="team-member__name">María Oropeza</h3>
    <p class="team-member__position">Abogado (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Revalida Universidad Boliviana</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Especialización Derecho Procesal (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Curso Básico Ingreso a la Carrera Judicial / Consejo de la Judicatura</span>
        </div>
        <div class="credential-item">
    <span class="credential-icon">📖</span>
            <span>Auxiliar de Investigaciones Instituto de Derecho Privado (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</span>
        </div>
<div class="credential-item">
    <span class="credential-icon">📖</span>
    <span>Sección Derecho Civil / Obras Código</span>
</div>
<div class="credential-item">
    <span class="credential-icon">⚔️</span>
    <span>Ejercicio libre de la profesión de forma ininterrumpida por más de 44 años.</span>
</div>
<div class="credential-item">
    <span class="credential-icon">⚔️</span>
    <span>Abogada litigante en área de familia, civil, mercantil, laboral y sucesiones</span>
</div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:mariaeugeniaoropeza@hotmail.com">mariaeugeniaoropeza@hotmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--justipedia team-badge--principal">Equipo Justipedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- Yarina López -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/yarina.webp" alt="Yarina López" class="team-member__img">
    </div>
    <h3 class="team-member__name">Yarina López</h3>
    <p class="team-member__position">Lic. en Biología (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Estudios en Planificación Alimentaria y Nutricional</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🏛️</span>
            <span>11 años al servicio de la Administración Pública, en el área alimentaria, agrícola y mercadeo</span>
        </div>
        <div class="credential-item">
	    <span class="credential-icon">💼</span>
            <span>9 años en el sector privado en las áreas de formulación, desarrollo, implementación y seguimiento de proyectos</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:yarinalopez@gmail.com">yarinalopez@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--signapedia team-badge--principal">Equipo Signapedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- Zoila Caballero -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/zoila.webp" alt="Zoila Caballero" class="team-member__img">
    </div>
    <h3 class="team-member__name">Zoila Caballero</h3>
    <p class="team-member__position">Abogado (<a href="https://usm.edu.ve/" target="_blank">USM</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Especialista en Derecho Internacional, Económico y de la Integración (<a href="http://www.ucv.ve/" target="_blank">UCV</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">🎓</span>
            <span>Diplomado en Derecho Público (<a href="https://www.ucab.edu.ve/" target="_blank">UCAB</a>)</span>
        </div>
<div class="credential-item">
    <span class="credential-icon">🏠</span>
    <span><strong>Corredor Inmobiliario</strong> (Certificado Nº 2177) - <a href="https://camarainmobiliaria.org.ve/" target="_blank">Cámara Inmobiliaria de Venezuela</a></span>
</div>
        <div class="credential-item">
            <span class="credential-icon">🏛️</span>
            <span>13 años de servicio en la Administración Pública en área de Familia, Niños y Adolescentes</span>
        </div>
        <div class="credential-item">
	    <span class="credential-icon">💼</span>
            <span>22 años de experiencia en Sector Telecomunicaciones</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:zcaballero@justipedia.ciejvenezuela.com">zcaballero@justipedia.ciejvenezuela.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--justipedia team-badge--principal">Equipo Justipedia</span>
        </div>
    </div>

</div>

<div class="team-member"> <!-- María Laura Herrera A. -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/malala.webp" alt="María Laura Herrera A." class="team-member__img">
    </div>
    <h3 class="team-member__name">María Laura Herrera A.</h3>
    <p class="team-member__position">Ingeniero Industrial (<a href="https://www.ucab.edu.ve/" target="_blank">UCAB</a>)</p>
    
    <div class="team-member__credentials">
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:aguerrevereml@gmail.com">aguerrevereml@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--investigacion team-badge--principal">Equipo Digitalización</span>
        </div>
    </div>

</div>

<div id="jorge" class="team-member"> <!-- Jorge Caraballo -->
    <div class="team-member__image">
        <img src="<?= media(); ?>images/webp/jorge.webp" alt="Jorge Caraballo" class="team-member__img">
    </div>
    <h3 class="team-member__name">Jorge Caraballo</h3>
    <p class="team-member__position">Desarrollador web del <a href="#inicio">Centro de Investigación Enciclopédica de Jurisprudencia</a></p>
    
    <div class="team-member__credentials">
<div class="credential-item">
    <span class="credential-icon">💻</span>
    <span><strong>Más de 10 años de experiencia</strong> en desarrollo web</span>
</div>
<div class="credential-item">
    <span class="credential-icon">🌐</span>
    <span><strong>Creador de este sitio web</strong> - Diseño, desarrollo e implementación<span style="display: none;"> de la plataforma digital institucional</span></span>
</div>
<div class="credential-item">
    <span class="credential-icon">🔧</span>
    <span><strong>Expertise tecnológico aplicado al derecho</strong> - Desarrollo de herramientas digitales especializadas para el ámbito jurídico (<a href="#justipedia">Justipedia</a>, <a href="#signapedia">Signapedia</a>, otros proyectos para la <a href="https://www.pgr.gob.ve/" target="_blank">PGR</a>)</span>
</div>
<div class="credential-item">
    <span class="credential-icon">📊</span>
    <span><strong>Capacidad de sistematización de información jurídica compleja</strong> - Organización y estructuración de vastos volúmenes de datos legales</span>
</div>
<div class="credential-item">
    <span class="credential-icon">💡</span>
    <span><strong>Innovación en herramientas de investigación legal</strong> - Creación de soluciones tecnológicas avanzadas para la investigación jurídica</span>
</div>
<div class="credential-item" style="display: none;">
    <span class="credential-icon">🚀</span>
    <span><strong>Compromiso con modernizar el acceso a información jurídica</strong> - Democratización del conocimiento legal mediante plataformas digitales accesibles</span>
</div>
        <div class="credential-item">
	    <span class="credential-icon">💼</span>
	    <span>11 años de experiencia en soporte de redes en el sector privado (<a href="https://www.telefonica.com.ve/" target="_blank">Telefónica Venezuela</a>)</span>
        </div>
        <div class="credential-item">
            <span class="credential-icon">📧</span>
            <span><a href="mailto:jorgejorgejorgejorge@gmail.com">jorgejorgejorgejorge@gmail.com</a></span>
        </div>
    </div>

    <!-- NUEVO FOOTER DEL TEAM MEMBER -->
    <div class="team-member__footer">
        <div class="team-badges">
            <span class="team-badge team-badge--tecnologico team-badge--principal">Equipo Tecnológico</span>
        </div>
    </div>

</div>

                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contacto" class="contact section">
            <div class="container">
                <div class="contact__content">
                    <div class="contact__info">
                        <h2 class="section__title">Contacto</h2>
                        <p class="contact__description">
                            Estamos aquí para colaborar en sus proyectos de investigación jurídica.
                        </p>
                        
                        <div class="contact__details">
                            <div class="contact__item" style="display: none;">
                                <span class="contact__icon">📧</span>
                                <span>investigacion@ciejvenezuela.com</span>
                            </div>
                            <div class="contact__item" style="display: none;">
                                <span class="contact__icon">📞</span>
                                <span>+58 212-555-0100</span>
                            </div>
                            <div class="contact__item">
                                <span class="contact__icon">📍</span>
                                <span>Caracas, Venezuela</span>
                            </div>
                        </div>
                    </div>
                    
                    <form class="contact__form">
                        <div class="form__group">
                            <label for="name" class="form__label">Nombre Completo</label>
                            <input type="text" id="name" class="form__input" required>
                        </div>
                        
                        <div class="form__group">
                            <label for="email" class="form__label">Correo Electrónico</label>
                            <input type="email" id="email" class="form__input" required>
                        </div>
                        
                        <div class="form__group">
                            <label for="subject" class="form__label">Asunto</label>
                            <input type="text" id="subject" class="form__input" required>
                        </div>
                        
                        <div class="form__group">
                            <label for="message" class="form__label">Mensaje</label>
                            <textarea id="message" class="form__textarea" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn--primary">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

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
