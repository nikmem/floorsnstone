/* =================================================================
   Flooring Co. — site interactions
   Vanilla JS, no dependencies.
   ================================================================= */
(function () {
    "use strict";

    const header    = document.getElementById("site-header");
    const navToggle = document.getElementById("nav-toggle");
    const nav       = document.getElementById("mobile-nav");

    /* ---- Mobile nav toggle ---- */
    function setNav(open) {
        nav.classList.toggle("is-open", open);
        navToggle.setAttribute("aria-expanded", String(open));
        navToggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
        document.body.classList.toggle("nav-open", open);
    }

    if (navToggle && nav) {
        navToggle.addEventListener("click", function () {
            setNav(nav.classList.contains("is-open") === false);
        });

        // Close the menu after tapping a link (single-page anchors)
        nav.addEventListener("click", function (e) {
            if (e.target.closest("a")) setNav(false);
        });

        // Close on Escape
        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape" && nav.classList.contains("is-open")) setNav(false);
        });
    }

    /* ---- Services slider ---- */
    const cards = Array.from(document.querySelectorAll('#services-cards .service-card'));
    const featureImg = document.getElementById('services-feature-img');
    const prevBtn = document.querySelector('.services__arrow--prev');
    const nextBtn = document.querySelector('.services__arrow--next');

    const cardsWrap = document.getElementById('services-cards');

    if (cards.length && prevBtn && nextBtn) {
        let active = 0;
        let imgTimer = null;

        const n = cards.length;
        // On the desktop overlay the cards sit in fixed slots; on small screens
        // they live in a horizontal scroller.
        const desktopSlider = window.matchMedia('(min-width: 861px)');

        // Preload every featured image so the crossfade never flashes a blank.
        cards.forEach((c) => {
            const src = c.getAttribute('data-feature');
            if (src) { const img = new Image(); img.src = src; }
        });

        // Crossfade ONLY the featured image (fade out, swap, fade in).
        function crossfadeImage(src) {
            if (!featureImg || !src || featureImg.getAttribute('src') === src) return;
            featureImg.classList.add('is-fading');
            window.clearTimeout(imgTimer);
            imgTimer = window.setTimeout(function () {
                featureImg.setAttribute('src', src);
                requestAnimationFrame(function () {
                    requestAnimationFrame(function () {
                        featureImg.classList.remove('is-fading');
                    });
                });
            }, 300);   // matches the image opacity transition
        }

        // On the mobile scroller, bring the active card into view so the change
        // is visible right next to the controls.
        function revealOnMobile() {
            if (desktopSlider.matches) return;
            const card = cards[active];
            const left = cardsWrap.scrollLeft
                + card.getBoundingClientRect().left
                - cardsWrap.getBoundingClientRect().left
                - (cardsWrap.clientWidth - card.offsetWidth) / 2;   // centre it
            cardsWrap.scrollTo({ left: Math.max(0, left), behavior: 'smooth' });
        }

        function updateArrows() {
            prevBtn.classList.toggle('is-disabled', active === 0);
            nextBtn.classList.toggle('is-disabled', active === n - 1);
            prevBtn.disabled = active === 0;
            nextBtn.disabled = active === n - 1;
        }

        function setActive(i) {
            const next = Math.max(0, Math.min(n - 1, i));   // clamp, no wrap
            if (next === active) return;
            active = next;
            // Only the active card changes — every card keeps its slot.
            cards.forEach((c, idx) =>
                c.classList.toggle('service-card--active', idx === active));
            crossfadeImage(cards[active].getAttribute('data-feature'));
            revealOnMobile();
            updateArrows();
        }

        prevBtn.addEventListener('click', () => setActive(active - 1));
        nextBtn.addEventListener('click', () => setActive(active + 1));
        cards.forEach((c, i) => c.addEventListener('click', () => setActive(i)));

        // Initial state (no animation).
        cards.forEach((c, idx) => c.classList.toggle('service-card--active', idx === 0));
        updateArrows();
    }

    /* ---- Header background on scroll ---- */
    function onScroll() {
        if (!header) return;
        header.classList.toggle("is-scrolled", window.scrollY > 24);
    }
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
})();
