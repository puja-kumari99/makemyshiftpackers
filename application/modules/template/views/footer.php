<!-- FOOTER SECTION (Matching media_1788862817575.png) -->
<footer class="footer-modern-section" itemscope itemtype="https://schema.org/WPFooter">
  <div class="footer-modern-main">
    <div class="container">

      <!-- Top Trust Bar (4 Features with Blue Circular Icons - 2 at a time on mobile) -->
      <div class="footer-top-trust-bar">
        <div class="row g-2 g-sm-3 g-lg-4">
          <div class="col-6 col-lg-3">
            <div class="trust-bar-item">
              <div class="trust-bar-icon-wrap">
                <i class="bi bi-shield-check"></i>
              </div>
              <div class="trust-bar-text">
                <div class="trust-bar-title">Safe &amp; Secure</div>
                <p class="trust-bar-desc">Carefully handled in safe hands</p>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="trust-bar-item">
              <div class="trust-bar-icon-wrap">
                <i class="bi bi-clock-history"></i>
              </div>
              <div class="trust-bar-text">
                <div class="trust-bar-title">On-Time Delivery</div>
                <p class="trust-bar-desc">We value your time as much as you do</p>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="trust-bar-item">
              <div class="trust-bar-icon-wrap">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="trust-bar-text">
                <div class="trust-bar-title">Pan India Services</div>
                <p class="trust-bar-desc">Serving 1000+ cities across India</p>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3">
            <div class="trust-bar-item">
              <div class="trust-bar-icon-wrap">
                <i class="bi bi-headset"></i>
              </div>
              <div class="trust-bar-text">
                <div class="trust-bar-title">24/7 Customer Support</div>
                <p class="trust-bar-desc">We are always here to help you</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Footer Columns -->
      <div class="row g-4 g-lg-4 footer-content-row">

        <!-- Col 1: Brand Logo, Tagline, Call Card & Social Icons -->
        <div class="col-12 col-md-6 col-lg-3 footer-col footer-brand-col">
          <a href="<?= site_url() ?>" class="footer-logo-card-wrap" title="<?= htmlspecialchars($company3) ?>">
            <div class="footer-logo-card">
              <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= htmlspecialchars($company3) ?>" class="footer-logo-img" width="167" height="50">
            </div>
          </a>
          <p class="footer-brand-tagline">
            Your trusted relocation partner for a safer, simpler and happier tomorrow.
          </p>

          <!-- Indian Movers Association Logo + Website Link -->
          <div class="footer-assoc-logo-wrap mb-2">
            <a href="https://www.indianmoversassociation.com" target="_blank" rel="noopener noreferrer" class="footer-assoc-direct-link" title="Indian Movers Association - www.indianmoversassociation.com">
              <img src="<?= base_url('assets/img/logo3.png') ?>" alt="Indian Movers Association" class="footer-assoc-direct-img" width="45" height="82">
              <div class="footer-assoc-info">
                <span class="footer-assoc-title">Indian Movers Association</span>
                <span class="footer-assoc-url">
                  www.indianmoversassociation.com
                  <i class="bi bi-box-arrow-up-right"></i>
                </span>
              </div>
            </a>
          </div>

          <!-- IBA Approved Logo Below IMA -->
          <div class="footer-assoc-logo-wrap footer-iba-wrap mb-3">
            <a href="https://www.iba.org.in" target="_blank" rel="noopener noreferrer" class="footer-assoc-direct-link" title="IBA Approved - Indian Banks' Association">
              <img src="<?= base_url('assets/img/ibalogo1.png?v=' . (file_exists(FCPATH . 'assets/img/ibalogo1.png') ? filemtime(FCPATH . 'assets/img/ibalogo1.png') : time())) ?>" alt="IBA Approved - Indian Banks' Association" class="footer-assoc-direct-img footer-iba-img" width="70" height="70">
              <div class="footer-assoc-info">
                <span class="footer-assoc-title">IBA Approved</span>
                <span class="footer-assoc-url">
                  Indian Banks' Association
                  <i class="bi bi-box-arrow-up-right"></i>
                </span>
              </div>
            </a>
          </div>

          <div class="footer-social-wrapper">
            <span class="footer-follow-label">Follow Us</span>
            <div class="footer-social-row">
              <a href="<?= $facebookhtml ?>" class="footer-social-btn" aria-label="Facebook" target="_blank" rel="noopener">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="<?= $instagramhtml ?>" class="footer-social-btn" aria-label="Instagram" target="_blank" rel="noopener">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="<?= $twitterhtml ?>" class="footer-social-btn" aria-label="Twitter / X" target="_blank" rel="noopener">
                <i class="bi bi-twitter-x"></i>
              </a>
              <a href="<?= $linkedinhtml ?>" class="footer-social-btn" aria-label="LinkedIn" target="_blank" rel="noopener">
                <i class="bi bi-linkedin"></i>
              </a>
              <a href="<?= $youtubehtml ?>" class="footer-social-btn" aria-label="YouTube" target="_blank" rel="noopener">
                <i class="bi bi-youtube"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Col 2: Quick Links (Preceded by > chevrons) -->
        <div class="col-6 col-md-6 col-lg-3 footer-col footer-links-col">
          <span class="footer-col-heading">Quick Links</span>
          <ul class="footer-links-list">
            <li><a href="<?= site_url() ?>"><span class="link-chevron">&gt;</span> Home</a></li>
            <li><a href="<?= site_url('about-us') ?>"><span class="link-chevron">&gt;</span> About Us</a></li>
            <li><a href="<?= site_url('why-choose-us') ?>"><span class="link-chevron">&gt;</span> Why Choose Us</a></li>
            <li><a href="<?= site_url('how-to-choose') ?>"><span class="link-chevron">&gt;</span> How to Choose</a></li>
            <li><a href="<?= site_url('beware-of-fraud') ?>"><span class="link-chevron">&gt;</span> Beware of Fraud</a></li>
            <li><a href="<?= site_url('transit-insurance') ?>"><span class="link-chevron">&gt;</span> Transit Insurance</a></li>
            <li><a href="<?= site_url('faqs') ?>"><span class="link-chevron">&gt;</span> FAQ</a></li>
            <li><a href="<?= site_url('reviews') ?>"><span class="link-chevron">&gt;</span> Customer Reviews</a></li>
            <li><a href="<?= site_url('contact-us') ?>"><span class="link-chevron">&gt;</span> Contact Us</a></li>
          </ul>
        </div>

        <!-- Col 3: Services (Preceded by > chevrons) -->
        <div class="col-6 col-md-6 col-lg-3 footer-col footer-links-col">
          <span class="footer-col-heading">Our Services</span>
          <ul class="footer-links-list">
            <li><a href="<?= site_url('home-relocation') ?>"><span class="link-chevron">&gt;</span> Home Shifting</a></li>
            <li><a href="<?= site_url('office-relocation') ?>"><span class="link-chevron">&gt;</span> Office Relocation</a></li>
            <li><a href="<?= site_url('car-transportation') ?>"><span class="link-chevron">&gt;</span> Car Transportation</a></li>
            <li><a href="<?= site_url('bike-transportation') ?>"><span class="link-chevron">&gt;</span> Bike Transportation</a></li>
            <li><a href="<?= site_url('packing-and-moving') ?>"><span class="link-chevron">&gt;</span> Packing &amp; Moving</a></li>
            <li><a href="<?= site_url('loading-unloading') ?>"><span class="link-chevron">&gt;</span> Loading &amp; Unloading</a></li>
          </ul>
        </div>

        <!-- Col 4: Get In Touch (Using existing controller variables) -->
        <div class="col-12 col-md-6 col-lg-3 footer-col footer-touch-col">
          <span class="footer-col-heading">Get In Touch</span>
          <ul class="footer-touch-list">
            <li class="footer-touch-item">
              <div class="touch-icon-wrap">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="touch-content">
                <span class="touch-label">Office Contact</span>
                <?php if (!empty($phone1)): ?>
                <a href="<?= $phonehtml1 ?>" class="touch-value-highlight">
                  <?= htmlspecialchars($phone1) ?>
                </a>
                <?php endif; ?>
                <?php if (!empty($phone2)): ?>
                <a href="<?= $phonehtml2 ?>" class="touch-value-highlight">
                  <?= htmlspecialchars($phone2) ?>
                </a>
                <?php endif; ?>
              </div>
            </li>

            <li class="footer-touch-item">
              <div class="touch-icon-wrap">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="touch-content">
                <span class="touch-label">Email Us</span>
                <a href="<?= $mailhtml ?>" class="touch-value-text">
                  <?= htmlspecialchars($mail) ?>
                </a>
              </div>
            </li>

            <li class="footer-touch-item">
              <div class="touch-icon-wrap">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="touch-content">
                <span class="touch-label">Corporate Office</span>
                <span class="touch-value-text">
                  <?= htmlspecialchars(!empty($corporate_address) ? $corporate_address : $address) ?>
                </span>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <!-- Bottom Copyright Bar -->
  <div class="footer-modern-bottom">
    <div class="container position-relative">
      <div class="footer-bottom-flex">
        <!-- Copyright -->
        <div class="footer-copyright-text">
          &copy; <?= date('Y') ?> <?= htmlspecialchars($company3) ?>. All rights reserved.
        </div>

        <!-- Policy Links -->
        <div class="footer-policy-links">
          <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
          <span class="policy-pipe">|</span>
          <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
          <span class="policy-pipe">|</span>
          <a href="<?= site_url('sitemap') ?>">Sitemap</a>
        </div>
      </div>

      <!-- Scroll to top button -->
      <button type="button" class="footer-scroll-top-btn" id="footerScrollTop" aria-label="Scroll to top" title="Scroll to top">
        <i class="bi bi-chevron-up"></i>
      </button>
    </div>
  </div>
