<?php
/**
 * Funciones SEO
 * Generación de meta tags dinámicos
 */

/**
 * Generar meta tags SEO completos
 * @param array $pageData Datos de la página
 * @param string $lang Idioma actual
 * @return string HTML con meta tags
 */
function generateSeoTags($pageData, $lang = 'es') {
    $defaults = [
        'title' => 'ODERMAN GROUP SAS - Desarrollo de Software a la Medida',
        'description' => 'ODERMAN GROUP SAS es una empresa colombiana dedicada al desarrollo de software a la medida. Soluciones intuitivas y robustas para educación, empresas e instituciones.',
        'keywords' => 'desarrollo de software, software a la medida, Colombia, tecnología, innovación',
        'url' => url(),
        'image' => asset('img/og-image.jpg'),
        'type' => 'website',
        'alternate' => [
            'es' => url(),
            'en' => url() . '?lang=en'
        ]
    ];
    
    $data = array_merge($defaults, $pageData);
    
    $html = '';
    
    // SEO Básico
    $html .= '<meta name="description" content="' . e($data['description']) . '">' . "\n";
    $html .= '<meta name="keywords" content="' . e($data['keywords']) . '">' . "\n";
    $html .= '<meta name="author" content="ODERMAN GROUP SAS">' . "\n";
    $html .= '<meta name="robots" content="index, follow">' . "\n";
    $html .= '<link rel="canonical" href="' . e($data['url']) . '">' . "\n";
    
    // Open Graph
    $html .= '<meta property="og:type" content="' . e($data['type']) . '">' . "\n";
    $html .= '<meta property="og:url" content="' . e($data['url']) . '">' . "\n";
    $html .= '<meta property="og:title" content="' . e($data['title']) . '">' . "\n";
    $html .= '<meta property="og:description" content="' . e($data['description']) . '">' . "\n";
    $html .= '<meta property="og:image" content="' . e($data['image']) . '">' . "\n";
    $html .= '<meta property="og:locale" content="' . ($lang === 'es' ? 'es_CO' : 'en_US') . '">' . "\n";
    
    // Open Graph alternates
    if (isset($data['alternate'])) {
        foreach ($data['alternate'] as $altLang => $altUrl) {
            $locale = $altLang === 'es' ? 'es_CO' : 'en_US';
            $html .= '<meta property="og:locale:alternate" content="' . $locale . '">' . "\n";
        }
    }
    
    // Twitter Card
    $html .= '<meta name="twitter:card" content="summary_large_image">' . "\n";
    $html .= '<meta name="twitter:title" content="' . e($data['title']) . '">' . "\n";
    $html .= '<meta name="twitter:description" content="' . e($data['description']) . '">' . "\n";
    $html .= '<meta name="twitter:image" content="' . e($data['image']) . '">' . "\n";
    
    // Hreflang para multiidioma
    if (isset($data['alternate'])) {
        foreach ($data['alternate'] as $altLang => $altUrl) {
            $html .= '<link rel="alternate" hreflang="' . $altLang . '" href="' . e($altUrl) . '">' . "\n";
        }
    }
    $html .= '<link rel="alternate" hreflang="x-default" href="' . e($data['alternate']['es'] ?? $data['url']) . '">' . "\n";
    
    // Meta tags de seguridad
    $html .= '<meta http-equiv="X-Content-Type-Options" content="nosniff">' . "\n";
    $html .= '<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">' . "\n";
    $html .= '<meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">' . "\n";
    
    return $html;
}

/**
 * Generar Schema.org Organization structured data
 * @param string $lang Idioma
 * @return string JSON-LD script tag
 */
function generateSchemaOrg($lang = 'es') {
    $data = [
        "@context" => "https://schema.org",
        "@type" => "Organization",
        "name" => "ODERMAN GROUP SAS",
        "url" => url(),
        "logo" => url(asset('img/logos/oderman-logo.png')),
        "description" => $lang === 'es' 
            ? "Empresa colombiana dedicada al desarrollo de software a la medida. Soluciones intuitivas y robustas para educación, empresas e instituciones."
            : "Colombian company dedicated to custom software development. Intuitive and robust solutions for education, businesses and institutions.",
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "Carrera 83 C #33 B 11",
            "addressLocality" => "Medellín",
            "addressRegion" => "Antioquia",
            "addressCountry" => "CO"
        ],
        "contactPoint" => [
            "@type" => "ContactPoint",
            "telephone" => "+57-300-607-5800",
            "contactType" => "customer service",
            "email" => "info@oderman-group.com",
            "availableLanguage" => ["Spanish", "English"]
        ],
        "sameAs" => [
            "https://www.facebook.com/oderman",
            "https://www.instagram.com/oderman",
            "https://www.linkedin.com/company/oderman",
            "https://www.youtube.com/@oderman"
        ],
        "foundingDate" => "2015",
        "taxID" => "901.992.426-8"
    ];
    
    return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
?>
