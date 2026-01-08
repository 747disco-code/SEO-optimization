// 747 Disco Website - JavaScript
// ==========================================================================

document.addEventListener('DOMContentLoaded', function() {
    
    // Hero Slider Functionality
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.slider-arrow.prev');
    const nextBtn = document.querySelector('.slider-arrow.next');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        
        if (index >= slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = index;
        }
        
        slides[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function startSlideShow() {
        slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }

    function stopSlideShow() {
        clearInterval(slideInterval);
    }

    // Event Listeners for slider
    if (nextBtn && prevBtn) {
        nextBtn.addEventListener('click', function() {
            stopSlideShow();
            nextSlide();
            startSlideShow();
        });

        prevBtn.addEventListener('click', function() {
            stopSlideShow();
            prevSlide();
            startSlideShow();
        });
    }

    // Start the slideshow
    startSlideShow();

    // Pause slideshow on hover
    const heroSlider = document.querySelector('.hero-slider');
    if (heroSlider) {
        heroSlider.addEventListener('mouseenter', stopSlideShow);
        heroSlider.addEventListener('mouseleave', startSlideShow);
    }

    // Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip if it's just '#'
            if (href === '#') {
                e.preventDefault();
                return;
            }
            
            const targetElement = document.querySelector(href);
            
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form Submission Handling (Basic validation)
    const contactForms = document.querySelectorAll('.contact-form');
    
    contactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            // Basic validation
            const nameInput = this.querySelector('input[name="name"]');
            const emailInput = this.querySelector('input[name="email"]');
            
            if (nameInput && !nameInput.value.trim()) {
                e.preventDefault();
                alert('Per favore, inserisci il tuo nome.');
                nameInput.focus();
                return false;
            }
            
            if (emailInput && !emailInput.value.trim()) {
                e.preventDefault();
                alert('Per favore, inserisci la tua email.');
                emailInput.focus();
                return false;
            }
            
            // Email validation
            if (emailInput) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailInput.value)) {
                    e.preventDefault();
                    alert('Per favore, inserisci un indirizzo email valido.');
                    emailInput.focus();
                    return false;
                }
            }
            
            // If using Formspree or similar service, the form will submit normally
            // Otherwise, prevent default and handle with AJAX
        });
    });

    // Scroll Animation for Elements
    function revealOnScroll() {
        const reveals = document.querySelectorAll('.event-card, .content-box, .form-box');
        
        reveals.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('fade-in');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Check on page load

    // Mobile Menu Toggle (if you add a hamburger menu later)
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
        });
    }

    // Lazy Loading for Images (if needed)
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Add active state to current section in navigation (if you add a nav menu)
    function setActiveNav() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('nav a[href^="#"]');
        
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (window.scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').slice(1) === current) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', setActiveNav);

    // WhatsApp Click Tracking (Google Analytics if needed)
    const whatsappLinks = document.querySelectorAll('a[href*="wa.me"]');
    whatsappLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Track WhatsApp clicks
            if (typeof gtag !== 'undefined') {
                gtag('event', 'click', {
                    'event_category': 'Contact',
                    'event_label': 'WhatsApp'
                });
            }
        });
    });

    // Phone Click Tracking
    const phoneLinks = document.querySelectorAll('a[href^="tel:"]');
    phoneLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Track phone clicks
            if (typeof gtag !== 'undefined') {
                gtag('event', 'click', {
                    'event_category': 'Contact',
                    'event_label': 'Phone Call'
                });
            }
        });
    });

    // Add parallax effect to hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.hero-slider');
        
        if (parallax) {
            parallax.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
        }
    });

    // Console welcome message
    console.log('%c747 Disco - Location per Feste ed Eventi a Roma', 'color: #917F59; font-size: 20px; font-weight: bold;');
    console.log('%cWeb: https://747disco.it | Tel: +39 347 181 1119', 'color: #8D7B57; font-size: 14px;');
});

// Prevent right-click on images (optional protection)
// Uncomment if you want to protect images
/*
document.addEventListener('contextmenu', function(e) {
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
        return false;
    }
});
*/

// Loading Animation (optional)
window.addEventListener('load', function() {
    const loader = document.querySelector('.loader');
    if (loader) {
        loader.style.opacity = '0';
        setTimeout(() => {
            loader.style.display = 'none';
        }, 500);
    }
});
