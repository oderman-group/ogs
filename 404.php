<?php
/**
 * Página 404 - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? '404 - Página no encontrada - ODERMAN GROUP SAS'
        : '404 - Page not found - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'La página que buscas no existe.'
        : 'The page you are looking for does not exist.',
    'keywords' => '',
    'url' => url('404'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('404'),
        'en' => url('404') . '?lang=en'
    ]
];

// Establecer código de respuesta 404
http_response_code(404);
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
                <h1 class="hero__title" data-i18n="error404.title">404</h1>
                <p class="hero__subtitle" data-i18n="error404.subtitle">Página no encontrada</p>
                <p class="hero__description" data-i18n="error404.description">Lo sentimos, la página que buscas no existe.</p>
                <a href="<?php echo url(); ?>" class="hero__cta" data-i18n="error404.backHome">Volver al inicio</a>
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
