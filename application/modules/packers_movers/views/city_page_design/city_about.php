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
      <div class="row mt-4" id="cityReviewsRow">
      <div class="col-12">
        <?php include 'price_table.php'; ?>
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
    
<?php if (strtolower(trim($state ?? '')) === 'bihar') : ?>

<section class="py-5 bg-light bihar-moving-process">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <span class="badge bg-danger-subtle text-danger px-3 py-2 mb-3">
                Our Moving Process
            </span>

            <h3 class="fw-bold text-dark mb-3">
             How Make My Shift Plans Your Move
            </h3>

            <p class="text-secondary mx-auto bihar-process-description mb-0">
                From understanding your requirements to delivering your
                belongings, we organise every stage of your move with care
                and attention.
            </p>
        </div>

        <!-- Process Cards -->
        <div class="row g-4">

            <!-- Step 1 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="bihar-process-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <span class="bihar-process-number">01</span>
                    </div>

                    <h4 class="h5 fw-bold text-dark mb-3">
                       Understanding the move
                    </h4>

                    <p class="text-secondary small mb-0">
                       You share what needs to go and where. The quotation is prepared around your shipment.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="bihar-process-icon">
                            <i class="fas fa-search-location"></i>
                        </div>
                        <span class="bihar-process-number">02</span>
                    </div>

                    <h4 class="h5 fw-bold text-dark mb-3">
                        Survey and Assessment
                    </h4>

                    <p class="text-secondary small mb-0">
                      When the team needs a clearer idea of the goods or the pickup conditions, a survey is arranged.

                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="bihar-process-icon">
                            <i class="fas fa-boxes-stacked"></i>
                        </div>
                        <span class="bihar-process-number">03</span>
                    </div>

                    <h4 class="h5 fw-bold text-dark mb-3">
                       Packing and loading

                    </h4>

                    <p class="text-secondary small mb-0">
                    Furniture, appliances, fragile items and other household goods need different handling before they are loaded.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="bihar-process-icon">
                            <i class="fas fa-truck-fast"></i>
                        </div>
                        <span class="bihar-process-number">04</span>
                    </div>

                    <h4 class="h5 fw-bold text-dark mb-3">
                       Transport and unloading
                    </h4>

                    <p class="text-secondary small mb-0">
                    The goods travel to the destination and are unloaded there.

                    </p>
                </div>
            </div>

        </div>

        <!-- Bottom Note -->
        <div class="text-center mt-4">
            <p class="small text-secondary mb-0">
                <i class="fas fa-check-circle text-danger me-2"></i>
               Office moves, vehicle transport and larger consignments may need a different arrangement.
            </p>
        </div>

    </div>
</section>

<?php endif; ?>

    <!-- 2. Frequently Asked Questions (col-12) -->
   
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
      <div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
       <?= $htmlcontent7 ?>
      </div>
    </div>
      <div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
       <?= $htmlcontent8 ?>
      </div>
    </div>
     <div class="row mt-4" id="cityFaqRow">
      <div class="col-12">
        <?php include 'city_faq.php'; ?>
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



