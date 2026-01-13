/**
 * 747 Disco - JavaScript per Ottimizzazioni Performance e UX
 * 
 * COME USARE:
 * 1. Elementor > Custom Code > Add New
 * 2. Tipo: JavaScript
 * 3. Location: Footer
 * 4. Display: Entire Site
 * 
 * Oppure aggiungi in functions.php del child theme:
 * 
 * function disco747_custom_scripts() {
 *     wp_enqueue_script('disco747-custom', get_stylesheet_directory_uri() . '/assets/custom-scripts.js', array('jquery'), '1.0', true);
 * }
 * add_action('wp_enqueue_scripts', 'disco747_custom_scripts');
 */

(function($) {
    'use strict';

    // =========================================================================
    // LAZY LOADING INTELLIGENTE - Immagini
    // =========================================================================
    
    /**
     * Lazy load immagini con Intersection Observer
     * Carica immagini solo quando entrano nel viewport
     */
    function initLazyLoading() {
        // Controlla se browser supporta Intersection Observer
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        
                        // Carica immagine
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                        }
                        if (img.dataset.srcset) {
                            img.srcset = img.dataset.srcset;
                        }
                        
                        // Aggiungi classe quando caricata
                        img.addEventListener('load', () => {
                            img.classList.add('loaded');
                        });
                        
                        // Stop observing this image
                        observer.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px 0px', // Inizia a caricare 50px prima
                threshold: 0.01
            });

            // Osserva tutte le immagini lazy
            const lazyImages = document.querySelectorAll('img[loading="lazy"]');
            lazyImages.forEach(img => imageObserver.observe(img));
        }
    }

    // =========================================================================
    // SCROLL ANIMATIONS - Fade in al scroll
    // =========================================================================
    
    /**
     * Anima elementi quando entrano nel viewport
     */
    function initScrollAnimations() {
        if ('IntersectionObserver' in window) {
            const animationObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            // Elementi da animare
            const animatedElements = document.querySelectorAll(
                '.fade-in-scroll, .slide-in-left, .slide-in-right'
            );
            animatedElements.forEach(el => animationObserver.observe(el));
        }
    }

    // =========================================================================
    // STICKY CTA MOBILE - Gestione show/hide
    // =========================================================================
    
    /**
     * Mostra/nascondi sticky CTA basato su scroll
     */
    function initStickyCTA() {
        const stickyCTA = document.querySelector('.sticky-cta-mobile');
        if (!stickyCTA) return;

        let lastScrollTop = 0;
        let scrollTimeout;

        window.addEventListener('scroll', () => {
            // Debounce scroll event
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                // Nascondi durante scroll down, mostra durante scroll up
                if (scrollTop > lastScrollTop && scrollTop > 100) {
                    stickyCTA.classList.add('hide');
                } else {
                    stickyCTA.classList.remove('hide');
                }
                
                lastScrollTop = scrollTop;
            }, 100);
        });
    }

    // =========================================================================
    // CLICK TO CALL - Track telefonate
    // =========================================================================
    
    /**
     * Traccia click su link telefono per Analytics
     */
    function trackPhoneCalls() {
        const phoneLinks = document.querySelectorAll('a[href^="tel:"]');
        
        phoneLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Google Analytics 4
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'phone_call', {
                        'event_category': 'Contact',
                        'event_label': this.href,
                        'value': 1
                    });
                }
                
                // Facebook Pixel
                if (typeof fbq !== 'undefined') {
                    fbq('track', 'Contact');
                }
                
                console.log('Phone call tracked:', this.href);
            });
        });
    }

    // =========================================================================
    // WHATSAPP CLICK - Track messaggi WhatsApp
    // =========================================================================
    
    /**
     * Traccia click su link WhatsApp per Analytics
     */
    function trackWhatsAppClicks() {
        const whatsappLinks = document.querySelectorAll('a[href^="https://wa.me"], a[href^="https://api.whatsapp.com"]');
        
        whatsappLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Google Analytics 4
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'whatsapp_click', {
                        'event_category': 'Contact',
                        'event_label': 'WhatsApp Message',
                        'value': 1
                    });
                }
                
                // Facebook Pixel
                if (typeof fbq !== 'undefined') {
                    fbq('track', 'Contact');
                }
                
                console.log('WhatsApp click tracked');
            });
        });
    }

    // =========================================================================
    // FORM SUBMISSION - Track invii form
    // =========================================================================
    
    /**
     * Traccia submit form contatto
     */
    function trackFormSubmissions() {
        // Elementor Forms
        $(document).on('submit_success', function(e, data) {
            // Google Analytics 4
            if (typeof gtag !== 'undefined') {
                gtag('event', 'form_submission', {
                    'event_category': 'Form',
                    'event_label': 'Contact Form',
                    'value': 10
                });
            }
            
            // Facebook Pixel
            if (typeof fbq !== 'undefined') {
                fbq('track', 'Lead');
            }
            
            console.log('Form submission tracked');
        });
    }

    // =========================================================================
    // SMOOTH SCROLL - Scroll fluido per anchor links
    // =========================================================================
    
    /**
     * Smooth scroll per link interni (#)
     */
    function initSmoothScroll() {
        $('a[href*="#"]:not([href="#"])').on('click', function(e) {
            const target = $(this.hash);
            
            if (target.length) {
                e.preventDefault();
                
                const offsetTop = target.offset().top - 80; // 80px per header fisso
                
                $('html, body').animate({
                    scrollTop: offsetTop
                }, 800, 'swing');
                
                // Update URL senza scroll
                if (history.pushState) {
                    history.pushState(null, null, this.hash);
                }
            }
        });
    }

    // =========================================================================
    // EXTERNAL LINKS - Apri in nuova tab
    // =========================================================================
    
    /**
     * Apri link esterni in nuova tab automaticamente
     */
    function initExternalLinks() {
        const domain = window.location.hostname;
        
        $('a').each(function() {
            const href = $(this).attr('href');
            
            if (href && href.indexOf('http') === 0 && href.indexOf(domain) === -1) {
                $(this).attr({
                    'target': '_blank',
                    'rel': 'noopener noreferrer'
                });
            }
        });
    }

    // =========================================================================
    // ACCESSIBILITY - Keyboard navigation
    // =========================================================================
    
    /**
     * Migliora accessibilità keyboard
     */
    function initAccessibility() {
        // Rileva uso mouse vs keyboard
        let usingMouse = false;
        
        document.body.addEventListener('mousedown', () => {
            usingMouse = true;
            document.body.classList.add('using-mouse');
        });
        
        document.body.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                usingMouse = false;
                document.body.classList.remove('using-mouse');
            }
        });
        
        // Skip to content link
        const skipLink = document.querySelector('.skip-to-content');
        if (skipLink) {
            skipLink.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector('#main-content') || document.querySelector('main');
                if (target) {
                    target.focus();
                    target.scrollIntoView();
                }
            });
        }
    }

    // =========================================================================
    // VIEWPORT HEIGHT FIX - iOS mobile viewport
    // =========================================================================
    
    /**
     * Fix per 100vh su iOS mobile
     */
    function fixMobileViewport() {
        const setVh = () => {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        };
        
        setVh();
        window.addEventListener('resize', setVh);
        window.addEventListener('orientationchange', setVh);
    }

    // =========================================================================
    // PRELOAD CRITICAL RESOURCES
    // =========================================================================
    
    /**
     * Preload font e immagini critiche
     */
    function preloadCriticalResources() {
        // Preload hero image (cambia URL con la tua immagine)
        const heroImage = new Image();
        heroImage.src = '/wp-content/uploads/2022/12/IMG_5953-1200x800-1.jpg';
        
        // Preload font (se non già preload in HTML)
        const fontPreload = document.createElement('link');
        fontPreload.rel = 'preload';
        fontPreload.as = 'font';
        fontPreload.type = 'font/woff2';
        fontPreload.crossOrigin = 'anonymous';
        fontPreload.href = '/wp-content/themes/astra/assets/fonts/work-sans-v18-latin-regular.woff2';
        document.head.appendChild(fontPreload);
    }

    // =========================================================================
    // DEFER NON-CRITICAL SCRIPTS
    // =========================================================================
    
    /**
     * Carica script non critici dopo page load
     */
    function loadDeferredScripts() {
        // Esempio: carica Google Maps solo quando necessario
        const mapContainer = document.querySelector('.elementor-widget-google_maps');
        
        if (mapContainer && 'IntersectionObserver' in window) {
            const mapObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Carica script Google Maps qui
                        console.log('Loading Google Maps...');
                        mapObserver.unobserve(entry.target);
                    }
                });
            });
            
            mapObserver.observe(mapContainer);
        }
    }

    // =========================================================================
    // CONSOLE WELCOME MESSAGE
    // =========================================================================
    
    /**
     * Messaggio console per developer
     */
    function consoleWelcome() {
        if (console && console.log) {
            console.log(
                '%c🎉 747 Disco - Ottimizzato per Performance 🚀',
                'font-size: 16px; font-weight: bold; color: #917F59; padding: 10px;'
            );
            console.log(
                '%cSito ottimizzato con lazy loading, tracking analytics e performance improvements.',
                'font-size: 12px; color: #666;'
            );
            console.log(
                '%c💼 Interessato a lavorare con noi? Contattaci!',
                'font-size: 12px; color: #917F59;'
            );
        }
    }

    // =========================================================================
    // INITIALIZATION - Inizializza tutto al DOM ready
    // =========================================================================
    
    $(document).ready(function() {
        // Performance & UX
        initLazyLoading();
        initScrollAnimations();
        initStickyCTA();
        initSmoothScroll();
        initExternalLinks();
        initAccessibility();
        fixMobileViewport();
        
        // Analytics Tracking
        trackPhoneCalls();
        trackWhatsAppClicks();
        trackFormSubmissions();
        
        // Deferred loading
        preloadCriticalResources();
        loadDeferredScripts();
        
        // Dev
        consoleWelcome();
        
        console.log('✅ 747 Disco scripts initialized');
    });

    // =========================================================================
    // WINDOW LOAD - Funzioni dopo caricamento completo
    // =========================================================================
    
    $(window).on('load', function() {
        // Nascondi loading spinner se presente
        $('.page-loader').fadeOut(300);
        
        // Log performance metrics
        if (window.performance && window.performance.timing) {
            const perfData = window.performance.timing;
            const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
            const connectTime = perfData.responseEnd - perfData.requestStart;
            const renderTime = perfData.domComplete - perfData.domLoading;
            
            console.log('📊 Performance Metrics:');
            console.log('Page Load Time:', pageLoadTime + 'ms');
            console.log('Connect Time:', connectTime + 'ms');
            console.log('Render Time:', renderTime + 'ms');
            
            // Invia a Google Analytics (opzionale)
            if (typeof gtag !== 'undefined') {
                gtag('event', 'timing_complete', {
                    'name': 'load',
                    'value': pageLoadTime,
                    'event_category': 'Page Performance'
                });
            }
        }
    });

})(jQuery);

