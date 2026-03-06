<?php
/**
 * Página Principal - ODERMAN GROUP SAS
 * Diseño inspirado en Google About
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

// Configuración de página
$pageData = [
    'title' => $lang === 'es' 
        ? 'ODERMAN GROUP SAS - Desarrollo de Software a la Medida'
        : 'ODERMAN GROUP SAS - Custom Software Development',
    'description' => $lang === 'es'
        ? 'ODERMAN GROUP SAS es una empresa colombiana dedicada al desarrollo de software a la medida. Soluciones intuitivas y robustas para educación, empresas e instituciones.'
        : 'ODERMAN GROUP SAS is a Colombian company dedicated to custom software development. Intuitive and robust solutions for education, businesses and institutions.',
    'keywords' => $lang === 'es'
        ? 'desarrollo de software, software a la medida, Colombia, tecnología, innovación, SINTIA'
        : 'software development, custom software, Colombia, technology, innovation, SINTIA',
    'url' => url(),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url(),
        'en' => url() . '?lang=en'
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
    <?php echo generateSchemaOrg($lang); ?>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Estilos -->
    <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero__content">
                <h1 class="hero__title" data-i18n="hero.title">ODERMAN GROUP SAS</h1>
                <p class="hero__subtitle" data-i18n="hero.subtitle">Desarrollo de software a la medida que impulsa tu organización</p>
                <p class="hero__description" data-i18n="hero.description">Desarrollamos soluciones intuitivas y robustas para educación, empresas e instituciones. Calidad, adaptabilidad e innovación en cada proyecto.</p>
                <a href="<?php echo url('acerca-de'); ?>" class="hero__cta" data-i18n="hero.cta">Conocer más</a>
            </div>
        </section>

        <!-- About Section -->
        <section class="section">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="about.title">Sobre nosotros</h2>
                    <p class="section__subtitle" data-i18n="about.description">Somos una empresa colombiana dedicada al desarrollo de software a la medida. Entre nuestros productos se encuentra SINTIA, nuestro ecosistema educativo que acompaña a instituciones y familias en la gestión académica y la transformación digital.</p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="section section--alt">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="services.title">Nuestros Servicios</h2>
                    <p class="section__subtitle" data-i18n="services.subtitle">Soluciones tecnológicas que transforman tu organización</p>
                </div>
                <div class="card-grid">
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.software.title">Desarrollo de Software</h3>
                        <p class="card__text" data-i18n="services.software.description">Creamos aplicaciones personalizadas que se adaptan a las necesidades específicas de tu organización.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.consulting.title">Consultoría Tecnológica</h3>
                        <p class="card__text" data-i18n="services.consulting.description">Asesoría especializada para optimizar tus procesos y maximizar el valor de la tecnología.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.support.title">Soporte y Mantenimiento</h3>
                        <p class="card__text" data-i18n="services.support.description">Acompañamiento continuo para garantizar el funcionamiento óptimo de tus sistemas.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.security.title">Seguridad Informática</h3>
                        <p class="card__text" data-i18n="services.security.description">Implementamos soluciones robustas de ciberseguridad que protegen tus datos y cumplen con normativas.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.ai.title">Inteligencia Artificial</h3>
                        <p class="card__text" data-i18n="services.ai.description">Desarrollamos soluciones con IA que automatizan procesos y mejoran la toma de decisiones.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.cloud.title">Soluciones en la Nube</h3>
                        <p class="card__text" data-i18n="services.cloud.description">Ofrecemos soluciones basadas en la nube con flexibilidad, escalabilidad y rentabilidad.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certifications Section -->
        <section class="section">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="certifications.title">Seguridad y Certificaciones</h2>
                    <p class="section__subtitle" data-i18n="certifications.subtitle">Trabajamos con buenas prácticas, control de calidad y un enfoque preventivo para reducir riesgos y fortalecer la confianza.</p>
                </div>
                <div class="card-grid">
                    <div class="card">
                        <h3 class="card__title">ISO 9001</h3>
                        <p class="card__text" data-i18n="certifications.iso9001">Sistema de Gestión de Calidad</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title">ISO 14001</h3>
                        <p class="card__text" data-i18n="certifications.iso14001">Sistema de Gestión Ambiental</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title">ISO 27001</h3>
                        <p class="card__text" data-i18n="certifications.iso27001">Sistema de Gestión de Seguridad de la Información</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="<?php echo asset('js/translations.js'); ?>"></script>
    <script src="<?php echo asset('js/language.js'); ?>"></script>
    <script src="<?php echo asset('js/cookies.js'); ?>"></script>
    <script src="<?php echo asset('js/main.js'); ?>"></script>
</body>
</html>
