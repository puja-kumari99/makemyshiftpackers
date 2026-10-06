<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="pm-city-sidebar" id="cityServiceSidebar">

  <!-- CTA Contact Card (Matching media_1789037616241.jpg) -->
  <div class="pm-city-sidebar-widget pm-city-cta-card" id="cityServiceCtaWidget">
    <div class="pm-cta-bg-blob-1"></div>
    <div class="pm-cta-bg-blob-2"></div>
    <div class="pm-city-cta-inner">
      <div class="pm-city-cta-header-row">
        <div class="pm-city-cta-icon-wrap">
          <i class="bi bi-headset"></i>
        </div>
        <div class="pm-city-cta-header-text">
          <h3 class="pm-city-cta-title">Need Help With Your <span>Move in <?= htmlspecialchars($city) ?></span>?</h3>
          <div class="pm-cta-bar">
            <span class="pm-cta-bar-red"></span>
            <span class="pm-cta-bar-blue"></span>
          </div>
        </div>
      </div>

      <div class="pm-city-cta-buttons">
        <!-- Primary Phone -->
        <a href="<?= $phonehtml ?>" class="pm-city-cta-btn pm-city-cta-call" id="cityServiceCallBtn">
          <div class="pm-cta-btn-icon icon-red">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="pm-cta-btn-text">
            <small>Call Support</small>
            <strong><?= htmlspecialchars($phone) ?></strong>
          </div>
          <i class="bi bi-arrow-right pm-cta-btn-arrow"></i>
        </a>

        <!-- Alternate Phone -->
        <a href="<?= $phonehtml1 ?>" class="pm-city-cta-btn pm-city-cta-alt-call" id="cityServiceAltCallBtn">
          <div class="pm-cta-btn-icon icon-blue">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="pm-cta-btn-text">
            <small>Alternate Line</small>
            <strong><?= htmlspecialchars($phone1) ?></strong>
          </div>
          <i class="bi bi-arrow-right pm-cta-btn-arrow"></i>
        </a>

        <!-- Action Row -->
        <div class="pm-city-cta-action-row">
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="pm-city-action-btn pm-city-whatsapp-btn" id="cityServiceWhatsAppBtn">
            <i class="bi bi-whatsapp"></i>
            <span class="action-btn-label">
              <span>WhatsApp</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </a>
          <button type="button" class="pm-city-action-btn pm-city-quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal" id="cityServiceQuoteBtn">
            <i class="bi bi-clipboard-check"></i>
            <span class="action-btn-label">
              <span>Get Quote</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- City Services Navigation -->
  <div class="pm-city-sidebar-widget mt-4" id="cityServicesNavWidget">
    <h4 class="pm-city-sidebar-widget-title">
      <i class="bi bi-grid-3x3-gap-fill me-2 text-primary"></i>City Services
    </h4>
    <p class="pm-city-sidebar-widget-desc">Available relocation in <?= htmlspecialchars($city) ?>.</p>
    <ul class="pm-city-services-list" id="cityServiceNavList">
      <?php
      $sidebar_services = [
        ['slug' => 'home-shifting-in-' . $ctlink,      'name' => "Home Shifting in $city",      'icon' => 'bi-house-door-fill'],
        ['slug' => 'office-shifting-in-' . $ctlink,    'name' => "Office Relocation in $city",  'icon' => 'bi-building'],
        ['slug' => 'car-transport-in-' . $ctlink,      'name' => "Car Transportation in $city", 'icon' => 'bi-car-front-fill'],
        ['slug' => 'bike-transport-in-' . $ctlink,     'name' => "Bike Transportation in $city",'icon' => 'bi-bicycle'],
      ];

      foreach ($sidebar_services as $s):
        $is_active = ($active_service === $s['slug']);
      ?>
        <li>
          <a href="<?= site_url($s['slug']) ?>" class="pm-city-service-link <?= $is_active ? 'pm-city-service-active' : '' ?>">
            <span class="pm-city-svc-icon"><i class="bi <?= $s['icon'] ?>"></i></span>
            <span class="pm-city-svc-name <?= $is_active ? 'fw-bold' : '' ?>"><?= $s['name'] ?></span>
            <i class="bi bi-chevron-right pm-city-svc-arrow"></i>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!-- Trusted Badges Widget -->
  <div class="pm-city-sidebar-widget mt-4" id="cityServiceTrustWidget">
    <h4 class="pm-city-sidebar-widget-title">
      <i class="bi bi-patch-check-fill me-2 text-danger"></i>Why Choose <?= htmlspecialchars($company3) ?>?
    </h4>
    <ul class="pm-city-trust-list">
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-blue"><i class="bi bi-clock-history"></i></div>
        <div>
          <strong><?= htmlspecialchars($experience) ?> Years Experience</strong>
          <small>Relocating since <?= $startYear ?></small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-red"><i class="bi bi-people-fill"></i></div>
        <div>
          <strong><?= $happyClients ?> Happy Clients</strong>
          <small>Trusted by families &amp; businesses</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-blue"><i class="bi bi-patch-check-fill"></i></div>
        <div>
          <strong>Verified &amp; Licensed</strong>
          <small>ISO certified packers and movers</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-red"><i class="bi bi-shield-fill-check"></i></div>
        <div>
          <strong><?= $secureShifting ?> Secure Shifting</strong>
          <small>Complete transit insurance options</small>
        </div>
      </li>
    </ul>
  </div>

</aside>