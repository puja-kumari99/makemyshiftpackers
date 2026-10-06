<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'Bike Transportation Services',
  'bc_desc' => '',
  'breadcrumbs' => [
    ['name' => 'Our Services'],
    ['name' => 'Bike Transportation']
  ]
]); ?>

<!-- Main Page Content Section -->
<section class="pm-city-details-section py-5">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- 1. MAIN CONTAINER: Bike Transportation Overview & Comprehensive Details -->
        <div class="pm-city-content-card mb-4" id="bikeTransportationMainCard">
          <div class="pm-city-section-eyebrow">SCRATCH-FREE TWO-WHEELER TRANSIT</div>
          <h2 class="pm-city-section-title">
            Specialized <span class="pm-city-accent">Bike Transportation</span> &amp; Motorcycle Relocation
          </h2>

          <div class="pm-city-prose">
            <p>
              Riding your two-wheeler across hundreds of highway kilometers for relocation puts you and your vehicle at significant risk from heat, fatigue, heavy traffic, and mechanical wear. At <strong><?= htmlspecialchars($company3) ?></strong>, we deliver a stress-free alternative with dedicated door-to-door two-wheeler transportation designed to keep your bike completely scratch-free and road-ready.
            </p>
            <p>
              With over <strong><?= $experience ?> years</strong> of professional motorcycle transport expertise, our trained crews utilize specialized multi-layer packaging: heavy air-bubble wraps, EPE foam sheets, corrugated cardboard armour, and heavy-duty ratchet tie-down straps. From commuter scooters and roadsters to Royal Enfields and high-end superbikes, we ensure upright transit, carefully handled for safe and secure delivery anywhere in India.
            </p>
          </div>

          <!-- Feature Pills -->
          <div class="pm-city-feature-pills my-4">
            <div class="pm-city-pill"><i class="bi bi-shield-shaded"></i> Triple-Layer Foam Cushioning</div>
            <div class="pm-city-pill"><i class="bi bi-box-seam"></i> Custom Wooden Crating Available</div>
            <div class="pm-city-pill"><i class="bi bi-check2-circle"></i> Zero-Scratch Delivery Guarantee</div>
            <div class="pm-city-pill"><i class="bi bi-geo-alt-fill"></i> Doorstep Pickup &amp; Drop</div>
          </div>

          <!-- Featured Service Image -->
          <div class="my-4 rounded-3 overflow-hidden border shadow-sm">
            <img src="<?= base_url('assets/img/bike_img.jpg') ?>" 
                 alt="Professional Motorcycle and Two-Wheeler Transportation Services" 
                 class="img-fluid w-100 service-detail-hero-img">
          </div>

          <!-- Tailored Shifting by Two-Wheeler Category -->
          <h3 class="pm-city-section-title-sm mt-4">Two-Wheeler Relocation Tailored to Your Motorcycle</h3>
          <div class="pm-city-prose">
            <p>
              Different bikes require unique protective wrapping and strapping configurations. We provide tailored handling across all two-wheeler categories:
            </p>
          </div>

          <div class="row g-3 my-3">
            <div class="col-md-4">
              <div class="p-3 rounded-3 border bg-light h-100">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <i class="bi bi-bicycle fs-5 service-category-icon"></i>
                  <h4 class="h6 mb-0 fw-bold">Scooters &amp; Mopeds</h4>
                </div>
                <p class="small mb-0 text-dark-muted">
                  Ideal for Activa, Jupiter, Access, and EV scooters (Ola, Ather). Full fiber-body foam wrapping, speedometer console protection, and safe wheel anchoring.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="p-3 rounded-3 border bg-light h-100">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <i class="bi bi-speedometer fs-5 service-category-icon"></i>
                  <h4 class="h6 mb-0 fw-bold">Commuters &amp; Sports Bikes</h4>
                </div>
                <p class="small mb-0 text-dark-muted">
                  Engineered for Pulsar, Apache, FZ, Duke, and MT-15. Corrugated fuel tank shields, mirror deconstruction, and dual fork ratchet clamping.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="p-3 rounded-3 border bg-light h-100">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <i class="bi bi-trophy-fill fs-5 service-category-icon"></i>
                  <h4 class="h6 mb-0 fw-bold">Cruisers &amp; Superbikes</h4>
                </div>
                <p class="small mb-0 text-dark-muted">
                  Specialized crating for Royal Enfield, Harley-Davidson, Triumph, and Ducati. Heavy wooden cage protection, velvet wraps, and dedicated container transit.
                </p>
              </div>
            </div>
          </div>

          <!-- 6-Point Bike Safety Standards -->
          <h3 class="pm-city-section-title-sm mt-4">Motorcycle Packaging &amp; Transit Protocols</h3>
          <div class="pm-city-prose">
            <p>
              We treat every motorcycle like our own. Our crews follow a systematic 6-point safety checklist before any vehicle leaves your doorstep:
            </p>
          </div>

          <!-- Comprehensive Services Checklist -->
          <ul class="pm-city-checklist">
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span><strong>Pre-Move Photographic Condition Audit:</strong> Complete physical condition report recording current scratch status, odometer reading, and battery health signed jointly before packing.</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span><strong>Delicate Component Dismantling:</strong> Rear-view mirrors and tall visors are carefully removed, bubble-wrapped, and boxed separately to eliminate snap hazards.</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span><strong>Multi-Layer Corrugated Fuel Tank Armor:</strong> 5-ply corrugated sheets and high-density EPE foam contoured directly to fuel tanks, protecting paint from friction and scratches.</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span><strong>Fuel Tank Drain &amp; Fire Hazard Prevention:</strong> Fuel is safely reduced to minimal reserve levels (under 1-2 liters) to prevent highway vapor pressure and fire hazard compliance.</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span><strong>Upright 4-Point Ratchet Tie-Down Harnessing:</strong> Heavy-duty industrial ratchet straps secure the motorcycle firmly upright inside covered container vehicles.</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span><strong>Doorstep Uncrating &amp; Reassembly:</strong> Complete unwrapping, mirror re-installation, and joint inspection at your new residence before handover sign-off.</span>
            </li>
          </ul>

          <!-- Step-by-Step Moving Process (2 per row in mobile view) -->
          <h3 class="pm-city-section-title-sm mt-4">Step-by-Step Bike Transportation Process</h3>
          <div class="row g-2 g-md-3 my-2">
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">1</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Physical Audit</strong>
                <p class="mb-0 service-step-card-desc">Inspection report &amp; odometer logging.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">2</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">3-Layer Packing</strong>
                <p class="mb-0 service-step-card-desc">Bubble wrap, foam &amp; tank armor.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">3</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Upright Transit</strong>
                <p class="mb-0 service-step-card-desc">4-point ratchet strapping inside carrier.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">4</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Doorstep Delivery</strong>
                <p class="mb-0 service-step-card-desc">Unwrapping, mirror fitting &amp; handover.</p>
              </div>
            </div>
          </div>

          <!-- Transparent Pricing Guarantee -->
          <div class="p-3 p-md-4 rounded-3 mt-4 border service-guarantee-box">
            <h3 class="h6 fw-bold mb-2 d-flex align-items-center gap-2">
              <i class="bi bi-shield-lock-fill text-danger fs-5"></i>
              Transparent Fixed Quotation &amp; Zero Scratches
            </h3>
            <p class="small mb-0">
              Our two-wheeler shipping charges are all-inclusive: multi-layer protective packaging materials, loading machinery, interstate highway toll taxes, doorstep pickup, and doorstep handover are fully included. No surprise terminal fees or hidden handling charges.
            </p>
          </div>

        </div><!-- /1. MAIN CONTAINER CARD -->

        <!-- ============ 2. FAQ CONTAINER CARD (Reached after Main Content) ============ -->
        <div class="pm-city-content-card mb-4" id="bikeTransportationFaqSection">
          <div class="pm-city-section-eyebrow">HELP &amp; FAQS</div>
          <h2 class="h4 pm-city-section-title-sm">
            <i class="bi bi-question-circle-fill text-danger me-2"></i>Frequently Asked Questions &mdash; Bike Transportation
          </h2>
          <p class="small mb-4 text-dark-muted">
            Common questions regarding fuel draining, wooden crating, documentation, and two-wheeler insurance.
          </p>

          <div class="accordion pm-city-faq-accordion" id="bikeTransportationFaqAccordion">
            <?php
            $bike_faqs = [
              [
                "q" => "Do I need to drain the petrol tank before handing over my bike?",
                "a" => "Yes. For safety and highway regulatory compliance, the fuel tank must be empty or contain less than 1 liter of fuel. Draining prevents vapor pressure buildup, fuel leakage, and fire hazards inside enclosed container vehicles during transit."
              ],
              [
                "q" => "How are delicate parts like mirrors, indicators, and windshields protected?",
                "a" => "Our packaging crew dismantles rear-view mirrors and visors, wrapping them in multi-layer air bubble wrap and boxing them safely. Indicators and handlebar ends are cushioned with high-density EPE foam and heavy stretch wrap to absorb all vibrations."
              ],
              [
                "q" => "What documents are required for interstate bike transportation across India?",
                "a" => "To transport your bike across state borders, we require copies of: 1) Vehicle Registration Certificate (RC book/smart card), 2) Valid vehicle insurance certificate, 3) Valid PUC (pollution check), and 4) Government-issued photo ID proof of the vehicle owner (Aadhaar or Driving License)."
              ],
              [
                "q" => "Can I get a customized wooden crate for my Royal Enfield or high-end superbike?",
                "a" => "Yes! We construct custom wooden crates specifically tailored to your motorcycle's dimensions. Heavy cruisers (Royal Enfield, Jawa, Harley-Davidson) and sports superbikes benefit greatly from wooden skeleton crates that completely isolate the bike from any external contact."
              ],
              [
                "q" => "Is transit insurance provided for two-wheeler transport?",
                "a" => "Yes. We offer comprehensive all-risk transit insurance based on your vehicle's current Insured Declared Value (IDV). In the unlikely event of highway incidents or transit damage, our claims desk coordinates fast, transparent claim settlements."
              ],
              [
                "q" => "Can I transport my helmet and riding gear along with the motorcycle?",
                "a" => "Yes. Your riding helmet, jacket, and riding accessories can be securely packed into a separate carton and loaded alongside your motorcycle in the same carrier at no additional transport fee."
              ]
            ];

            foreach ($bike_faqs as $i => $faq):
              $isOpen = ($i === 0);
              $collapseId = "bikeFaqCollapse" . $i;
              $headingId = "bikeFaqHeading" . $i;
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
                       data-bs-parent="#bikeTransportationFaqAccordion">
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
          'active_slug' => 'bike-transportation',
          'service_label' => 'Bike Transport',
        ]); ?>
      </div><!-- /RIGHT COLUMN (col-lg-4) -->

    </div><!-- /row (Main Content & Sticky Sidebar) -->

  </div>
</section>