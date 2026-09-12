<?php
/**
 * thevijai.com · CAPA for a gowning deviation. Register 03 of 59.
 * PPEAI · L3 Deliverable · T3 · Buyer B, the QA Head · Pharma · wave 1.
 *
 * BUILT AGAINST THE APPROVED T3 TEMPLATE, _APPROVED/t3-template-2026-09-11/.
 * Page proposal approved by the CEO 11 September 2026:
 *   hero animation  IN
 *   C14 band        IN · four QA-head lines, drafted and corrected by him
 *   number band     OUT · site figures say nothing about a CAPA
 *   evidence        IN
 *   media band      IN · CR-31, 11 September 2026. The CEO supplied the original
 *                   PPEAI gowning film from a pharma deployment. VB's own channel,
 *                   so CR-17 is not engaged. Portrait, 9:16.
 *
 * Copy is locked by Register 03 and by that proposal. A word change needs a new
 * sheet and a new date · CR-18.
 */
$page = [
  'title'       => 'CAPA for a Gowning Deviation · Format and Example | VijAI',
  'description' => 'Retraining no longer clears a gowning deviation. The ten-field CAPA format, one full worked example, and the five things that get a written response sent back.',
  'path'        => '/gowning-deviation-capa-format',
  'og_title'    => 'The CAPA that retraining no longer satisfies',
  'og_image'    => '/og/vijai-home-1200x630.png',
  'css'         => ['/assets/vijai/css/vijai-base.css'],   // chrome -> base -> page. No page-unique CSS needed yet
  'js'          => ['/assets/vijai/js/vijai-t3hero.js'],
  'modified'    => '2026-09-11',
  'schema'      => [
    <<<'LD'
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://thevijai.com/"},{"@type":"ListItem","position":2,"name":"Solutions","item":"https://thevijai.com/solutions"},{"@type":"ListItem","position":3,"name":"CAPA for a gowning deviation","item":"https://thevijai.com/gowning-deviation-capa-format"}]}</script>
LD,
    <<<'LD'
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Is retraining still acceptable as a CAPA?","acceptedAnswer":{"@type":"Answer","text":"Retraining remains a valid correction. It is increasingly rejected as the whole corrective action, because a training record shows who attended, not what happened at the airlock afterwards."}},{"@type":"Question","name":"What evidence does an inspector expect for supervisory oversight?","acceptedAnswer":{"@type":"Answer","text":"Something contemporaneous, attributable and covering the period in question rather than a sample day."}},{"@type":"Question","name":"Does this apply to contractors and visitors?","acceptedAnswer":{"@type":"Answer","text":"Yes. Revised Schedule M Part I clause 11.5.8 extends the duty to all persons entering production areas, including contractors' employees, visitors, senior managers and inspectors."}},{"@type":"Question","name":"Can a camera-based record replace microbial monitoring?","acceptedAnswer":{"@type":"Answer","text":"No. EU GMP Annex 1 section 7.4 requires both visual and microbial assessment. A camera addresses the visual half."}},{"@type":"Question","name":"Do we need new cameras in the change room?","acceptedAnswer":{"@type":"Answer","text":"Not in the change room. The standard position is the final door into the classified area, viewed from the clean side."}}]}</script>
LD,
    <<<'LD'
<script type="application/ld+json">{"@context":"https://schema.org","@type":"HowTo","name":"How to write a CAPA for a gowning deviation","description":"The ten fields a gowning deviation CAPA record contains, and the order they are completed in.","totalTime":"P15D","step":[{"@type":"HowToStep","position":1,"name":"Record the observation as written","text":"Copy the observation verbatim, with the date, the area and the grade of the area it was written about."},{"@type":"HowToStep","position":2,"name":"Contain","text":"State what was done immediately: personnel stood down, batch impact assessed, product disposition recorded."},{"@type":"HowToStep","position":3,"name":"Assess the batch","text":"State whether the affected batches were reviewed and what the review concluded, with the batch numbers."},{"@type":"HowToStep","position":4,"name":"Investigate the condition, not the person","text":"Record what made the deviation possible: airlock time under schedule pressure, an unfamiliar visitor, a grade change at an adjacent door."},{"@type":"HowToStep","position":5,"name":"Establish extent","text":"State how many entries in the period were checked, by whom, and against what."},{"@type":"HowToStep","position":6,"name":"Corrective action","text":"State the system change, not the training date. Name what will now happen at the door on every shift."},{"@type":"HowToStep","position":7,"name":"Preventive action","text":"State where else the same condition exists and what was changed there."},{"@type":"HowToStep","position":8,"name":"Effectiveness check","text":"Define the measure, the period and the acceptance criterion before the CAPA is closed."},{"@type":"HowToStep","position":9,"name":"Evidence attached","text":"List the records that support each claim above, with their identifiers."},{"@type":"HowToStep","position":10,"name":"Approval","text":"Quality approval, with the date, and the date the effectiveness check falls due."}]}</script>
LD,
  ],
];
require __DIR__ . '/includes/head.php';
$cta_popup = true;
require __DIR__ . '/includes/header.php';
?>

