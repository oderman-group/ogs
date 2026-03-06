<?php
/**
 * Política de Privacidad - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? 'Política de Privacidad - ODERMAN GROUP SAS'
        : 'Privacy Policy - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'Política de privacidad de ODERMAN GROUP SAS.'
        : 'Privacy policy of ODERMAN GROUP SAS.',
    'keywords' => $lang === 'es'
        ? 'privacidad, política, datos personales'
        : 'privacy, policy, personal data',
    'url' => url('privacidad'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('privacidad'),
        'en' => url('privacidad') . '?lang=en'
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
                <h1 class="section__title" data-i18n="privacy.title">Política de Privacidad</h1>
                <div class="section__content" style="margin-top: var(--spacing-xl);">
                    <p class="card__text" style="margin-bottom: var(--spacing-lg);">
                        <strong data-i18n="privacy.lastUpdate">Última actualización:</strong> <?php echo date('d/m/Y'); ?>
                    </p>
                    
                    <div style="line-height: var(--line-height-relaxed);">
                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="privacy.section1.title">1. Información que Recopilamos</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="privacy.section1.content">
                            ODERMAN GROUP SAS recopila información que usted nos proporciona directamente, como cuando se comunica con nosotros por correo electrónico o a través de nuestros formularios de contacto.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="privacy.section2.title">2. Uso de la Información</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="privacy.section2.content">
                            Utilizamos la información recopilada para responder a sus consultas, proporcionar nuestros servicios, mejorar nuestro sitio web y cumplir con nuestras obligaciones legales.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="privacy.section3.title">3. Protección de Datos</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="privacy.section3.content">
                            Implementamos medidas de seguridad técnicas y organizativas para proteger sus datos personales contra acceso no autorizado, pérdida o destrucción.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="privacy.section4.title">4. Sus Derechos</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="privacy.section4.content">
                            Usted tiene derecho a acceder, rectificar, eliminar o oponerse al tratamiento de sus datos personales. Para ejercer estos derechos, contáctenos en info@oderman-group.com.
                        </p>

                        <h2 style="font-size: var(--font-size-2xl); margin-top: var(--spacing-xl); margin-bottom: var(--spacing-md);" data-i18n="privacy.section5.title">5. Contacto</h2>
                        <p style="margin-bottom: var(--spacing-md);" data-i18n="privacy.section5.content">
                            Para cualquier consulta sobre esta política de privacidad, puede contactarnos en:
                        </p>
                        <p style="margin-bottom: var(--spacing-md);">
                            <strong data-i18n="privacy.section5.email">Email:</strong> info@oderman-group.com<br>
                            <strong data-i18n="privacy.section5.phone">Teléfono:</strong> +57 300 607 5800
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
