<?php
/**
 * Página Contacto - ODERMAN GROUP SAS
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$lang = getCurrentLang();

$pageData = [
    'title' => $lang === 'es' 
        ? 'Contacto - ODERMAN GROUP SAS'
        : 'Contact - ODERMAN GROUP SAS',
    'description' => $lang === 'es'
        ? 'Contáctanos para consultas comerciales o soporte. Estamos aquí para ayudarte.'
        : 'Contact us for commercial inquiries or support. We are here to help you.',
    'keywords' => $lang === 'es'
        ? 'contacto, soporte, consultas, WhatsApp'
        : 'contact, support, inquiries, WhatsApp',
    'url' => url('contacto'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('contacto'),
        'en' => url('contacto') . '?lang=en'
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
                <h1 class="hero__title" data-i18n="contact.title">Contacto</h1>
                <p class="hero__subtitle" data-i18n="contact.subtitle">Estamos aquí para ayudarte</p>
            </div>
        </section>

        <section class="section">
            <div class="container-content">
                <div class="section__header">
                    <p class="section__subtitle" data-i18n="contact.description">Para consultas comerciales o soporte, escríbenos o contáctanos por WhatsApp. Estamos aquí para ayudarte.</p>
                </div>
                <div class="card-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                    <div class="card">
                        <h3 class="card__title" data-i18n="contact.email">Correo Electrónico</h3>
                        <p class="card__text" style="margin-bottom: var(--spacing-md);">
                            <a href="mailto:info@oderman-group.com" style="font-size: var(--font-size-lg); color: var(--color-primary);">info@oderman-group.com</a>
                        </p>
                        <p class="card__text" style="font-size: var(--font-size-sm); color: var(--color-text-secondary);" data-i18n="contact.emailResponse">
                            Responde en menos de 24 horas hábiles
                        </p>
                    </div>
                    <div class="card">
                        <h3 class="card__title" data-i18n="contact.phone">Teléfono / WhatsApp</h3>
                        <p class="card__text" style="margin-bottom: var(--spacing-md);">
                            <a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer" style="font-size: var(--font-size-lg); color: var(--color-primary);">+57 300 607 5800</a>
                        </p>
                        <p class="card__text" style="font-size: var(--font-size-sm); color: var(--color-text-secondary);" data-i18n="contact.phoneHours">
                            Disponible de lunes a viernes, 8:00 AM - 6:00 PM
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--alt">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="contact.formTitle">Envíanos un Mensaje</h2>
                    <p class="section__subtitle" data-i18n="contact.formSubtitle">Completa el formulario y nos pondremos en contacto contigo pronto</p>
                </div>
                <div style="max-width: 600px; margin: 0 auto;">
                    <form class="contact-form" method="POST" action="#" style="background: var(--color-bg-light); padding: var(--spacing-xl); border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                        <div style="margin-bottom: var(--spacing-md);">
                            <label for="contact-name" style="display: block; margin-bottom: var(--spacing-xs); font-weight: var(--font-weight-medium);" data-i18n="contact.name">Nombre</label>
                            <input type="text" id="contact-name" name="name" required style="width: 100%; padding: var(--spacing-sm); border: 1px solid var(--color-border); border-radius: var(--radius-md); font-size: var(--font-size-base); font-family: inherit;">
                        </div>
                        <div style="margin-bottom: var(--spacing-md);">
                            <label for="contact-email" style="display: block; margin-bottom: var(--spacing-xs); font-weight: var(--font-weight-medium);" data-i18n="contact.emailField">Correo electrónico</label>
                            <input type="email" id="contact-email" name="email" required style="width: 100%; padding: var(--spacing-sm); border: 1px solid var(--color-border); border-radius: var(--radius-md); font-size: var(--font-size-base); font-family: inherit;">
                        </div>
                        <div style="margin-bottom: var(--spacing-lg);">
                            <label for="contact-message" style="display: block; margin-bottom: var(--spacing-xs); font-weight: var(--font-weight-medium);" data-i18n="contact.message">Mensaje</label>
                            <textarea id="contact-message" name="message" rows="6" required style="width: 100%; padding: var(--spacing-sm); border: 1px solid var(--color-border); border-radius: var(--radius-md); font-size: var(--font-size-base); font-family: inherit; resize: vertical;"></textarea>
                        </div>
                        <button type="submit" class="hero__cta" style="width: 100%; padding: var(--spacing-sm) var(--spacing-xl); font-size: var(--font-size-base);" data-i18n="contact.send">Enviar mensaje</button>
                    </form>
                    <p style="text-align: center; margin-top: var(--spacing-md); font-size: var(--font-size-sm); color: var(--color-text-secondary);">
                        <span data-i18n="contact.whatsappText">También puedes contactarnos directamente por WhatsApp haciendo clic</span> <a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer" style="color: var(--color-primary);" data-i18n="contact.whatsappLink">aquí</a>
                    </p>
                </div>
            </div>
        </section>

        <section class="section section--alt">
            <div class="container-content">
                <div class="section__header">
                    <h2 class="section__title" data-i18n="contact.officesTitle">Nuestras Sedes</h2>
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
