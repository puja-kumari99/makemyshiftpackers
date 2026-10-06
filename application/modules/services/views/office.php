<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Office Relocation Services',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Services'],
        ['name' => 'Office Relocation']
    ]
]); ?>

<!-- Main Page Content Section -->
<section class="pm-city-details-section py-5">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- 1. MAIN CONTAINER: Office Relocation Overview & Comprehensive Details -->
        <div class="pm-city-content-card mb-4" id="officeRelocationMainCard">
          <div class="pm-city-section-eyebrow">ENTERPRISE RELOCATION SOLUTIONS</div>
          <h2 class="pm-city-section-title">
            Best <span class="pm-city-accent">Office Shifting Services</span>
          </h2>

          <div class="pm-city-prose">
            <p>
              Relocating an office requires more planning than simply moving furniture to a new address. Computers, workstations, office files, equipment, chairs, storage units and other business assets all need to be moved in an organised manner. At the same time, your regular work should face as little disruption as possible.
            </p>
            <p>
              <b><?= htmlspecialchars($company3) ?></b> provides professional <strong>Office Shifting Services</strong> for businesses planning a local or domestic office relocation. With <strong><?= $experience ?> years</strong> of experience in the packing and moving industry, we help organise the movement of office belongings with attention to packing, handling, loading, transportation and unloading.
            </p>
            <p>
              Our approach starts with understanding the size of the office, the items being moved, pickup and delivery locations and the preferred shifting schedule. This allows the relocation work to be planned around your business requirements.
              For a moving estimate, call <a href="<?= $phonehtml2 ?>" class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> and speak with our team.
            </p>
          </div>

          <!-- Feature Pills -->
          <div class="pm-city-feature-pills my-4">
            <div class="pm-city-pill"><i class="bi bi-clock-history"></i> Zero Business Downtime</div>
            <div class="pm-city-pill"><i class="bi bi-shield-check"></i> Carefully Handled &amp; Insured Transit</div>
            <div class="pm-city-pill"><i class="bi bi-laptop"></i> Specialized IT Asset Handling</div>
            <div class="pm-city-pill"><i class="bi bi-tags"></i> Departmental Inventory Tagging</div>
          </div>

          <!-- Featured Service Image -->
          <div class="my-4 rounded-3 overflow-hidden border shadow-sm">
            <img src="<?= base_url('assets/img/office_img.jpg') ?>" 
                 alt="Professional Corporate Office Relocation Services" 
                 class="img-fluid w-100 service-detail-hero-img">
          </div>

          <!-- Tailored Shifting by Corporate Scope -->
          <h3 class="pm-city-section-title-sm mt-4">Office Relocation Services Designed Around Business Requirements</h3>
          <div class="pm-city-prose">
            <p>
              Every office has its own setup. A small workplace may have desks, chairs and a few computers, while a larger office can involve workstations, cabinets, documents, electronic equipment and several departments.
            </p>
            <p>
              Our office relocation service can be planned for different types of business premises and may include:
            </p>
            <ul class="pm-city-checklist my-3">
              <li><i class="bi bi-check-circle-fill"></i> <span>Office furniture and workstations</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Chairs, tables and storage cabinets</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Computers and electronic equipment</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Office files and documents</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Printers and other office equipment</span></li>
              <li><i class="bi bi-check-circle-fill"></i> <span>Packed business belongings and supplies</span></li>
            </ul>
            <p>
              The scope of work is discussed before the move so that the relocation team understands what needs to be shifted and how the items should be handled.
            </p>
          </div>

          <!-- 5 Service Highlight Boxes -->
          <div class="row g-3 my-4">
            <!-- 1. Office Packing Services for Furniture, Equipment and Documents -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-box-seam-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">Office Packing Services for Furniture, Equipment and Documents</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Packing an office is different from packing a household. Business documents need to remain organised, while electronic equipment and office furniture require appropriate protection during handling.
                  </p>
                  <p>
                    Items can be grouped and packed according to their type and destination within the new office. This can make unpacking and placement easier after delivery.
                  </p>
                  <p class="mb-0">
                    For office furniture and equipment, suitable protective materials can be used depending on the item. Computers, monitors, printers, glass components and other delicate equipment need particular care during packing and loading.
                  </p>
                </div>
              </div>
            </div>

            <!-- 2. Planned Office Moving to Reduce Unnecessary Downtime -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-clock-history"></i>
                  </div>
                  <h3 class="service-feature-card-title">Planned Office Moving to Reduce Unnecessary Downtime</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    For a business, time matters. A relocation that is poorly planned can leave employees waiting, equipment unavailable and important work delayed.
                  </p>
                  <p>
                    Our <b>Office Shifting Services</b> focus on organising the movement around the customer's preferred schedule. The packing and loading requirements can be discussed in advance, allowing the team to plan the work in a more practical sequence.
                  </p>
                  <p class="mb-0">
                    Where possible, businesses can also plan their move around working hours, weekends or other suitable periods based on their operational requirements.
                  </p>
                </div>
              </div>
            </div>

            <!-- 3. Safe Handling of IT Equipment and Office Assets -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-laptop"></i>
                  </div>
                  <h3 class="service-feature-card-title">Safe Handling of IT Equipment and Office Assets</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Computers and electronic equipment need different handling than ordinary office furniture. Screens, CPUs, printers and other devices should be packed properly before transportation.
                  </p>
                  <p>
                    The relocation team can prepare such items for movement using appropriate protective packing. Office desks, chairs, cabinets and other furniture are also handled according to their size and weight.
                  </p>
                  <p class="mb-0">
                    At the destination, the goods are unloaded and handed over so that the business can begin arranging its new workplace.
                  </p>
                </div>
              </div>
            </div>

            <!-- 4. How Our Office Shifting Service Works -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-calendar-check-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">How Our Office Shifting Service Works</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    The relocation begins with a discussion about the office setup and moving requirements. The team reviews the type of items involved, the quantity of goods, pickup and destination locations and the preferred schedule.
                  </p>
                  <p>
                    Once the plan is decided, office belongings are packed and prepared for loading. Furniture and equipment are handled according to their requirements, while documents and smaller items can be packed into suitable boxes.
                  </p>
                  <p class="mb-0">
                    The packed goods are then loaded into the moving vehicle and transported to the new office. After reaching the destination, the team unloads the belongings and completes the handover. Placement or unpacking requirements can be discussed in advance if needed.
                  </p>
                </div>
              </div>
            </div>

            <!-- 5. Office Shifting Cost Depends on the Scope of Work -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <h3 class="service-feature-card-title">Office Shifting Cost Depends on the Scope of Work</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Office relocation charges cannot be fixed without understanding the actual requirements. The number of workstations, quantity of furniture and equipment, packing needs, manpower, distance and transportation requirements can all affect the quotation.
                  </p>
                  <p>
                    A small office move may require considerably less work than relocating a larger workplace with multiple departments and equipment.
                  </p>
                  <p class="mb-0">
                    For an accurate estimate, provide the pickup and destination details along with basic information about the office belongings that need to be shifted.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Step-by-Step Moving Process -->
          <h3 class="pm-city-section-title-sm mt-4">Step-by-Step Corporate Relocation Process</h3>
          <div class="row g-2 g-md-3 my-2">
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">1</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Site Audit &amp; Plan</strong>
                <p class="mb-0 service-step-card-desc">Floor plan audit and moving timeline development.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">2</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Tagging &amp; IT Pack</strong>
                <p class="mb-0 service-step-card-desc">Anti-static wrapping and asset code tagging.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">3</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Secure Transit</strong>
                <p class="mb-0 service-step-card-desc">Air-cushioned container fleet with GPS telemetry.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">4</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Setup &amp; Placement</strong>
                <p class="mb-0 service-step-card-desc">Workstation setup and cable management.</p>
              </div>
            </div>
          </div>

          <!-- Plan Your Office Relocation With Make My Shift Callout Box -->
          <div class="p-3 p-md-4 rounded-3 mt-4 border service-guarantee-box">
            <h3 class="h6 fw-bold mb-2 d-flex align-items-center gap-2">
              <i class="bi bi-telephone-inbound-fill"></i> Plan Your Office Relocation With Make My Shift
            </h3>
            <p class="small mb-0">
              A business move needs proper coordination so that furniture, equipment and important office belongings reach the new workplace in an organised manner. Call <a href="<?= $phonehtml2 ?>" class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> to discuss your office relocation requirements and request a moving quotation.
            </p>
          </div>

        </div><!-- /1. MAIN CONTAINER CARD -->

        <!-- ============ 2. FAQ CONTAINER CARD (Reached after Main Content) ============ -->
        <div class="pm-city-content-card mb-4" id="officeRelocationFaqSection">
          <div class="pm-city-section-eyebrow">HELP &amp; FAQS</div>
          <h2 class="h4 pm-city-section-title-sm">
            <i class="bi bi-question-circle-fill text-danger me-2"></i>Frequently Asked Questions About Office Shifting
          </h2>
          <p class="small mb-4 text-dark-muted">
            Find answers to common questions about corporate office relocations, electronics handling, scheduling, and quotations.
          </p>

          <div class="accordion pm-city-faq-accordion" id="officeRelocationFaqAccordion">
            <?php
            $office_faqs = [
              [
                "q" => "What does office shifting service include?",
                "a" => "Office shifting can include packing, loading, transportation, unloading and handover of office furniture, equipment, files and other business belongings."
              ],
              [
                "q" => "Can computers and electronic equipment be moved?",
                "a" => "Yes. Computers, monitors, printers and other electronic equipment can be prepared for transportation using suitable protective packing and careful handling."
              ],
              [
                "q" => "Can office relocation be planned for weekends?",
                "a" => "The preferred moving schedule can be discussed with the team while planning the relocation. Businesses can request a suitable date based on their operational requirements."
              ],
              [
                "q" => "How is office shifting cost calculated?",
                "a" => "The cost depends on factors such as the quantity of goods, number of furniture items and equipment, packing requirements, manpower, distance and transportation needs."
              ],
              [
                "q" => "Does Make My Shift provide domestic office relocation?",
                "a" => "Yes. Office relocation requirements between cities can be discussed and planned according to the destination and scope of the move."
              ]
            ];

            foreach ($office_faqs as $i => $faq):
              $isOpen = ($i === 0);
              $collapseId = "officeFaqCollapse" . $i;
              $headingId = "officeFaqHeading" . $i;
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
                     data-bs-parent="#officeRelocationFaqAccordion">
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
            'active_slug'    => 'office-relocation',
            'service_label'  => 'Office Move',
        ]); ?>
      </div><!-- /RIGHT COLUMN (col-lg-4) -->

    </div><!-- /row (Main Content & Sticky Sidebar) -->

  </div>
</section>
