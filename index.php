<?php
require __DIR__ . '/includes/config.php';
$pageTitle       = SITE_NAME . ' — ' . SITE_TAGLINE;
$pageDescription = 'Floors & Stone — top quality flooring and stone installation and services.';
require __DIR__ . '/includes/header.php';
?>

    <!-- ============ HERO ============ -->
    <section class="hero" id="home">
        <div class="hero__bg" aria-hidden="true"></div>
        <div class="hero__overlay" aria-hidden="true"></div>

        <div class="container hero__inner">
            <div class="hero__content">
                <h1 class="hero__title">Quality.<br>Built to Last.</h1>
                <div class="hero__sub-row">
                    <span class="hero__line" aria-hidden="true"></span>
                    <p class="hero__subtitle">
                        Floors &amp; Stone top quality installation and services &ndash; we proud
                        ourselves on great work and commutation.
                    </p>
                </div>
            </div>

            <div class="hero__cta">
                <a href="#contact" class="btn btn--outline">
                    <span>Request a Quote</span>
                    <?php include __DIR__ . '/includes/arrow.php'; ?>
                </a>
            </div>
        </div>
    </section>
    <!-- ========== END HERO ========== -->


    <!-- ============ ABOUT ============ -->
    <section class="about" id="about">
        <div class="container">

            <!-- Section label row -->
            <div class="section-label">
                <span class="section-label__badge">A</span>
                <span class="section-label__eyebrow">ABOUT US</span>
                <span class="section-label__rule" aria-hidden="true"></span>
            </div>

            <div class="about__grid">
                <!-- Text column -->
                <div class="about__text">
                    <h2 class="section-title">Floors &amp; Stone top quality installation and services</h2>

                    <div class="about__body">
                        <p>
                            Floors &amp; Stone and E Floors is ran by the same ownership and is women
                            owned. We work with GC&rsquo;s, builders, and home owners to provide quality
                            installation work for your flooring and stone countertop needs. We are
                            WBE/MBE certified. We handle &mdash; wood, tile, carpet, LVT, VCT, Stone
                            fabrication, custom cuts, mosaics, bullnose, one-off designs. We handle
                            everything in house to keep the consistent quality and control in our hands.
                        </p>
                        <p>
                            For projects outside the Midwest, E-Floors carries the same standards into
                            Arizona, Tennessee, and Kansas &mdash; so when your portfolio expands, your
                            flooring partner doesn&rsquo;t change. E-Floors is Arizona State Licensed and
                            BBB Accredited, supplied by the same chain, and held to the same install
                            standards as Floors &amp; Stone.
                        </p>
                    </div>

                    <a href="#contact" class="btn btn--outline btn--gold">
                        <span>Request a Quote</span>
                        <?php include __DIR__ . '/includes/arrow.php'; ?>
                    </a>
                </div>

                <!-- Media column -->
                <div class="about__media">
                    <img src="<?= BASE_URL ?>/assets/images/about-1.jpg" alt="Detailed view of a custom hardwood staircase" class="about__img">
                    <img src="<?= BASE_URL ?>/assets/images/about-2.jpg" alt="Floors &amp; Stone showroom interior" class="about__img">
                </div>
            </div>
        </div>
    </section>
    <!-- ========== END ABOUT ========== -->


    <!-- ============ SERVICES ============ -->
    <section class="services" id="services">
        <div class="container">

            <!-- Section label row -->
            <div class="section-label">
                <span class="section-label__badge">B</span>
                <span class="section-label__eyebrow">SERVICES</span>
                <span class="section-label__rule" aria-hidden="true"></span>
            </div>

            <h2 class="section-title services__title">Spec to your needs and the Quality to Last</h2>
            <p class="section-text services__lead">
                We install what the drawing calls for &mdash; and we install it like our name is on
                the warranty (because it is).
            </p>

            <!-- Large featured image with a card slider overlaid -->
            <div class="services__showcase">
                <div class="services__feature">
                    <img src="<?= BASE_URL ?>/assets/images/service-hardwood.jpg" alt="Featured flooring project" id="services-feature-img">
                </div>

                <div class="services__panel">
                    <div class="services__cards" id="services-cards">
                        <article class="service-card service-card--active" data-feature="<?= BASE_URL ?>/assets/images/service-hardwood.jpg">
                            <div class="service-card__media">
                                <img src="<?= BASE_URL ?>/assets/images/service-hardwood.jpg" alt="Hardwood flooring">
                            </div>
                            <div class="service-card__info">
                                <h3 class="service-card__title">Hardwood</h3>
                                <p class="service-card__desc">Solid and engineered, residential and commercial grade</p>
                            </div>
                        </article>

                        <article class="service-card" data-feature="<?= BASE_URL ?>/assets/images/service-tile.jpg">
                            <div class="service-card__media">
                                <img src="<?= BASE_URL ?>/assets/images/service-tile.jpg" alt="Tile flooring">
                            </div>
                            <div class="service-card__info">
                                <h3 class="service-card__title">Tile</h3>
                                <p class="service-card__desc">Porcelain, ceramic and natural stone, precision set</p>
                            </div>
                        </article>

                        <article class="service-card" data-feature="<?= BASE_URL ?>/assets/images/service-carpet.jpg">
                            <div class="service-card__media">
                                <img src="<?= BASE_URL ?>/assets/images/service-carpet.jpg" alt="Carpet flooring">
                            </div>
                            <div class="service-card__info">
                                <h3 class="service-card__title">Carpet</h3>
                                <p class="service-card__desc">Solid and engineered, residential and commercial grade</p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="services__nav">
                    <button class="services__arrow services__arrow--prev" type="button" aria-label="Previous service">
                        <svg class="arrow-ico" width="20" height="20" viewBox="0 0 13 13" fill="none" aria-hidden="true">
                            <path d="M0.707153 11.7072L11.7072 0.707154" stroke="currentColor" stroke-linecap="square"/>
                            <path d="M3.70715 0.707153H11.7072" stroke="currentColor" stroke-linecap="square"/>
                            <path d="M11.7072 8.70715L11.7072 0.707153" stroke="currentColor" stroke-linecap="square"/>
                        </svg>
                    </button>
                    <button class="services__arrow services__arrow--next" type="button" aria-label="Next service">
                        <svg class="arrow-ico" width="20" height="20" viewBox="0 0 13 13" fill="none" aria-hidden="true">
                            <path d="M0.707153 11.7072L11.7072 0.707154" stroke="currentColor" stroke-linecap="square"/>
                            <path d="M3.70715 0.707153H11.7072" stroke="currentColor" stroke-linecap="square"/>
                            <path d="M11.7072 8.70715L11.7072 0.707153" stroke="currentColor" stroke-linecap="square"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== END SERVICES ========== -->


    <!-- ============ STONE WORK / FABRICATION ============ -->
    <section class="fabrication" id="stone-work">
        <div class="container">

            <!-- Section label row -->
            <div class="section-label">
                <span class="section-label__badge">C</span>
                <span class="section-label__eyebrow">FABRICATION</span>
                <span class="section-label__rule" aria-hidden="true"></span>
            </div>

            <h2 class="section-title fabrication__title">Stone Work Built to Last &mdash; Fabricated In-House</h2>
            <p class="section-text fabrication__lead">
                Our fabrication shop is in-house. That means tighter timelines, tighter tolerances,
                and a single point of accountability when something needs to get fixed.
            </p>

            <div class="fab-list">
                <?php
                $fabItems = [
                    'Stone fabrication and installation' => 'Slab to set, all under one roof. We template, cut, and install granite, quartz, and marble so every seam, overhang, and edge lines up the way the drawing called for.',
                    'Countertop installation' => 'Kitchens, vanities, and commercial surfaces measured on site and dry-fit before they ever leave the shop &mdash; so install day is clean, level, and on schedule.',
                    'Custom cutting &amp; design' => 'Sinks, cooktops, radius corners, and one-off profiles cut to spec. If you can spec it, we can fabricate it to tolerance.',
                    'Mosaics' => 'Detailed mosaic and inlay work for floors, walls, and feature surfaces &mdash; laid out and dry-set so the pattern reads true before it&rsquo;s ever fixed.',
                    'Bullnose edging' => 'Clean, consistent bullnose and finished edges on stair treads, thresholds, and countertops, profiled and polished in-house.',
                    'Thresholds' => 'Custom stone thresholds and transitions cut to your openings &mdash; the right height, the right finish, no gaps between materials.',
                ];
                foreach ($fabItems as $item => $fabText):
                ?>
                    <div class="fab-row">
                        <h3 class="fab-row__title"><?= $item ?></h3>
                        <p class="fab-row__text"><?= $fabText ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- ========== END STONE WORK ========== -->


    <!-- ============ BUILDERS CTA BANNER (full-bleed) ============ -->
    <section class="cta-banner" id="builders">
        <div class="cta-banner__overlay" aria-hidden="true"></div>
        <div class="cta-banner__content">
            <h2 class="cta-banner__title">Custom-capable flooring and stone for the GCs and builders.</h2>
            <a href="#contact" class="btn btn--filled">
                <span>Request a Quote</span>
                <?php include __DIR__ . '/includes/arrow.php'; ?>
            </a>
        </div>
    </section>
    <!-- ========== END BUILDERS CTA BANNER ========== -->


    <!-- ============ WHY US ============ -->
    <section class="why-us" id="why-us">
        <div class="container">

            <div class="section-label">
                <span class="section-label__badge">D</span>
                <span class="section-label__eyebrow">WHY US?</span>
                <span class="section-label__rule" aria-hidden="true"></span>
            </div>

            <h2 class="section-title why-us__title">Why Go With Us?</h2>

            <div class="why-us__grid">
                <div class="why-col">
                    <h3 class="why-col__title">Quality You Can Stand On</h3>
                    <p class="why-col__text">
                        Tight tolerances, in-house fabrication, and crews with 25+ years of experience
                        who know and understand the process of your needs. From subfloor prep to the
                        final polished edge, we control every step so the finished work holds up to the
                        daily wear it was built for &mdash; and looks the way you spec&rsquo;d it years
                        down the road.
                    </p>
                </div>

                <div class="why-col">
                    <h3 class="why-col__title">Located in Six States</h3>
                    <p class="why-col__text">
                        Chicagoland, Wisconsin, and Indiana through Floors &amp; Stone. Arizona,
                        Tennessee, and Kansas through our subsidiary E-Floors. One relationship. One
                        quality standard. Wherever your project goes, no need to find another
                        subcontractor.
                    </p>
                </div>

                <div class="why-col">
                    <h3 class="why-col__title">WBE/MBE Certified</h3>
                    <p class="why-col__text">
                        Floors &amp; Stone is a women-owned business, certified as both a Women&rsquo;s
                        Business Enterprise (WBE) and Minority Business Enterprise (MBE). That makes us
                        a partner you can count toward diversity and inclusion goals on public and
                        private projects &mdash; without giving up an ounce of the quality or
                        accountability your job demands.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== END WHY US ========== -->


    <!-- ============ SERVICE AREA ============ -->
    <section class="service-area" id="service-area">
        <div class="container">

            <div class="section-label">
                <span class="section-label__badge">E</span>
                <span class="section-label__eyebrow">SERVICE AREA</span>
                <span class="section-label__rule" aria-hidden="true"></span>
            </div>

            <div class="service-area__showcase">
                <div class="service-area__map">
                    <?php include __DIR__ . '/includes/us-map.svg'; ?>
                </div>

                <div class="service-area__box">
                    <div class="sa-group">
                        <h3 class="sa-group__title">Midwest &mdash; Floors &amp; Stone</h3>
                        <p class="sa-group__locations">Chicagoland &middot; Wisconsin &middot; Indiana</p>
                    </div>
                    <div class="sa-group">
                        <h3 class="sa-group__title">Sun Belt and Heartland &mdash; E-Floors (our subsidiary)</h3>
                        <p class="sa-group__locations">Arizona &middot; Nashville, Tennessee &middot; Kansas</p>
                    </div>
                    <p class="sa-desc">
                        E-Floors is Arizona State Licensed and BBB Accredited, run by the same
                        ownership, supplied by the same chain, and held to the same install standards
                        as Floors &amp; Stone. When your portfolio crosses state lines, your flooring
                        sub doesn&rsquo;t have to.
                    </p>
                    <a href="#contact" class="btn btn--outline btn--gold">
                        <span>Request a Quote</span>
                        <?php include __DIR__ . '/includes/arrow.php'; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== END SERVICE AREA ========== -->

<?php require __DIR__ . '/includes/footer.php'; ?>