<!-- 02 · HERO · breadcrumb, H1, answer block, turnkey line, CTA 2, module animation -->
<section class="lt t3hero">
  <div class="w t3grid">
    <div>
      <nav class="crumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>/</span><a href="/solutions">Solutions</a><span>/</span><b>CAPA for a gowning deviation</b>
      </nav>
      <h1>The CAPA for a gowning deviation, when retraining is no longer accepted.</h1>
      <p class="t3ans">A CAPA for a gowning deviation is the corrective and preventive action a plant files after an inspection observation. In a 2024 warning letter to a plant in Maharashtra, retraining was rejected as the remedy and routine supervisory oversight of every production batch was asked for instead. Annex 1 reassesses gowning at 12-month intervals.</p>
      <p class="t3tk">Surveyed, installed and commissioned by our own engineers.<br><a href="#how-it-runs">Three deployment models</a>, and nobody is subcontracted.</p>
      <p class="ctarow"><?php require __DIR__ . '/includes/cta-b24.php'; ?></p>
    </div>
    <div class="t3stage">
      <canvas id="t3hero" data-door="GRADE B AIRLOCK" data-check="GOWNING" data-record="ENTRY RECORDED"
              width="640" height="460" role="img"
              aria-label="Illustration of a gowning check at the final door into a classified area, writing one record for each entry"></canvas>
      <span class="t3cap">Illustration · the check at the final door</span>
    </div>
  </div>
</section>

<!-- 03 · CLIENT RIBBON · shared include, rule 4.2.11a -->
<?php require __DIR__ . '/includes/ribbon.php'; ?>

<!-- 04 · C14 RECOGNITION BAND · IN, per the approved page proposal.
     The four lines are the QA head's, drafted 11 Sep and corrected by the CEO.
     Rakshak appears here and NOWHERE ELSE on a buyer page · R02-D6 ruling. -->
<?php
$c14 = [
  'kicker'  => '01',
  'eyebrow' => 'In their words',
  'heading' => 'Have you already had this conversation?',
  'sub'     => 'Nobody types these into a search box. They are what the job sounds like, and none of them is a failure of a person.',
  'items'   => [
    [
      'line'    => 'The inspector asked how many entries we had checked. I had a training register.',
      'why'     => 'Nobody was ever asked to count entries before the observation was written, so the plant holds the record it was told to keep. A training register proves attendance on an afternoon. The question being asked is about a period, and no system in the building was producing that number.',
      'control' => 'Every entry through the door is checked and the check is recorded.',
    ],
    [
      'line'    => 'We wrote retraining completed, and it came back the same week.',
      'why'     => 'Retraining was the accepted answer for years and it closed hundreds of deviations. What changed is not the plant\'s diligence, it is what an inspector now counts as a corrective action: something that keeps running after the training ends.',
      'control' => 'The corrective action is a control that runs, not an event that happened.',
    ],
    [
      'line'    => 'Nobody is standing at that airlock at two in the morning.',
      'why'     => 'No quality department has the headcount to put a person at every classified door on every shift, and nobody has ever been given it. Oversight of every batch is arithmetic before it is a policy, and the arithmetic does not work with people.',
      'control' => 'The check does not depend on who is standing there.',
    ],
    [
      'line'    => 'A visitor came in behind the team, and nobody was going to stop a director.',
      'why'     => 'Schedule M clause 11.5.8 reaches every person entering a production area, including visitors, contractors, senior managers and inspectors. None of them is on a training register, and a junior operator stopping a senior visitor is asking a lot of a person in a corridor.',
      'control' => 'A camera has no rank. The rule applies the same to everyone.',
    ],
  ],
  'close'   => 'None of that is something anyone types into a search box. The rest of this page is the part you can act on.',
  'chetna'      => '/assets/vijai/img/chetna-the-vb-ehs-engineer-character-in-an-o-b9f52159.webp',  // clean cut-out, 0.00% white in the lower body
  'chetna_alt'  => 'Illustration of a VB EHS engineer listening',
  'rakshak'     => '/assets/vijai/img/vb-rakshak-holding-a-tablet-representing-the-1a34cad9.webp',
  'rakshak_alt' => 'Illustration of the VB Rakshak safety character holding a tablet, representing the control that answers it',
];
require __DIR__ . '/includes/c14-band.php';
?>

