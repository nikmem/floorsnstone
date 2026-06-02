<?php
/**
 * Global site configuration.
 * Central place for site-wide values so they can be reused across pages
 * and updated in one spot as the site grows.
 */

// Site identity
define('SITE_NAME', 'Floors & Stone');
define('SITE_TAGLINE', 'Quality. Built to Last.');

// Contact details (used in header CTA, footer, and contact form)
define('SITE_PHONE', '(847) 452-0300');
define('SITE_EMAIL', 'placeholder@floors-and-stones.com');
define('SITE_HOURS', 'Monday–Friday, 7:00 AM – 3:30 PM');

// Base URL helper so asset/links work regardless of subfolder deployment.
$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
define('BASE_URL', $scriptDir === '' ? '' : $scriptDir);

/**
 * Primary navigation, split around the centered logo to match the design.
 * 'href' values are anchors for the single-page layout for now;
 * swap to real page URLs when more pages are added.
 */
$NAV_LEFT = [
    ['label' => 'About',      'href' => '#about'],
    ['label' => 'Services',   'href' => '#services'],
    ['label' => 'Fabrication', 'href' => '#stone-work'],
];

$NAV_RIGHT = [
    ['label' => 'Why Us',       'href' => '#why-us'],
    ['label' => 'Service Area', 'href' => '#service-area'],
    ['label' => 'Contact Us',   'href' => '#contact'],
];

// Combined list for the mobile menu and footer.
$NAV_LINKS = array_merge($NAV_LEFT, $NAV_RIGHT);

/**
 * Social profiles shown in the footer. 'icon' maps to an inline SVG below.
 * Swap '#' for real profile URLs as they become available.
 */
$SOCIAL_LINKS = [
    ['label' => 'Facebook', 'href' => '#', 'icon' => 'facebook'],
    ['label' => 'LinkedIn', 'href' => '#', 'icon' => 'linkedin'],
    ['label' => 'X',        'href' => '#', 'icon' => 'x'],
    ['label' => 'YouTube',  'href' => '#', 'icon' => 'youtube'],
];

// Options for the contact form's Scope dropdown.
$SCOPE_OPTIONS = [
    'Hardwood', 'Tile', 'Carpet', 'LVT / VCT',
    'Stone fabrication', 'Countertops', 'Custom / other',
];
