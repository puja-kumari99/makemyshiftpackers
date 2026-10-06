<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Service Sidebar Component (Previous Original Style)
 *
 * Expected parameters:
 *  - $active_slug      (string) e.g. 'home-relocation', 'office-relocation', etc.
 *  - $service_label    (string) e.g. 'Home Move', 'Office Move', 'Car Transport', etc.
 *  - $company_name     (string)
 *  - $display_phone    (string)
 *  - $display_phone1   (string)
 *  - $call_link        (string)
 *  - $call_link1       (string)
 *  - $wa_link          (string)
 *  - $exp_years        (string)
 *  - $start_yr         (string)
 *  - $clients          (string)
 *  - $secure           (string)
 *  - $states_count     (string)
 */

$active_slug    = !empty($active_slug) ? $active_slug : 'home-relocation';
$service_label  = !empty($service_label) ? $service_label : 'Move';

$canonical_services = [
    ['slug' => 'home-relocation',     'name' => 'Home Relocation',     'icon' => 'bi-house-heart-fill'],
    ['slug' => 'office-relocation',   'name' => 'Office Relocation',   'icon' => 'bi-building-gear'],
    ['slug' => 'car-transportation',  'name' => 'Car Transportation',  'icon' => 'bi-car-front-fill'],
    ['slug' => 'bike-transportation', 'name' => 'Bike Transportation', 'icon' => 'bi-bicycle'],
    ['slug' => 'packing-and-moving',  'name' => 'Packing & Moving',    'icon' => 'bi-boxes'],
    ['slug' => 'loading-unloading',   'name' => 'Loading & Unloading', 'icon' => 'bi-truck'],
];
?>

<aside class="pm-city-sidebar" id="serviceSidebar">

  <!-- CTA Contact Card (Matching media_1789037616241.jpg) -->
  <div class="pm-city-sidebar-widget pm-city-cta-card" id="serviceCtaWidget">
    <div class="pm-cta-bg-blob-1"></div>
    <div class="pm-cta-bg-blob-2"></div>
    <div class="pm-city-cta-inner">
      <div class="pm-city-cta-header-row">
        <div class="pm-city-cta-icon-wrap">
          <i class="bi bi-headset"></i>
        </div>
        <div class="pm-city-cta-header-text">
          <h3 class="pm-city-cta-title">Need Help With Your <span><?= htmlspecialchars($service_label) ?></span>?</h3>
          <div class="pm-cta-bar">
            <span class="pm-cta-bar-red"></span>
            <span class="pm-cta-bar-blue"></span>
          </div>
        </div>
      </div>

      <div class="pm-city-cta-buttons">
        <!-- Primary Phone -->
        <a href="<?= $phonehtml ?>" class="pm-city-cta-btn pm-city-cta-call" id="sidebarCallBtn">
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
        <a href="<?= $phonehtml1 ?>" class="pm-city-cta-btn pm-city-cta-alt-call" id="sidebarAltCallBtn">
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
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="pm-city-action-btn pm-city-whatsapp-btn" id="sidebarWhatsAppBtn">
            <i class="bi bi-whatsapp"></i>
            <span class="action-btn-label">
              <span>WhatsApp</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </a>
          <button type="button" class="pm-city-action-btn pm-city-quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal" id="sidebarQuoteBtn">
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

  <!-- Services Widget -->
  <div class="pm-city-sidebar-widget mt-4" id="serviceNavWidget">
    <h3 class="pm-city-sidebar-widget-title">
      <i class="bi bi-grid-3x3-gap-fill me-2"></i>Our Services
    </h3>
    <p class="pm-city-sidebar-widget-desc">Explore our professional shifting solutions.</p>
    <ul class="pm-city-services-list" id="serviceSidebarList">
      <?php foreach ($canonical_services as $srv): 
        $is_active = ($active_slug === $srv['slug']);
      ?>
        <li>
          <a href="<?= site_url($srv['slug']) ?>" 
             class="pm-city-service-link <?= $is_active ? 'pm-city-service-active' : '' ?>" 
             id="sidebarService-<?= $srv['slug'] ?>">
            <span class="pm-city-svc-icon"><i class="bi <?= $srv['icon'] ?>"></i></span>
            <span class="pm-city-svc-name <?= $is_active ? 'fw-bold' : '' ?>"><?= $srv['name'] ?></span>
            <i class="bi bi-chevron-right pm-city-svc-arrow"></i>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!-- Trust Badges Widget -->
  <div class="pm-city-sidebar-widget mt-4" id="serviceTrustWidget">
    <h3 class="pm-city-sidebar-widget-title">
      <i class="bi bi-patch-check-fill me-2 text-danger"></i>Why Choose <?= htmlspecialchars($company3) ?>?
    </h3>
    <ul class="pm-city-trust-list">
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-blue"><i class="bi bi-clock-history"></i></div>
        <div>
          <strong><?= $experience ?> Years Experience</strong>
          <small>Trusted relocation since <?= $startYear ?></small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-red"><i class="bi bi-people-fill"></i></div>
        <div>
          <strong><?= $happyClients ?> Happy Relocations</strong>
          <small>Verified families &amp; homes shifted</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-blue"><i class="bi bi-patch-check-fill"></i></div>
        <div>
          <strong>ISO Certified &amp; Licensed</strong>
          <small>Government registered entity</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-red"><i class="bi bi-shield-fill-check"></i></div>
        <div>
          <strong>Carefully Handled &amp; Insured</strong>
          <small>Doorstep claims assistance</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-blue"><i class="bi bi-geo-alt-fill"></i></div>
        <div>
          <strong>Pan-India Moving Network</strong>
          <small>100+ branches across <?= $statesCovered ?> states</small>
        </div>
      </li>
    </ul>
  </div>

</aside>