<!-- 06 · THE DELIVERABLE · 06b SPECIMEN · 06c TAKE-AWAY · 06d APPLIES-TO · CTA 3 -->
<section class="dk grain">
  <div class="glowa"></div>
  <div class="w cbody">

    <p class="kick"><i>02</i> The format</p>
    <h2>What does a gowning deviation CAPA record contain?</h2>
    <p class="lead2">Ten fields, in the order they are completed. Field five is the one most CAPAs leave empty, and it is the one an inspector reads first.</p>

    <div class="t3fields">
      <div class="t3field"><span class="n">01</span><b>The observation, verbatim</b><p>Copied as written, with the date, the area and that area's grade.</p></div>
      <div class="t3field"><span class="n">02</span><b>Containment</b><p>What was done immediately. Personnel stood down, area status, product disposition.</p></div>
      <div class="t3field"><span class="n">03</span><b>Batch impact</b><p>Which batches were reviewed, by number, and what the review concluded.</p></div>
      <div class="t3field"><span class="n">04</span><b>Investigation of the condition</b><p>What made it possible. Airlock time under schedule pressure, an unfamiliar visitor, a grade change at an adjacent door. A condition, not a person.</p></div>
      <div class="t3field"><span class="n">05</span><b>Extent of the problem</b><p>How many entries in the period were checked, by whom, against what. Without this the CAPA has no denominator.</p></div>
      <div class="t3field"><span class="n">06</span><b>Corrective action</b><p>The system change. What will now happen at that door on every shift, and from when.</p></div>
      <div class="t3field"><span class="n">07</span><b>Preventive action</b><p>Where else the same condition exists and what was changed there.</p></div>
      <div class="t3field"><span class="n">08</span><b>Effectiveness check</b><p>The measure, the period and the acceptance criterion, all defined before the CAPA is closed.</p></div>
      <div class="t3field"><span class="n">09</span><b>Evidence attached</b><p>The records supporting every claim above, listed by identifier.</p></div>
      <div class="t3field"><span class="n">10</span><b>Approval</b><p>Quality approval with the date, and the date the effectiveness check falls due.</p></div>
    </div>

    <h2 id="specimen">What does a completed one look like?</h2>
    <p class="lead2">One worked example, built from a published inspection finding. No plant, sector or state is named on this one, because a sterile filling suite plus a state narrows to very few plants.</p>

    <div class="spec">
      <div class="spechd"><b>CAPA-2026-0184 · gowning deviation, Grade B airlock</b><span>Worked example</span></div>
      <dl style="margin:0">
        <div class="specrow"><dt>01 Observation</dt><dd>"Operators observed entering the Grade B area with exposed skin at the wrist and a torn hood. Gowning was stained." Recorded 14 March 2026, Grade B airlock, sterile filling suite.</dd></div>
        <div class="specrow"><dt>02 Containment</dt><dd>Personnel stood down from the area the same shift. Area status held. Product on the line quarantined pending assessment.</dd></div>
        <div class="specrow"><dt>03 Batch impact</dt><dd>Four batches reviewed against environmental monitoring for the period. Two released, two held for investigation. Numbers recorded in the batch review.</dd></div>
        <div class="specrow"><dt>04 Condition</dt><dd>The airlock was the shared route for a shift changeover and a maintenance call in the same fifteen minutes. Under that concurrency the gowning step is completed in a queue, and nobody is stationed there to see it.</dd></div>
        <div class="specrow"><dt>05 Extent</dt><dd>All entries through that airlock for the preceding 30 days were checked against the Grade B rule: 1,412 entries, 9 exceptions, all at shift changeover. Established from the door's own camera record, not from a sample day.</dd></div>
        <div class="specrow"><dt>06 Corrective action</dt><dd>Every entry to the Grade B airlock is now checked against the area's grade rule at the door and the check is recorded automatically, from 1 April 2026. Oversight no longer depends on who is standing there.</dd></div>
        <div class="specrow"><dt>07 Preventive action</dt><dd>The two other doors running the same grade were surveyed and brought under the same check before a second observation could be written about either.</dd></div>
        <div class="specrow"><dt>08 Effectiveness check</dt><dd>Exception rate at the Grade B airlock over 90 days, against a criterion of fewer than 2 exceptions per 1,000 entries, set before the period began. Due 30 June 2026.</dd></div>
        <div class="specrow"><dt>09 Evidence</dt><dd>Entry check record for the period, environmental monitoring reports, the survey note for the other two doors, the training record for the affected shift.</dd></div>
        <div class="specrow"><dt>10 Approval</dt><dd>Quality approval 22 March 2026. Effectiveness check due 30 June 2026.</dd></div>
      </dl>
    </div>

    <h2>Can you take this away?</h2>
    <p class="lead2">Yes. Nothing here is gated, there is no form to fill and no address to leave.</p>

    <div class="take">
      <div class="takehd">
        <b>The ten fields, as plain text</b>
        <span class="takebtns">
          <button type="button" class="tbtn" id="tcopy">Copy</button>
          <button type="button" class="tbtn" id="tprint">Print view</button>
        </span>
      </div>
