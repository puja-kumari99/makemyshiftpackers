<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'Home Relocation Services',
  'bc_desc' => '',
  'breadcrumbs' => [
    ['name' => 'Our Services'],
    ['name' => 'Home Relocation']
  ]
]); ?>

<!-- Main Page Content Section -->
<section class="pm-city-details-section py-5">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- 1. MAIN CONTAINER: Home Relocation Overview & Comprehensive Details -->
        <div class="pm-city-content-card mb-4" id="homeRelocationMainCard">
          <div class="pm-city-section-eyebrow">PREMIUM HOUSEHOLD RELOCATION</div>
          <h2 class="pm-city-section-title">
            Best <span class="pm-city-accent">Home Shifting Services</span>
          </h2>

          <div class="pm-city-prose">
            <p>
              Shifting a home involves a lot of work. Furniture has to be packed, appliances need careful handling,
              boxes have to be loaded, and the entire household needs to reach the new address in good condition. Trying
              to manage all of this alone can take up several days.
            </p>
            <p>
              <b><?= htmlspecialchars($company3) ?></b> offers professional <b>Home Shifting Services</b> for families and
              individuals who are planning a local or domestic move. With more than <strong><?= $experience ?>
                years</strong>
              of experience in the packing and moving industry, we handle the important parts of the relocation,
              including packing, loading,
              transportation, unloading and handover.
            </p>
            <p>
              Every move is a little different. The number of belongings, type of furniture,
              distance and access at both locations can change the work involved.
              Our team discusses these details before arranging the service.
              For a moving estimate, call <a href="<?= $phonehtml2 ?>"
                class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> and
              speak with our team.
            </p>
          </div>

          <!-- Feature Pills -->
          <div class="pm-city-feature-pills my-4">
            <div class="pm-city-pill"><i class="bi bi-shield-check"></i> Carefully Handled &amp; Insured
              Shifting</div>
            <div class="pm-city-pill"><i class="bi bi-box-seam"></i> 5-Layer Multi-Pack Protection</div>
            <div class="pm-city-pill"><i class="bi bi-truck"></i> GPS Real-Time Fleet Tracking</div>
            <div class="pm-city-pill"><i class="bi bi-clock-history"></i> Guaranteed On-Time Delivery</div>
          </div>

          <!-- Featured Service Image -->
          <div class="my-4 rounded-3 overflow-hidden border shadow-sm">
            <img src="<?= base_url('assets/img/home_img.jpg') ?>"
              alt="Professional Home Relocation and Shifting Services" class="img-fluid w-100 service-detail-hero-img">
          </div>

          <!-- Tailored Shifting by Home Size -->
          <h3 class="pm-city-section-title-sm mt-4">Home Shifting Services Planned Around Your Household
          </h3>
          <div class="pm-city-prose">
            <p>
              Our household shifting service is suitable for people moving to a new house, apartment or rented
              accommodation. The work can cover the packing and movement of everyday household belongings, including
              furniture, appliances, kitchen articles, electronics and personal items.
            </p>
            <p>
              The exact service is decided according to what you need to move. Some customers
              require a complete household shift, while others may need assistance with selected belongings.
            </p>
            <p class="mb-2"><strong>The main services include:</strong></p>
            <ul class="pm-city-checklist my-3">
              <li><i class="bi bi-check-circle-fill"></i> <span>Household packing</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Loading and unloading</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Local home shifting</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Domestic relocation</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Furniture and appliance handling</span>
              </li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Transportation of household goods</span>
              </li>
            </ul>
            <p>
              Before the move begins, the team can discuss the quantity of goods and other requirements so the
              relocation can be planned accordingly.
            </p>
          </div>

          <!-- 5 Service Highlight Boxes -->
          <div class="row g-3 my-4">
            <!-- 1. Careful Packing for Furniture, Appliances and Fragile Items -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-box-seam-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">Careful Packing for Furniture, Appliances and Fragile Items
                  </h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Good packing starts with knowing what is being packed. A sofa, television, glassware and kitchen
                    utensils cannot all be treated in the same way.
                  </p>
                  <p>
                    Our packing work is arranged according to the type of household goods. Suitable materials are used
                    to protect items during handling and transportation. Furniture and appliances require proper
                    wrapping, while fragile belongings need additional protection.
                  </p>
                  <p class="mb-2"><strong>Materials commonly used for household packing include:</strong></p>
                </div>

                <ul class="pm-city-checklist my-3">
                  <li>
                    <i class="bi bi-box-seam"></i>
                    <span>Corrugated boxes</span>
                  </li>
                  <li>
                    <i class="bi bi-shield-shaded"></i>
                    <span>Bubble wrap</span>
                  </li>
                  <li>
                    <i class="bi bi-layers"></i>
                    <span>Foam sheets</span>
                  </li>
                  <li>
                    <i class="bi bi-shield-check"></i>
                    <span>Protective wrapping materials</span>
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Packing tape</span>
                  </li>
                  <li>
                    <i class="bi bi-shield-lock-fill"></i>
                    <span>Furniture and appliance protection materials</span>
                  </li>
                </ul>

                <div class="pm-city-prose">
                  <p class="mb-0">
                    The packed goods are then prepared for loading and transportation.
                  </p>
                </div>
              </div>
            </div>

            <!-- 2. Organised Loading and Transportation of Household Goods -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-truck"></i>
                  </div>
                  <h3 class="service-feature-card-title">Organised Loading and Transportation of Household Goods</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Once packing is completed, the next stage is loading. Household goods are placed into the vehicle
                    according to their size, weight and handling requirements.
                  </p>
                  <p>
                    This part of the move needs some planning. Larger furniture and heavier items have to be positioned
                    properly, while fragile boxes need suitable placement. An organised loading arrangement also makes
                    unloading easier at the destination.
                  </p>
                  <p class="mb-0">
                    After loading, the goods are transported to the delivery location according to the agreed moving
                    schedule. At the destination, the belongings are unloaded and handed over to the customer.
                  </p>
                </div>
              </div>
            </div>

            <!-- 3. Local and Domestic Relocation Services for Home Moves -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">Local and Domestic Relocation Services for Home Moves</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Not every relocation follows the same route. A move within the same city may involve apartment
                    access, parking, lift availability or building rules. A move to another city has different
                    transportation and distance requirements.
                  </p>
                  <p>
                    Make My Shift provides Local &amp; Domestic Moving support for these requirements. The team can
                    discuss your pickup and delivery locations, household goods and preferred moving schedule before the
                    service is arranged.
                  </p>
                  <p class="mb-0">
                    For longer-distance moves, providing accurate details about the goods and destination helps in
                    preparing a more suitable quotation.
                  </p>
                </div>
              </div>
            </div>

            <!-- 4. How Our Home Shifting Service Is Arranged -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-calendar-check-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">How Our Home Shifting Service Is Arranged</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    The process begins with a discussion about your move. You share the pickup address, destination and
                    details about the household goods that need to be shifted.
                  </p>
                  <p>
                    The packing requirements are then assessed. Once the packing work starts, belongings are prepared
                    according to their size and handling needs. After packing, the goods are loaded into the moving
                    vehicle and transported to the destination.
                  </p>
                  <p class="mb-0">
                    At the new location, the team unloads the household goods and completes the handover. If you require
                    additional support such as unpacking, it can be discussed before the move.
                  </p>
                </div>
              </div>
            </div>

            <!-- 5. What Affects the Cost of Home Shifting? -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <h3 class="service-feature-card-title">What Affects the Cost of Home Shifting?</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    There isn't one fixed charge for every home move. The quotation can change based on the quantity of
                    household goods, moving distance, packing requirements, manpower and transportation needs.
                  </p>
                  <p>
                    A larger household naturally requires more packing and handling work than a smaller move. Similarly,
                    an intercity relocation may involve different transportation requirements than a local shift.
                  </p>
                  <p class="mb-0">
                    For this reason, it is better to discuss your actual requirements instead of relying on a general
                    price figure.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Step-by-Step Moving Process -->
          <h3 class="pm-city-section-title-sm mt-4">Step-by-Step Household Moving Process</h3>
          <div class="row g-2 g-md-3 my-2">
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">1</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Survey &amp; Quote</strong>
                <p class="mb-0 service-step-card-desc">Doorstep or virtual survey with fixed-price estimate.
                </p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">2</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Expert Packing</strong>
                <p class="mb-0 service-step-card-desc">Systematic 5-layer packing by certified crews.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">3</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Safe Transit</strong>
                <p class="mb-0 service-step-card-desc">Closed-container trucks with live GPS updates.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">4</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Setup &amp; Placement</strong>
                <p class="mb-0 service-step-card-desc">Doorstep uncrating, room setup &amp; debris cleanup.
                </p>
              </div>
            </div>
          </div>

          <!-- Get Your Home Shift Planned Properly Callout Box -->
          <div class="p-3 p-md-4 rounded-3 mt-4 border service-guarantee-box">
            <h3 class="h6 fw-bold mb-2 d-flex align-items-center gap-2">
              <i class="bi bi-telephone-inbound-fill"></i> Get Your Home Shift Planned Properly
            </h3>
            <p class="small mb-0">
              <strong><?= htmlspecialchars($company3) ?></strong> provides practical support for local and domestic home
              relocations. Call <a href="<?= $phonehtml2 ?>"
                class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> for
              a quotation and discuss your home shifting requirements with our team.
            </p>
          </div>

        </div><!-- /1. MAIN CONTAINER -->

        <!-- ============ 2. FAQ CONTAINER CARD (Reached after Main Content) ============ -->
        <div class="pm-city-content-card mb-4" id="homeFaqSection">
          <div class="pm-city-section-eyebrow">HELP &amp; FAQS</div>
          <h2 class="h4 pm-city-section-title-sm">
            <i class="bi bi-question-circle-fill text-danger me-2"></i>Frequently Asked Questions About Home Shifting
          </h2>
          <p class="small mb-4 text-dark-muted">
            Find answers to common questions about our household shifting process, coverage, quotation, and moving
            services.
          </p>

          <div class="pm-city-faq-accordion accordion" id="homeRelocationFaqAccordion">
            <?php
            $home_faqs = [
              [
                "q" => "What does home shifting service include?",
                "a" => "Home shifting may include packing, loading, transportation, unloading and handover of household belongings. The exact service depends on the customer's requirements."
              ],
              [
                "q" => "Does Make My Shift provide local home shifting?",
                "a" => "Yes. Local household relocation can be arranged according to the pickup location, destination and goods that need to be moved."
              ],
              [
                "q" => "Can I use the service for an intercity move?",
                "a" => "Yes. Make My Shift provides domestic moving support for customers relocating their homes between cities in India."
              ],
              [
                "q" => "Are furniture and appliances included in household shifting?",
                "a" => "Yes. Household furniture, appliances and other residential belongings can be handled as part of the moving service, based on the agreed requirements."
              ],
              [
                "q" => "How is the moving quotation prepared?",
                "a" => "The quotation depends on factors such as the quantity of goods, distance, packing requirements, manpower and transportation needs."
              ]
            ];
            foreach ($home_faqs as $i => $faq):
              $isOpen = ($i === 0);
              $collapseId = "homeFaqCollapse" . $i;
              $headingId = "homeFaqHeading" . $i;
              ?>
              <div class="accordion-item pm-city-faq-item">
                <h3 class="accordion-header" id="<?= $headingId ?>">
                  <button class="accordion-button pm-city-faq-btn <?= $isOpen ? '' : 'collapsed' ?>" type="button"
                    data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>"
                    aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                    <span class="pm-faq-badge-num me-3"><?= sprintf('%02d', $i + 1) ?></span>
                    <span class="pm-faq-q-text"><?= htmlspecialchars($faq['q']) ?></span>
                  </button>
                </h3>
                <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $isOpen ? 'show' : '' ?>"
                  aria-labelledby="<?= $headingId ?>" data-bs-parent="#homeRelocationFaqAccordion">
                  <div class="accordion-body pm-city-faq-body">
                    <?= htmlspecialchars($faq['a']) ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div><!-- /2. FAQ CONTAINER CARD -->

      </div><!-- /LEFT COLUMN (col-lg-8) -->

      <!-- ============ RIGHT: THREE SIDEBAR CONTAINERS (col-lg-4) ============ -->
      <div class="col-lg-4">
        <?php $this->load->view('services/service_sidebar', [
          'active_slug' => 'home-relocation',
          'service_label' => 'Home Move',
        ]); ?>
      </div><!-- /RIGHT COLUMN (col-lg-4) -->

    </div><!-- /row (Main Content & Sticky Sidebar) -->

  </div><!-- /container -->
</section>