<?php
/**
 * Página Acerca de - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? 'Acerca de - ODERMAN GROUP SAS'
        : 'About - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'Conoce más sobre ODERMAN GROUP SAS, empresa colombiana dedicada al desarrollo de software a la medida.'
        : 'Learn more about ODERMAN GROUP SAS, a Colombian company dedicated to custom software development.',
    'keywords' => $lang === 'es'
        ? 'acerca de, empresa, historia, misión, visión, valores'
        : 'about, company, history, mission, vision, values',
    'url' => url('acerca-de'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('acerca-de'),
        'en' => url('acerca-de') . '?lang=en'
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
                <h1 class="hero__title" data-i18n="about.title">Sobre nosotros</h1>
                <p class="hero__subtitle" data-i18n="about.subtitle">Empresa colombiana dedicada al desarrollo de software a la medida</p>
            </div>
        </section>

        <section class="section">
            <div class="container-content">
                <div class="section__content">
                    <div style="max-width: 800px; margin: 0 auto;">
                        <p class="card__text" style="font-size: var(--font-size-lg); margin-bottom: var(--spacing-xl); line-height: var(--line-height-relaxed);" data-i18n="about.description">
                            Somos una empresa colombiana dedicada al desarrollo de software a la medida. Entre nuestros productos se encuentra <strong>SINTIA</strong>, nuestro ecosistema educativo que acompaña a instituciones y familias en la gestión académica y la transformación digital.
                        </p>

                        <p class="card__text" style="font-size: var(--font-size-base); margin-bottom: var(--spacing-xl); line-height: var(--line-height-relaxed);" data-i18n="about.description2">
                            La seguridad y la eficiencia son las demandas más claras a nivel global, impulsadas por tecnologías que protejan datos y mejoren operaciones. En Oderman Group, ofrecemos servicios profesionales de desarrollo de software a la medida que responden a estas necesidades críticas del mercado.
                        </p>
                    </div>

                    <div class="card-grid">
                        <div class="card">
                            <h3 class="card__title" data-i18n="about.mission.title">Misión</h3>
                            <p class="card__text" data-i18n="about.mission.description">Desarrollar soluciones tecnológicas innovadoras que impulsen la transformación digital de organizaciones, brindando software a la medida de alta calidad que genere valor y mejore la eficiencia operativa.</p>
                        </div>
                        <div class="card">
                            <h3 class="card__title" data-i18n="about.vision.title">Visión</h3>
                            <p class="card__text" data-i18n="about.vision.description">Ser reconocidos como líderes en desarrollo de software a la medida en Colombia y Latinoamérica, destacándonos por nuestra innovación, calidad y compromiso con la excelencia.</p>
                        </div>
                        <div class="card">
                            <h3 class="card__title" data-i18n="about.values.title">Valores</h3>
                            <p class="card__text" data-i18n="about.values.description">Innovación, calidad, compromiso, integridad y trabajo en equipo. Estos valores guían cada proyecto y relación con nuestros clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="about.servicesTitle">Nuestros Servicios</h2>
                    <p class="section__subtitle" data-i18n="about.servicesSubtitle">Soluciones tecnológicas integrales para tu organización</p>
                </div>
                <div class="card-grid">
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.software.title">Desarrollo de Software</h3>
                        <p class="card__text" data-i18n="services.software.descriptionLong">Creamos aplicaciones personalizadas que se adaptan a las necesidades específicas de tu organización, garantizando escalabilidad y rendimiento óptimo.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.consulting.title">Consultoría Tecnológica</h3>
                        <p class="card__text" data-i18n="services.consulting.descriptionLong">Asesoría especializada para optimizar tus procesos, maximizar el valor de la tecnología y definir estrategias de transformación digital.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.support.title">Soporte y Mantenimiento</h3>
                        <p class="card__text" data-i18n="services.support.descriptionLong">Acompañamiento continuo para garantizar el funcionamiento óptimo de tus sistemas, con actualizaciones y mejoras constantes.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.security.title">Seguridad Informática</h3>
                        <p class="card__text" data-i18n="services.security.descriptionLong">Implementamos soluciones robustas de ciberseguridad que protegen tus datos y cumplen con normativas de privacidad. Garantizamos la integridad y confidencialidad de tu información crítica.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.ai.title">Inteligencia Artificial</h3>
                        <p class="card__text" data-i18n="services.ai.descriptionLong">Desarrollamos soluciones con IA que automatizan procesos, mejoran la toma de decisiones y potencian la competitividad de tu organización mediante tecnologías de vanguardia.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.architecture.title">Arquitectura de TI</h3>
                        <p class="card__text" data-i18n="services.architecture.description">Diseñamos arquitecturas de software escalables, flexibles y basadas en la nube que se adaptan al crecimiento de tu empresa, garantizando rentabilidad y rendimiento óptimo.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.crm.title">Gestión de Relaciones con Clientes (CRM)</h3>
                        <p class="card__text" data-i18n="services.crm.description">Creamos sistemas CRM personalizados que optimizan la interacción con tus clientes, mejoran el seguimiento comercial y potencian las ventas mediante herramientas de gestión inteligente.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.finance.title">Contabilidad y Finanzas</h3>
                        <p class="card__text" data-i18n="services.finance.description">Desarrollamos sistemas de gestión financiera y contable que centralizan operaciones, automatizan procesos y proporcionan reportes precisos para una toma de decisiones informada.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.marketing.title">Marketing Digital</h3>
                        <p class="card__text" data-i18n="services.marketing.description">Implementamos plataformas y herramientas de marketing digital que optimizan tus campañas, mejoran la conversión y maximizan el retorno de inversión en tus estrategias comerciales.</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="services.cloud.title">Soluciones en la Nube</h3>
                        <p class="card__text" data-i18n="services.cloud.descriptionLong">Ofrecemos soluciones basadas en la nube con flexibilidad, escalabilidad y rentabilidad, permitiendo que tu negocio crezca sin limitaciones de infraestructura física.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="about.securityTitle">Seguridad y Certificaciones</h2>
                    <p class="section__subtitle" data-i18n="about.securitySubtitle">Nos interesa y garantizamos la seguridad de las tecnologías, software y aplicaciones que desarrollamos</p>
                </div>
                <div style="max-width: 800px; margin: 0 auto;">
                    <p class="card__text" style="font-size: var(--font-size-base); margin-bottom: var(--spacing-lg); line-height: var(--line-height-relaxed);" data-i18n="about.securityDescription">
                        Trabajamos con buenas prácticas, control de calidad y un enfoque preventivo para reducir riesgos y fortalecer la confianza.
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: var(--spacing-xl);">
                        <li style="margin-bottom: var(--spacing-md); padding-left: var(--spacing-lg); position: relative;">
                            <strong style="display: block; margin-bottom: var(--spacing-xs);" data-i18n="about.securityByDesign">Seguridad por diseño</strong>
                            <span style="color: var(--color-text-secondary);" data-i18n="about.securityByDesignDesc">Incorporamos controles desde el inicio: revisión de código, buenas prácticas y mitigación de vulnerabilidades en cada entrega.</span>
                        </li>
                        <li style="margin-bottom: var(--spacing-md); padding-left: var(--spacing-lg); position: relative;">
                            <strong style="display: block; margin-bottom: var(--spacing-xs);" data-i18n="about.dataProtection">Protección de datos y cumplimiento</strong>
                            <span style="color: var(--color-text-secondary);" data-i18n="about.dataProtectionDesc">Aplicamos medidas para proteger información sensible y apoyar el cumplimiento de normativas de privacidad, según el contexto de tu organización.</span>
                        </li>
                        <li style="margin-bottom: var(--spacing-md); padding-left: var(--spacing-lg); position: relative;">
                            <strong style="display: block; margin-bottom: var(--spacing-xs);" data-i18n="about.quality">Calidad, mejora continua y sostenibilidad</strong>
                            <span style="color: var(--color-text-secondary);" data-i18n="about.qualityDesc">Nuestros procesos están orientados a resultados consistentes, mejora continua y operación responsable.</span>
                        </li>
                    </ul>
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

        <section class="section section--alt">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="about.coverageTitle">Cobertura y Alcance</h2>
                    <p class="section__subtitle" data-i18n="about.coverageSubtitle">Tenemos el interés y la capacidad de trabajar con organizaciones en estos países</p>
                </div>
                <p class="card__text" style="text-align: center; margin-bottom: var(--spacing-xl); max-width: 700px; margin-left: auto; margin-right: auto;" data-i18n="about.coverageDescription">
                    Acompañamos proyectos de software, consultoría y transformación digital de manera remota o híbrida.
                </p>
                <div class="card-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));">
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇨🇴 Colombia</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇦🇷 Argentina</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇧🇷 Brasil</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇨🇦 Canadá</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🏝️ Caribe</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇨🇱 Chile</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇨🇷 Costa Rica</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇪🇨 Ecuador</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇪🇸 España</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇺🇸 Estados Unidos</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇲🇽 México</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇵🇦 Panamá</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">🇵🇪 Perú</h3>
                    </div>
                    <div class="card" style="text-align: center;">
                        <h3 class="card__title">Triángulo Norte</h3>
                        <p class="card__text" style="font-size: var(--font-size-sm);">🇬🇹 🇭🇳 🇸🇻</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="about.officesTitle">Nuestras Sedes</h2>
                </div>
                <div class="card-grid">
                    <div class="card">
                        <h3 class="card__title">Medellín, Colombia</h3>
                        <p class="card__text">Carrera 83 C #33 B 11<br>Barrio La Castellana</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title">San Juan Nepomuceno, Bolívar</h3>
                        <p class="card__text">Calle 16 #12 - 120<br>Barrio Arriba - Superior</p>
                    </div>
                    <div class="card">
                        <h3 class="card__title">Mississauga, Canadá</h3>
                        <p class="card__text">2100 Sherobee Road<br>(Correspondencia)</p>
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