</footer>

<!-- Floating Left: Call Action -->
<aside class="float-action-left" aria-label="Call contact action">
  <div class="float-group float-group-call">
    <div class="float-popup-menu" id="callPopupMenu" role="menu" aria-label="Call numbers">
      <a href="<?= $phonehtml1 ?>" class="float-popup-item" title="Call <?= htmlspecialchars($phone1) ?>">
        <div class="float-popup-icon"><i class="bi bi-telephone-fill"></i></div>
        <span class="float-popup-pill"><?= htmlspecialchars($phone1) ?></span>
      </a>
      <a href="<?= $phonehtml2 ?>" class="float-popup-item" title="Call <?= htmlspecialchars($phone2) ?>">
        <div class="float-popup-icon"><i class="bi bi-telephone-fill"></i></div>
        <span class="float-popup-pill"><?= htmlspecialchars($phone2) ?></span>
      </a>
    </div>
    <a href="<?= $phonehtml ?>" class="float-btn float-call" title="Call Now" aria-label="Call <?= $company3 ?> now" aria-haspopup="true">
      <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
      <span class="float-main-label">Call Now</span>
    </a>
  </div>
</aside>

<!-- Floating Right: WhatsApp Action -->
<aside class="float-action-right" aria-label="WhatsApp contact action">
  <div class="float-group float-group-whatsapp">
    <div class="float-popup-menu" id="waPopupMenu" role="menu" aria-label="WhatsApp numbers">
      <a href="<?= $whatsapphtml1 ?>" class="float-popup-item" target="_blank" rel="noopener" title="WhatsApp <?= htmlspecialchars($phone1) ?>">
        <span class="float-popup-pill"><?= htmlspecialchars($phone1) ?></span>
        <div class="float-popup-icon"><i class="bi bi-whatsapp"></i></div>
      </a>
      <a href="<?= $whatsapphtml2 ?>" class="float-popup-item" target="_blank" rel="noopener" title="WhatsApp <?= htmlspecialchars($phone2) ?>">
        <span class="float-popup-pill"><?= htmlspecialchars($phone2) ?></span>
        <div class="float-popup-icon"><i class="bi bi-whatsapp"></i></div>
      </a>
    </div>
    <a href="<?= $whatsapphtml ?>" class="float-btn float-whatsapp" title="WhatsApp Us" target="_blank"
      rel="noopener" aria-label="Message <?= $company3 ?> on WhatsApp" aria-haspopup="true">
      <span class="float-main-label">WhatsApp Us</span>
      <div class="icon-wrap"><i class="bi bi-whatsapp"></i></div>
    </a>
  </div>
