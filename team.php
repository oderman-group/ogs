<?php
/**
 * Página Equipo - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? 'Equipo - ODERMAN GROUP SAS'
        : 'Team - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'Conoce al equipo de profesionales apasionados por la tecnología y la innovación en ODERMAN GROUP SAS.'
        : 'Meet the team of professionals passionate about technology and innovation at ODERMAN GROUP SAS.',
    'keywords' => $lang === 'es'
        ? 'equipo, profesionales, tecnología, innovación'
        : 'team, professionals, technology, innovation',
    'url' => url('equipo'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('equipo'),
        'en' => url('equipo') . '?lang=en'
    ]
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo asset('img/logos/oderman-logo.png'); ?>">
    <link rel="apple-touch-icon" href="<?php echo asset('img/logos/oderman-logo.png'); ?>">
    <title><?php echo e($pageData['title']); ?></title>
    <?php echo generateSeoTags($pageData, $lang); ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero">
            <div class="hero__content">
                <h1 class="hero__title" data-i18n="team.title">Nuestro Equipo</h1>
                <p class="hero__subtitle" data-i18n="team.subtitle">Profesionales apasionados por la tecnología y la innovación</p>
            </div>
        </section>

        <section class="section">
            <div class="container-content">
                <div class="section__header">
                    <p class="section__subtitle" data-i18n="team.description">Un equipo multidisciplinario comprometido con la excelencia y la innovación en cada proyecto.</p>
                </div>
                <div style="max-width: 800px; margin: 0 auto var(--spacing-2xl);">
                    <p class="card__text" style="font-size: var(--font-size-lg); line-height: var(--line-height-relaxed);" data-i18n="team.teamDescription">
                        Nuestro equipo está formado por profesionales altamente capacitados en desarrollo de software, diseño, gestión de proyectos y consultoría tecnológica. Trabajamos juntos para entregar soluciones de calidad que superen las expectativas de nuestros clientes.
                    </p>
                </div>
                <div class="card-grid">
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.developers.title">Desarrolladores de Software</h3>
                        <p class="card__text" data-i18n="team.developers.description">Especialistas en múltiples lenguajes de programación y frameworks modernos. Expertos en arquitectura de software, bases de datos y desarrollo de aplicaciones escalables.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.designers.title">Diseñadores UX/UI</h3>
                        <p class="card__text" data-i18n="team.designers.description">Profesionales creativos que transforman ideas en interfaces intuitivas y atractivas, centradas en la experiencia del usuario y la usabilidad.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.managers.title">Gestores de Proyectos</h3>
                        <p class="card__text" data-i18n="team.managers.description">Coordinadores expertos que aseguran la entrega oportuna y de calidad de cada proyecto, manteniendo una comunicación constante con los clientes.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.consultants.title">Consultores Tecnológicos</h3>
                        <p class="card__text" data-i18n="team.consultants.description">Asesores estratégicos que ayudan a las organizaciones a identificar oportunidades de mejora y definir la mejor ruta de transformación digital.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.security.title">Especialistas en Seguridad</h3>
                        <p class="card__text" data-i18n="team.security.description">Expertos en ciberseguridad que garantizan la protección de datos y el cumplimiento de normativas de seguridad de la información.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.qa.title">Equipo de QA</h3>
                        <p class="card__text" data-i18n="team.qa.description">Profesionales dedicados a asegurar la calidad de nuestros productos mediante pruebas exhaustivas y control de calidad en cada etapa del desarrollo.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="team.culture.title">Nuestra Cultura</h2>
                    <p class="section__subtitle" data-i18n="team.culture.subtitle">Valores que nos definen y guían nuestro trabajo diario</p>
                </div>
                <div class="card-grid">
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.culture.innovation.title">Innovación Continua</h3>
                        <p class="card__text" data-i18n="team.culture.innovation.description">Fomentamos la creatividad y la búsqueda constante de nuevas soluciones tecnológicas que agreguen valor a nuestros clientes.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.culture.teamwork.title">Trabajo en Equipo</h3>
                        <p class="card__text" data-i18n="team.culture.teamwork.description">Creemos en la colaboración y el trabajo conjunto para alcanzar objetivos comunes y superar desafíos complejos.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.culture.quality.title">Compromiso con la Calidad</h3>
                        <p class="card__text" data-i18n="team.culture.quality.description">Nos esforzamos por entregar productos y servicios de la más alta calidad, superando las expectativas de nuestros clientes.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="team.culture.learning.title">Aprendizaje Constante</h3>
                        <p class="card__text" data-i18n="team.culture.learning.description">Valoramos el crecimiento profesional y personal, promoviendo la capacitación continua y el desarrollo de nuevas habilidades.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="<?php echo asset('js/translations.js'); ?>"></script>
    <script src="<?php echo asset('js/language.js'); ?>"></script>
    <script src="<?php echo asset('js/cookies.js'); ?>"></script>
    <script src="<?php echo asset('js/main.js'); ?>"></script>
</body>
</html>
