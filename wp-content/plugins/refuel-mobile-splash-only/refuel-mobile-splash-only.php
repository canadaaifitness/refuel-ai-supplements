<?php
/**
 * Plugin Name: Refuel Mobile Splash Only Fix
 * Description: Hides the faulty Refuel AI Supplements app splash without changing the active theme.
 * Version: 1.0.0
 * Author: Refuel AI Supplements
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_head', static function () {
    // The old theme can add .show after this CSS loads. Keep this one overlay
    // hidden without touching the storefront, page loader, or color palette.
    echo '<style id="refuel-mobile-splash-only-fix">#v6Splash{display:none!important;visibility:hidden!important;opacity:0!important;pointer-events:none!important}</style>';
}, 10000);
