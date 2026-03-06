<?php
/**
 * Archivo de prueba para diagnosticar problemas
 */
echo "<h1>Test de PHP</h1>";
echo "<p>PHP está funcionando correctamente.</p>";
echo "<p>Directorio actual: " . __DIR__ . "</p>";
echo "<p>SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "</p>";
echo "<p>REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "</p>";
echo "<p>DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>HTTP_HOST: " . $_SERVER['HTTP_HOST'] . "</p>";

// Verificar si index.php existe
if (file_exists(__DIR__ . '/index.php')) {
    echo "<p style='color: green;'>✓ index.php existe</p>";
} else {
    echo "<p style='color: red;'>✗ index.php NO existe</p>";
}

// Verificar si .htaccess existe
if (file_exists(__DIR__ . '/.htaccess')) {
    echo "<p style='color: green;'>✓ .htaccess existe</p>";
} else {
    echo "<p style='color: red;'>✗ .htaccess NO existe</p>";
}

// Listar archivos en el directorio
echo "<h2>Archivos en el directorio:</h2>";
echo "<ul>";
$files = scandir(__DIR__);
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        $type = is_dir($file) ? '[DIR]' : '[FILE]';
        echo "<li>$type $file</li>";
    }
}
echo "</ul>";
?>
