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

    if (cards.length && prevBtn && nextBtn) {
        let active = 0;

        const n = cards.length;

        function setActive(i) {
            active = Math.max(0, Math.min(n - 1, i));   // clamp, no wrap
            cards.forEach((c, idx) => {
                c.classList.toggle('service-card--active', idx === active);
                // rotate the whole row so the active card leads and the rest
                // follow in natural sequence (no card gets stuck in the middle)
                c.style.order = ((idx - active) % n + n) % n;
            });
            const img = cards[active].getAttribute('data-feature');
            if (img && featureImg) featureImg.src = img;
            // disable arrows at the ends
            prevBtn.classList.toggle('is-disabled', active === 0);
            nextBtn.classList.toggle('is-disabled', active === n - 1);
            prevBtn.disabled = active === 0;
            nextBtn.disabled = active === n - 1;
        }

        prevBtn.addEventListener('click', () => setActive(active - 1));
        nextBtn.addEventListener('click', () => setActive(active + 1));
        cards.forEach((c, i) => c.addEventListener('click', () => setActive(i)));

        setActive(0);   // initialise active state + arrow disabling
    }

    /* ---- Header background on scroll ---- */
    function onScroll() {
        if (!header) return;
        header.classList.toggle("is-scrolled", window.scrollY > 24);
    }
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
})();
