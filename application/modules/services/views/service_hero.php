<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Modern Service Hero Section Component
 * 
 * Expected parameters:
 *  - $service_title        (string) e.g. 'Home Relocation Services'
 *  - $service_title_html   (string) e.g. 'Home <span class="text-brand-red">Relocation</span> Services'
 *  - $service_eyebrow      (string) e.g. 'SAFE &bull; CERTIFIED &bull; DOORSTEP HOUSEHOLD SHIFTING'
 *  - $service_desc         (string) Description paragraph
 *  - $current_service_name (string) e.g. 'Home Relocation'
 *  - $features             (array)  Array of 4 string features/trust points
 *  - $display_phone        (string)
 *  - $call_link            (string)
 *  - $wa_link              (string)
 */

$service_title_html   = !empty($service_title_html) ? $service_title_html : (!empty($service_title) ? $service_title : 'Professional Shifting Services');
$service_eyebrow      = !empty($service_eyebrow) ? $service_eyebrow : 'SAFE &bull; RELIABLE &bull; PROFESSIONAL';
$service_desc         = !empty($service_desc) ? $service_desc : 'India\'s leading moving company providing reliable, insured, and doorstep relocation solutions with zero hassle.';
$current_service_name = !empty($current_service_name) ? $current_service_name : (!empty($service_title) ? $service_title : 'Relocation');
$features             = !empty($features) ? $features : [
    ['icon' => 'bi-shield-check',   'text' => 'Carefully Handled & Insured'],
    ['icon' => 'bi-box-seam',       'text' => '5-Layer Protective Packing'],
    ['icon' => 'bi-truck',          'text' => 'Live GPS Fleet Tracking'],
    ['icon' => 'bi-clock-history',  'text' => 'Guaranteed On-Time Delivery'],
];

// Breadcrumb Schema
$schema_items = [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => site_url()],
    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Our Services', 'item' => site_url('our-services')],
    ['@type' => 'ListItem', 'position' => 3, 'name' => $current_service_name]
];
$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- ======================================================
     PREMIUM SERVICE HERO SECTION
     ====================================================== -->
<section class="service-hero-section" aria-label="<?= htmlspecialchars($current_service_name) ?> Overview">
  <div class="service-hero-overlay"></div>

  <div class="container position-relative service-hero-container">
    <div class="row align-items-center">
      <div class="col-lg-10 col-xl-9">

        <!-- Glassmorphic Breadcrumb Nav -->
        <nav class="service-hero-bc-nav" aria-label="breadcrumb">
          <div class="service-bc-pill-box">
            <a href="<?= site_url() ?>" class="service-bc-link">
              <i class="bi bi-house-door-fill text-danger me-1"></i> Home
            </a>
            <span class="service-bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>" class="service-bc-link">Our Services</a>
            <span class="service-bc-sep">›</span>
            <span class="service-bc-current"><?= htmlspecialchars($current_service_name) ?></span>
          </div>
        </nav>

        <!-- Eyebrow Badge -->
        <div class="service-hero-eyebrow">
          <span class="service-hero-eyebrow-pill">
            <i class="bi bi-patch-check-fill text-danger me-1"></i> <?= $service_eyebrow ?>
          </span>
        </div>

        <!-- Main Headline -->
        <h1 class="service-hero-title">
          <?= $service_title_html ?>
        </h1>

        <!-- Description Paragraph -->
        <p class="service-hero-desc">
          <?= $service_desc ?>
        </p>

        <!-- Quick Action Buttons (Quote and Helpline) -->
        <div class="service-hero-cta-row">
          <button type="button" class="btn-service-hero-quote" data-bs-toggle="modal" data-bs-target="#qteModal" id="heroGetQuoteBtn">
            <span>Get Free Quote</span>
            <i class="bi bi-arrow-right-short ms-1 fs-5"></i>
          </button>
          
          <a href="<?= $phonehtml ?>" class="btn-service-hero-call" id="heroCallBtn">
            <i class="bi bi-telephone-fill me-2 text-danger"></i>
            <div>
              <small>24/7 Helpline</small>
              <strong><?= htmlspecialchars($phone) ?></strong>
            </div>
          </a>
        </div>

      </div>
    </div><!-- /row -->
  </div><!-- /container -->
</section>