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
          "q" => "Do you handle shifting within Purnia, like Line Bazar to Rambagh?",
          "a" => "Local moves inside the city are routine for us. A 1 or 2 BHK shift between areas like Line Bazar, Madhubani Bazar and Rambagh can often be completed within a few hours. Moves to nearby places like Kasba depend on the distance and access conditions."
        ],
        [
          "q" => "Can you work in crowded areas like Bhatta Bazar and Khuskibagh?

",
          "a" => "It's something we plan around. A truck that can't get into a narrow Bhatta Bazar lane is no use, so the vehicle size and the loading time are decided before the move day. Early mornings are usually the easiest, before the market fills up."
        ],
        [
          "q" => "Do you move shops and offices in Purnia?",
          "a" => "Yes, offices and shops both. A shop in Bhatta Bazar, a clinic near Line Bazar or a small office in Madhubani Bazar, we plan all of them. Tell us when you close for the day. A Sunday or late evening shift means you lose no business hours."
        ],
        [
          "q" => "Can you move my car or bike from Purnia to another city?
",
          "a" => "Yes. If you're leaving Purnia, your car or bike can go with the household load or on its own. The pickup is from your door, whether that's Rambagh, Kasba or Ranipatra. On the carrier it's tied down with safety harnesses."
        ],
        [
          "q" => "How long does a move from Purnia to a distant city take?",
          "a" => "Expect 2 to 5 days if you're shifting from Kasba or Rambagh to Delhi, Mumbai or Bangalore. It can move a little either way, since the route, vehicle availability and the transport schedule all play a part. We confirm the expected delivery date at the time of booking."
        ],
        [
          "q" => "Is transit insurance available for moves from Purnia?",
          "a" => "Yes, options are there. What gets covered depends on the policy, so ask about your TV, fridge and other costly items before you book. If you're moving far from Line Bazar or Khuskibagh, take photos before packing and keep the bills with you.
"
        ],
        
   
      ];
       } elseif (strtolower(trim($city)) === 'katihar') {
        $faqs = [
          [
            "q" => "How early should I book packers and movers in Katihar?",

            "a" => "A few days ahead works for most moves. Near Chhath, Diwali or Durga Puja, book well in advance because roads and trains fill up.

"
          ],
          [
            "q" => "Can monsoon rain affect a move from Station Road or Hasanganj?",
            "a" => "Yes. Rain from June to September slows loading and can put some roads under water, so we cover goods well, and a spare day helps."
          ],
          [
            "q" => "Do you work as local packers and movers near me in Barsoi, Manihari or Kursela?
",
            "a" => "Yes. We move from those towns too, and we send a smaller vehicle when access is tight."
          ],
          [
            "q" => "How long does a move from Katihar take?",
            "a" => "A local move usually finishes within a few hours or the same day. Long-distance moves generally take 2 to 5 days.
"
          ],
          [
            "q" => "Do you offer car and bike transport from Katihar?",
            "a" => "Yes, in open or enclosed carriers fitted with safety harnesses."
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
    }elseif (strtolower(trim($city)) === 'muzaffarpur') {
      $faqs = [
        [
          "q" => "Is it okay to move from Juran Chhapra or Brahmpura in heavy rain?",
          "a" => "Mostly yes. Keep a day or so spare, because a flooded road can hold the truck up. Let us know early and the plan gets changed around it."
   ],
   [
    
     "q" => "Do narrow lanes near Saraiyaganj and Motijheel slow down a move?",
     "a" => "Do narrow lanes near Saraiyaganj and Motijheel slow down a move?
They can. The truck halts at the nearest spot it can reach, and the crew walks the goods in from there. Early mornings usually go easier, with fewer people on the road.
"
   ],
   [
     "q" => "Can you handle office or unit moves in Bela Industrial Area?",
     "a" => "Yes. First we visit and look at what's there, and the vehicle and crew size get decided after that, for files, furniture and equipment alike."
   ],
   [
     "q" => "What do packers and movers charge in Muzaffarpur?",
     "a" => "A 1 BHK local move usually lands between Rs. 7,000 and Rs. 11,000. For a 2 BHK it's Rs. 9,000 to Rs. 15,000, and a 3 BHK runs Rs. 15,000 to Rs. 18,000. The floor level, lift availability, quantity of goods and packing requirements can affect the final cost. These figures are estimates."
   ],
   [
     "q" => "Can you move my car or bike from Muzaffarpur?
",
     "a" => "Yes. Cars and bikes travel in open or enclosed carriers, strapped in with safety harnesses. Insurance can be added if you want it.
"
   ]
   ];
   




    }elseif (strtolower(trim($state)) === 'bihar') {
      $faqs = [
        [
          "q" => "Can monsoon floods affect a move from $city?",
          "a" => "They can. Rain is heavy in Bihar from June to September, and rivers in many areas tend to overflow. Loading gets slower in the wet, and some roads may end up under water. Booking early helps, and so does covering your goods properly."
        ],
        [
          "q" => "Can winter fog delay a move from $city?",
          "a" => "It might. In December and January the fog over Bihar can get thick, and trucks on the highway don't move quickly in it. For a long-distance move in these months, a couple of spare days in the plan is probably sensible."
        ],
        [
          "q" => "Can hot summer weather make moving from $city harder?
",
          "a" => "Possibly, yes, mainly between April and June, when the loo blows through and afternoons get very hot. Crews tire fast while packing and lifting in that heat, so many people start at sunrise and finish the heavy work before noon."
        ],
        [
          "q" => "Do river crossings add time to a move from $city?",
          "a" => "They may. The Ganga is crossed by bridge, and on busy days a queue can build up at the approach. Keeping a little slack in the schedule tends to save a lot of worry."
        ],
        [
          "q" => "Can narrow lanes or parking cause problems when moving from $city?",
          "a" => "In crowded areas, it's quite possible. If the truck can't stop near the building, the movers might carry your things a fair distance by hand, or load them onto a smaller vehicle for the last stretch."
        ],
          [
          "q" => "Can building access affect a move from $city?
",
          "a" => "It can. Stairs, small lifts and narrow doors all add to the time spent loading and unloading. Letting the team know about these before moving day usually helps.
"
        ],
          [
          "q" => "Does the moving date matter when shifting from $city?",
          "a" => "Chhath and Diwali bring a rush of travellers to Bihar, and the roads and trains fill up for days around both. Slots near those dates go quickly, so if your move falls close to either festival, it's best to book well ahead."
        ],
          [
          "q" => "How long does a move from $city take?",
          "a" => "A local move is usually done within a few hours, or by the end of the day. For long distances, it generally takes somewhere between 2 and 5 days, depending on how far you're going.
"
        ],
            [
          "q" => "Can I move my car or bike from $city?",
          "a" => "Yes. Make My Shift carries cars and bikes in open or enclosed carriers, and the vehicles are secured with safety harnesses.
"
        ],
              [
          "q" => "What items can't be moved?",
          "a" => "Hazardous materials, inflammable substances and compressed gases can't be carried. Perishable food, cash, jewellery and personal legal documents are also left off the list..
"
        ],
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