# About Section · Phase B Wave About · DEPLOY NOW (17 Jun 2026)

**Status:** APPROVED · LOCKED · ready for production deploy on vbengg.com

## What's in this bundle

5 cinematic standalone landing pages for the /about/ section, each inheriting the locked About v4.0 visual register:

| # | File | Live URL after deploy | Hero theme |
|---|---|---|---|
| 1 | `about/heritage/index.html` | https://vbengg.com/about/heritage/ | From one office to 21 countries · stepladder timeline |
| 2 | `about/leadership/index.html` | https://vbengg.com/about/leadership/ | Every report carries a name · 8 named leaders |
| 3 | `about/engineering-method/index.html` | https://vbengg.com/about/engineering-method/ | Five disciplines, one named signature |
| 4 | `about/quality/index.html` | https://vbengg.com/about/quality/ | Three named signatures on every report |
| 5 | `about/careers/index.html` | https://vbengg.com/about/careers/ | The plants you grew up reading about, your name on the report |

## Deploy command (single line)

All assets (images, fonts, logos) are base64-embedded · no asset directory needed.

```
rsync -av VBE_Phase_B_Wave_About_DEPLOY/about/  prod:/var/www/vbengg.com/about/
```

## What's already wired (Edition 1.11 stack)

- **GTM-NDRGZJV** · head + noscript body on every page
- **GA4 G-QN2LJH6YR5** · gtag.js + 4 custom events (page_view, form_view, whatsapp_click, cta_scope_click)
- **Master Form A 230/wna9sd** · inline embed in cinematic CTA section with per-page UTM tagging
- **Bitrix Live Chat 10/uejvnm** · positioned 100px above Kiwi
- **Interakt/Kiwi WhatsApp SDK** · key `iiDGsTOgtTbXcKt9VozbwZlbpIQz1E8A` on every page

## Special routing (Careers page)

The Careers page (`/about/careers/`) has its role-card Apply buttons + cinematic CTA routed to:
```
https://careers.vbengg.com/  (opens in new tab, rel="noopener")
```
Form A in the cinematic CTA section still captures leads via Bitrix · the Apply buttons are funnelled to the live careers portal.

## Sitemap entries to add

```xml
<url><loc>https://vbengg.com/about/heritage/</loc><lastmod>2026-06-17</lastmod><priority>0.7</priority></url>
<url><loc>https://vbengg.com/about/leadership/</loc><lastmod>2026-06-17</lastmod><priority>0.8</priority></url>
<url><loc>https://vbengg.com/about/engineering-method/</loc><lastmod>2026-06-17</lastmod><priority>0.7</priority></url>
<url><loc>https://vbengg.com/about/quality/</loc><lastmod>2026-06-17</lastmod><priority>0.7</priority></url>
<url><loc>https://vbengg.com/about/careers/</loc><lastmod>2026-06-17</lastmod><priority>0.7</priority></url>
```

## Post-deploy verification

Run within 24 hours of deploy:
1. Visit each of the 5 URLs · confirm 200 OK + hero animation + photos load
2. Confirm Form A renders inline in each cinematic CTA · submit a test lead per page · confirm UTM payload in Bitrix CRM (utm_source_page distinguishes pages)
3. Confirm Bitrix Live Chat widget renders bottom right
4. Confirm Kiwi WhatsApp widget renders 100px above Live Chat
5. Confirm GTM dataLayer fires page_view, form_view, whatsapp_click, cta_scope_click
6. **Heritage page specifically**: scroll to the timeline section and confirm the 5 cards visibly climb diagonally from baseline (2014) to -208px (2026) with numbered step badges and the orange diagonal rail behind them
7. **Leadership page specifically**: confirm the 8-leader grid renders with no honorifics (no Sri./Dr.) and no credential codes (no CEng/MIE/FIE/MIET)
8. **Careers page specifically**: click any Apply button · confirm it opens https://careers.vbengg.com/ in a new tab
9. Run Schema.org structured data validator on each URL · confirm 7+ JSON-LD schemas valid per page
10. Run Lighthouse SEO + accessibility audit · target 95+

## Per-page content summary

| Page | Key sections | Form A UTM |
|---|---|---|
| Heritage | Hero · counter wall · 5-card stepladder timeline (2014→2026) · Founder's promise · 25-client marquee · CTA | utm_source_page=/about/heritage/ |
| Leadership | Hero · counter wall · signature flow · 8-leader grid (1-3-4 layout, photo+name+role+LinkedIn only) · 25-client marquee · CTA | utm_source_page=/about/leadership/ |
| Engineering Method | Hero · counter wall · 5-discipline grid · Verification Stack (ElecTwin + Wistwin) · 25-client marquee · CTA | utm_source_page=/about/engineering-method/ |
| Quality | Hero · counter wall · 3-card sign-off flow · 4-card ISO certifications · Independent Review · 25-client marquee · CTA | utm_source_page=/about/quality/ |
| Careers | Hero · counter wall · Why VB strip (4 cards) · 15-position jumbled role grid (5 disciplines × 3 levels) · 25-client marquee · CTA | utm_source_page=/about/careers/ |

## Discipline holds (verified across all 5 pages)

- 0 em-dashes (—) anywhere
- 0 prices · 0 currency symbols
- 0 honorifics (no Sri./Dr. prefixes on names · except the Dr. Reddy's Laboratories client logo)
- 0 credentials displayed (no CEng/MIE/FIE/MIET/MBA/PhD/IIT Kharagpur)
- 0 founding-year inconsistencies · all reference 2014 (correction from 2008 made 17 Jun 2026)
- 0 forbidden client brands · 25-client verified roster only
- §17.8 visible breadcrumb on every page (3-level: Home › About › {leaf})
- Edition 1.11 stack baked

## Provenance

| Page | Source file | CEO sign-off |
|---|---|---|
| Heritage v5 | VBE_About_Heritage_v5_APPROVED.html | 17 Jun 2026 |
| Leadership v6 | VBE_About_Leadership_v6_APPROVED.html | 17 Jun 2026 (founding-year corrected from v5 lock) |
| Engineering Method v1 | VBE_About_Engineering_Method_v1_APPROVED.html | 17 Jun 2026 (batch-approved) |
| Quality v1 | VBE_About_Quality_v1_APPROVED.html | 17 Jun 2026 (batch-approved) |
| Careers v8 | VBE_About_Careers_v8_APPROVED.html | 17 Jun 2026 |

— VB Engineering · 17 Jun 2026
