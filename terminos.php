<?php
/**
 * Términos y Condiciones - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? 'Términos y Condiciones - ODERMAN GROUP SAS'
        : 'Terms and Conditions - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'Términos y condiciones de uso del sitio web de ODERMAN GROUP SAS.'
        : 'Terms and conditions of use of ODERMAN GROUP SAS website.',
    'keywords' => $lang === 'es'
        ? 'términos, condiciones, uso'
        : 'terms, conditions, use',
    'url' => url('terminos'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('terminos'),
        'en' => url('terminos') . '?lang=en'
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
                <h1 class="section__title" data-i18n="terms.title">Términos y Condiciones</h1>
                <div class="section__content" style="margin-top: var(--spacing-xl);">
                    <p class="card__text" style="margin-bottom: var(--spacing-lg);">
                        <strong data-i18n="terms.lastUpdate">Última actualización:</strong> <?php echo date('d/m/Y'); ?>
                    </p>
                    
                    <div style="line-height: var(--line-height-relaxed);">
                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="terms.section1.title">1. Aceptación de los Términos</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="terms.section1.content">
                            Al acceder y utilizar este sitio web, usted acepta estar sujeto a estos términos y condiciones de uso.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="terms.section2.title">2. Uso del Sitio</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="terms.section2.content">
                            Este sitio web es propiedad de ODERMAN GROUP SAS. El contenido está protegido por derechos de autor y solo puede ser utilizado para fines informativos y no comerciales.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="terms.section3.title">3. Propiedad Intelectual</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="terms.section3.content">
                            Todo el contenido de este sitio web, incluyendo textos, gráficos, logotipos, iconos y software, es propiedad de ODERMAN GROUP SAS y está protegido por las leyes de propiedad intelectual.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="terms.section4.title">4. Limitación de Responsabilidad</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="terms.section4.content">
                            ODERMAN GROUP SAS no se hace responsable de los daños directos o indirectos que puedan resultar del uso o la imposibilidad de uso de este sitio web.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="terms.section5.title">5. Modificaciones</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="terms.section5.content">
                            Nos reservamos el derecho de modificar estos términos en cualquier momento. Las modificaciones entrarán en vigor al ser publicadas en este sitio.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="terms.section6.title">6. Contacto</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="terms.section6.content">
                            Para consultas sobre estos términos, contáctenos en:
                        </p>
                        <p style="margin-bottom: var(--spacing-md);">
                            <strong data-i18n="terms.section6.email">Email:</strong> info@oderman-group.com<br>
                            <strong data-i18n="terms.section6.phone">Teléfono:</strong> +57 300 607 5800
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
