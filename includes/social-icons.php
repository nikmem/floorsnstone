<?php
/* Inline social glyphs — one balanced brand-mark set (same visual weight),
   selected by $social['icon']. fill=currentColor so each inherits the link
   colour and its hover state. Sizing/centring is handled in CSS. */
switch ($social['icon']):
    case 'facebook': ?>
        <svg class="social__ico" viewBox="0 0 320 512" fill="currentColor" aria-hidden="true">
            <path d="M80 299.3V512h116V299.3h86.5l18-97.8H196v-34.6c0-51.7 20.3-71.5 72.7-71.5 16.3 0 29.4.4 37 1.2V7.9C291.4 4 256.4 0 236.2 0 129.3 0 80 50.5 80 159.4v42.1H14v97.8h66z"/>
        </svg>
    <?php break;
    case 'linkedin': ?>
        <svg class="social__ico" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true">
            <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3z"/>
        </svg>
    <?php break;
    case 'x': ?>
        <svg class="social__ico" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true">
            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9zm-24.8 373.8h39.1L151.1 88h-42z"/>
        </svg>
    <?php break;
    case 'youtube': ?>
        <svg class="social__ico" viewBox="0 0 576 512" fill="currentColor" aria-hidden="true">
            <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.1 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zM232.1 337.6V175.2l142.7 81.2z"/>
        </svg>
    <?php break;
endswitch;
