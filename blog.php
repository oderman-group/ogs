<?php
/**
 * Página Blog - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? 'Blog - ODERMAN GROUP SAS'
        : 'Blog - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'Artículos y recursos sobre tecnología, desarrollo de software e innovación.'
        : 'Articles and resources about technology, software development and innovation.',
    'keywords' => $lang === 'es'
        ? 'blog, artículos, tecnología, desarrollo de software'
        : 'blog, articles, technology, software development',
    'url' => url('blog'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('blog'),
        'en' => url('blog') . '?lang=en'
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
                <h1 class="hero__title" data-i18n="blog.title">Blog</h1>
                <p class="hero__subtitle" data-i18n="blog.subtitle">Artículos y recursos sobre tecnología</p>
            </div>
        </section>

        <section class="section">
            <div class="container-content">
                <div class="section__header">
                    <p class="section__subtitle" data-i18n="blog.description">Artículos, recursos y reflexiones sobre tecnología, desarrollo de software e innovación.</p>
                </div>
                <div class="card-grid">
                    <article class="card">
                        <div style="margin-bottom: var(--spacing-sm);">
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted);" data-i18n="blog.categories.technology">Tecnología</span>
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted); margin-left: var(--spacing-sm);"><?php echo date('d/m/Y'); ?></span>
                        </div>
                        <h3 class="card__title" data-i18n="blog.customSoftware.title">¿Por qué elegir software a la medida?</h3>
                        <p class="card__text" data-i18n="blog.customSoftware.description">El software a la medida ofrece ventajas significativas sobre las soluciones genéricas. Descubre cómo puede transformar tu organización y adaptarse perfectamente a tus necesidades específicas.</p>
                        <a href="<?php echo url('blog'); ?>" class="hero__cta" style="display: inline-block; margin-top: var(--spacing-md); padding: var(--spacing-xs) var(--spacing-lg); font-size: var(--font-size-sm);" data-i18n="blog.readMore">Leer más</a>
                    </article>
                    <article class="card">
                        <div style="margin-bottom: var(--spacing-sm);">
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted);" data-i18n="blog.categories.security">Seguridad</span>
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted); margin-left: var(--spacing-sm);" data-i18n="blog.comingSoon">Próximamente</span>
                        </div>
                        <h3 class="card__title" data-i18n="blog.security.title">Mejores prácticas de seguridad en desarrollo de software</h3>
                        <p class="card__text" data-i18n="blog.security.description">La seguridad debe ser una prioridad desde el inicio del desarrollo. Conoce las mejores prácticas para proteger tus aplicaciones y datos.</p>
                    </article>
                    <article class="card">
                        <div style="margin-bottom: var(--spacing-sm);">
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted);" data-i18n="blog.categories.innovation">Innovación</span>
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted); margin-left: var(--spacing-sm);" data-i18n="blog.comingSoon">Próximamente</span>
                        </div>
                        <h3 class="card__title" data-i18n="blog.ai.title">Inteligencia Artificial en el desarrollo de software</h3>
                        <p class="card__text" data-i18n="blog.ai.description">Explora cómo la IA está revolucionando el desarrollo de software y cómo puede beneficiar a tu organización.</p>
                    </article>
                    <article class="card">
                        <div style="margin-bottom: var(--spacing-sm);">
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted);" data-i18n="blog.categories.digitalTransformation">Transformación Digital</span>
                            <span style="font-size: var(--font-size-sm); color: var(--color-text-muted); margin-left: var(--spacing-sm);" data-i18n="blog.comingSoon">Próximamente</span>
                        </div>
                        <h3 class="card__title" data-i18n="blog.digitalTransformation.title">Guía para la transformación digital exitosa</h3>
                        <p class="card__text" data-i18n="blog.digitalTransformation.description">Pasos clave y estrategias para llevar a cabo una transformación digital efectiva en tu organización.</p>
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
