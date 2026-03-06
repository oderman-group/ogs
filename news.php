<?php
/**
 * Página Noticias - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? 'Noticias - ODERMAN GROUP SAS'
        : 'News - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'Últimas noticias y actualizaciones de ODERMAN GROUP SAS.'
        : 'Latest news and updates from ODERMAN GROUP SAS.',
    'keywords' => $lang === 'es'
        ? 'noticias, actualizaciones, novedades'
        : 'news, updates, announcements',
    'url' => url('noticias'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('noticias'),
        'en' => url('noticias') . '?lang=en'
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
                <h1 class="hero__title" data-i18n="news.title">Noticias</h1>
                <p class="hero__subtitle" data-i18n="news.subtitle">Últimas actualizaciones y novedades</p>
            </div>
        </section>

        <section class="section">
            <div class="container-content">
                <div class="section__header">
                    <p class="section__subtitle" data-i18n="news.description">Mantente informado sobre nuestras últimas actualizaciones, proyectos y logros.</p>
                </div>
                <div class="card-grid">
                    <article class="card">
                        <div style="margin-bottom: var(--spacing-sm);">
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted);"><?php echo date('d/m/Y'); ?></span>
                        </div>
                        <h3 class="card__title" data-i18n="news.welcome.title">Bienvenidos a nuestro nuevo sitio web</h3>
                        <p class="card__text" data-i18n="news.welcome.description">Estamos emocionados de presentar nuestro nuevo sitio web corporativo. Este espacio refleja nuestro compromiso con la innovación y la excelencia en el desarrollo de software a la medida.</p>
                        <a href="<?php echo url('acerca-de'); ?>" class="hero__cta" style="display: inline-block; margin-top: var(--spacing-md); padding: var(--spacing-xs) var(--spacing-lg); font-size: var(--font-size-sm);" data-i18n="news.readMore">Leer más</a>
                    </article>
                    <article class="card">
                        <div style="margin-bottom: var(--spacing-sm);">
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted);" data-i18n="news.comingSoon">Próximamente</span>
                        </div>
                        <h3 class="card__title" data-i18n="news.certifications.title">Nuevas certificaciones ISO</h3>
                        <p class="card__text" data-i18n="news.certifications.description">Estamos trabajando en obtener nuevas certificaciones que respalden nuestro compromiso con la calidad y la seguridad en todos nuestros procesos.</p>
                    </article>
                    <article class="card">
                        <div style="margin-bottom: var(--spacing-sm);">
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted);" data-i18n="news.comingSoon">Próximamente</span>
                        </div>
                        <h3 class="card__title" data-i18n="news.expansion.title">Expansión de servicios</h3>
                        <p class="card__text" data-i18n="news.expansion.description">Próximamente anunciaremos nuevas líneas de servicio y soluciones tecnológicas que ampliarán nuestras capacidades para servir mejor a nuestros clientes.</p>
                    </article>
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
