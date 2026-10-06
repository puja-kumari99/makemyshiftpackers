<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed'); 


?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'How to Choose a Verified Packers and Movers',
  'bc_desc' => 'Step-by-step verification guide and essential checklist to choose licensed, trusted, and safe relocation experts.',
  'breadcrumbs' => [
    ['name' => 'About Us'],
    ['name' => 'How to Choose']
  ]
]);
?>

<!-- ======================================================
     MAIN CONTENT SECTION
     ====================================================== -->
<section class="py-5 about-page-bg">
  <div class="container">
    <div class="row g-4" id="howToChooseMainRow">

      <!-- Left Column (Main Verification Guide & Accordion) -->
      <div class="col-lg-8">

        <!-- 1. INTRO & ESSENTIAL CHECKLIST CARD -->
        <div class="about-advantage-card mb-4" id="howToChooseIntroCard">
          <span class="about-section-eyebrow">BUYER GUIDE &amp; VERIFICATION</span>
          <h2 class="about-section-title">How to Choose a <span class="text-danger">Verified Packers &amp; Movers</span>
          </h2>
          <div class="about-red-accent-bar"></div>

          <p>
            During your move to a new place, the foremost question will not be packing your things in the boxes. It will
            be who you can trust with those belongings. All your furniture, appliances, glass, clothing and important
            documentation have to reach your destination without any trouble. It’s always wise to conduct some research
            on the packers and movers before employing them for relocation purposes.
            With just a few steps, you’ll know how to distinguish a professional moving company from an unprofessional
            one.
          </p>
          <!-- Make My Shift Packers and Movers at a Glance -->
          <div class="choose-partner-box my-4">
            <h3 class="choose-partner-title"><?= htmlspecialchars($company3) ?> <span class="text-danger">at a Glance</span></h3>
            <p class="choose-partner-text mb-3">
              <b><?= htmlspecialchars($company3) ?></b> is an experienced relocation services provider operating on the market for more than <b><?= htmlspecialchars($experience) ?> years</b>. The company works with customers planning household shifts, office moves and vehicle transportation.
            </p>
            <p class="choose-partner-text mb-0">
              Its services include packing, loading, unloading, transportation, car shifting and bike transportation. Local moves as well as relocations between cities can be planned according to the customer's requirements.
            </p>
          </div>

          <!-- How to Check a Packers and Movers Company -->
          <div class="choose-partner-box box-blue my-4">
            <h3 class="choose-partner-title">How to Check a <span class="text-primary">Packers and Movers Company</span></h3>
            <p class="mb-3">
              Before paying an advance, take a few minutes to check the company:
            </p>
            <div class="d-flex flex-column gap-2 ps-1">
              <div class="d-flex align-items-start gap-2">
                <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                <div>
                  <strong class="text-dark">Check the business details:</strong> Ask for the company's registered name, GST details, office address and contact information. The details should match the quotation and invoice.
                </div>
              </div>
              <div class="d-flex align-items-start gap-2">
                <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                <div>
                  <strong class="text-dark">Read customer feedback:</strong> Don't stop at the Google star rating. Read recent reviews and see what people have actually said about packing, delivery, behaviour and charges.
                </div>
              </div>
              <div class="d-flex align-items-start gap-2">
                <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                <div>
                  <strong class="text-dark">Ask for a quotation:</strong> Price has to be provided in writing. Ensure that the quotation mentions the packing, loading, transportation, unloading, GST and any other service you require.
                </div>
              </div>
              <div class="d-flex align-items-start gap-2">
                <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                <div>
                  <strong class="text-dark">Discuss your belongings:</strong> Inform the mover about heavy furniture, fragile items, appliances, stairs and whether a lift is available at the property.
                </div>
              </div>
              <div class="d-flex align-items-start gap-2">
                <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                <div>
                  <strong class="text-dark">Ask about vehicle and insurance:</strong> In case of an intercity move, you have to know how your goods are going to be transported and if they are insured against transit damages.
                </div>
              </div>
              <div class="d-flex align-items-start gap-2">
                <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                <div>
                  <strong class="text-dark">Save the documents:</strong> Keep the quotation document, invoice and all other booking-related documents till the end of the move.
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- 2. WHY CONSIDER MAKE MY SHIFT -->
        <div class="about-advantage-card mb-4" id="whyConsiderMakeMyShiftCard">
          <span class="about-section-eyebrow">WHY CONSIDER US</span>
          <h2 class="about-section-title">Why Consider <span class="text-danger">Make My Shift Packers and Movers?</span></h2>
          <div class="about-red-accent-bar"></div>

          <p>
            Every move is different. Someone shifting a small flat may need a very different arrangement from a family moving a complete 3BHK house. An office move has another set of requirements, while transporting a car or bike needs separate planning.
          </p>
          <p class="text-muted mb-4">
            Make My Shift approaches these requirements according to the type of move. The company provides:
          </p>

          <!-- Highlights Checklist Grid Container -->
          <div class="row g-3 mb-4">
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border h-100 shadow-sm">
                <i class="bi bi-patch-check-fill text-danger fs-5 flex-shrink-0"></i>
                <span class="fw-semibold text-dark">More than <?= htmlspecialchars($experience) ?> years of relocation experience</span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border h-100 shadow-sm">
                <i class="bi bi-buildings-fill text-danger fs-5 flex-shrink-0"></i>
                <span class="fw-semibold text-dark">Home shifting and office relocation</span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border h-100 shadow-sm">
                <i class="bi bi-car-front-fill text-danger fs-5 flex-shrink-0"></i>
                <span class="fw-semibold text-dark">Car and bike transportation</span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border h-100 shadow-sm">
                <i class="bi bi-box-seam-fill text-danger fs-5 flex-shrink-0"></i>
                <span class="fw-semibold text-dark">Packing and loading assistance</span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border h-100 shadow-sm">
                <i class="bi bi-truck text-danger fs-5 flex-shrink-0"></i>
                <span class="fw-semibold text-dark">Unloading support at the destination</span>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border h-100 shadow-sm">
                <i class="bi bi-geo-alt-fill text-danger fs-5 flex-shrink-0"></i>
                <span class="fw-semibold text-dark">Local and domestic moving services</span>
              </div>
            </div>
            <div class="col-12">
              <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border h-100 shadow-sm">
                <i class="bi bi-chat-dots-fill text-danger fs-5 flex-shrink-0"></i>
                <span class="fw-semibold text-dark">Communication with customers during the move</span>
              </div>
            </div>
          </div>

          <!-- Ready to Plan Your Move Container -->
          <div class="choose-partner-box my-4">
            <h3 class="choose-partner-title">Ready to Plan <span class="text-danger">Your Move?</span></h3>
            <p class="mb-3">
              Don't select a mover only because the quotation looks cheap. Check the company, ask questions and understand the services before you book.
            </p>
            <div class="choose-partner-cta p-3 rounded-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
              <div class="d-flex align-items-center gap-2">
                <div class="choose-partner-cta-icon mb-0">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div>
                  <span class="choose-partner-cta-subtext">For household, office or vehicle relocation support,</span>
                  <span class="fw-bold text-dark">Contact <b><?= htmlspecialchars($company3) ?></b> at <?= htmlspecialchars($phone) ?> for a quote</span>
                </div>
              </div>
              <a href="<?= $phonehtml ?>" class="choose-partner-cta-btn text-decoration-none rounded-2 flex-shrink-0">
                <i class="bi bi-telephone-fill"></i> <?= htmlspecialchars($phone) ?>
              </a>
            </div>
          </div>
        </div>

        <!-- 3. ADVANTAGES OF CHOOSING A PROFESSIONAL MOVING COMPANY -->
        <div class="about-advantage-card mb-4" id="advantagesOfProfessionalCard">
          <span class="about-section-eyebrow">KEY BENEFITS</span>
          <h2 class="about-section-title">Advantages of Choosing a <span class="text-danger">Professional Moving Company</span></h2>
          <div class="about-red-accent-bar"></div>

          <p class="mb-3">
            A team of professionals will be capable of handling most of the physical tasks associated with the move. The advantage is significant when your goods include bulkier furniture, refrigerators, washing machine, TV set or any other fragile objects.
          </p>

          <div class="row g-3 my-3">
            <div class="col-12 col-md-4">
              <div class="about-feature-box box-blue h-100 p-3 rounded-3">
                <div class="about-feature-head d-flex align-items-center gap-2 mb-2">
                  <div class="about-feature-icon-wrap about-icon-blue icon-size-36 mb-0">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <h3 class="feature-title mb-0 fs-6 fw-bold text-dark">Safe Handling</h3>
                </div>
                <p class="mb-0 small text-dark-muted">
                  Proper packing will also reduce chances of any scratches and damage during the process of loading, transportation and unloading.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <div class="about-feature-box box-red h-100 p-3 rounded-3">
                <div class="about-feature-head d-flex align-items-center gap-2 mb-2">
                  <div class="about-feature-icon-wrap about-icon-red icon-size-36 mb-0">
                    <i class="bi bi-truck"></i>
                  </div>
                  <h3 class="feature-title mb-0 fs-6 fw-bold text-dark">Space Planning</h3>
                </div>
                <p class="mb-0 small text-dark-muted">
                  With planned loading, the available vehicle space can be used more sensibly.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <div class="about-feature-box box-blue h-100 p-3 rounded-3">
                <div class="about-feature-head d-flex align-items-center gap-2 mb-2">
                  <div class="about-feature-icon-wrap about-icon-blue icon-size-36 mb-0">
                    <i class="bi bi-clock-history"></i>
                  </div>
                  <h3 class="feature-title mb-0 fs-6 fw-bold text-dark">Time Saving</h3>
                </div>
                <p class="mb-0 small text-dark-muted">
                  Another benefit is time. Instead of arranging labour, packing material and transportation separately, you can have these parts handled as one moving job.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- 4. HOW THE MOVING PROCESS USUALLY WORKS -->
        <div class="about-advantage-card mb-4" id="movingProcessCard">
          <span class="about-section-eyebrow">RELOCATION WORKFLOW</span>
          <h2 class="about-section-title">How the Moving Process <span class="text-danger">Usually Works</span></h2>
          <div class="about-red-accent-bar"></div>

          <div class="d-flex flex-column gap-3 mt-4">

            <!-- Step 1 -->
            <div class="p-3 bg-light rounded-3 border-start border-4 border-danger shadow-sm">
              <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-danger text-white rounded-pill px-2.5 py-1">1</span>
                <h3 class="fs-6 fw-bold mb-0 text-dark">Requirement discussion</h3>
              </div>
              <p class="small mb-0 text-dark-muted">
                The moving team first understands your pickup point, destination and type of goods.
              </p>
            </div>

            <!-- Step 2 -->
            <div class="p-3 bg-light rounded-3 border-start border-4 border-primary shadow-sm">
              <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-primary text-white rounded-pill px-2.5 py-1">2</span>
                <h3 class="fs-6 fw-bold mb-0 text-dark">Packing</h3>
              </div>
              <p class="small mb-0 text-dark-muted">
                Household or office items are packed according to their size and handling requirements.
              </p>
            </div>

            <!-- Step 3 -->
            <div class="p-3 bg-light rounded-3 border-start border-4 border-danger shadow-sm">
              <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-danger text-white rounded-pill px-2.5 py-1">3</span>
                <h3 class="fs-6 fw-bold mb-0 text-dark">Loading</h3>
              </div>
              <p class="small mb-0 text-dark-muted">
                The packed goods are taken to the vehicle and loaded carefully.
              </p>
            </div>

            <!-- Step 4 -->
            <div class="p-3 bg-light rounded-3 border-start border-4 border-primary shadow-sm">
              <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-primary text-white rounded-pill px-2.5 py-1">4</span>
                <h3 class="fs-6 fw-bold mb-0 text-dark">Transportation</h3>
              </div>
              <p class="small mb-0 text-dark-muted">
                The shipment is moved to the destination as planned.
              </p>
            </div>

            <!-- Step 5 -->
            <div class="p-3 bg-light rounded-3 border-start border-4 border-danger shadow-sm">
              <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-danger text-white rounded-pill px-2.5 py-1">5</span>
                <h3 class="fs-6 fw-bold mb-0 text-dark">Unloading</h3>
              </div>
              <p class="small mb-0 text-dark-muted">
                The goods are taken out of the vehicle and handed over at the new location.
              </p>
            </div>

          </div>
        </div>

        <!-- 4. FAQS SPECIFIC TO CHOOSING MOVERS -->
        <div class="about-faq-card p-4 p-md-4 bg-white border rounded-3 shadow-sm" id="howToChooseFaqCard">
          <div class="mb-3">
            <span class="text-danger fw-bold text-uppercase d-block mb-1 faq-head-eyebrow">HELPFUL ADVICE</span>
            <h2 class="fw-bold mb-2 fs-5">Frequently Asked Questions on <span class="text-danger">Choosing Movers</span>
            </h2>
            <div class="about-red-accent-bar mb-3"></div>
          </div>

          <div class="accordion about-faq-accordion" id="chooseFaqAccordion">

            <div class="accordion-item">
              <h3 class="accordion-header" id="cfaqHead1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqCollapse1"
                  aria-expanded="true" aria-controls="cfaqCollapse1">
                  <span class="about-faq-badge-num">01</span>
                  <span>How can I check a packers and movers company?</span>
                </button>
              </h3>
              <div id="cfaqCollapse1" class="accordion-collapse collapse show" aria-labelledby="cfaqHead1"
                data-bs-parent="#chooseFaqAccordion">
                <div class="accordion-body">
                  Check the company's business details, GST number, office address, customer reviews and written quotation before booking.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="cfaqHead2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#cfaqCollapse2" aria-expanded="false" aria-controls="cfaqCollapse2">
                  <span class="about-faq-badge-num">02</span>
                  <span>How long has Make My Shift been in the moving industry?</span>
                </button>
              </h3>
              <div id="cfaqCollapse2" class="accordion-collapse collapse" aria-labelledby="cfaqHead2"
                data-bs-parent="#chooseFaqAccordion">
                <div class="accordion-body">
                  The company has over <?= htmlspecialchars($experience) ?> years of experience in packing and moving services.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="cfaqHead3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#cfaqCollapse3" aria-expanded="false" aria-controls="cfaqCollapse3">
                  <span class="about-faq-badge-num">03</span>
                  <span>Can I transport my car along with my household goods?</span>
                </button>
              </h3>
              <div id="cfaqCollapse3" class="accordion-collapse collapse" aria-labelledby="cfaqHead3"
                data-bs-parent="#chooseFaqAccordion">
                <div class="accordion-body">
                  Yes, vehicle transportation can be arranged along with a household move, depending on your requirements.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Right Column (Sidebar with Contact CTA & Company Links) -->
      <div class="col-lg-4">
        <?php $this->load->view('about/company_sidebar', [
          'topic' => 'Choosing Verified Movers',
          'active_page' => 'how-to-choose'
        ]); ?>
      </div>

    </div>
  </div>
</section>