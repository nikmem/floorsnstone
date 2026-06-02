    </main>

    <!-- ============ CONTACT / FOOTER ============ -->
    <footer class="site-footer" id="contact">
        <div class="container">

            <!-- Section label row (continues the lettered sequence) -->
            <div class="section-label">
                <span class="section-label__badge">F</span>
                <span class="section-label__eyebrow">CONTACT</span>
                <span class="section-label__rule" aria-hidden="true"></span>
            </div>

            <div class="contact__grid">

                <!-- Left: pitch, details, brand block -->
                <div class="contact__info">
                    <h2 class="section-title contact__title">Got a Project? Let&rsquo;s Price It.</h2>
                    <p class="contact__lead">
                        Inquires response within 24 hours. Send us the scope, the location, and the timeline
                    </p>

                    <dl class="contact__details">
                        <div class="contact__detail">
                            <dt>Office:</dt>
                            <dd><a href="tel:<?= preg_replace('/[^0-9+]/', '', SITE_PHONE) ?>"><?= htmlspecialchars(SITE_PHONE) ?></a></dd>
                        </div>
                        <div class="contact__detail">
                            <dt>Email:</dt>
                            <dd><a href="mailto:<?= htmlspecialchars(SITE_EMAIL) ?>"><?= htmlspecialchars(SITE_EMAIL) ?></a></dd>
                        </div>
                        <div class="contact__detail">
                            <dt>Hours:</dt>
                            <dd><?= htmlspecialchars(SITE_HOURS) ?></dd>
                        </div>
                        <p class="contact__note">By appointment only.</p>
                    </dl>

                    <div class="contact__brand">
                        <img class="contact__logo"
                             src="<?= BASE_URL ?>/assets/images/fslogo-footer.svg"
                             alt="<?= htmlspecialchars(SITE_NAME) ?>"
                             width="170" height="54">
                        <p class="contact__brand-text">
                            Custom-capable flooring and stone for the GCs and builders. WBE/MBE certified.
                            Six states covered.
                        </p>

                        <div class="contact__meta">
                            <p class="contact__copy">&copy; <?= date('Y') ?> All Rights Reserved</p>
                            <ul class="social">
                                <?php foreach ($SOCIAL_LINKS as $social): ?>
                                    <li>
                                        <a class="social__link" href="<?= htmlspecialchars($social['href']) ?>"
                                           aria-label="<?= htmlspecialchars($social['label']) ?>">
                                            <?php include __DIR__ . '/social-icons.php'; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right: quote form -->
                <div class="contact__form-wrap">
                    <form class="contact-form" action="#" method="post" novalidate>
                        <div class="contact-form__row">
                            <label class="field">
                                <span class="field__label">Name</span>
                                <input type="text" name="name" placeholder="Name" autocomplete="name">
                            </label>
                            <label class="field">
                                <span class="field__label">Company</span>
                                <input type="text" name="company" placeholder="Company" autocomplete="organization">
                            </label>
                        </div>

                        <div class="contact-form__row">
                            <label class="field">
                                <span class="field__label">Phone</span>
                                <input type="tel" name="phone" placeholder="Phone" autocomplete="tel">
                            </label>
                            <label class="field">
                                <span class="field__label">Email</span>
                                <input type="email" name="email" placeholder="Email" autocomplete="email">
                            </label>
                        </div>

                        <label class="field">
                            <span class="field__label">Project location</span>
                            <input type="text" name="location" placeholder="Project location">
                        </label>

                        <div class="contact-form__row">
                            <label class="field field--select">
                                <span class="field__label">Scope</span>
                                <select name="scope" required>
                                    <option value="" disabled selected>Scope</option>
                                    <?php foreach ($SCOPE_OPTIONS as $opt): ?>
                                        <option value="<?= htmlspecialchars($opt) ?>"><?= htmlspecialchars($opt) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </label>
                            <label class="field">
                                <span class="field__label">Timeline</span>
                                <input type="text" name="timeline" placeholder="Timeline">
                            </label>
                        </div>

                        <label class="field">
                            <span class="field__label">Details</span>
                            <textarea name="details" rows="5" placeholder="Details"></textarea>
                        </label>

                        <button type="submit" class="btn btn--outline btn--gold contact-form__submit">
                            <span>SUBMIT</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Back-to-top -->
        <a class="to-top" href="#home" aria-label="Back to top">
            <svg width="14" height="14" viewBox="0 0 13 13" fill="none" aria-hidden="true">
                <path d="M6.5 12.5V1" stroke="currentColor" stroke-linecap="square"/>
                <path d="M1 6.5 6.5 1 12 6.5" stroke="currentColor" stroke-linecap="square"/>
            </svg>
        </a>
    </footer>
    <!-- ========== END CONTACT / FOOTER ========== -->

    <script src="<?= BASE_URL ?>/assets/js/main.js"></script>
</body>
</html>
