# ODERMAN GROUP SAS - Sitio Web Corporativo

Sitio web corporativo para **ODERMAN GROUP SAS** inspirado en el diseño moderno y minimalista de Google About.

## 🌐 URL del Sitio

- **Producción**: https://oderman-group.com/
- **Sitio Principal**: https://oderman.com.co/oderman-web/

## 📋 Características

- ✅ Diseño moderno y minimalista estilo Google About
- ✅ Sistema multiidioma (Español/English)
- ✅ Responsive Design (Mobile-first)
- ✅ URLs amigables (SEO-friendly)
- ✅ Sistema de cookies con consentimiento
- ✅ Componentes centralizados (Header/Footer)
- ✅ Optimización SEO completa
- ✅ Seguridad implementada (Headers, CSP)
- ✅ Accesibilidad (WCAG 2.1 AA)

## 🗂️ Estructura del Proyecto

```
oderman-group/
├── css/
│   └── estilos.css          # Estilos principales
├── js/
│   ├── translations.js       # Traducciones ES/EN
│   ├── language.js           # Sistema de cambio de idioma
│   ├── cookies.js            # Gestión de cookies
│   └── main.js               # Scripts comunes
├── img/
│   ├── heroes/               # Imágenes hero sections
│   ├── team/                 # Fotos del equipo
│   ├── logos/                # Logos
│   ├── icons/                # Iconos SVG
│   └── blog/                 # Imágenes del blog
├── includes/
│   ├── config.php            # Configuración base
│   ├── seo.php               # Funciones SEO
│   ├── header.php             # Header centralizado
│   └── footer.php             # Footer centralizado
├── .htaccess                  # Configuración Apache
├── robots.txt                 # Instrucciones para crawlers
├── sitemap.xml                # Mapa del sitio
├── index.php                  # Página principal
├── about.php                  # Acerca de
├── team.php                   # Equipo
├── news.php                   # Noticias
├── blog.php                   # Blog
├── contact.php                # Contacto
├── privacidad.php             # Política de privacidad
├── terminos.php               # Términos y condiciones
├── cookies.php                # Política de cookies
└── 404.php                    # Página de error
```

## 🚀 Instalación

1. **Clonar o copiar el proyecto** en el servidor web
2. **Configurar el dominio** para apuntar a la carpeta del proyecto
3. **Ajustar `.htaccess`** si es necesario (RewriteBase)
4. **Subir imágenes** a las carpetas correspondientes en `img/`
5. **Verificar permisos** de archivos y carpetas

## ⚙️ Configuración

### URLs Amigables

Las URLs amigables están configuradas en `.htaccess`. Ejemplos:
- `/acerca-de` → `about.php`
- `/equipo` → `team.php`
- `/noticias` → `news.php`
- `/blog` → `blog.php`
- `/contacto` → `contact.php`

### Sistema de Idiomas

El sistema detecta automáticamente el idioma del navegador o usa el guardado en `localStorage`. Se puede cambiar manualmente con el selector en el header.

### Variables CSS

Todas las variables están definidas en `css/estilos.css` en la sección `:root`. Se pueden personalizar colores, tipografía, espaciado, etc.

## 📝 Páginas Disponibles

- **Inicio** (`/` o `/index.php`) - Página principal con hero section
- **Acerca de** (`/acerca-de`) - Información sobre la empresa
- **Equipo** (`/equipo`) - Información del equipo
- **Noticias** (`/noticias`) - Últimas noticias
- **Blog** (`/blog`) - Artículos del blog
- **Contacto** (`/contacto`) - Información de contacto
- **Política de Privacidad** (`/privacidad`)
- **Términos y Condiciones** (`/terminos`)
- **Política de Cookies** (`/cookies`)
- **404** (`/404`) - Página de error personalizada

## 🔧 Desarrollo

### Agregar Nueva Página

1. Crear archivo PHP (ej: `nueva-pagina.php`)
2. Incluir configuración y SEO:
```php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';
```
3. Configurar `$pageData` con información SEO
4. Agregar ruta en `.htaccess` si se necesita URL amigable
5. Agregar enlace en `includes/header.php` y `includes/footer.php`
6. Actualizar `sitemap.xml`

### Agregar Traducciones

Editar `js/translations.js` y agregar las traducciones en las secciones `es` y `en`.

### Personalizar Estilos

Modificar variables CSS en `css/estilos.css` o agregar estilos personalizados.

## 🔒 Seguridad

- Headers de seguridad configurados en `.htaccess`
- Protección de archivos sensibles
- Validación y sanitización de inputs
- Escapado de output HTML

## 📱 Responsive

El sitio es completamente responsive con breakpoints:
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

## 🌍 SEO

- Meta tags optimizados
- Schema.org structured data
- Sitemap.xml
- Robots.txt
- URLs amigables
- Open Graph y Twitter Cards
- Hreflang para multiidioma

## 📞 Soporte

Para consultas o soporte:
- **Email**: info@oderman-group.com
- **Teléfono**: +57 300 607 5800

## 📄 Licencia

© 2025 ODERMAN GROUP SAS. Todos los derechos reservados.

---

**Desarrollado siguiendo las mejores prácticas de desarrollo web moderno.**
