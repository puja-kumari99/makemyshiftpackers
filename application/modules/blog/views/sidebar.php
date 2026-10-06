<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="pm-city-sidebar modern-sidebar-v2">
  <div class="pm-city-sidebar-widget modern-locations-widget mb-4">
    <div class="modern-widget-header d-flex align-items-center gap-2 mb-3">
      <div class="modern-header-icon-squircle icon-blue">
        <i class="bi bi-tags-fill"></i>
      </div>
      <div>
        <h3 class="pm-city-sidebar-widget-title mb-0 fs-5">Relevant Topics &amp; Cities</h3>
        <p class="pm-city-sidebar-widget-desc mb-0" style="color: #374151;">Trending packers and movers searches.</p>
      </div>
    </div>
    <?php
    $city = "India";
    $keyw = array(
      "Movers near me $city", "Packers and movers in $city", "Moving companies near me $city", "Movers $city", "Packers and movers near me $city",
      "Removal companies in $city", "Moving services in $city", "Cheap movers in $city", "Local movers in $city", "Local moving companies in $city",
      "$city best moving companies", "House movers $city", "Packers movers $city", "Moving services near $city", "House removals $city", "Cheap moving companies in $city",
      "Professional movers in $city", "House movers near $city", "Cheap movers $city", "Best packers and movers in $city", "Affordable movers $city", "International movers from $city", "International moving companies in $city"
    );
    shuffle($keyw);
    ?>
    <div class="pm-city-related-tags modern-location-tags">
      <?php foreach (array_slice($keyw, 0, 16) as $k): ?>
        <span class="pm-city-tag modern-location-pill">
          <i class="bi bi-arrow-right-short text-danger"></i>
          <span><?= htmlspecialchars($k) ?></span>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</aside>