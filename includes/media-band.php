<?php
/**
 * VijAI · MEDIA BAND · optional section, CR-21, 11 September 2026.
 * "See it running" · one of three modes, chosen per page:
 *
 *   video     a YouTube film, loaded ONLY after the reader clicks
 *   linkedin  a LinkedIn post or video, loaded ONLY after the reader clicks
 *   images    real captures or site photographs, no third party at all
 *
 * WHY CLICK-TO-LOAD. Nothing from YouTube or LinkedIn is requested until the
 * reader asks for it. Until then the section is our own poster image and our own
 * markup. That keeps three promises at once:
 *   · no third-party cookie is set on a visitor who never pressed play, which is
 *     the DPDP answer a buyer's legal team asks for
 *   · the page weight and the LCP are ours, not theirs
 *   · CR-17 holds · there is no outbound LINK on the page, and an embed the
 *     reader opts into is not a citation
 * YouTube is embedded through youtube-nocookie.com. Never the plain domain.
 *
 * Usage:
 *   $media = [
 *     'kicker'=>'05', 'eyebrow'=>'See it running', 'heading'=>'...', 'sub'=>'...',
 *     'mode'  => 'video' | 'linkedin' | 'images',
 *     'id'    => 'YOUTUBE_ID',                  // video mode
 *     'url'   => 'https://www.linkedin.com/...',// linkedin mode
 *     'poster'=> '/assets/vijai/img/....webp',  // video and linkedin
 *     'orientation'=>'portrait',              // 9:16 short. Default is 16:9.
 *     'label' => 'What the check looks like at the door',
 *     'shots' => [ ['src'=>'...','alt'=>'...','cap'=>'...'], ... ], // images mode
 *     'note'  => 'Illustration or capture. Say which.',
 *   ];
 *   require __DIR__ . '/includes/media-band.php';
 *
 * RULE 3.3.15 STILL APPLIES. No client name, no plant name, no logo other than
 * the ribbon. A site photograph is anonymised to sector and state, and a still
 * from a console is captioned as a capture, never dressed as something else.
 *
 * PHP 7.4 and 8.5 safe.
 */
if (!isset($media) || !is_array($media) || empty($media['mode'])) { return; }
$md_mode = $media['mode'];
$md_kick = isset($media['kicker'])  ? $media['kicker']  : '05';
$md_eyeb = isset($media['eyebrow']) ? $media['eyebrow'] : 'See it running';
$md_head = isset($media['heading']) ? $media['heading'] : '';
$md_sub  = isset($media['sub'])     ? $media['sub']     : '';
$md_note = isset($media['note'])    ? $media['note']    : '';
$md_post = isset($media['poster'])  ? $media['poster']  : '';
$md_lab  = isset($media['label'])   ? $media['label']   : 'Play';
/* CR-30 · a vertical film. 16:9 is the default and stays the default. */
$md_por  = (isset($media['orientation']) && $media['orientation'] === 'portrait');
$md_cls  = $md_por ? 'mplay mp9x16' : 'mplay';
$md_pw   = $md_por ? 540  : 1280;
$md_ph   = $md_por ? 960  : 720;
?>
<section class="media lt">
  <div class="w">
    <p class="kick"><i><?php echo e($md_kick); ?></i> <?php echo e($md_eyeb); ?></p>
    <?php if ($md_head !== ''): ?><h2><?php echo e($md_head); ?></h2><?php endif; ?>
    <?php if ($md_sub !== ''): ?><p class="lead2"><?php echo e($md_sub); ?></p><?php endif; ?>

    <?php if ($md_mode === 'video' && !empty($media['id'])): ?>
      <div class="<?php echo $md_cls; ?>" data-embed="https://www.youtube-nocookie.com/embed/<?php echo e($media['id']); ?>?rel=0&amp;modestbranding=1&amp;playsinline=1">
        <?php if ($md_post !== ''): ?><img src="<?php echo e($md_post); ?>" alt="<?php echo e($md_lab); ?>" width="<?php echo $md_pw; ?>" height="<?php echo $md_ph; ?>" loading="lazy"><?php endif; ?>
        <button type="button" class="mbtn" aria-label="Play the film. It loads from YouTube only when you press this.">
          <span class="mtri" aria-hidden="true"></span><span class="mlab"><?php echo e($md_lab); ?></span>
        </button>
        <span class="mtag">Loads from YouTube only when you press play</span>
      </div>

    <?php elseif ($md_mode === 'linkedin' && !empty($media['url'])): ?>
      <div class="<?php echo $md_cls; ?>" data-embed="<?php echo e($media['url']); ?>">
        <?php if ($md_post !== ''): ?><img src="<?php echo e($md_post); ?>" alt="<?php echo e($md_lab); ?>" width="<?php echo $md_pw; ?>" height="<?php echo $md_ph; ?>" loading="lazy"><?php endif; ?>
        <button type="button" class="mbtn" aria-label="Open the post. It loads from LinkedIn only when you press this.">
          <span class="mtri" aria-hidden="true"></span><span class="mlab"><?php echo e($md_lab); ?></span>
        </button>
        <span class="mtag">Loads from LinkedIn only when you press play</span>
      </div>

    <?php elseif ($md_mode === 'images' && !empty($media['shots'])): ?>
      <div class="mshots">
        <?php foreach ($media['shots'] as $sh): ?>
        <figure>
          <img src="<?php echo e($sh['src']); ?>" alt="<?php echo e($sh['alt']); ?>" loading="lazy" width="640" height="400">
          <?php if (!empty($sh['cap'])): ?><figcaption><?php echo e($sh['cap']); ?></figcaption><?php endif; ?>
        </figure>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ($md_note !== ''): ?><p class="mnote"><?php echo e($md_note); ?></p><?php endif; ?>
  </div>