</aside>

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/form.js?v=2.3" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var topBtn = document.getElementById('footerScrollTop');
  if (topBtn) {
    topBtn.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Floating contact popup toggle for touch devices & click
  document.querySelectorAll('.float-group').forEach(function(grp) {
    var mainBtn = grp.querySelector('.float-btn');
    if (mainBtn) {
      mainBtn.addEventListener('click', function(e) {
        if (window.innerWidth < 992 || 'ontouchstart' in window) {
          if (!grp.classList.contains('active')) {
            e.preventDefault();
            document.querySelectorAll('.float-group.active').forEach(function(g) {
              if (g !== grp) g.classList.remove('active');
            });
            grp.classList.add('active');
          }
        }
      });
    }
  });

  document.addEventListener('click', function(e) {
    if (!e.target.closest('.float-group')) {
      document.querySelectorAll('.float-group.active').forEach(function(g) {
        g.classList.remove('active');
      });
    }
  });
});

// Continuous Marquee Slider & Video Player (Works for Testimonials, Videos, News, & Awards)
(function() {
  function playVideo(vId, trigger) {
    var card = trigger ? trigger.closest('.testi-video-player-wrap') : null;
    var iframe = card ? card.querySelector('iframe') : null;
    var wrap = card ? (card.querySelector('.ratio') || (iframe ? iframe.parentElement : null)) : null;
    if (iframe && vId) {
      iframe.src = 'https://www.youtube-nocookie.com/embed/' + vId + '?autoplay=1&rel=0';
      if (trigger) trigger.classList.add('d-none');
      if (wrap) wrap.classList.remove('d-none');
    }
  }

  window.playHomeTestiVideo = window.playTestiVideoGrid = function(vId, idx) {
    var el = (typeof idx === 'object' && idx) ? idx : (
      document.getElementById('homeVideoThumbCover_' + idx) ||
      document.getElementById('testiVideoThumbCover_' + idx)
    );
    playVideo(vId, el);
  };

  document.addEventListener('click', function(e) {
    var thumb = e.target.closest('.testi-video-thumb-wrap');
    if (!thumb) return;
    var vId = thumb.dataset.video || (thumb.getAttribute('onclick') || '').match(/'([^']+)'/)?.[1];
    if (vId) playVideo(vId, thumb);
  });

  function initContinuousMarquee() {
    var viewports = document.querySelectorAll('.testimonials-slider-viewport');
    viewports.forEach(function(viewport) {
      var track = viewport.querySelector('.testimonials-slider-track, .video-slider-track, .news-slider-track, .recog-slider-track, [data-marquee="true"]');
      if (!track || track.dataset.cloned) return;
      track.dataset.cloned = 'true';

      // Clone children once for seamless infinite wrapping
      var children = Array.from(track.children);
      children.forEach(function(child) {
        var clone = child.cloneNode(true);
        clone.querySelectorAll('[id]').forEach(function(el) { el.removeAttribute('id'); });
        track.appendChild(clone);
      });

      var wrap = viewport.closest('.testimonials-slider-wrap, .video-testimonials-slider-wrap') || viewport;

      // Add navigation arrows for mouse click scrolling
      var prevBtn = wrap.querySelector('.slider-nav-prev');
      var nextBtn = wrap.querySelector('.slider-nav-next');
      if (!prevBtn) {
        prevBtn = document.createElement('button');
        prevBtn.type = 'button';
        prevBtn.className = 'slider-nav-btn slider-nav-prev';
        prevBtn.setAttribute('aria-label', 'Previous slide');
        prevBtn.innerHTML = '<i class="bi bi-chevron-left"></i>';
        wrap.appendChild(prevBtn);
      }
      if (!nextBtn) {
        nextBtn = document.createElement('button');
        nextBtn.type = 'button';
        nextBtn.className = 'slider-nav-btn slider-nav-next';
        nextBtn.setAttribute('aria-label', 'Next slide');
        nextBtn.innerHTML = '<i class="bi bi-chevron-right"></i>';
        wrap.appendChild(nextBtn);
      }

      var isDown = false;
      var startX = 0;
      var startScrollLeft = 0;
      var isDragged = false;
      var isHovered = false;
      var isTouching = false;
      var resumeTimeout = null;
      var speed = 0.75; // pixels per frame for smooth continuous slide

      // Arrow click scrolling (smooth 1 card step)
      prevBtn.addEventListener('click', function(e) {
        e.preventDefault();
        viewport.scrollBy({ left: -291, behavior: 'smooth' });
        isHovered = true;
        clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(function() { isHovered = false; }, 2500);
      });

      nextBtn.addEventListener('click', function(e) {
        e.preventDefault();
        viewport.scrollBy({ left: 291, behavior: 'smooth' });
        isHovered = true;
        clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(function() { isHovered = false; }, 2500);
      });

      // Mouse drag to scroll
      viewport.addEventListener('mousedown', function(e) {
        if (e.button !== 0) return;
        isDown = true;
        isDragged = false;
        startX = e.pageX;
        startScrollLeft = viewport.scrollLeft;
        viewport.classList.add('is-dragging');
      });

      window.addEventListener('mousemove', function(e) {
        if (!isDown) return;
        var walk = (e.pageX - startX) * 1.25;
        if (Math.abs(walk) > 4) {
          isDragged = true;
        }
        viewport.scrollLeft = startScrollLeft - walk;
      });

      window.addEventListener('mouseup', function() {
        if (!isDown) return;
        isDown = false;
        viewport.classList.remove('is-dragging');
        setTimeout(function() { isDragged = false; }, 80);
      });

      // Prevent click if user was dragging
      viewport.addEventListener('click', function(e) {
        if (isDragged) {
          e.preventDefault();
          e.stopImmediatePropagation();
        }
      }, true);

      // Hover pause on wrapper
      wrap.addEventListener('mouseenter', function() {
        isHovered = true;
      });
      wrap.addEventListener('mouseleave', function() {
        if (!isDown) isHovered = false;
      });

      // Touch handling (Mobile/Tablet)
      viewport.addEventListener('touchstart', function() {
        isTouching = true;
        clearTimeout(resumeTimeout);
      }, { passive: true });

      viewport.addEventListener('touchend', function() {
        clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(function() {
          isTouching = false;
        }, 1500);
      }, { passive: true });

      // Mouse Wheel scrolling on entire wrapper
      wrap.addEventListener('wheel', function(e) {
        var delta = e.deltaY;
        if (e.deltaMode === 1) delta *= 35; // lines to px
        else if (e.deltaMode === 2) delta *= 300; // pages to px
        
        if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
          delta = e.deltaX;
          if (e.deltaMode === 1) delta *= 35;
        }

        viewport.scrollLeft += delta * 1.25;
        isHovered = true;
        e.preventDefault();
        e.stopPropagation();

        clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(function() {
          isHovered = false;
        }, 1500);
      }, { passive: false });

      // Infinite loop wrap check on scroll
      viewport.addEventListener('scroll', function() {
        var halfWidth = track.scrollWidth / 2;
        if (halfWidth > 0) {
          if (viewport.scrollLeft >= halfWidth) {
            viewport.scrollLeft -= halfWidth;
          } else if (viewport.scrollLeft <= 0) {
            viewport.scrollLeft += halfWidth;
          }
        }
      }, { passive: true });

      // Continuous auto-scroll loop
      function autoScroll() {
        if (!isHovered && !isDown && !isTouching) {
          viewport.scrollLeft += speed;
          var halfWidth = track.scrollWidth / 2;
          if (halfWidth > 0 && viewport.scrollLeft >= halfWidth) {
            viewport.scrollLeft -= halfWidth;
          }
        }
        requestAnimationFrame(autoScroll);
      }
      requestAnimationFrame(autoScroll);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initContinuousMarquee);
  } else {
    initContinuousMarquee();
  }
})();
</script>
</body>

</html>