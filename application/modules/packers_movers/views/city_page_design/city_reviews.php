<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Customer Ratings & Reviews Card -->
<div class="pm-city-content-card mb-4" id="cityReviewsSection">
  <div class="pm-city-section-eyebrow">VERIFIED REVIEWS</div>
  <h2 class="h4 pm-city-section-title-sm d-flex align-items-center justify-content-between flex-wrap gap-2">
    <span><i class="bi bi-star-fill text-warning me-2"></i>What Customers Say About Packers and Movers in <?= htmlspecialchars($city) ?></span>
    <span class="pm-verified-pill">
      <i class="bi bi-patch-check-fill me-1"></i> Verified Relocations
    </span>
  </h2>

  <!-- Rating Summary Banner (Compact & Sleek) -->
  <div class="pm-city-rating-summary my-3 p-2 p-md-3 rounded-3 border bg-light">
    <div class="row align-items-center g-2 g-md-3">
      <div class="col-md-4 text-center border-md-end py-1">
        <div class="d-flex align-items-baseline justify-content-center gap-1">
          <span class="pm-review-score-big">4.9</span>
          <span class="pm-review-score-max">/ 5.0</span>
        </div>
        <div class="pm-review-stars my-1 pm-review-stars-wrap">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
        <div class="pm-review-score-sub">Verified customer reviews in <?= htmlspecialchars($city) ?></div>
      </div>
      <div class="col-md-8">
        <div class="row g-2 text-center">
          <div class="col-4">
            <div class="bg-white border rounded-2 p-2 h-100 shadow-sm">
              <div class="pm-stat-num-blue mb-0">99.4%</div>
              <div class="text-truncate pm-stat-lbl">On-Time Arrival</div>
            </div>
          </div>
          <div class="col-4">
            <div class="bg-white border rounded-2 p-2 h-100 shadow-sm">
              <div class="pm-stat-num-teal mb-0">100%</div>
              <div class="text-truncate pm-stat-lbl">Carefully Handled</div>
            </div>
          </div>
          <div class="col-4">
            <div class="bg-white border rounded-2 p-2 h-100 shadow-sm">
              <div class="pm-stat-num-red mb-0">Zero</div>
              <div class="text-truncate pm-stat-lbl">Hidden Charges</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $city_reviews_list = [
    [
      'initials' => 'RK',
      'name' => 'Rahul Kumar',
      'role' => htmlspecialchars($city) . (!empty($state) ? ', ' . htmlspecialchars($state) : ''),
      'tag' => 'Verified Move',
      'stars' => 5,
      'text' => 'The team handled our household items carefully and completed the shifting without unnecessary delays.'
    ],
    [
      'initials' => 'PS',
      'name' => 'Priya Singh',
      'role' => htmlspecialchars($city) . (!empty($state) ? ', ' . htmlspecialchars($state) : ''),
      'tag' => 'Verified Move',
      'stars' => 5,
      'text' => 'Packing was done properly, especially for our glass and kitchen items. The team was also easy to coordinate with.'
    ],
    [
      'initials' => 'AS',
      'name' => 'Amit Sharma',
      'role' => htmlspecialchars($city) . (!empty($state) ? ', ' . htmlspecialchars($state) : ''),
      'tag' => 'Verified Move',
      'stars' => 5,
      'text' => 'We moved our 2BHK to another city and the process was well organised from pickup to delivery.'
    ],
    [
      'initials' => 'NV',
      'name' => 'Neha Verma',
      'role' => htmlspecialchars($city) . (!empty($state) ? ', ' . htmlspecialchars($state) : ''),
      'tag' => 'Verified Move',
      'stars' => 5,
      'text' => 'Our car transportation was handled as discussed, and the communication throughout the move was helpful.'
    ]
  ];
  ?>

  <!-- DESKTOP & TABLET VIEW: All Reviews in Single Row Grid (d-none d-md-flex) -->
  <div class="row g-3 my-2 d-none d-md-flex" id="allCityReviewsGrid">
    <?php foreach ($city_reviews_list as $i => $rev): ?>
    <div class="col-md-6 col-lg-3 d-flex">
      <div class="pm-city-review-card flex-fill d-flex flex-column justify-content-between p-3 border rounded-3 bg-white h-100 shadow-sm transition-all hover-lift">
        <div>
          <!-- Card Header: Stars & Verified Badge -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center gap-1">
              <div class="pm-review-stars">
                <?php for ($s = 0; $s < $rev['stars']; $s++): ?>
                <i class="bi bi-star-fill text-warning"></i>
                <?php endfor; ?>
              </div>
              <span class="fw-bold text-dark ms-1 small">5.0</span>
            </div>
            <span class="badge rounded-pill px-2 py-1 pm-verified-pill-blue">
              <i class="bi bi-shield-fill-check me-1"></i><?= $rev['tag'] ?>
            </span>
          </div>

          <!-- Quote Body -->
          <div class="pm-review-slide-quote-wrap position-relative my-2">
            <p class="pm-review-slide-text mb-0">
              "<?= $rev['text'] ?>"
            </p>
          </div>
        </div>

        <!-- Card Footer: Author Avatar & Name -->
        <div class="pm-review-author mt-3 pt-3 border-top d-flex align-items-center justify-content-between gap-2">
          <div class="d-flex align-items-center gap-2">
            <div class="pm-review-avatar flex-shrink-0"><?= $rev['initials'] ?></div>
            <div class="overflow-hidden">
              <strong class="d-block text-truncate pm-review-author-name"><?= $rev['name'] ?></strong>
              <small class="text-truncate d-block pm-review-author-role"><?= $rev['role'] ?></small>
            </div>
          </div>
          <div class="pm-verified-tag-green flex-shrink-0">
            <i class="bi bi-patch-check-fill me-1"></i> Verified
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- MOBILE VIEW ONLY: Carousel Slider Showing One at a Time (d-block d-md-none) -->
  <div id="cityReviewMobileCarousel" class="carousel slide pm-city-review-carousel d-block d-md-none my-2" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
      <?php foreach ($city_reviews_list as $i => $rev): ?>
      <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
        <div class="pm-city-review-card p-3 border rounded-3 bg-white shadow-sm">
          <!-- Header -->
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center gap-1">
              <div class="pm-review-stars">
                <?php for ($s = 0; $s < $rev['stars']; $s++): ?>
                <i class="bi bi-star-fill text-warning"></i>
                <?php endfor; ?>
              </div>
              <span class="fw-bold text-dark ms-1 small">5.0</span>
            </div>
            <span class="badge rounded-pill px-2 py-1 pm-verified-pill-blue">
              <i class="bi bi-shield-fill-check me-1"></i><?= $rev['tag'] ?>
            </span>
          </div>

          <!-- Quote -->
          <p class="pm-review-slide-text mb-3">
            "<?= $rev['text'] ?>"
          </p>

          <!-- Footer -->
          <div class="pm-review-author pt-3 border-top d-flex align-items-center justify-content-between gap-2">
            <div class="d-flex align-items-center gap-2">
              <div class="pm-review-avatar flex-shrink-0"><?= $rev['initials'] ?></div>
              <div>
                <strong class="d-block pm-review-author-name"><?= $rev['name'] ?></strong>
                <small class="d-block pm-review-author-role"><?= $rev['role'] ?></small>
              </div>
            </div>
            <div class="pm-verified-tag-green">
              <i class="bi bi-patch-check-fill me-1"></i> Verified
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Mobile Navigation Controls -->
    <div class="d-flex justify-content-between align-items-center mt-3 px-1">
      <div class="carousel-indicators position-static m-0 gap-1.5">
        <?php foreach ($city_reviews_list as $i => $rev): ?>
        <button type="button" data-bs-target="#cityReviewMobileCarousel" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?> pm-review-carousel-indicator" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Review <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
      </div>
      <div class="d-flex align-items-center gap-2">
        <button class="btn btn-sm btn-outline-secondary rounded-circle px-2 py-1" type="button" data-bs-target="#cityReviewMobileCarousel" data-bs-slide="prev" aria-label="Previous">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button class="btn btn-sm btn-outline-secondary rounded-circle px-2 py-1" type="button" data-bs-target="#cityReviewMobileCarousel" data-bs-slide="next" aria-label="Next">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>
  </div>

</div>