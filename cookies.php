<?php
/**
 * Política de Cookies - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? 'Política de Cookies - ODERMAN GROUP SAS'
        : 'Cookie Policy - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'Política de cookies de ODERMAN GROUP SAS.'
        : 'Cookie policy of ODERMAN GROUP SAS.',
    'keywords' => $lang === 'es'
        ? 'cookies, política, privacidad'
        : 'cookies, policy, privacy',
    'url' => url('cookies'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('cookies'),
        'en' => url('cookies') . '?lang=en'
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
        <section class="section">
            <div class="container-content">
                <h1 class="section__title" data-i18n="cookiePolicy.title">Política de Cookies</h1>
                <div class="section__content" style="margin-top: var(--spacing-xl);">
                    <p class="card__text" style="margin-bottom: var(--spacing-lg);">
                        <strong data-i18n="cookiePolicy.lastUpdate">Última actualización:</strong> <?php echo date('d/m/Y'); ?>
                    </p>
                    
                    <div style="line-height: var(--line-height-relaxed);">
                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="cookiePolicy.section1.title">1. ¿Qué son las Cookies?</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="cookiePolicy.section1.content">
                            Las cookies son pequeños archivos de texto que se almacenan en su dispositivo cuando visita un sitio web. Nos ayudan a mejorar su experiencia de navegación.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="cookiePolicy.section2.title">2. Tipos de Cookies que Utilizamos</h2>
                        <p style="margin-bottom: var(--spacing-md);">
                            <strong data-i18n="cookiePolicy.section2.necessary">Cookies Necesarias:</strong> <span data-i18n="cookiePolicy.section2.necessaryDesc">Son esenciales para el funcionamiento del sitio web. No se pueden desactivar.</span><br><br>
                            <strong data-i18n="cookiePolicy.section2.analytics">Cookies Analíticas:</strong> <span data-i18n="cookiePolicy.section2.analyticsDesc">Nos ayudan a entender cómo los visitantes interactúan con el sitio web.</span><br><br>
                            <strong data-i18n="cookiePolicy.section2.marketing">Cookies de Marketing:</strong> <span data-i18n="cookiePolicy.section2.marketingDesc">Se utilizan para mostrar anuncios relevantes y medir la efectividad de las campañas.</span>
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="cookiePolicy.section3.title">3. Gestión de Cookies</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="cookiePolicy.section3.content">
                            Puede gestionar sus preferencias de cookies en cualquier momento haciendo clic en el botón "Configurar" en el banner de cookies o visitando esta página.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="cookiePolicy.section4.title">4. Contacto</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="cookiePolicy.section4.content">
                            Para consultas sobre nuestra política de cookies, contáctenos en:
                        </p>
                        <p style="margin-bottom: var(--spacing-md);">
                            <strong data-i18n="cookiePolicy.section4.email">Email:</strong> info@oderman-group.com<br>
                            <strong data-i18n="cookiePolicy.section4.phone">Teléfono:</strong> +57 300 607 5800
                        </p>
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
