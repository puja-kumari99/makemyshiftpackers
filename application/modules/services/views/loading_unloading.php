<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'Loading & Unloading Services',
  'bc_desc' => '',
  'breadcrumbs' => [
    ['name' => 'Our Services'],
    ['name' => 'Loading & Unloading']
  ]
]); ?>

<!-- Main Page Content Section -->
<section class="pm-city-details-section py-5">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- 1. MAIN CONTAINER: Loading & Unloading Overview & Comprehensive Details -->
        <div class="pm-city-content-card mb-4" id="loadingUnloadingMainCard">
          <div class="pm-city-section-eyebrow">SAFE &amp; SYSTEMATIC MATERIAL HANDLING</div>
          <h2 class="pm-city-section-title">
            Best <span class="pm-city-accent">Loading and Unloading Services</span>
          </h2>

          <div class="pm-city-prose">
            <p>
              Moving boxes and furniture sounds straightforward until you actually have to lift everything. A few
              cartons may be easy enough, but a full household can include beds, wardrobes, sofas, refrigerators,
              washing machines, tables and dozens of packed boxes. Add stairs, a narrow entrance or a building without a
              working lift, and the job becomes quite different.
            </p>
            <p>
              <b><?= htmlspecialchars($company3) ?></b> provides professional loading and unloading services for household
              and office relocation. Our team handles the physical movement of packed goods during local and domestic
              shifting, with the work planned around the property, quantity of items and transportation requirements.
              With more than <strong><?= $experience ?> years</strong> of industry experience, we ensure safe and
              organized handling from start to finish.
            </p>
            <p>
              For details and booking, call <a href="<?= $phonehtml2 ?>"
                class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> and
              discuss your loading and unloading needs with our team.
            </p>
          </div>

          <!-- Feature Pills -->
          <div class="pm-city-feature-pills my-4">
            <div class="pm-city-pill"><i class="bi bi-shield-check"></i> Careful Item Handling</div>
            <div class="pm-city-pill"><i class="bi bi-truck"></i> Organised Vehicle Loading</div>
            <div class="pm-city-pill"><i class="bi bi-building"></i> High-Rise &amp; Staircase Support
            </div>
            <div class="pm-city-pill"><i class="bi bi-people-fill"></i> Experienced Moving Crew</div>
          </div>

          <!-- Featured Service Image -->
          <div class="my-4 rounded-3 overflow-hidden border shadow-sm">
            <img src="<?= base_url('assets/img/loging_img.jpg') ?>" alt="Professional Loading and Unloading Services"
              class="img-fluid w-100 service-detail-hero-img">
          </div>

          <!-- Section: Loading Starts With Knowing Which Items Need Extra Care -->
          <h3 class="pm-city-section-title-sm mt-4">Loading Starts With Knowing Which Items Need Extra Care</h3>
          <div class="pm-city-prose">
            <p>
              Not every item can be picked up and carried in the same way. A carton of clothes is one thing; a
              refrigerator, glass table or large wooden wardrobe is another.
            </p>
            <p>
              Before loading begins, the team needs to understand what is being moved and how the goods can be taken out
              of the property. Furniture may need careful movement through doors and corridors. Appliances can require
              additional attention because of their size and weight. Fragile cartons should also be identified so they
              are handled accordingly.
            </p>
            <p>
              This basic planning makes a difference once the actual loading starts.
            </p>
          </div>

          <!-- 5 Service Highlight Boxes -->
          <div class="row g-3 my-4">
            <!-- 1. Heavy Furniture and Appliances Require More Than Physical Strength -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-shield-shaded"></i>
                  </div>
                  <h3 class="service-feature-card-title">Heavy Furniture and Appliances Require More Than Physical
                    Strength</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Lifting a heavy item is not simply about having enough people. The route from the room to the
                    vehicle matters too.
                  </p>
                  <p>
                    A wardrobe may need to be moved through a narrow doorway. A sofa might have to pass through a
                    staircase with limited turning space. Large appliances can become difficult when there is very
                    little room around them.
                  </p>
                  <p class="mb-0">
                    Our loading service is arranged around these practical conditions. The team handles furniture,
                    appliances and packed cartons according to the requirements of the move, while access at the
                    property is considered before the work begins.
                  </p>
                </div>
              </div>
            </div>

            <!-- 2. Well-Arranged Loading Helps Keep the Moving Vehicle Organised -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-truck"></i>
                  </div>
                  <h3 class="service-feature-card-title">Well-Arranged Loading Helps Keep the Moving Vehicle Organised
                  </h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Once items reach the vehicle, they need to be placed with some thought. Heavy furniture, cartons and
                    fragile belongings may all form part of the same shipment.
                  </p>
                  <p>
                    A random loading arrangement can make unloading harder and may leave some items difficult to reach
                    at the destination. Organised loading helps the team keep track of the different categories of goods
                    and makes the unloading process easier to manage later.
                  </p>
                  <p class="mb-0">
                    The exact arrangement depends on the shipment and transportation vehicle being used.
                  </p>
                </div>
              </div>
            </div>

            <!-- 3. Unloading at the Destination Is Not Just About Taking Everything Out -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">Unloading at the Destination Is Not Just About Taking
                    Everything Out</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    When the vehicle reaches the new property, the process works in reverse.
                  </p>
                  <p>
                    Boxes have to come down, furniture needs to be carried inside and larger items may need to go
                    through staircases, lifts or corridors. Customers may already be tired after travelling or managing
                    other parts of the relocation, so having support with the physical work can be useful.
                  </p>
                  <p class="mb-0">
                    Our unloading service covers the removal of packed goods and larger items from the vehicle according
                    to the agreed scope. If there are access restrictions at the destination, it is better to mention
                    them before the moving day.
                  </p>
                </div>
              </div>
            </div>

            <!-- 4. Loading and Unloading Support for Homes, Offices and Local Moves -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-check2-circle"></i>
                  </div>
                  <h3 class="service-feature-card-title">Loading and Unloading Support for Homes, Offices and Local
                    Moves</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    The service can be useful for different types of relocation. A household move may involve furniture,
                    appliances and cartons, while an office move can include workstations, chairs, files and equipment.
                  </p>
                  <p>
                    Depending on the requirement, loading and unloading support may include:
                  </p>
                </div>

                <ul class="pm-city-checklist my-3">
                  <li><i class="bi bi-check-circle-fill"></i> <span>Household furniture and packed
                      cartons</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Appliances and other bulky
                      belongings</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Office furniture and packed workplace
                      items</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Careful handling during vehicle
                      loading</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Unloading and room placement at the
                      destination</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Support for local and domestic
                      relocation</span></li>
                </ul>

                <div class="pm-city-prose">
                  <p class="mb-0">
                    The final scope is discussed according to the actual move.
                  </p>
                </div>
              </div>
            </div>

            <!-- 5. What Can Change the Cost of Loading and Unloading? -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <h3 class="service-feature-card-title">What Can Change the Cost of Loading and Unloading?</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Loading and unloading charges depend on the work involved. The number and weight of items, number of
                    floors, lift availability, distance between the property and vehicle, access conditions and manpower
                    required can all affect the quotation.
                  </p>
                  <p>
                    A ground-floor move with easy vehicle access is different from a fourth-floor relocation where
                    everything has to be carried down stairs. So, a fixed price without knowing these details may not
                    give you a useful estimate.
                  </p>
                  <p class="mb-0">
                    Share your moving details with the team for a practical quotation.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Step-by-Step Moving Process -->
          <h3 class="pm-city-section-title-sm mt-4">Step-by-Step Loading &amp; Unloading Process</h3>
          <div class="row g-2 g-md-3 my-2">
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">1</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Access Audit</strong>
                <p class="mb-0 service-step-card-desc">Doorway check &amp; pathway planning.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">2</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Careful Load</strong>
                <p class="mb-0 service-step-card-desc">Safe lifting &amp; corridor maneuvering.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">3</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Organised Transit</strong>
                <p class="mb-0 service-step-card-desc">Balanced stacking inside carrier.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">4</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Room Placement</strong>
                <p class="mb-0 service-step-card-desc">Unloading &amp; doorstep handover.</p>
              </div>
            </div>
          </div>

          <!-- Need Help With the Physical Side of Your Move? Callout Box -->
          <div class="p-3 p-md-4 rounded-3 mt-4 border service-guarantee-box">
            <h3 class="h6 fw-bold mb-2 d-flex align-items-center gap-2">
              <i class="bi bi-telephone-inbound-fill"></i> Need Help With the Physical Side of Your Move?
            </h3>
            <p class="small mb-0">
              Let <strong><?= htmlspecialchars($company3) ?></strong> handle the heavy lifting. Call <a
                href="<?= $phonehtml2 ?>"
                class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> for
              professional Loading &amp; Unloading Services.
            </p>
          </div>

        </div><!-- /1. MAIN CONTAINER CARD -->

        <!-- ============ 2. FAQ CONTAINER CARD (Reached after Main Content) ============ -->
        <div class="pm-city-content-card mb-4" id="loadingUnloadingFaqSection">
          <div class="pm-city-section-eyebrow">HELP &amp; FAQS</div>
          <h2 class="h4 pm-city-section-title-sm">
            <i class="bi bi-question-circle-fill text-danger me-2"></i>Frequently Asked Questions About Loading &amp;
            Unloading
          </h2>
          <p class="small mb-4 text-dark-muted">
            Questions to ask before booking loading and unloading services.
          </p>

          <div class="accordion pm-city-faq-accordion" id="loadingUnloadingFaqAccordion">
            <?php
            $loading_faqs = [
              [
                "q" => "Do you provide loading and unloading separately?",
                "a" => "The loading and unloading requirements can be discussed according to the customer's moving arrangement and scope of work."
              ],
              [
                "q" => "Can you handle heavy household furniture?",
                "a" => "Yes, furniture and bulky household items can be included in the loading and unloading requirement."
              ],
              [
                "q" => "Do you handle office items?",
                "a" => "Yes. Office furniture, packed cartons and other workplace belongings can be handled as part of an office relocation."
              ],
              [
                "q" => "What if the building has no lift or narrow stairs?",
                "a" => "Our crew is experienced in staircase carrying and maneuvering through tight corridors with appropriate manpower planned in advance."
              ],
              [
                "q" => "What factors determine loading and unloading charges?",
                "a" => "Costs depend on the quantity and weight of goods, number of floors, lift availability, distance between the property and vehicle, access conditions, and required manpower."
              ]
            ];

            foreach ($loading_faqs as $i => $faq):
              $isOpen = ($i === 0);
              $collapseId = "loadFaqCollapse" . $i;
              $headingId = "loadFaqHeading" . $i;
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
                  aria-labelledby="<?= $headingId ?>" data-bs-parent="#loadingUnloadingFaqAccordion">
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
          'active_slug' => 'loading-unloading',
          'service_label' => 'Loading Goods',
        ]); ?>
      </div><!-- /RIGHT COLUMN (col-lg-4) -->

    </div><!-- /row (Main Content & Sticky Sidebar) -->

  </div>
</section>