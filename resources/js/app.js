import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// ===== Go To Top Button =====
document.addEventListener('DOMContentLoaded', () => {
    const goTopBtn = document.getElementById('goTopBtn');

    if (goTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                goTopBtn.classList.add('visible');
            } else {
                goTopBtn.classList.remove('visible');
            }
        });

        goTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});



// ===== Navbar scroll + mobile menu =====
document.addEventListener('DOMContentLoaded', () => {
    const nav = document.getElementById('mainNav');
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    // Scroll: toggle .scrolled class
    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    let menuOpen = false;
    mobileBtn.addEventListener('click', () => {
        menuOpen = !menuOpen;

        // Animate hamburger → X
        mobileBtn.classList.toggle('hamburger-open', menuOpen);

        // Slide menu open/close
        if (menuOpen) {
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
        } else {
            mobileMenu.style.maxHeight = '0';
        }
    });

    // Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menuOpen = false;
            mobileBtn.classList.remove('hamburger-open');
            mobileMenu.style.maxHeight = '0';
        });
    });
});
