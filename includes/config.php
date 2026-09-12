<?php
/**
 * VijAI · site configuration. thevijai.com
 * One file, every constant. Change it here and it changes on all 59 pages.
 * Rule Book Edition 1.6.
 */

define('VIJAI_BASE',      'https://thevijai.com');
define('VIJAI_GA4',       'G-SF6XPJ1NT5');            // Rule 3.2.6 · locked 7 Sep 2026
define('VIJAI_BITRIX',    'inline/240/c6o8ek');       // Rule 3.2.8 · the only permitted form
define('VIJAI_INTERAKT',  'iiDGsTOgtTbXcKt9VozbwZlbpIQz1E8A'); // Rule 3.5.25 · the only WhatsApp
define('VIJAI_EMAIL',     'connect@groupvb.com');     // Rule 3.5 · the only email on the site
define('VIJAI_OG_DEFAULT','/og/vijai-home-1200x630.png');

/** Absolute URL from a site-root path. */
function vijai_url($path = '/') {
  return rtrim(VIJAI_BASE, '/') . '/' . ltrim($path, '/');
}

/** Escape for HTML attributes and text. */
function e($s) {
  return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Emit one JSON-LD block from an array. */
function vijai_ld(array $data) {
  echo '<script type="application/ld+json">',
       json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
       "</script>\n";
}
