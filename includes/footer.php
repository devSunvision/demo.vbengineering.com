<?php
/**
 * VijAI footer v5 · CLOSED SPEC, CR-02 applied. Closes <body> and <html>.
 * Contact block carries only the three permitted modes · Rule 3.5.
 * No telephone number. No second email. No third-party widget.
 * Loads the chrome script, then any page scripts declared in $page['js'].
 */
require_once __DIR__ . '/config.php';
?>
<footer class="ft"><div class="ftin">
  <div class="ftg">
    <div><a href="/" aria-label="VijAI home"><img src="/assets/vijai/img/vijai-8189ec60.png" alt="VijAI" width="130" height="93"></a>
      <p class="est">Since 2014</p>
      <p class="fttag">Vigilance Redefined</p>
      <p class="ftd">AI vigilance on the cameras already in your plant. No new hardware.</p>
      <span class="mii">Made in India</span>
      <p class="vbg">A <a href="https://www.groupvb.com/">VB Group</a> product</p></div>
    <div><p class="fth">Modules</p><ul>
      <li><a href="/ppeai">PPEAI</a></li><li><a href="/safeai">SAFEAI</a></li><li><a href="/gesteai">GESTEAI</a></li>
      <li><a href="/guardai">GUARDAI</a></li><li><a href="/zoneai">ZONEAI</a></li><li><a href="/fireai">FIREAI</a></li>
      <li><a href="/driveai">DRIVEAI</a></li><li><a href="/pulseai">PULSEAI</a></li><li><a href="/secureai">SECUREAI</a></li></ul></div>
    <div><p class="fth">Industries</p><ul>
      <li><a href="/ai-safety-pharmaceutical-plants-india">Pharmaceutical</a></li><li><a href="/ai-safety-warehousing-logistics-india">Warehousing and logistics</a></li>
      <li><a href="/ai-safety-mining-india">Mining</a></li><li><a href="/ai-safety-chemical-plants-india">Chemical</a></li>
      <li><a href="/ai-safety-steel-plants-india">Steel and heavy</a></li><li><a href="/ai-safety-cement-plants-india">Cement</a></li>
      <li><a href="/ai-safety-ports-terminals-india">Ports</a></li><li><a href="/ai-safety-power-renewables-india">Power and renewables</a></li></ul></div>
    <div><p class="fth">Resources</p><ul>
      <li><a href="/osh-code-2020-safety-officer-requirement">OSH Code 2020</a></li><li><a href="/is-cctv-monitoring-of-employees-legal-in-india">Is CCTV monitoring legal in India</a></li>
      <li><a href="/form-21-accident-report">Form 21 accident report</a></li><li><a href="/safety-audit-checklist">Safety audit checklist</a></li>
      <li><a href="/compare-ai-safety-platforms-india">Compare VijAI</a></li><li><a href="/pricing">Pricing</a></li>
      <li><a href="/about">About</a></li><li><a href="/contact">Contact</a></li></ul></div>
  </div>
  <div class="ftbot">
    <span>© 2026 Vijaya Bhanu Digital Transformations Pvt Ltd</span>
    <span class="lg"><a href="/privacy-policy">Privacy</a><a href="/terms-of-use">Terms</a><a href="/cookie-settings">Cookie settings</a><a href="/worker-monitoring-notice">Worker monitoring</a></span>
  </div>
</div></footer>
<!-- WhatsApp · Interakt (Kiwi SDK). Rule 3.5.25 · the only permitted WhatsApp integration -->
<script>
(function(w,d){
  w.KiwiObject='kiwi';
  w.kiwi=w.kiwi||function(){ (w.kiwi.q=w.kiwi.q||[]).push(arguments); };
  function boot(){
    var s=d.createElement('script'); s.async=true;
    s.src='https://app.interakt.ai/kiwi-sdk/kiwi-sdk-17-prod-min.js?v=1';
    s.onload=function(){ if(w.kiwi&&w.kiwi.init) w.kiwi.init({appId:'iiDGsTOgtTbXcKt9VozbwZlbpIQz1E8A'}); };
    d.body.appendChild(s);
  }
  if(d.readyState==='complete') boot(); else w.addEventListener('load',boot);
})(window,document);
</script>

<script src="/assets/vijai/js/vijai-chrome.js" defer></script>
<?php foreach (($page['js'] ?? []) as $src): ?>
<script src="<?= e($src) ?>" defer></script>
<?php endforeach; ?>
</body>
</html>
