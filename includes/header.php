<?php
/**
 * Header Centralizado
 * Navegación principal y selector de idioma
 */

require_once __DIR__ . '/config.php';
$lang = getCurrentLang();

// Detectar página actual para resaltar menú
$currentPage = '';
$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = strtok($requestUri, '?'); // Remover query string

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
<header class="header" role="banner">
    <div class="header__container">
        <div class="header__content">
            <!-- Logo -->
            <a href="<?php echo url(); ?>" class="header__logo" aria-label="ODERMAN GROUP SAS - Inicio">
                <img src="<?php echo asset('img/logos/oderman-logo.png'); ?>" alt="ODERMAN GROUP SAS" class="header__logo-img">
            </a>

            <!-- Navegación Desktop -->
            <nav class="header__nav" role="navigation" aria-label="Navegación principal">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="<?php echo url(); ?>" 
                           class="header__nav-link <?php echo $currentPage === 'home' ? 'header__nav-link--active' : ''; ?>"
                           data-i18n="nav.home">Inicio</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo url('acerca-de'); ?>" 
                           class="header__nav-link <?php echo $currentPage === 'about' ? 'header__nav-link--active' : ''; ?>"
                           data-i18n="nav.about">Acerca de</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo url('equipo'); ?>" 
                           class="header__nav-link <?php echo $currentPage === 'team' ? 'header__nav-link--active' : ''; ?>"
                           data-i18n="nav.team">Equipo</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo url('noticias'); ?>" 
                           class="header__nav-link <?php echo $currentPage === 'news' ? 'header__nav-link--active' : ''; ?>"
                           data-i18n="nav.news">Noticias</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo url('blog'); ?>" 
                           class="header__nav-link <?php echo $currentPage === 'blog' ? 'header__nav-link--active' : ''; ?>"
                           data-i18n="nav.blog">Blog</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?php echo url('contacto'); ?>" 
                           class="header__nav-link <?php echo $currentPage === 'contact' ? 'header__nav-link--active' : ''; ?>"
                           data-i18n="nav.contact">Contacto</a>
                    </li>
                </ul>
            </nav>

            <!-- Selector de idioma y menú móvil -->
            <div class="header__actions">
                <select id="language-selector" class="header__language-selector" aria-label="Seleccionar idioma">
                    <option value="es" <?php echo $lang === 'es' ? 'selected' : ''; ?>>ES</option>
                    <option value="en" <?php echo $lang === 'en' ? 'selected' : ''; ?>>EN</option>
                </select>

                <!-- Botón menú móvil -->
                <button id="mobile-menu-toggle" 
                        class="header__menu-toggle" 
                        aria-label="Abrir menú"
                        aria-expanded="false"
                        aria-controls="mobile-menu">
                    <span class="header__menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú móvil -->
    <nav id="mobile-menu" class="mobile-menu" role="navigation" aria-label="Navegación móvil">
        <ul class="mobile-menu__list">
            <li class="mobile-menu__item">
                <a href="<?php echo url(); ?>" 
                   class="mobile-menu__link <?php echo $currentPage === 'home' ? 'mobile-menu__link--active' : ''; ?>"
                   data-i18n="nav.home">Inicio</a>
            </li>
            <li class="mobile-menu__item">
                <a href="<?php echo url('acerca-de'); ?>" 
                   class="mobile-menu__link <?php echo $currentPage === 'about' ? 'mobile-menu__link--active' : ''; ?>"
                   data-i18n="nav.about">Acerca de</a>
            </li>
            <li class="mobile-menu__item">
                <a href="<?php echo url('equipo'); ?>" 
                   class="mobile-menu__link <?php echo $currentPage === 'team' ? 'mobile-menu__link--active' : ''; ?>"
                   data-i18n="nav.team">Equipo</a>
            </li>
            <li class="mobile-menu__item">
                <a href="<?php echo url('noticias'); ?>" 
                   class="mobile-menu__link <?php echo $currentPage === 'news' ? 'mobile-menu__link--active' : ''; ?>"
                   data-i18n="nav.news">Noticias</a>
            </li>
            <li class="mobile-menu__item">
                <a href="<?php echo url('blog'); ?>" 
                   class="mobile-menu__link <?php echo $currentPage === 'blog' ? 'mobile-menu__link--active' : ''; ?>"
                   data-i18n="nav.blog">Blog</a>
            </li>
            <li class="mobile-menu__item">
                <a href="<?php echo url('contacto'); ?>" 
                   class="mobile-menu__link <?php echo $currentPage === 'contact' ? 'mobile-menu__link--active' : ''; ?>"
                   data-i18n="nav.contact">Contacto</a>
            </li>
        </ul>
    </nav>
</header>
