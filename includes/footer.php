<?php
/**
 * Footer Centralizado
 * Enlaces, contacto, redes sociales y cookie consent
 */

require_once __DIR__ . '/config.php';
$lang = getCurrentLang();

// Detectar página actual (misma lógica que header)
$currentPage = '';
$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = strtok($requestUri, '?');

if ($requestUri === '/' || $requestUri === '/index.php' || empty($requestUri)) {
    $currentPage = 'home';
} elseif (strpos($requestUri, '/about') !== false || strpos($requestUri, '/acerca-de') !== false) {
    $currentPage = 'about';
} elseif (strpos($requestUri, '/team') !== false || strpos($requestUri, '/equipo') !== false) {
    $currentPage = 'team';
} elseif (strpos($requestUri, '/news') !== false || strpos($requestUri, '/noticias') !== false) {
    $currentPage = 'news';
} elseif (strpos($requestUri, '/blog') !== false) {
    $currentPage = 'blog';
} elseif (strpos($requestUri, '/contact') !== false || strpos($requestUri, '/contacto') !== false) {
    $currentPage = 'contact';
}
?>
<footer class="footer" role="contentinfo">
    <div class="footer__container">
        <div class="footer__content">
            <!-- Sección Empresa -->
            <div class="footer__section">
                <h3 class="footer__title" data-i18n="footer.company">Empresa</h3>
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="<?php echo url(); ?>" 
                           class="footer__link <?php echo $currentPage === 'home' ? 'footer__link--active' : ''; ?>"
                           data-i18n="nav.home">Inicio</a>
                    </li>
                    <li class="footer__item">
                        <a href="<?php echo url('acerca-de'); ?>" 
                           class="footer__link <?php echo $currentPage === 'about' ? 'footer__link--active' : ''; ?>"
                           data-i18n="nav.about">Acerca de</a>
                    </li>
                    <li class="footer__item">
                        <a href="<?php echo url('equipo'); ?>" 
                           class="footer__link <?php echo $currentPage === 'team' ? 'footer__link--active' : ''; ?>"
                           data-i18n="nav.team">Equipo</a>
                    </li>
                    <li class="footer__item">
                        <a href="<?php echo url('noticias'); ?>" 
                           class="footer__link <?php echo $currentPage === 'news' ? 'footer__link--active' : ''; ?>"
                           data-i18n="nav.news">Noticias</a>
                    </li>
                    <li class="footer__item">
                        <a href="<?php echo url('blog'); ?>" 
                           class="footer__link <?php echo $currentPage === 'blog' ? 'footer__link--active' : ''; ?>"
                           data-i18n="nav.blog">Blog</a>
                    </li>
                    <li class="footer__item">
                        <a href="<?php echo url('contacto'); ?>" 
                           class="footer__link <?php echo $currentPage === 'contact' ? 'footer__link--active' : ''; ?>"
                           data-i18n="nav.contact">Contacto</a>
                    </li>
                </ul>
            </div>

            <!-- Sección Ecosistema SINTIA -->
            <div class="footer__section">
                <h3 class="footer__title" data-i18n="footer.sintia">Ecosistema SINTIA</h3>
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="https://oderman.com.co/oderman-web/" 
                           class="footer__link" 
                           target="_blank" 
                           rel="noopener noreferrer">Ecosistema SINTIA</a>
                    </li>
                    <li class="footer__item">
                        <a href="https://oderman.com.co/oderman-web/" 
                           class="footer__link" 
                           target="_blank" 
                           rel="noopener noreferrer">Plataforma SINTIA</a>
                    </li>
                </ul>
            </div>

            <!-- Sección Contacto -->
            <div class="footer__section">
                <h3 class="footer__title" data-i18n="footer.contact">Contacto</h3>
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="mailto:info@oderman-group.com" class="footer__link">info@oderman-group.com</a>
                    </li>
                    <li class="footer__item">
                        <a href="https://wa.me/573006075800" 
                           class="footer__link" 
                           target="_blank" 
                           rel="noopener noreferrer">+57 300 607 5800</a>
                    </li>
                </ul>
            </div>

            <!-- Sección Redes Sociales -->
            <div class="footer__section">
                <h3 class="footer__title" data-i18n="footer.follow">Síguenos</h3>
                <ul class="footer__social">
                    <li class="footer__social-item">
                        <a href="https://www.facebook.com/oderman" 
                           class="footer__social-link" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="Facebook">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="https://www.instagram.com/oderman" 
                           class="footer__social-link" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="https://www.linkedin.com/company/oderman" 
                           class="footer__social-link" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a href="https://www.youtube.com/@oderman" 
                           class="footer__social-link" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="YouTube">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer__bottom">
            <div class="footer__legal">
                <div style="display: flex; align-items: center; gap: var(--spacing-md); margin-bottom: var(--spacing-sm);">
                    <img src="<?php echo asset('img/logos/oderman-logo.png'); ?>" alt="ODERMAN GROUP SAS" style="height: 32px; width: auto; max-width: 150px; object-fit: contain; opacity: 0.9;">
                </div>
                <p class="footer__copyright">
                    © <span class="current-year">2025</span> ODERMAN GROUP SAS. 
                    <span data-i18n="footer.rights">Todos los derechos reservados.</span>
                </p>
                <p class="footer__nit">NIT: 901.992.426-8</p>
            </div>
            <div class="footer__links">
                <a href="<?php echo url('privacidad'); ?>" class="footer__legal-link" data-i18n="footer.privacy">Política de Privacidad</a>
                <span class="footer__separator">|</span>
                <a href="<?php echo url('terminos'); ?>" class="footer__legal-link" data-i18n="footer.terms">Términos y Condiciones</a>
                <span class="footer__separator">|</span>
                <a href="<?php echo url('cookies'); ?>" class="footer__legal-link" data-i18n="footer.cookies">Política de Cookies</a>
            </div>
        </div>
    </div>

    <!-- Cookie Consent Banner -->
    <div id="cookie-consent" class="cookie-consent" role="dialog" aria-label="Consentimiento de cookies">
        <div class="cookie-consent__content">
            <p class="cookie-consent__text">
                <strong data-i18n="cookies.title">Uso de Cookies</strong><br>
                <span data-i18n="cookies.description">Utilizamos cookies para mejorar tu experiencia, analizar el tráfico del sitio y personalizar el contenido.</span>
            </p>
            <div class="cookie-consent__actions">
                <button id="cookie-accept-all" class="cookie-consent__btn cookie-consent__btn--primary" data-i18n="cookies.accept">Aceptar todas</button>
                <button id="cookie-configure" class="cookie-consent__btn cookie-consent__btn--secondary" data-i18n="cookies.configure">Configurar</button>
                <button id="cookie-reject-all" class="cookie-consent__btn cookie-consent__btn--secondary" data-i18n="cookies.reject">Rechazar</button>
            </div>
        </div>
    </div>

    <!-- Cookie Settings Panel -->
    <div id="cookie-settings-panel" class="cookie-settings" role="dialog" aria-label="Configuración de cookies">
        <div class="cookie-settings__content">
            <div class="cookie-settings__header">
                <h2 class="cookie-settings__title" data-i18n="cookies.title">Configuración de Cookies</h2>
                <button id="cookie-settings-close" class="cookie-settings__close" aria-label="Cerrar">×</button>
            </div>
            <div class="cookie-settings__body">
                <div class="cookie-settings__item">
                    <div class="cookie-settings__info">
                        <h3 class="cookie-settings__item-title" data-i18n="cookies.necessary">Cookies Necesarias</h3>
                        <p class="cookie-settings__item-desc" data-i18n="cookies.necessaryDesc">Estas cookies son esenciales para el funcionamiento del sitio.</p>
                    </div>
                    <input type="checkbox" id="cookie-necessary" class="cookie-settings__checkbox" checked disabled>
                </div>
                <div class="cookie-settings__item">
                    <div class="cookie-settings__info">
                        <h3 class="cookie-settings__item-title" data-i18n="cookies.analytics">Cookies Analíticas</h3>
                        <p class="cookie-settings__item-desc" data-i18n="cookies.analyticsDesc">Nos ayudan a entender cómo los visitantes interactúan con el sitio.</p>
                    </div>
                    <input type="checkbox" id="cookie-analytics" class="cookie-settings__checkbox">
                </div>
                <div class="cookie-settings__item">
                    <div class="cookie-settings__info">
                        <h3 class="cookie-settings__item-title" data-i18n="cookies.marketing">Cookies de Marketing</h3>
                        <p class="cookie-settings__item-desc" data-i18n="cookies.marketingDesc">Se utilizan para mostrar anuncios relevantes y medir la efectividad de las campañas.</p>
                    </div>
                    <input type="checkbox" id="cookie-marketing" class="cookie-settings__checkbox">
                </div>
            </div>
            <div class="cookie-settings__footer">
                <button id="cookie-save" class="cookie-settings__save" data-i18n="cookies.save">Guardar Preferencias</button>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="scroll-to-top" aria-label="Volver arriba">
        <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
            <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
        </svg>
    </button>
</footer>
