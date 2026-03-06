/**
 * Sistema de Gestión de Cookies
 * Banner de consentimiento y panel de configuración
 */

(function() {
  'use strict';

  const COOKIE_CONSENT_KEY = 'cookie-consent';
  const COOKIE_SETTINGS_KEY = 'cookie-settings';

  // Obtener preferencias guardadas
  function getCookieSettings() {
    const saved = localStorage.getItem(COOKIE_SETTINGS_KEY);
    if (saved) {
      try {
        return JSON.parse(saved);
      } catch (e) {
        return null;
      }
    }
    return null;
  }

  // Guardar preferencias
  function saveCookieSettings(settings) {
    localStorage.setItem(COOKIE_SETTINGS_KEY, JSON.stringify(settings));
    localStorage.setItem(COOKIE_CONSENT_KEY, 'true');
  }

  // Verificar si ya hay consentimiento
  function hasConsent() {
    return localStorage.getItem(COOKIE_CONSENT_KEY) === 'true';
  }

  // Mostrar banner de consentimiento
  function showConsentBanner() {
    const banner = document.getElementById('cookie-consent');
    if (banner && !hasConsent()) {
      banner.style.display = 'block';
    }
  }

  // Ocultar banner
  function hideConsentBanner() {
    const banner = document.getElementById('cookie-consent');
    if (banner) {
      banner.style.display = 'none';
    }
  }

  // Mostrar panel de configuración
  function showSettingsPanel() {
    const panel = document.getElementById('cookie-settings-panel');
    if (panel) {
      panel.style.display = 'block';
      hideConsentBanner();
    }
  }

  // Ocultar panel de configuración
  function hideSettingsPanel() {
    const panel = document.getElementById('cookie-settings-panel');
    if (panel) {
      panel.style.display = 'none';
    }
  }

  // Aceptar todas las cookies
  function acceptAll() {
    const settings = {
      necessary: true,
      analytics: true,
      marketing: true
    };
    saveCookieSettings(settings);
    hideConsentBanner();
    hideSettingsPanel();
  }

  // Rechazar todas (solo necesarias)
  function rejectAll() {
    const settings = {
      necessary: true,
      analytics: false,
      marketing: false
    };
    saveCookieSettings(settings);
    hideConsentBanner();
    hideSettingsPanel();
  }

  // Guardar configuración personalizada
  function saveCustomSettings() {
    const necessary = document.getElementById('cookie-necessary');
    const analytics = document.getElementById('cookie-analytics');
    const marketing = document.getElementById('cookie-marketing');

    const settings = {
      necessary: true, // Siempre activas
      analytics: analytics ? analytics.checked : false,
      marketing: marketing ? marketing.checked : false
    };

    saveCookieSettings(settings);
    hideSettingsPanel();
  }

  // Inicializar cuando el DOM esté listo
  function init() {
    if (hasConsent()) {
      // Cargar preferencias guardadas
      const settings = getCookieSettings();
      if (settings) {
        // Aplicar configuración (aquí se cargarían scripts de analytics, etc.)
        if (settings.analytics) {
          // Cargar Google Analytics u otro servicio
        }
        if (settings.marketing) {
          // Cargar scripts de marketing
        }
      }
    } else {
      showConsentBanner();
    }

    // Event listeners
    const acceptBtn = document.getElementById('cookie-accept-all');
    const rejectBtn = document.getElementById('cookie-reject-all');
    const configureBtn = document.getElementById('cookie-configure');
    const saveBtn = document.getElementById('cookie-save');
    const closeSettingsBtn = document.getElementById('cookie-settings-close');

    if (acceptBtn) {
      acceptBtn.addEventListener('click', acceptAll);
    }
    if (rejectBtn) {
      rejectBtn.addEventListener('click', rejectAll);
    }
    if (configureBtn) {
      configureBtn.addEventListener('click', showSettingsPanel);
    }
    if (saveBtn) {
      saveBtn.addEventListener('click', saveCustomSettings);
    }
    if (closeSettingsBtn) {
      closeSettingsBtn.addEventListener('click', hideSettingsPanel);
    }

    // Cargar preferencias guardadas en el panel
    const settings = getCookieSettings();
    if (settings) {
      const analytics = document.getElementById('cookie-analytics');
      const marketing = document.getElementById('cookie-marketing');
      if (analytics) analytics.checked = settings.analytics;
      if (marketing) marketing.checked = settings.marketing;
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Exponer funciones globales
  window.showCookieSettings = showSettingsPanel;
})();
