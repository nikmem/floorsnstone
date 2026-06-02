<?php
/* Inline social glyphs. Selected by $social['icon']; fill=currentColor so
   each icon inherits the link colour (and its hover state). */
switch ($social['icon']):
    case 'facebook': ?>
        <svg class="social__ico" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M14 9h3V6h-3c-2.2 0-4 1.8-4 4v2H8v3h2v7h3v-7h3l.5-3H13v-2c0-.6.4-1 1-1z"/>
        </svg>
    <?php break;
    case 'linkedin': ?>
        <svg class="social__ico" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M6.94 7.5a1.94 1.94 0 1 1 0-3.88 1.94 1.94 0 0 1 0 3.88zM5.4 9h3.1v11.4H5.4V9zm5.3 0h2.97v1.56h.04c.41-.78 1.42-1.6 2.93-1.6 3.13 0 3.71 2.06 3.71 4.74v6.7h-3.1v-5.94c0-1.42-.02-3.24-1.97-3.24-1.98 0-2.28 1.54-2.28 3.13v6.05h-3.1V9z"/>
        </svg>
    <?php break;
    case 'x': ?>
        <svg class="social__ico" width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M18.24 3h3.3l-7.2 8.23L22.8 21h-6.62l-5.19-6.78L4.99 21H1.68l7.7-8.8L1.2 3h6.79l4.69 6.2L18.24 3zm-1.16 16h1.83L7.01 4.9H5.05L17.08 19z"/>
        </svg>
    <?php break;
    case 'youtube': ?>
        <svg class="social__ico" width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M21.6 7.2a2.5 2.5 0 0 0-1.76-1.77C18.28 5 12 5 12 5s-6.28 0-7.84.43A2.5 2.5 0 0 0 2.4 7.2 26 26 0 0 0 2 12a26 26 0 0 0 .4 4.8 2.5 2.5 0 0 0 1.76 1.77C5.72 19 12 19 12 19s6.28 0 7.84-.43a2.5 2.5 0 0 0 1.76-1.77A26 26 0 0 0 22 12a26 26 0 0 0-.4-4.8zM10 15V9l5.2 3-5.2 3z"/>
        </svg>
    <?php break;
endswitch;
