<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Company Sidebar Component
 * 
 * Used across Company pages (About Us, Why Choose Us, etc.)
 *
 * Optional parameters:
 *  - $topic            (string) e.g. 'Home Move', 'Relocation', 'Company Move'
 *  - $active_slug      (string) optional active service slug
 *  - $company3         (string)
 *  - $phone            (string)
 *  - $phone1           (string)
 *  - $whatsapphtml     (string)
 *  - $experience       (string)
 *  - $startYear        (string)
 *  - $happyClients     (string)
 *  - $secureShifting   (string)
 *  - $statesCovered    (string)
 */

$topic           = !empty($topic) ? $topic : 'Home Move';
$active_page     = !empty($active_page) ? $active_page : $this->uri->segment(1);

$company_pages = [
    ['slug' => 'about-us',          'name' => 'About Us',                             'icon' => 'bi-info-circle-fill'],
    ['slug' => 'why-choose-us',     'name' => 'Why Choose Us',                        'icon' => 'bi-patch-check-fill'],
    ['slug' => 'how-to-choose',     'name' => 'How to Choose',                        'icon' => 'bi-shield-fill-check'],
    ['slug' => 'beware-of-fraud',   'name' => 'Beware of Fraud',                      'icon' => 'bi-exclamation-triangle-fill'],
    ['slug' => 'transit-insurance', 'name' => 'Transit Insurance',                    'icon' => 'bi-file-earmark-medical-fill'],
    ['slug' => 'payment',           'name' => 'Payment Options',                      'icon' => 'bi-credit-card-2-front-fill'],
    ['slug' => 'faqs',              'name' => 'Frequently Asked Questions',           'icon' => 'bi-question-circle-fill'],
    ['slug' => 'testimonials',      'name' => 'Customer Reviews',                     'icon' => 'bi-star-fill'],
    ['slug' => 'our-branches',      'name' => 'Our Branches',                         'icon' => 'bi-geo-alt-fill'],
    ['slug' => 'photo-gallery',     'name' => 'Gallery',                              'icon' => 'bi-images'],
    ['slug' => 'contact-us',        'name' => 'Contact Us',                           'icon' => 'bi-envelope-fill'],
];
?>

<aside class="pm-city-sidebar" id="companySidebar">

  <!-- CTA Contact Card -->
  <div class="pm-city-sidebar-widget pm-city-cta-card" id="companyCtaWidget">
    <div class="pm-cta-bg-blob-1"></div>
    <div class="pm-cta-bg-blob-2"></div>
    <div class="pm-city-cta-inner">
      <div class="pm-city-cta-header-row">
        <div class="pm-city-cta-icon-wrap">
          <i class="bi bi-headset"></i>
        </div>
        <div class="pm-city-cta-header-text">
          <h3 class="pm-city-cta-title">Need Help With Your <span><?= htmlspecialchars($topic) ?></span>?</h3>
          <div class="pm-cta-bar">
            <span class="pm-cta-bar-red"></span>
            <span class="pm-cta-bar-blue"></span>
          </div>
        </div>
      </div>

      <div class="pm-city-cta-buttons">
        <!-- Primary Phone -->
        <a href="<?= $phonehtml ?>" class="pm-city-cta-btn pm-city-cta-call" id="companyCallSupportBtn">
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
        <a href="<?= $phonehtml1 ?>" class="pm-city-cta-btn pm-city-cta-alt-call" id="companyAltLineBtn">
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
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="pm-city-action-btn pm-city-whatsapp-btn" id="companyWhatsAppBtn">
            <i class="bi bi-whatsapp"></i>
            <span class="action-btn-label">
              <span>WhatsApp</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </a>
          <button type="button" class="pm-city-action-btn pm-city-quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal" id="companyGetQuoteBtn">
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

  <!-- Quick Page Links Widget -->
  <div class="pm-city-sidebar-widget mt-4" id="companyNavWidget">
    <h3 class="pm-city-sidebar-widget-title">
      <i class="bi bi-grid-3x3-gap-fill me-2"></i>Quick Links
    </h3>
    <p class="pm-city-sidebar-widget-desc">Explore company details, safety policies &amp; feedback.</p>
    <ul class="pm-city-services-list" id="companySidebarList">
      <?php foreach ($company_pages as $cp): 
        $is_active = ($active_page === $cp['slug']);
      ?>
        <li>
          <a href="<?= site_url($cp['slug']) ?>" 
             class="pm-city-service-link <?= $is_active ? 'pm-city-service-active' : '' ?>" 
             id="companySidebar-<?= $cp['slug'] ?>">
            <span class="pm-city-svc-icon"><i class="bi <?= $cp['icon'] ?>"></i></span>
            <span class="pm-city-svc-name <?= $is_active ? 'fw-bold' : '' ?>"><?= $cp['name'] ?></span>
            <i class="bi bi-chevron-right pm-city-svc-arrow"></i>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <!-- Trust Badges Widget -->
  <div class="pm-city-sidebar-widget mt-4" id="companyTrustWidget">
    <h3 class="pm-city-sidebar-widget-title">
      <i class="bi bi-patch-check-fill me-2 text-danger"></i>Why Choose <span class="text-danger"><?= htmlspecialchars($company3) ?>?</span>
    </h3>
    <p class="pm-city-sidebar-widget-desc">Trusted across India.</p>
    <ul class="pm-city-trust-list">
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-blue"><i class="bi bi-clock-history"></i></div>
        <div>
          <strong><?= htmlspecialchars($experience) ?> Years Experience</strong>
          <small>Trusted since <?= htmlspecialchars($startYear) ?></small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-red"><i class="bi bi-people-fill"></i></div>
        <div>
          <strong><?= htmlspecialchars($happyClients) ?> Happy Clients</strong>
          <small>Families &amp; businesses trust us</small>
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
          <strong>Carefully Handled &amp; Secure</strong>
          <small>Complete transit insurance options</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-blue"><i class="bi bi-geo-alt-fill"></i></div>
        <div>
          <strong>Pan-India Coverage</strong>
          <small>100+ branches across <?= htmlspecialchars($statesCovered) ?> states</small>
        </div>
      </li>
    </ul>
  </div>

</aside>
