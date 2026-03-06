<?php
/**
 * Configuración Base del Proyecto
 * Funciones helper para URLs y assets
 */

// Detectar ruta base automáticamente
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$basePath = ($scriptDir === '/' || $scriptDir === '.' || empty($scriptDir)) ? '' : $scriptDir;
$baseUrl = $protocol . '://' . $host . ($basePath ? $basePath : '');

define('BASE_URL', $baseUrl);
define('BASE_PATH', $basePath);

/**
 * Función helper para generar URLs
 * @param string $path Ruta relativa
 * @return string URL completa
 */
function url($path = '') {
    $path = ltrim($path, '/');
    return BASE_URL . ($path ? '/' . $path : '');
}

/**
 * Función helper para assets (CSS, JS, imágenes)
 * @param string $path Ruta del asset
 * @return string URL del asset
 */
function asset($path) {
    $path = ltrim($path, '/');
    if (BASE_PATH) {
        return BASE_PATH . '/' . $path;
    }
    return '/' . $path;
}

/**
 * Escapar output HTML
 * @param string $text Texto a escapar
 * @return string Texto escapado
 */
function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Detectar idioma actual
 * @return string 'es' o 'en'
 */
function getCurrentLang() {
    // Verificar parámetro URL primero
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] === 'es') {
            return 'es';
        }
        if ($_GET['lang'] === 'en') {
            return 'en';
        }
    }
    
    // Verificar cookie guardada
    if (isset($_COOKIE['lang'])) {
        if ($_COOKIE['lang'] === 'es') {
            return 'es';
        }
        if ($_COOKIE['lang'] === 'en') {
            return 'en';
        }
    }
    
    // Idioma por defecto: inglés
    return 'en';
}

/**
 * Obtener URL con parámetro de idioma
 * @param string $path Ruta
 * @param string $lang Idioma ('es' o 'en')
 * @return string URL con parámetro lang
 */
function urlWithLang($path = '', $lang = null) {
    if ($lang === null) {
        $lang = getCurrentLang();
    }
    $url = url($path);
    $separator = strpos($url, '?') !== false ? '&' : '?';
    return $url . $separator . 'lang=' . $lang;
}
?>