/**
 * ============================================================================
 * VANILLA JS VERSION (senza jQuery)
 * ============================================================================
 * 
 * Se preferisci non usare jQuery, decomment questo blocco e commenta sopra:
 */

/*
(function() {
    'use strict';
    
    // Aspetta DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    function init() {
        initLazyLoading();
        initScrollAnimations();
        // ... altre funzioni
    }
    
    // Implementa funzioni senza jQuery qui
    // Es: document.querySelectorAll() invece di $()
})();
*/

/**
 * ============================================================================
 * NOTES & TODO
 * ============================================================================
 * 
 * TODO:
 * - [ ] Configura Google Analytics tracking ID
 * - [ ] Configura Facebook Pixel ID
 * - [ ] Test su tutti i browser (Chrome, Firefox, Safari, Edge)
 * - [ ] Test su mobile (iOS, Android)
 * - [ ] Verifica performance con Lighthouse
 * - [ ] A/B test tracking events
 * 
 * PERFORMANCE TIPS:
 * - Minimizza questo file in produzione
 * - Usa async/defer per caricamento script
 * - Combina con altri JS quando possibile
 * - Monitora bundle size
 * 
 * SUPPORT:
 * - Documentazione: README.md
 * - Issues: GitHub repository
 * - Contact: info@747disco.it
 */