</section>
<?php if ($md_mode === 'video' || $md_mode === 'linkedin'): ?>
<script>
/* CR-32 · click to load, with a floor under it.
   Nothing is requested from the third party until the reader presses play.
   If the player then fails to configure itself · YouTube error 153 and its
   relatives · the reader must not be left staring at a red third-party error
   box in the middle of a compliance page. The poster comes back instead and
   the button works again. No outbound link is ever offered · CR-17. */
(function(){
  var w = document.querySelector('.mplay'); if(!w) return;
  var rest = w.innerHTML;          /* poster, button and tag, kept verbatim */

  function bind(){
    var b = w.querySelector('.mbtn');
    if (b) { b.addEventListener('click', go); }
  }

  function fail(){
    if (w.getAttribute('data-failed')) return;
    w.setAttribute('data-failed','1');
    w.classList.remove('is-live');
    w.innerHTML = rest;
    var n = document.createElement('span');
    n.className = 'mfail';
    n.textContent = 'The film did not load. Press play to try again.';
    w.appendChild(n);
    bind();
  }

  function go(){
    var src = w.getAttribute('data-embed');
    /* enablejsapi lets the player answer us · origin is what YouTube validates
       against, and its absence is the documented cause of error 153 */
    src += (src.indexOf('?') > -1 ? '&' : '?')
         + 'enablejsapi=1&origin=' + encodeURIComponent(window.location.origin);

    var f = document.createElement('iframe');
    f.src = src; f.title = 'VijAI film';
    f.setAttribute('allow','accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
    f.setAttribute('allowfullscreen','');
    /* never lazy · the reader has already asked for it, deferring it is a
       silent failure with no way back */
    f.setAttribute('referrerpolicy','strict-origin-when-cross-origin');
    w.innerHTML = ''; w.appendChild(f); w.classList.add('is-live');

    /* A player that configured itself answers the handshake. One that threw a
       configuration error never boots far enough to answer at all, which is the
       only signal we get from across an origin. Silence is therefore the test,
       and we are deliberately slow to call it. */
    var heard = false;
    function onMsg(e){
      if (e.source !== f.contentWindow) return;
      heard = true;
      var d = e.data;
      if (typeof d === 'string') { try { d = JSON.parse(d); } catch(x){ return; } }
      if (d && d.event === 'onError') { stop(); fail(); }
    }
    function stop(){
      clearInterval(hs);
      window.removeEventListener('message', onMsg);
    }
    window.addEventListener('message', onMsg);
    var hs = setInterval(function(){
      try { f.contentWindow.postMessage('{"event":"listening","id":1,"channel":"widget"}','*'); } catch(x){}
    }, 700);

    /* clicking into the player blurs this document · that is proof of life */
    window.addEventListener('blur', function(){ heard = true; }, { once: true });

    setTimeout(function(){
      stop();
      if (!heard) fail();
    }, 10000);
  }

  bind();
})();
</script>
<?php endif; ?>
