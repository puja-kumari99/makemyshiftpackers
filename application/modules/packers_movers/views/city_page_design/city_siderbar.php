<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================
     CITY PAGE SIDEBAR
     Available vars: $city, $state, $company3, $experience,
                     $startYear, $phone, $phone1, $phonehtml,
                     $phonehtml1, $whatsapphtml, $cities, $st
  ====================================================== -->

<aside class="pm-city-sidebar" id="citySidebar">

  <!-- CTA Contact Card (Matching media_1789037616241.jpg) -->
  <div class="pm-city-sidebar-widget pm-city-cta-card" id="sidebarCtaWidget">
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


</aside>