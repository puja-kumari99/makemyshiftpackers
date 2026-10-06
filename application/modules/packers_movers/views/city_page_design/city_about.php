<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>

<section class="pm-city-details-section py-5">
  <div class="container">


    <div class="row g-4">

  
      <div class="col-lg-8">
        <div class="pm-city-content-card mb-4">
          <div class="pm-city-section-eyebrow">TOP RATED RELOCATION</div>
         

          <div class="pm-city-prose">
            <?= $htmlcontent ?>
          </div>

          <!-- Feature Pills -->
       
          <!-- City Interactive Map -->
          <?php if (!empty($cities)): ?>
            <div class="pm-city-map-container my-4">
              <div class="pm-city-map-header mb-2 d-flex align-items-center gap-2">
                <i class="bi bi-geo-alt-fill text-danger fs-5"></i>
                <h3 class="h6 mb-0 fw-bold">Service Coverage Area &mdash; <?= htmlspecialchars($city) ?></h3>
              </div>
              <div class="pm-city-map-frame rounded-3 overflow-hidden shadow-sm border">
                <?php include 'city_map.php'; ?>
              </div>
            </div>
          <?php endif; ?>


        </div>
      </div><!-- /col-lg-8 -->

    
      <div class="col-lg-4">
        <?php include 'city_siderbar.php'; ?>
      </div>
   <div class="pm-city-feature-pills my-4">
            <div class="pm-city-pill"><i class="bi bi-shield-check"></i> Carefully Handled &amp; Insured</div>
            <div class="pm-city-pill"><i class="bi bi-truck"></i> Real-Time GPS Tracking</div>
            <div class="pm-city-pill"><i class="bi bi-box-seam"></i> 5-Layer Protective Packing</div>
            <div class="pm-city-pill"><i class="bi bi-clock-history"></i> On-Time Delivery Guarantee</div>
          </div>

    </div><!-- /row -->

<div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
       <?= $htmlcontent1 ?>
      </div>
    </div>
    <div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
       <?= $htmlcontent2 ?>
      </div>
    </div>
   <div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
       <?= $htmlcontent3 ?>
      </div>
    </div>

    <!-- 1. Customer Ratings & Verified Reviews (col-12) -->
    <div class="row mt-4" id="cityReviewsRow">
      <div class="col-12">
        <?php include 'city_reviews.php'; ?>
      </div>
    </div>
<div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
       <?= $htmlcontent4 ?>
      </div>
    </div>
    <!-- 2. Frequently Asked Questions (col-12) -->
    <div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
        <?php include 'city_faq.php'; ?>
      </div>
    </div>
<div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
       <?= $htmlcontent5 ?>
      </div>
    </div>
    <div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
       <?= $htmlcontent6 ?>
      </div>
    </div>
    <!-- 3. Nearby Cities (col-12) -->
    <?php if (!empty($cities)): ?>
    <div class="row mt-4" id="cityNearbyRow">
      <div class="col-12">
        <div class="pm-city-content-card" id="sidebarRelatedLocations">
          <div class="pm-city-section-eyebrow">EXPLORE MORE LOCATIONS</div>
          <h2 class="h4 pm-city-section-title-sm mb-2">
            <i class="bi bi-pin-map-fill me-2 text-danger"></i>Packers and Movers <span class="text-danger">Nearby Cities</span>
          </h2>
          <p class="small mb-4 text-dark-muted">Packers and Movers near <?= htmlspecialchars($city) ?>.</p>
          <div class="pm-city-related-tags" id="relatedCityTags">
            <?php
            $count = 0;
            foreach ($cities as $ct):
              if ($ct['nm'] == $city) continue;
              if ($count >= 16) break;
              $link      = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
              $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
            <a href="<?= site_url("$link-packers-movers-$statename") ?>"
               class="pm-city-tag"
               id="relatedCity-<?= $count ?>">
              <i class="bi bi-arrow-right-short"></i><?= htmlspecialchars($ct['nm']) ?>
            </a>
            <?php
              $count++;
            endforeach;
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <!-- Dynamic Services Section based on City -->
    <?php 
    $allowed_cities = [];
    if (in_array(strtolower(trim($city)), $allowed_cities)): 
    ?>
        <?php include 'city_service.php'; ?>
    <?php endif; ?>

    <?php include __DIR__ . '/../testimonial_widget.php'; ?>
  </div><!-- /container -->
</section>
 <?php include __DIR__ . '/../routes_distance.php'; ?>



