<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Car Transportation Services',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Services'],
        ['name' => 'Car Transportation']
    ]
]); ?>

<!-- Main Page Content Section -->
<section class="pm-city-details-section py-5">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- 1. MAIN CONTAINER: Car Transportation Overview & Comprehensive Details -->
        <div class="pm-city-content-card mb-4" id="carTransportationMainCard">
          <div class="pm-city-section-eyebrow">SPECIALIZED AUTOMOBILE LOGISTICS</div>
          <h2 class="pm-city-section-title">
            Top <span class="pm-city-accent">Car Transportation Services</span>
          </h2>

          <div class="pm-city-prose">
            <p>
              Your car is usually one of the bigger things you have to worry about during a relocation. It is not something you can simply pack into a carton and load with the rest of your household items.
            </p>
            <p>
              The car has to be collected from the right place, checked before movement, transported as planned and delivered at the other end without making the owner chase people for every small update. This becomes even more important when the move is between two different cities or states.
            </p>
            <p>
              <b><?= htmlspecialchars($company3) ?></b> provides professional <strong>Car Transportation Services</strong> for local as well as domestic relocations. We handle vehicle movement along with other relocation requirements such as household shifting, office relocation and bike transportation. With more than <strong><?= $experience ?> years</strong> of experience in the moving industry, our team understands that every relocation has its own practical issues.
            </p>
            <p>
              For a quotation or to discuss your requirement, call <a href="<?= $phonehtml2 ?>" class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> and speak with our team.
            </p>
          </div>

          <!-- Feature Pills -->
          <div class="pm-city-feature-pills my-4">
            <div class="pm-city-pill"><i class="bi bi-truck-front-fill"></i> Hydraulic Enclosed Carriers</div>
            <div class="pm-city-pill"><i class="bi bi-shield-fill-check"></i> Zero Transit Scratches</div>
            <div class="pm-city-pill"><i class="bi bi-geo-alt-fill"></i> GPS Real-Time Fleet Telemetry</div>
            <div class="pm-city-pill"><i class="bi bi-patch-check-fill"></i> Carefully Handled &amp; Insured</div>
          </div>

          <!-- Featured Service Image -->
          <div class="my-4 rounded-3 overflow-hidden border shadow-sm">
            <img src="<?= base_url('assets/img/car-img.jpg') ?>" 
                 alt="Professional Car Carrier Transportation Services" 
                 class="img-fluid w-100 service-detail-hero-img">
          </div>

          <!-- Section 1 (h3) -->
          <h3 class="pm-city-section-title-sm mt-4">Car Transportation Services for People Moving to Another City</h3>
          <div class="pm-city-prose">
            <p>
              A car can be moved for many reasons. You may be relocating because of a new job, shifting your family to another city, moving back home after several years, or simply taking your vehicle with you when you change your place of residence.
            </p>
            <p>
              The requirement sounds simple until the actual arrangements begin. Where will the car be picked up? Who will coordinate the movement? What happens if the destination is inside a residential lane? When should the vehicle reach? These are the small things that need to be discussed before transportation starts.
            </p>
            <p>
              Our team takes the basic details of your move first. The car model, pickup location, destination and preferred date help us understand what kind of transportation arrangement is required. That conversation is important. It gives you a clearer idea of the service instead of giving you a random price without knowing the actual route.
            </p>
          </div>

          <!-- 5 Service Highlight Boxes -->
          <div class="row g-3 my-4">
            <!-- 1. Your Vehicle Is Handled Separately From Household Goods -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <h3 class="service-feature-card-title">Your Vehicle Is Handled Separately From Household Goods</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    A car needs different handling from furniture, cartons and appliances.
                  </p>
                  <p>
                    Before the vehicle leaves the pickup point, the basic handover details are discussed. The condition of the car can be checked and noted, so both sides have a clear understanding of its condition before transportation.
                  </p>
                  <p>
                    Owners should also take a few simple precautions themselves. Remove valuables, important documents and personal belongings from the vehicle. Check the boot and storage areas too. People often remember the obvious things and forget the small ones.
                  </p>
                  <p>
                    Keeping the car clear makes the handover easier.
                  </p>
                  <p class="mb-0">
                    Our role is to coordinate the transportation requirement and keep the movement organised from pickup through delivery.
                  </p>
                </div>
              </div>
            </div>

            <!-- 2. Intercity Car Transportation With Proper Pickup Planning -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <h3 class="service-feature-card-title">Intercity Car Transportation With Proper Pickup Planning</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    The pickup point is not always an easy place for a transport vehicle to reach. A house may be inside a narrow lane, an apartment may have restricted entry, or the owner may need a little flexibility with the pickup timing.
                  </p>
                  <p>
                    These details can be discussed before the vehicle is moved.
                  </p>
                  <p>
                    For an intercity car relocation, the pickup location, destination and route are considered together. The expected schedule is also discussed so that the customer knows what to expect rather than waiting without any idea about the next step.
                  </p>
                  <p>
                    At the destination, delivery arrangements are coordinated according to the agreed location. If access is likely to be difficult, it is better to mention it at the time of booking.
                  </p>
                  <p class="mb-0">
                    A few minutes of discussion beforehand can prevent a lot of confusion later.
                  </p>
                </div>
              </div>
            </div>

            <!-- 3. Car Transportation Along With Your Complete Relocation -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-truck"></i>
                  </div>
                  <h3 class="service-feature-card-title">Car Transportation Along With Your Complete Relocation</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Sometimes the car is only one part of a much bigger move.
                  </p>
                  <p>
                    Imagine a family shifting from Bhagalpur to another state. There may be a refrigerator, beds, sofa, kitchen articles, boxes of clothes, office documents and a car that all need to reach the new home.
                  </p>
                  <p>
                    Arranging each part separately can make the moving schedule unnecessarily complicated.
                  </p>
                  <p>
                    Make My Shift can coordinate car transportation along with household relocation requirements, depending on the services booked. This gives the customer one relocation plan to work around instead of having completely separate arrangements for every item.
                  </p>
                  <p class="mb-0">
                    The actual schedule depends on the route and scope of the move, so these details are discussed before the booking is confirmed.
                  </p>
                </div>
              </div>
            </div>

            <!-- 4. What You Can Expect From Our Car Transportation Service -->
            <div class="col-12">
              <div class="service-feature-card service-card-red">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-check2-circle"></i>
                  </div>
                  <h3 class="service-feature-card-title">What You Can Expect From Our Car Transportation Service</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    The exact service depends on the route and your requirements, but car transportation may include:
                  </p>
                </div>

                <ul class="pm-city-checklist my-3">
                  <li><i class="bi bi-check-circle-fill"></i> <span>Pickup coordination from the agreed location</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Basic vehicle handover and condition checking</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Transportation planning for the selected route</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Coordination during the movement</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Delivery at the agreed destination</span></li>
                  <li><i class="bi bi-check-circle-fill"></i> <span>Coordination with household shifting when both services are booked</span></li>
                </ul>

                <div class="pm-city-prose">
                  <p class="mb-0">
                    We discuss the actual requirement before finalising the service. That way, the quotation and arrangements are based on your move rather than a generic package.
                  </p>
                </div>
              </div>
            </div>

            <!-- 5. What Decides the Cost of Car Transportation? -->
            <div class="col-12">
              <div class="service-feature-card service-card-blue">
                <div class="service-feature-card-header">
                  <div class="service-feature-card-icon">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <h3 class="service-feature-card-title">What Decides the Cost of Car Transportation?</h3>
                </div>

                <div class="pm-city-prose">
                  <p>
                    Car transportation charges do not follow one fixed rate.
                  </p>
                  <p>
                    Distance is obviously a major factor, but it is not the only one. The vehicle type, pickup and delivery locations, route, transportation arrangement and other requirements can affect the final quotation.
                  </p>
                  <p>
                    For example, moving a car within a nearby city and transporting the same car across several states are two very different jobs. The amount of coordination involved can also change depending on the pickup and delivery locations.
                  </p>
                  <p class="mb-0">
                    So, rather than relying on a general price found online, it is better to provide your actual details and ask for a quotation.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Step-by-Step Moving Process -->
          <h3 class="pm-city-section-title-sm mt-4">Step-by-Step Car Transportation Process</h3>
          <div class="row g-2 g-md-3 my-2">
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">1</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Pre-Move Survey</strong>
                <p class="mb-0 service-step-card-desc">Inspection report and odometer logging.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">2</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Hydraulic Loading</strong>
                <p class="mb-0 service-step-card-desc">4-wheel safety chocking &amp; strapping.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-blue mx-auto mb-2">
                  <span class="fw-bold">3</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Monitored Transit</strong>
                <p class="mb-0 service-step-card-desc">GPS telemetry across national highways.</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="text-center p-2 p-md-3 rounded-3 border bg-white h-100 shadow-sm">
                <div class="pm-city-trust-icon-wrap pm-city-trust-red mx-auto mb-2">
                  <span class="fw-bold">4</span>
                </div>
                <strong class="d-block mb-1 service-step-card-title">Doorstep Handover</strong>
                <p class="mb-0 service-step-card-desc">Condition match &amp; handover checklist.</p>
              </div>
            </div>
          </div>

          <!-- Moving Your Car? Let's Discuss the Route First Callout Box -->
          <div class="p-3 p-md-4 rounded-3 mt-4 border service-guarantee-box">
            <h3 class="h6 fw-bold mb-2 d-flex align-items-center gap-2">
              <i class="bi bi-telephone-inbound-fill"></i> Moving Your Car? Let's Discuss the Route First
            </h3>
            <p class="small mb-0">
              <strong><?= htmlspecialchars($company3) ?></strong> can help you plan the requirement. Call <a href="<?= $phonehtml2 ?>" class="fw-bold text-decoration-none service-call-link"><?= htmlspecialchars($phone2) ?></a> to discuss your car transportation services.
            </p>
          </div>

        </div><!-- /1. MAIN CONTAINER CARD -->

        <!-- ============ 2. FAQ CONTAINER CARD (Reached after Main Content) ============ -->
        <div class="pm-city-content-card mb-4" id="carTransportationFaqSection">
          <div class="pm-city-section-eyebrow">HELP &amp; FAQS</div>
          <h2 class="h4 pm-city-section-title-sm">
            <i class="bi bi-question-circle-fill text-danger me-2"></i>Frequently Asked Questions About Car Transportation
          </h2>
          <p class="small mb-4 text-dark-muted">
            Find answers to common questions about interstate car transportation, vehicle safety, home pickup, and scheduling.
          </p>

          <div class="accordion pm-city-faq-accordion" id="carTransportationFaqAccordion">
            <?php
            $car_faqs = [
              [
                "q" => "Can you transport my car to another state?",
                "a" => "Yes, domestic and intercity car transportation requirements can be discussed with our team. Share the pickup and destination details so the route and service requirements can be assessed."
              ],
              [
                "q" => "Do you provide car pickup from my home?",
                "a" => "Pickup arrangements can be planned according to the location and accessibility of the property. It is useful to share the exact pickup details before booking."
              ],
              [
                "q" => "Can I move my car and household goods together?",
                "a" => "Yes. Car transportation can be coordinated with household shifting when both services are required. The timing and movement plan will depend on the particular relocation."
              ],
              [
                "q" => "Should I leave personal items inside my car?",
                "a" => "It is better to remove valuables, personal belongings and important documents before handing over the vehicle. The car should ideally be kept clear for transportation."
              ]
            ];

            foreach ($car_faqs as $i => $faq):
              $isOpen = ($i === 0);
              $collapseId = "carFaqCollapse" . $i;
              $headingId = "carFaqHeading" . $i;
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
                     data-bs-parent="#carTransportationFaqAccordion">
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
            'active_slug'    => 'car-transportation',
            'service_label'  => 'Car Transport',
        ]); ?>
      </div><!-- /RIGHT COLUMN (col-lg-4) -->

    </div><!-- /row (Main Content & Sticky Sidebar) -->

  </div>
</section>
