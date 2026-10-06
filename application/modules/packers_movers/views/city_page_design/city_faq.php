<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- Frequently Asked Questions Card -->
<div class="pm-city-content-card mb-4" id="cityFaqSection">
  <div class="pm-city-section-eyebrow">HELP &amp; FAQS</div>
  <h3 class="h4 pm-city-section-title-sm">
    <i class="bi bi-question-circle-fill text-danger me-2"></i>Frequently Asked Questions About Packers and Movers in <?= htmlspecialchars($city) ?>
  </h3>
  <p class="small mb-4 text-dark-muted">
    Quick answers to common questions about moving rates, packing materials, and transit schedules in <?= htmlspecialchars($city) ?>.
  </p>

  <div class="pm-city-faq-accordion accordion" id="cityFaqAccordion">
    <?php
    if (strtolower(trim($city)) === 'purnia') {
      $faqs = [
        [
          "q" => "Do you handle moves in and around Line Bazar?",
          "a" => "Yes, including moves for patients' families and hospital staff shifting near Sadar Hospital and the Medical College, timed to avoid the busiest hospital hours."
        ],
        [
          "q" => "Can you manage a shift out of Gulabbagh with mandi traffic nearby?
",
          "a" => "Yes, vehicle timing around Gulabbagh is planned around market and highway traffic on NH 27 and NH 231."
        ],
        [
          "q" => "Do you serve residential areas like Rambagh and Khuskibagh?",
          "a" => "Yes, both are covered, and lane width near these localities is checked before the vehicle is confirmed."
        ],
        [
          "q" => "Do you handle moves to or from Kasba?
",
          "a" => "Yes, Kasba is served as its own stop, with the vehicle and route planned separately from city-core moves."
        ],
        [
          "q" => "
What does a local shift within Purnia typically cost?
",
          "a" => "A rough guide is Rs. 3,500-6,500  for a 1BHK, Rs. 6,000-10,000 for a 2BHK and Rs. 9,000-15,000 for a 3BHK, though the final cost depends on the goods, floor and distance."
        ]
      ];
    } elseif (strtolower(trim($city)) === 'bhagalpur') {
        $faqs = [
          [
            "q" => "How much do packers and movers cost in Bhagalpur?",

            "a" => "The cost depends on the size of your home, the distance, the packing needed and the type of vehicle. These are indicative rates for local shifting in Bhagalpur:
1 BHK: starts from around ₹7,000
2 BHK: starts from around ₹9,000
3 BHK: starts from around ₹15,000
4 or 5 BHK: around ₹25,000-₹30,000
Villa or bungalow: around ₹25,000-₹40,000
For moves to other cities, the price goes up with the distance. A 1 BHK move starts at around ₹7,000 for up to 50 km and can go up to ₹35,000 for a move within 2,500 km
These rates are only a guide. The final quote depends on your goods, the distance, the packing and your moving needs.
"
          ],
          [
            "q" => "Can you move goods from the narrow lanes of Khalifabagh and Ghantaghar?",
            "a" => "Yes. We plan the vehicle size before moving day and carry goods by hand to the main road when a truck cannot reach the door"
          ],
          [
            "q" => "Do you provide office and shop shifting in Bhagalpur?",
            "a" => "Yes. We plan office and shop moves around your working hours, and we pack furniture, equipment and files with care."
          ],
          [
            "q" => "Do you move cars and bikes from Bhagalpur to other cities?",
            "a" => "Yes. We provide car and bike transportation, either with your household move or on its own, in open or enclosed carriers."
          ],
          [
            "q" => "How long does a move from Bhagalpur take?",
            "a" => "A local move usually finishes within a few hours or the same day. For long distance moves, transit takes about 2 to 5 days depending on the distance."
          ]
        ];
    } else {
      $faqs = [
        [
          "q" => "Do movers provide packing services in $city?",
          "a" => "Yes. Packing is available along with loading, unloading and transportation support."
        ],
        [
          "q" => "Can I transport my car from $city?",
          "a" => "Yes. Car transportation is one of the services available. The price depends mainly on the route and transportation requirement."
        ],
        [
          "q" => "Do Packers and Movers in $city handle office relocation?",
          "a" => "Yes. Office relocation is part of the service offering. The work is planned according to the quantity and type of office goods."
        ],
        [
          "q" => "What affects the cost of household shifting?",
          "a" => "Packing material, number of goods, manpower, floor access and travel distance can all affect the final cost."
        ],
        [
          "q" => "Can I shift my bike from $city?",
          "a" => "Yes. Bike transportation is available for customers who need to move their two-wheeler."
        ]
      ];
    }
    foreach ($faqs as $i => $faq):
      $isFirst = ($i === 0);
    ?>
    <div class="accordion-item pm-city-faq-item mb-3 border rounded-3 overflow-hidden">
      <h4 class="accordion-header" id="headingCfaq<?= $i ?>">
        <button class="accordion-button pm-city-faq-btn <?= $isFirst ? '' : 'collapsed' ?>" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseCfaq<?= $i ?>"
                aria-expanded="<?= $isFirst ? 'true' : 'false' ?>"
                aria-controls="collapseCfaq<?= $i ?>">
          <span class="pm-faq-badge-num me-3"><?= sprintf("%02d", $i + 1) ?></span>
          <span class="pm-faq-q-text flex-grow-1"><?= htmlspecialchars($faq['q']) ?></span>
        </button>
      </h4>
      <div id="collapseCfaq<?= $i ?>" class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>"
           aria-labelledby="headingCfaq<?= $i ?>"
           data-bs-parent="#cityFaqAccordion">
        <div class="accordion-body pm-city-faq-body lh-lg">
          <?= htmlspecialchars($faq['a']) ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Planning Advice & Callout Section after FAQs -->
  <div class="p-3 p-md-4 rounded-3 mt-4 border service-guarantee-box">
    <h3 class="h6 fw-bold mb-2 d-flex align-items-center gap-2">
      <i class="bi bi-shield-check fs-5"></i> How Can You Plan a Safer and More Organised Move in <?= htmlspecialchars($city) ?>?
    </h3>
    <p class="small mb-0">
      If you are planning household shifting, office relocation, car transportation or bike transportation in <strong><?= htmlspecialchars($city) ?></strong>, discuss your requirements with the moving team and ask for a quotation based on your actual consignment, and contact us at <a href="<?= $phonehtml2 ?>" class="fw-bold text-decoration-none"><i class="bi bi-telephone-fill me-1"></i><?= htmlspecialchars($phone2) ?></a>.
    </p>
  </div>

</div>