/**
 * Sistema de Cambio de Idioma
 * Detecta y aplica traducciones automáticamente
 */

(function() {
  'use strict';

  // Detectar idioma del navegador o localStorage
  function detectLanguage() {
    // Verificar parámetro URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('lang') === 'en' || urlParams.get('lang') === 'es') {
      return urlParams.get('lang');
    }
    
    // Verificar localStorage
    const savedLang = localStorage.getItem('lang');
    if (savedLang === 'en' || savedLang === 'es') {
      return savedLang;
    }
    
    // Detectar idioma del navegador
    const browserLang = navigator.language || navigator.userLanguage;
    if (browserLang.startsWith('es')) {
      return 'es';
    }
    
    // Default: inglés
    return 'en';
  }

  // Obtener idioma actual
  const currentLang = detectLanguage();
  
  // Guardar preferencia
  localStorage.setItem('lang', currentLang);
  
  // Actualizar atributo lang del HTML
  document.documentElement.setAttribute('lang', currentLang);
  
  // Aplicar traducciones
  function applyTranslations(lang) {
    if (typeof translations === 'undefined') {
      console.warn('translations.js no está cargado');
      return;
    }
    
    const t = translations[lang];
    if (!t) {
      console.warn('Idioma no encontrado:', lang);
      return;
    }
    
    // Traducir elementos con data-i18n
    document.querySelectorAll('[data-i18n]').forEach(element => {
      const key = element.getAttribute('data-i18n');
      const keys = key.split('.');
      let value = t;
      
      for (const k of keys) {
        if (value && typeof value === 'object' && k in value) {
          value = value[k];
        } else {
          value = null;
          break;
        }
      }
      
      if (value !== null) {
        if (element.tagName === 'INPUT' && element.type === 'submit') {
          element.value = value;
        } else if (element.hasAttribute('placeholder')) {
          element.placeholder = value;
        } else if (element.hasAttribute('aria-label')) {
          element.setAttribute('aria-label', value);
        } else {
          element.textContent = value;
        }
      }
    });
  }
  
  // Aplicar traducciones al cargar
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => applyTranslations(currentLang));
  } else {
    applyTranslations(currentLang);
  }
  
  // Manejar cambio de idioma desde selector
  const languageSelector = document.getElementById('language-selector');
  if (languageSelector) {
    languageSelector.value = currentLang;
    languageSelector.addEventListener('change', function() {
      const newLang = this.value;
      localStorage.setItem('lang', newLang);
      
      // Actualizar URL con parámetro lang
      const url = new URL(window.location);
      url.searchParams.set('lang', newLang);
      window.location.href = url.toString();
    });
  }
  
  // Exponer función global para cambio manual
  window.changeLanguage = function(lang) {
    if (lang !== 'es' && lang !== 'en') {
      console.warn('Idioma no válido:', lang);
      return;
    }
    localStorage.setItem('lang', lang);
    const url = new URL(window.location);
    url.searchParams.set('lang', lang);
    window.location.href = url.toString();
  };
})();
