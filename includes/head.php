<?php
/**
 * VijAI shared <head> · Rule Book 4.1, in order.
 * Every page sets $page BEFORE requiring this file. See page-template.php.
 *
 *   title        60 chars or fewer, keyword in the first half
 *   description  150 to 160 chars, states the outcome, carries one number
 *   path         site-root path, e.g. '/ppeai'
 *   og_image     optional, defaults to the site card
 *   css          page stylesheets, loaded after the chrome sheet
 *   js           page scripts, loaded after the chrome script
 *   schema       extra raw JSON-LD blocks for this page
 *   modified     YYYY-MM-DD, feeds dateModified
 */
require_once __DIR__ . '/config.php';

$page = isset($page) && is_array($page) ? $page : [];
$page += [
  'title'       => 'VijAI · AI Vigilance on Existing CCTV for Industrial Safety',
  'description' => '',
  'path'        => '/',
  'og_image'    => VIJAI_OG_DEFAULT,
  'css'         => [],
  'js'          => [],
  'schema'      => [],
  'robots'      => 'index, follow, max-image-preview:large, max-snippet:-1',
  'published'   => '2026-09-09',
  'modified'    => date('Y-m-d'),
];
$canonical = vijai_url($page['path']);
?><!doctype html>
<html lang="en-IN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<meta property="og:type" content="website">
<meta property="og:site_name" content="VijAI">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#050B12">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SF6XPJ1NT5"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('consent','default',{'ad_storage':'denied','analytics_storage':'denied','ad_user_data':'denied','ad_personalization':'denied'});gtag('js',new Date());gtag('config','G-SF6XPJ1NT5');</script>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=IBM+Plex+Mono:wght@400;500;600&display=swap">
<link rel="stylesheet" href="/assets/vijai/css/vijai-chrome.css">
<link rel="icon" href="/assets/vijai/img/favicon.png" sizes="any">
<link rel="icon" href="/assets/vijai/img/favicon.png" sizes="any">

<title><?= e($page['title']) ?></title>
<meta name="description" content="<?= e($page['description']) ?>">
<link rel="canonical" href="<?= e($canonical) ?>">
<meta name="robots" content="<?= e($page['robots']) ?>">

<meta property="og:title" content="<?= e($page['title']) ?>">
<meta property="og:description" content="<?= e($page['description']) ?>">
<meta property="og:image" content="<?= e(vijai_url($page['og_image'])) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta name="twitter:title" content="<?= e($page['title']) ?>">
<meta name="twitter:description" content="<?= e($page['description']) ?>">
<meta name="twitter:image" content="<?= e(vijai_url($page['og_image'])) ?>">

<script type="application/ld+json">{"@context": "https://schema.org", "@type": "Organization", "@id": "https://thevijai.com/#org", "name": "VijAI", "alternateName": ["Vijai", "vij.ai", "VijAI Vigilance AI"], "url": "https://thevijai.com/", "logo": "https://thevijai.com/images/vijai-logo.png", "foundingDate": "2014", "slogan": "Vigilance Redefined", "description": "Industrial AI vigilance platform running on a plant's existing CCTV. Nine detection modules for PPE, unsafe acts, fire and smoke, restricted zones, vehicles, machine guarding, intrusion and evacuation headcount.", "parentOrganization": {"@type": "Organization", "name": "VB Group", "url": "https://www.groupvb.com/"}, "areaServed": {"@type": "Country", "name": "India"}, "contactPoint": [{"@type": "ContactPoint", "contactType": "sales", "email": "connect@groupvb.com", "areaServed": "IN", "availableLanguage": ["en", "hi"]}]}</script>
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "WebSite", "@id": "https://thevijai.com/#website", "url": "https://thevijai.com/", "name": "VijAI", "publisher": {"@id": "https://thevijai.com/#org"}, "inLanguage": "en-IN"}</script>
<?php
vijai_ld([
  '@context'      => 'https://schema.org',
  '@type'         => 'WebPage',
  '@id'           => $canonical . '#webpage',
  'url'           => $canonical,
  'isPartOf'      => ['@id' => VIJAI_BASE . '/#website'],
  'about'         => ['@id' => VIJAI_BASE . '/#org'],
  'inLanguage'    => 'en-IN',
  'datePublished' => $page['published'],
  'dateModified'  => $page['modified'],
]);
foreach ($page['schema'] as $block) { echo $block, "\n"; }
foreach ($page['css'] as $href)    { echo '<link rel="stylesheet" href="', e($href), '">', "\n"; }
?>
</head>
<body>
