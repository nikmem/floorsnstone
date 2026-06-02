<?php
require_once __DIR__ . '/config.php';

// Allow each page to set its own <title>/description; fall back to site defaults.
$pageTitle       = $pageTitle       ?? SITE_NAME . ' — ' . SITE_TAGLINE;
$pageDescription = $pageDescription ?? SITE_TAGLINE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body>
    <header class="site-header" id="site-header">
        <div class="container site-header__inner">

            <!-- Left nav (desktop) -->
            <nav class="nav nav--left" aria-label="Primary">
                <ul class="nav__list">
                    <?php foreach ($NAV_LEFT as $link): ?>
                        <li><a class="nav__link" href="<?= htmlspecialchars($link['href']) ?>"><?= htmlspecialchars($link['label']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- Centered brand -->
            <a class="brand" href="<?= BASE_URL ?>/index.php#home" aria-label="<?= htmlspecialchars(SITE_NAME) ?> home">
                <img src="<?= BASE_URL ?>/assets/images/logo-white.png" alt="<?= htmlspecialchars(SITE_NAME) ?>" class="brand__logo">
            </a>

            <!-- Right nav (desktop) -->
            <nav class="nav nav--right" aria-label="Secondary">
                <ul class="nav__list">
                    <?php foreach ($NAV_RIGHT as $link): ?>
                        <li><a class="nav__link" href="<?= htmlspecialchars($link['href']) ?>"><?= htmlspecialchars($link['label']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- Mobile hamburger -->
            <button class="nav-toggle" id="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
                <span class="nav-toggle__bar"></span>
                <span class="nav-toggle__bar"></span>
                <span class="nav-toggle__bar"></span>
            </button>
        </div>
    </header>

    <!-- Mobile slide-in menu — kept OUTSIDE <header> so its position:fixed is
         relative to the viewport. (The scrolled header uses backdrop-filter,
         which would otherwise become the containing block and clip this.) -->
    <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile">
        <ul class="mobile-nav__list">
            <?php foreach ($NAV_LINKS as $link): ?>
                <li><a class="mobile-nav__link" href="<?= htmlspecialchars($link['href']) ?>"><?= htmlspecialchars($link['label']) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <main id="main">