<pre id="takepre">CAPA · GOWNING DEVIATION · RECORD FORMAT

01  OBSERVATION, VERBATIM      date, area, grade of the area
02  CONTAINMENT                what was done the same shift
03  BATCH IMPACT               batches reviewed, by number, and the conclusion
04  CONDITION INVESTIGATED     what made it possible. A condition, not a person
05  EXTENT                     entries checked in the period, by whom, against what
06  CORRECTIVE ACTION          the system change at that door, and from when
07  PREVENTIVE ACTION          where else the condition exists, and what changed
08  EFFECTIVENESS CHECK        measure, period, acceptance criterion, set in advance
09  EVIDENCE ATTACHED          records supporting every claim above, by identifier
10  APPROVAL                   quality approval date, and when the check falls due</pre>
      <p class="takenote">Adapt the fields into your own quality system format and the numbering into your own document control. It is a structure, not a template to be signed as received.</p>
    </div>

    <p class="applies">Current against · revised Schedule M, Part I, clauses 11.5.6 and 11.5.8 · EU GMP Annex 1, section 7.4 · US FDA guidance on responding to a Form 483. Re-verified September 2026.</p>

    <p class="ctarow"><?php require __DIR__ . '/includes/cta-b24.php'; ?></p>

    <h2>How do you show the corrective action held?</h2>
    <p class="lead2">By having a count from before the observation, not only after it.</p>
    <p>An effectiveness check written as "no further deviations observed" tells an inspector nothing, because nobody was observing. A check written as a rate over a defined period, against a criterion set before the period began, is a different document. It needs a measurement that was already running while the plant was normal, which is why the measurement has to be installed as part of the corrective action rather than promised alongside it.</p>

    <h2 id="rejected">What gets a response like this sent back?</h2>
    <p class="lead2">Five returns, and none of them is about effort.</p>
    <div class="rej">
      <div class="rejitem"><b>Retraining offered as the whole corrective action</b><p>A training record shows who attended, not what happened at the airlock three weeks later. It remains a valid correction and it is no longer accepted as the system change.</p></div>
      <div class="rejitem"><b>No denominator</b><p>The CAPA states that the deviation was investigated but never says how many entries were checked, over what period, against what rule. Without that the observation stands unchallenged.</p></div>
      <div class="rejitem"><b>An effectiveness check with no criterion</b><p>"Monitor for recurrence" is not a check. The measure, the period and the pass mark all have to be written down before the CAPA closes, not chosen afterwards from whatever the data showed.</p></div>
      <div class="rejitem"><b>A person named as the root cause</b><p>An investigation that ends at an individual has not reached the condition that produced the behaviour, so the same condition is still there on the next shift with a different person in it.</p></div>
      <div class="rejitem"><b>Preventive action that names no other location</b><p>If the same grade rule runs at three doors and the CAPA changes one, the preventive section is a sentence rather than an action, and the second observation is already available to be written.</p></div>
    </div>

    <p class="ctarow"><?php require __DIR__ . '/includes/cta-b24.php'; ?></p>

  </div>
