<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Hero Slider Section -->
<section class="hero-slider-section" aria-label="Hero Overview" itemscope itemtype="https://schema.org/WPHeader">

  <div class="container hero-container position-relative">
    <div class="row align-items-center hero-content-row">

      <!-- Left Column: Hero Text & Trust Badges -->
      <div class="col-lg-7 col-xl-7 hero-text-col">
        <!-- Eyebrow Tag -->
        <div class="hero-eyebrow">
          <span>SAFE &bull; RELIABLE &bull; PROFESSIONAL</span>
        </div>

        <!-- Main Headline -->
        <h1 class="hero-main-title" itemprop="headline">
          MOVE WITH
          <span class="text-brand-red">CONFIDENCE.</span>
          ARRIVE WITH
          PEACE OF MIND.
        </h1>
        

        <!-- Description Paragraph -->
        <p class="hero-main-desc" itemprop="description">
          <?= htmlspecialchars($company3) ?> provides safe, reliable and hassle-free relocation services for your home, office, vehicle and more &mdash; anywhere in India.
        </p>

        <!-- 3 Trust Badges (Vertical Stack per item: Icon on top, bold stat, subtext) -->
        <div class="hero-trust-badges">
          <!-- Badge 1: Safe & Secure -->
          <div class="hero-trust-item text-center">
            <div class="trust-badge-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
              </svg>
            </div>
            <div class="trust-value">Trusted</div>
            <div class="trust-label">Safe &amp; Secure</div>
          </div>

          <!-- Badge 2: On-Time Delivery -->
          <div class="hero-trust-item text-center">
            <div class="trust-badge-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
              </svg>
            </div>
            <div class="trust-value">On-Time</div>
            <div class="trust-label">Delivery</div>
          </div>

          <!-- Badge 3: 10K+ Happy Customers -->
          <div class="hero-trust-item text-center">
            <div class="trust-badge-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
              </svg>
            </div>
            <div class="trust-value">10K+</div>
            <div class="trust-label">Happy Customers</div>
          </div>
        </div>
      </div>

      <!-- Center-Right Column: Floating Quote Card -->
      <div class="col-lg-5 col-xl-5 hero-card-col">
        <div class="hero-quote-card" itemscope itemtype="https://schema.org/QuoteAction">
          <!-- Card Title & Subtitle -->
          <div class="quote-card-header text-center">
            <p class="quote-card-title" itemprop="name">
              Get a Free <span class="text-brand-red">Quote</span>
            </p>
            <p class="quote-card-subtitle" itemprop="description">Quick. Easy. No Obligation.</p>
          </div>

          <!-- Quote Form Connected to Booking Pipeline -->
          <form id="heroQuoteForm" class="hero-card-form ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="heroFormResults">

            <!-- Row 1: Moving From & Moving To in one line -->
            <div class="hero-form-row">
              <div class="hero-form-group">
                <label class="hero-field-label" for="slider_mfrom">Moving From</label>
                <div class="hero-input-box">
                  <i class="bi bi-geo-alt hero-field-icon"></i>
                  <input type="text" id="slider_mfrom" name="mfrom" class="hero-field-input" placeholder="Moving From" value="<?= !empty($city) ? htmlspecialchars($city) : '' ?>" required>
                </div>
              </div>

              <div class="hero-form-group">
                <label class="hero-field-label" for="slider_mto">Moving To</label>
                <div class="hero-input-box">
                  <i class="bi bi-geo-alt-fill hero-field-icon"></i>
                  <input type="text" id="slider_mto" name="mto" class="hero-field-input" placeholder="Moving To" required>
                </div>
              </div>
            </div>

            <!-- Row 2: Select Service -->
            <div class="hero-form-group">
              <label class="hero-field-label" for="slider_mtype">Select Service</label>
              <div class="hero-input-box">
                <i class="bi bi-grid hero-field-icon"></i>
                <select id="slider_mtype" name="mtype" class="hero-field-select" required>
                  <option value="" disabled selected>Select Service</option>
                  <option value="Home Relocation">Home Relocation</option>
                  <option value="Office Relocation">Office Relocation</option>
                  <option value="Car Transportation">Car Transportation</option>
                  <option value="Bike Transportation">Bike Transportation</option>
                  <option value="Packing & Moving">Packing &amp; Moving</option>
                  <option value="Storage & Warehousing">Storage &amp; Warehousing</option>
                </select>
              </div>
            </div>

            <!-- Row 3: Your Name & Phone Number in one line -->
            <div class="hero-form-row">
              <div class="hero-form-group">
                <label class="hero-field-label" for="slider_name">Your Name</label>
                <div class="hero-input-box">
                  <i class="bi bi-person hero-field-icon"></i>
                  <input type="text" id="slider_name" name="name" class="hero-field-input" placeholder="Your Name" required>
                </div>
              </div>

              <div class="hero-form-group">
                <label class="hero-field-label" for="slider_phone">Phone Number</label>
                <div class="hero-input-box">
                  <i class="bi bi-telephone-fill hero-field-icon"></i>
                  <input type="tel" id="slider_phone" name="phone" class="hero-field-input" placeholder="Phone Number" pattern="[0-9]{10}" maxlength="10" required>
                </div>
              </div>
            </div>

            <!-- Action Buttons in Same Row (Quote + Download Form) -->
            <div class="hero-actions-row">
              <button type="submit" class="btn-hero-submit" id="btnSliderQuote" title="Get Quote Now">
                <span>Get Quote</span>
                <i class="bi bi-arrow-right ms-1"></i>
              </button>
              <a href="<?= base_url('assets/uploads/' . rawurlencode('Survey Documents.pdf')) ?>" download="Survey_Documents.pdf" target="_blank" class="btn-hero-download" title="Download Survey Form (PDF)">
                <i class="bi bi-file-earmark-arrow-down-fill me-1"></i>
                <span>Download Form</span>
              </a>
            </div>

            <!-- AJAX Response Container -->
            <div id="heroFormResults" class="mt-2"></div>
          </form>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Feature Strip (Icy Blue Bar matching reference image media_1788848037738.png) -->
  <div class="hero-features-bar">
    <div class="container">
      <div class="row g-2 g-lg-0 align-items-center hero-features-row">
        <!-- Feature 1: Door to Door -->
        <div class="col-6 col-lg-3 hero-feature-item-col">
          <div class="hero-feature-item d-flex align-items-center">
            <div class="feature-icon-wrap">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M1 4h14v11H1V4zm14 4h3.5l3.5 3.5V15h-7V8z"/>
                <circle cx="6" cy="18" r="2.8"/>
                <circle cx="17.5" cy="18" r="2.8"/>
                <rect x="8.8" y="14.5" width="6" height="2"/>
              </svg>
            </div>
            <div class="feature-text-content">
              <div class="feature-item-title">Door to Door Service</div>
              <div class="feature-item-desc">Hassle-free moving</div>
            </div>
          </div>
        </div>

        <!-- Feature 2: Safe & Secure -->
        <div class="col-6 col-lg-3 hero-feature-item-col">
          <div class="hero-feature-item d-flex align-items-center">
            <div class="feature-icon-wrap">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="9.5"></circle>
                <polyline points="12 6.5 12 12 15.5 14"></polyline>
              </svg>
            </div>
            <div class="feature-text-content">
              <div class="feature-item-title">Safe &amp; Secure</div>
              <div class="feature-item-desc">Your belongings, our priority</div>
            </div>
          </div>
        </div>

        <!-- Feature 3: Transparent Pricing (Dual Stacks of Coins) -->
        <div class="col-6 col-lg-3 hero-feature-item-col">
          <div class="hero-feature-item d-flex align-items-center">
            <div class="feature-icon-wrap">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <ellipse cx="6" cy="7" rx="4.5" ry="1.8"/>
                <path d="M1.5 7v2.2c0 1 2 1.8 4.5 1.8s4.5-.8 4.5-1.8V7c0 1-2 1.8-4.5 1.8S1.5 8 1.5 7z"/>
                <path d="M1.5 10.5v2.2c0 1 2 1.8 4.5 1.8s4.5-.8 4.5-1.8v-2.2c0 1-2 1.8-4.5 1.8s-4.5-.8-4.5-1.8z"/>
                <path d="M1.5 14v2.2c0 1 2 1.8 4.5 1.8s4.5-.8 4.5-1.8V14c0 1-2 1.8-4.5 1.8s-4.5-.8-4.5-1.8z"/>
                <ellipse cx="16" cy="5" rx="5" ry="2"/>
                <path d="M11 5v2.5c0 1.1 2.2 2 5 2s5-.9 5-2V5c0 1.1-2.2 2-5 2s-5-.9-5-2z"/>
                <path d="M11 9v2.5c0 1.1 2.2 2 5 2s5-.9 5-2V9c0 1.1-2.2 2-5 2s-5-.9-5-2z"/>
                <path d="M11 13v2.5c0 1.1 2.2 2 5 2s5-.9 5-2v-2.5c0 1.1-2.2 2-5 2s-5-.9-5-2z"/>
                <path d="M11 17v2.5c0 1.1 2.2 2 5 2s5-.9 5-2V17c0 1.1-2.2 2-5 2s-5-.9-5-2z"/>
              </svg>
            </div>
            <div class="feature-text-content">
              <div class="feature-item-title">Transparent Pricing</div>
              <div class="feature-item-desc">No hidden charges</div>
            </div>
          </div>
        </div>

        <!-- Feature 4: 24/7 Support -->
        <div class="col-6 col-lg-3 hero-feature-item-col">
          <div class="hero-feature-item d-flex align-items-center">
            <div class="feature-icon-wrap">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 14h2a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2H3v7z"></path>
                <path d="M21 14h-2a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h2v7z"></path>
                <path d="M5 10a7 7 0 0 1 14 0"></path>
                <path d="M19 14v3a3 3 0 0 1-3 3h-2"></path>
                <circle cx="13" cy="20" r="1.2" fill="currentColor"></circle>
              </svg>
            </div>
            <div class="feature-text-content">
              <div class="feature-item-title">24/7 Support</div>
              <div class="feature-item-desc">We're always here for you</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sync hero form values to quote modal if opened elsewhere -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const heroForm = document.getElementById('heroQuoteForm');
    if (heroForm) {
      const inputs = heroForm.querySelectorAll('input, select');
      inputs.forEach(input => {
        input.addEventListener('change', function() {
          const name = this.getAttribute('name');
          const val = this.value;
          const target = document.querySelector('#qteModal [name="' + name + '"]');
          if (target && val) {
            target.value = val;
          }
        });
      });
    }
  });
</script>