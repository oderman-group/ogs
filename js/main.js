/**
 * Scripts Comunes
 * Menú móvil, scroll-to-top, y funcionalidades generales
 */

(function() {
  'use strict';

  // Actualizar año actual en footer
  function updateYear() {
    const yearElements = document.querySelectorAll('.current-year');
    const currentYear = new Date().getFullYear();
    yearElements.forEach(el => {
      el.textContent = currentYear;
    });
  }

  // Menú móvil
  function initMobileMenu() {
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuLinks = document.querySelectorAll('.mobile-menu__link');

    if (!menuToggle || !mobileMenu) return;

    // Abrir/cerrar menú
    menuToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      const isOpen = mobileMenu.classList.contains('mobile-menu--open');
      
      if (isOpen) {
        mobileMenu.classList.remove('mobile-menu--open');
        menuToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      } else {
        mobileMenu.classList.add('mobile-menu--open');
        menuToggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
      }
    });

    // Cerrar menú al hacer clic en un enlace
    menuLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileMenu.classList.remove('mobile-menu--open');
        menuToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });

    // Cerrar menú al hacer clic fuera
    document.addEventListener('click', function(e) {
      if (mobileMenu.classList.contains('mobile-menu--open')) {
        if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target)) {
          mobileMenu.classList.remove('mobile-menu--open');
          menuToggle.setAttribute('aria-expanded', 'false');
          document.body.style.overflow = '';
        }
      }
    });

    // Cerrar menú con ESC
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('mobile-menu--open')) {
        mobileMenu.classList.remove('mobile-menu--open');
        menuToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }
    });
  }

  // Botón scroll-to-top
  function initScrollToTop() {
    const scrollBtn = document.getElementById('scroll-to-top');
    if (!scrollBtn) return;

    // Mostrar/ocultar botón según scroll
    function toggleScrollButton() {
      if (window.scrollY > 300) {
        scrollBtn.classList.add('scroll-to-top--visible');
      } else {
        scrollBtn.classList.remove('scroll-to-top--visible');
      }
    }

    // Scroll suave al hacer clic
    scrollBtn.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // Escuchar scroll
    window.addEventListener('scroll', toggleScrollButton);
    toggleScrollButton(); // Verificar estado inicial
  }

  // Smooth scroll para enlaces internos
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }

  // Lazy loading de imágenes
  function initLazyLoading() {
    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            if (img.dataset.src) {
              img.src = img.dataset.src;
              img.removeAttribute('data-src');
              img.classList.add('loaded');
            }
            observer.unobserve(img);
          }
        });
      });

      document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
      });
    }
  }

  // Inicializar todo cuando el DOM esté listo
  function init() {
    updateYear();
    initMobileMenu();
    initScrollToTop();
    initSmoothScroll();
    initLazyLoading();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