</section>

<section class="dk grain">
  <div class="glowa"></div>
  <div class="w cbody">

    <h2>Where does VijAI fit, and where does it not?</h2>
    <p class="lead2">It addresses the visual half of section 7.4. It does nothing about the microbial half, and the copy on this page will not pretend otherwise.</p>
    <p>VijAI reads the feed from cameras positioned at the final door into a classified area, checks each person entering against that area's grade rule, and writes a timestamped record of the check. It detects what is visually observable: uncovered hair, missing overshoes, exposed skin, visibly damaged gowning. A camera has no rank, so the check applies to a visiting director the same way it applies to an operator.</p>
    <p><b>It makes no claim about sterility, about microbial control, or about the plant's GMP status. It does not replace gowning qualification or personnel monitoring.</b> Settle plates, contact plates and personnel monitoring are unaffected and remain required. The standard position is the clean side of the final door, never inside the change room, and what a given site needs is settled at survey.</p>

    <h2>Where does this sit in the rest of it?</h2>
    <p class="lead2">This page is the format. The two below are the decision and the duty.</p>
    <div class="ladder">
      <a class="lcard" href="/ppeai"><span class="lay">L2 · evaluation</span><b>What a gowning check costs and how it is scoped</b><p>Cameras per door, the survey, and what a 30-day run involves.</p></a>
      <a class="lcard" href="/solutions"><span class="lay">L1 · compliance</span><b>What Schedule M and Annex 1 actually require</b><p>The three clauses that carry the duty, and who they reach.</p></a>
      <a class="lcard" href="/contact"><span class="lay">Next</span><b>Put it to our engineering team</b><p>Tell us the grade of the area and the observation you are answering.</p></a>
    </div>

    <p class="cites"><b>Sources</b> · US FDA guidance on inspections and the Form 483 response window · CDSCO, revised Schedule M · EU GMP Annex 1, manufacture of sterile medicinal products. Named, not linked.</p>
  </div>
</section>

<!-- 13 · MEDIA BAND · the original deployment film. CR-31.
     Click-to-load. Nothing reaches YouTube until the reader presses play. -->
<?php
$media = [
  'kicker'  => '03',
  'eyebrow' => 'See it running',
  'heading' => 'What the check looks like at the door',
  'sub'     => 'Twenty seconds from a working deployment at a pharma plant. The same person, two attempts at the same door: refused, then allowed. Nothing here is re-enacted.',
  'mode'    => 'video',
  'id'      => 'lRB8AyHZV_Y',
  'orientation' => 'portrait',
  'poster'  => '/assets/vijai/img/ppeai-gowning-airlock-poster.webp',
  'label'   => 'Watch an entry refused, then passed',
  'note'    => 'Capture from a live deployment, not an illustration. Faces are covered by the gowning itself.',
];
require __DIR__ . '/includes/media-band.php';
?>

<?php $band_n1='04'; $band_n2='05'; require __DIR__ . '/includes/standards-band.php'; ?>

