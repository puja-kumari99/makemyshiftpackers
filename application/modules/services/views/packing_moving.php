<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packing & Moving Services',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Services'],
        ['name' => 'Packing & Moving']
    ]
]); ?>

<!-- Main Page Content Section -->
<section class="pm-city-details-section py-5">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- 1. MAIN CONTAINER: Packing & Moving Overview & Comprehensive Details -->
        <div class="pm-city-content-card mb-4" id="packingMovingMainCard">
          <div class="pm-city-section-eyebrow">PROFESSIONAL PACKING &amp; RELOCATION SOLUTIONS</div>
          <h2 class="pm-city-section-title">
            Professional <span class="pm-city-accent">Packing and Moving Services</span>
          </h2>

          <div class="pm-city-prose">
            <p>
              Packing up a house looks manageable when you see a few boxes in the beginning. Give it a day or two, though, and the situation changes quickly. Cupboards are still half full, the kitchen seems to have twice as many things as expected, and fragile items need much more attention than ordinary belongings.
            </p>
            <p>
              For many families, that is the point where professional help starts making sense.
            </p>
            <p>
              <b><?= htmlspecialchars($company3) ?></b> handles packing and moving requirements for household and office relocations. Our team has more than <strong><?= $experience ?> years</strong> of experience in the moving industry, covering packing, loading, transportation and unloading as part of local and domestic moves.
            </p>
            <p>
              If you already have a moving date in mind, call <a href="<?= $phonehtml2 ?>" class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> and discuss the requirement with our team.
            </p>
          </div>

          <!-- Feature Pills -->
          <div class="pm-city-feature-pills my-4">
            <div class="pm-city-pill"><i class="bi bi-box-seam"></i> Multi-Layer Protective Packing</div>
            <div class="pm-city-pill"><i class="bi bi-shield-check"></i> Careful Fragile Item Handling</div>
            <div class="pm-city-pill"><i class="bi bi-truck"></i> Safe Loading &amp; Transit</div>
            <div class="pm-city-pill"><i class="bi bi-house-check-fill"></i> Doorstep Unloading &amp; Placement</div>
          </div>

          <!-- Featured Service Image -->
          <div class="my-4 rounded-3 overflow-hidden border shadow-sm">
            <img src="<?= base_url('assets/img/moving_img.jpg') ?>" 
                 alt="Professional Packing and Moving Services" 
                 class="img-fluid w-100 service-detail-hero-img">
          </div>

          <!-- Section: Before Packing Begins -->
          <h3 class="pm-city-section-title-sm mt-4">Before Packing Begins, We Look at the Size and Nature of the Move</h3>
          <div class="pm-city-prose">
            <p>
              Before a single carton is sealed, it helps to understand the quantity and type of goods involved. A 1BHK move may have fewer items, but a family shifting from a larger home could have furniture, appliances, kitchenware, books, clothes and plenty of smaller belongings.
            </p>
            <p>
              These things cannot all be packed in the same way.
            </p>
            <p>
              We look at the goods that need to be moved and plan the packing work accordingly. Fragile articles need protective wrapping. Larger furniture requires different handling. Everyday household goods can be grouped and packed so that unpacking at the destination is less confusing.
            </p>
            <p>
              It sounds like a small detail, but good packing starts well before the first box is closed.
            </p>
          </div>

          <!-- 5 Service Highlight Boxes -->
          <div class="row g-3 my-4">
            <!-- 1. From Glassware to Heavy Furniture, Every Item Has Its Own Packing Requirement -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-box-seam-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">From Glassware to Heavy Furniture, Every Item Has Its Own Packing Requirement</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    A glass item and a wooden cupboard obviously cannot be treated alike. The same applies to appliances, decorative pieces, kitchen utensils and office equipment.
                  </p>
                  <p>
                    Suitable packing materials can be selected according to the item. Depending on the requirement, packing may involve corrugated cartons, bubble wrap, foam sheets, stretch film and other protective materials.
                  </p>
                  <p>
                    For furniture, the focus is on protecting exposed surfaces and edges during handling. Fragile belongings need extra care while being packed and loaded. Electronics and appliances also need appropriate protection before they are moved.
                  </p>
                  <p class="mb-0">
                    The packing team has to think about the journey ahead, not just the condition of the item while it is sitting inside the house.
                  </p>
                </div>
              </div>
            </div>

            <!-- 2. The Way Goods Are Loaded Can Make the Rest of the Move Easier -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-truck"></i>
                  </div>
                  <h3 class="service-feature-card-title">The Way Goods Are Loaded Can Make the Rest of the Move Easier</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Once the packing is finished, everything has to leave the property. This can be surprisingly time-consuming when there are several floors, a busy building entrance or limited lift access.
                  </p>
                  <p>
                    Furniture and heavier items require proper handling during loading. Smaller cartons need to be kept organised rather than simply placed wherever there is space.
                  </p>
                  <p>
                    The loading arrangement also matters during transportation. A mixed shipment may contain boxes, furniture, appliances and fragile goods; the items need to be handled with that in mind.
                  </p>
                  <p class="mb-0">
                    After loading, the goods move towards the destination according to the agreed transportation plan.
                  </p>
                </div>
              </div>
            </div>

            <!-- 3. Reaching the New Address Is Only One Part of Completing the Move -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">Reaching the New Address Is Only One Part of Completing the Move</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    At the destination, the work starts again.
                  </p>
                  <p>
                    Cartons have to come inside, furniture needs to be handled through the entrance, and larger items may need to go directly to their intended rooms. If everything is dropped in one place, unpacking becomes another job in itself.
                  </p>
                  <p>
                    Unloading can be included in the moving service according to the agreed scope. Customers can also discuss access issues beforehand, particularly for apartments, upper floors and properties where parking or lift availability needs to be considered.
                  </p>
                  <p class="mb-0">
                    A little planning here saves time later.
                  </p>
                </div>
              </div>
            </div>

            <!-- 4. The Work Can Be Arranged Around Your Household or Office Requirements -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-check2-circle"></i>
                  </div>
                  <h3 class="service-feature-card-title">The Work Can Be Arranged Around Your Household or Office Requirements</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    The exact work depends on the size and type of relocation. Services may include:
                  </p>
                </div>

                <ul class="pm-city-checklist my-3">
                  <li><i class="bi bi-check-circle-fill"></i> <span>Packing household or office belongings</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Protective wrapping and suitable cartons</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Furniture and appliance handling</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Loading and transportation</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Unloading at the destination</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Local and domestic moving support</span></li>
                </ul>

                <div class="pm-city-prose">
                  <p class="mb-0">
                    The requirement is discussed before the move so the work can be planned around the actual quantity and type of goods.
                  </p>
                </div>
              </div>
            </div>

            <!-- 5. Several Practical Details Go Into the Final Moving Quotation -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <h3 class="service-feature-card-title">Several Practical Details Go Into the Final Moving Quotation</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    There is no sensible one-price-fits-all figure for packing and moving.
                  </p>
                  <p>
                    The number of belongings, packing materials, distance, floor access, manpower and transportation requirements can all affect the quotation. A small local move with limited packing will naturally involve different work from a full household relocation to another state.
                  </p>
                  <p>
                    Yes, professional packing and moving costs more than doing everything yourself. But the comparison is not only about the bill. Your own time, packing materials, lifting work and transportation arrangements also have a cost.
                  </p>
                  <p class="mb-0">
                    For an accurate estimate, share the pickup location, destination and approximate quantity of goods with the team.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Step-by-Step Moving Process -->
          <h3 class="pm-city-section-title-sm mt-4">Step-by-Step Packing &amp; Moving Process</h3>
          <div class="row g-2 g-md-3 my-2">
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">1</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Pre-Move Survey</strong>
                <p class="mb-0 service-step-card-desc">Assessment of inventory &amp; packing needs.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">2</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Multi-Layer Pack</strong>
                <p class="mb-0 service-step-card-desc">Bubble wrap, foam &amp; box labeling.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">3</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Safe Transit</strong>
                <p class="mb-0 service-step-card-desc">Organized loading &amp; secure transport.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">4</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Unload &amp; Settle</strong>
                <p class="mb-0 service-step-card-desc">Doorstep unloading &amp; room placement.</p>
              </div>
            </div>
          </div>

          <!-- A Little Planning Before Moving Day Can Save You a Lot of Work Callout Box -->
          <div class="p-3 p-md-4 rounded-3 mt-4 border service-guarantee-box">
            <h3 class="h6 fw-bold mb-2 d-flex align-items-center gap-2">
              <i class="bi bi-telephone-inbound-fill"></i> A Little Planning Before Moving Day Can Save You a Lot of Work
            </h3>
            <p class="small mb-0">
              Share your relocation details with <strong><?= htmlspecialchars($company3) ?></strong> and discuss the packing and moving service that fits your requirement. Call <a href="<?= $phonehtml2 ?>" class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> to get started.
            </p>
          </div>

        </div><!-- /1. MAIN CONTAINER CARD -->

        <!-- ============ 2. FAQ CONTAINER CARD (Reached after Main Content) ============ -->
        <div class="pm-city-content-card mb-4" id="packingMovingFaqSection">
          <div class="pm-city-section-eyebrow">HELP &amp; FAQS</div>
          <h2 class="h4 pm-city-section-title-sm">
            <i class="bi bi-question-circle-fill text-danger me-2"></i>Frequently Asked Questions About Packing &amp; Moving
          </h2>
          <p class="small mb-4 text-dark-muted">
            What customers commonly want to know before starting the packing and moving work.
          </p>

          <div class="accordion pm-city-faq-accordion" id="packingMovingFaqAccordion">
            <?php
            $packing_faqs = [
              [
                "q" => "Do you provide packing and moving together?",
                "a" => "Yes. Packing, loading, transportation and unloading can be arranged together according to the requirements of the move."
              ],
              [
                "q" => "Do you pack fragile household belongings?",
                "a" => "Fragile items can receive additional protective packing based on their size, material and handling needs."
              ],
              [
                "q" => "What packing materials are used?",
                "a" => "Materials can include corrugated cartons, bubble wrap, foam sheets, stretch film and other suitable protective materials, depending on the goods."
              ],
              [
                "q" => "Can office belongings also be packed and moved?",
                "a" => "Yes. Office relocation may include furniture, documents, equipment and other workplace belongings."
              ],
              [
                "q" => "What information is needed for a quotation?",
                "a" => "The pickup location, destination, approximate quantity of goods and packing requirements are useful when preparing a quotation."
              ]
            ];

            foreach ($packing_faqs as $i => $faq):
              $isOpen = ($i === 0);
              $collapseId = "packFaqCollapse" . $i;
              $headingId = "packFaqHeading" . $i;
            ?>
              <div class="accordion-item pm-city-faq-item">
                <h3 class="accordion-header" id="<?= $headingId ?>">
                  <button class="accordion-button pm-city-faq-btn <?= $isOpen ? '' : 'collapsed' ?>" 
                          type="button" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#<?= $collapseId ?>" 
                          aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" 
                          aria-controls="<?= $collapseId ?>">
                    <span class="pm-faq-badge-num me-3"><?= sprintf('%02d', $i + 1) ?></span>
                    <span class="pm-faq-q-text"><?= htmlspecialchars($faq['q']) ?></span>
                  </button>
                </h3>
                <div id="<?= $collapseId ?>" 
                     class="accordion-collapse collapse <?= $isOpen ? 'show' : '' ?>" 
                     aria-labelledby="<?= $headingId ?>" 
                     data-bs-parent="#packingMovingFaqAccordion">
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
            'active_slug'    => 'packing-and-moving',
            'service_label'  => 'Expert Packing',
        ]); ?>
      </div><!-- /RIGHT COLUMN (col-lg-4) -->

    </div><!-- /row (Main Content & Sticky Sidebar) -->

  </div>
</section>