<!-- 14 · FAQ -->
<section class="lt">
  <div class="w">
    <p class="kick"><i>06</i> Before you write it</p>
    <h2>The five questions we are asked about this record.</h2>
    <div class="faq">
      <div class="fq"><h3>Is retraining still acceptable as a CAPA?</h3><p>Retraining remains a valid correction. It is increasingly rejected as the whole corrective action, because a training record shows who attended, not what happened at the airlock afterwards.</p></div>
      <div class="fq"><h3>What evidence does an inspector expect for supervisory oversight?</h3><p>Something contemporaneous, attributable and covering the period in question rather than a sample day.</p></div>
      <div class="fq"><h3>Does this apply to contractors and visitors?</h3><p>Yes. Revised Schedule M Part I clause 11.5.8 extends the duty to all persons entering production areas, including contractors' employees, visitors, senior managers and inspectors.</p></div>
      <div class="fq"><h3>Can a camera-based record replace microbial monitoring?</h3><p>No. EU GMP Annex 1 section 7.4 requires both visual and microbial assessment. A camera addresses the visual half.</p></div>
      <div class="fq"><h3>Do we need new cameras in the change room?</h3><p>Not in the change room. The standard position is the final door into the classified area, viewed from the clean side.</p></div>
    </div>
  </div>
</section>

<!-- 15 · CTA 5 + ENQUIRY · the form displayed inline, with the fallback -->
<section class="pn" id="enquire">
  <div class="w">
    <div class="ctin">
      <div class="ctl">
        <p class="kick" style="color:var(--cy)"><i>07</i> The next step</p>
        <h2>One door, one grade, thirty days.</h2>
        <p class="pl">A survey tells you which doors your existing cameras already cover and which need one. Then one door, one grade rule, thirty days, and you decide whether the record is worth having on the rest.</p>
        <ol class="tksteps">
          <li><b>Survey.</b> Every door into a classified area is checked for what a camera on the clean side can see. No commitment at this step.</li>
          <li><b>Run.</b> One door, one grade rule, thirty days. The pass criterion is written down before the first entry.</li>
          <li><b>Read.</b> You get the record, the exceptions and the times. Then you decide whether it belongs in your quality system.</li>
        </ol>
        <p class="ctarow"><?php require __DIR__ . '/includes/cta-b24.php'; ?></p>
      </div>
      <figure class="ctchar">
        <img src="/assets/vijai/img/chetna-the-vb-ehs-engineer-character-standin-83e44eb9.webp" width="362" height="700" loading="lazy" alt="A VB EHS engineer standing beside the enquiry form">
      </figure>
      <div class="ctr">
        <p class="fh">Send an enquiry</p>
        <div id="bxform">
          <script data-b24-form="<?php echo VIJAI_BITRIX; ?>" data-skip-moving="true">
          (function(w,d,u){var s=d.createElement('script');s.async=true;s.src=u+'?v=1';
          var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})
          (window,document,'https://cdn.bitrix24.in/b14322741/crm/form/loader_240.js');
          </script>
        </div>
        <div class="fallback">
          <span class="lbl">Or reach us directly</span>
          Email <a href="mailto:<?php echo VIJAI_EMAIL; ?>"><?php echo VIJAI_EMAIL; ?></a> with your site, the grade of the area and the observation you are answering.<br>
          WhatsApp is available from the chat button on this page.
        </div>
      </div>
    </div>
  </div>
</section>

<script>
/* the take-away · copy and print. No gate, no form, nothing collected. */
(function(){
  var c=document.getElementById('tcopy'), p=document.getElementById('tprint'), pre=document.getElementById('takepre');
  if(c&&pre){ c.addEventListener('click',function(){
    var t=pre.textContent;
    if(navigator.clipboard&&navigator.clipboard.writeText){ navigator.clipboard.writeText(t).then(function(){ c.textContent='Copied'; setTimeout(function(){c.textContent='Copy';},1800); }); }
    else { var ta=document.createElement('textarea'); ta.value=t; document.body.appendChild(ta); ta.select(); try{document.execCommand('copy'); c.textContent='Copied';}catch(e){} document.body.removeChild(ta); setTimeout(function(){c.textContent='Copy';},1800); }
  }); }
  if(p){ p.addEventListener('click',function(){ window.print(); }); }
})();
</script>

<?php require __DIR__ . '/includes/cta-popup.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
