<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'Why Choose Us',
  'bc_desc' => 'Because your trust, safety and satisfaction move us forward.',
  'breadcrumbs' => [
    ['name' => 'About Us'],
    ['name' => 'Why Choose Us']
  ]
]);
?>

<!-- ======================================================
     MAIN CONTENT SECTION
     ====================================================== -->
<section class="py-5 about-page-bg">
  <div class="container">
    <div class="row g-4" id="chooseMainRow">

      <!-- Left Column (Advantage 6-Grid, CTA Banner & FAQs) -->
      <div class="col-lg-8">

        <!-- 1. OUR ADVANTAGE CARD -->
        <div class="about-advantage-card mb-4" id="chooseAdvantageCard">
          <span class="about-section-eyebrow">OUR ADVANTAGE</span>
          <h2 class="about-section-title">More Than Just a <span class="text-danger">Moving Company</span></h2>
          <div class="about-red-accent-bar"></div>
          <p><strong>Because Your Belongings Deserve More Than Just Transportation</strong></p>
          <p>
            Choosing a moving partner is an important decision. You are not simply handing over cartons, furniture or
            appliances; you are trusting someone with things that have financial and personal value. At<b> Make My Shift
              Packers and Movers Pvt. Ltd.</b>, we understand that responsibility.
            With<b> <?= !empty($experience) ? $experience : '9+' ?> years of experience</b> in the moving and logistics sector, we have developed our approach around
            careful handling, proper coordination and customer-focused assistance. Our aim is to make the shifting
            experience more organised, less confusing and easier for the customer to manage.
            Here are the reasons that make<b> Make My Shift</b> a dependable choice for your next move:
          </p>

          <!-- 6-Feature Card Grid (2x3 on desktop, 2 per row on mobile) -->
          <div class="row g-3 mb-4">
            <!-- 1: Customer-Focused Approach -->
            <div class="col-12">
              <div class="about-feature-box box-blue full-row">
                <div class="about-feature-head d-flex align-items-center gap-3 mb-3">
                  <div class="about-feature-icon-wrap about-icon-blue mb-0">
                    <i class="bi bi-clock-history"></i>
                  </div>
                  <h3 class="feature-title mb-0">Customer-Focused Approach</h3>
                </div>
                <p>
                  Every customer has a different reason for moving. Someone may be shifting because of a new job.
                  Another family may be moving into a larger home. A business could be changing its workplace. The
                  circumstances vary, but the need for dependable support remains.
                  At Make My Shift, we keep the customer's requirement at the centre of the moving process.
                  Understanding the nature of the assignment helps create a more suitable plan instead of treating every
                  booking in exactly the same way. That personal approach makes a difference.
                </p>
              </div>
            </div>

            <!-- 2: Professional Leadership -->
            <div class="col-12">
              <div class="about-feature-box box-red">
                <div class="about-feature-head d-flex align-items-center gap-3 mb-3">
                  <div class="about-feature-icon-wrap about-icon-red mb-0">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <h3 class="feature-title mb-0">Professional Leadership</h3>
                </div>
                <p class="future_desc">Behind a growing organisation is a person who understands where it needs to go.</p>
                <p><b>Alok Kumar Chaudhary</b>, Director of <b>Make My Shift Packers and Movers</b>, has played a key role in shaping the company’s professional image and strengthening its involvement in the moving and logistics industry. His active participation in the movers community has helped the company build a presence on recognised industry platforms. It also reflects the company’s focus on continuous learning, networking, and contributing to the broader logistics sector.</p>
              </div>
            </div>

            <!-- 3: Recognised Within the Movers Community -->
            <div class="col-12">
              <div class="about-feature-box box-blue">
                <div class="about-feature-head d-flex align-items-center gap-3 mb-3">
                  <div class="about-feature-icon-wrap about-icon-blue mb-0">
                    <i class="bi bi-patch-check-fill"></i>
                  </div>
                  <h3 class="feature-title mb-0">Recognised Within the Movers Community</h3>
                </div>
                <p class="future_desc">Professional recognition is meaningful when it reflects genuine participation.</p>
                <p><b>Make My Shift</b> has been associated with industry events connected with the <b>Movers Federation of India (MFI)</b>. In 2022, <b>Director Alok Kumar Chaudhary</b> was honoured at an Indian Movers Association event in Jaipur. The company also took part in the <b>7th National Conference in Goa</b> and received recognition at the <b>8th National Conference</b> organised by the <b>Movers Federation of India in Bhopal in April 2025</b>. These milestones add another dimension to our story: we are not only focused on individual assignments, but also connected with the professional community shaping the moving and logistics industry.</p>
              </div>
            </div>

            <!-- 4: Attention to the Moving Process -->
            <div class="col-12">
              <div class="about-feature-box box-red">
                <div class="about-feature-head d-flex align-items-center gap-3 mb-3">
                  <div class="about-feature-icon-wrap about-icon-red mb-0">
                    <i class="bi bi-shield-fill-check"></i>
                  </div>
                  <h3 class="feature-title mb-0">Attention to the Moving Process</h3>
                </div>
                <p class="future_desc">A relocation involves several stages, and each one has its own importance.</p>
                <p>Planning comes first. Packing requires suitable preparation. Loading needs careful handling. Transportation calls for proper coordination, while unloading and handover complete the assignment. Our approach recognises the importance of the complete process rather than looking at transportation as the only task. For customers, this means having a moving partner that understands the stages involved in shifting and works towards keeping the assignment organised.</p>
              </div>
            </div>

            <!-- 5: Solutions for Different Moving Requirements -->
            <div class="col-12">
              <div class="about-feature-box box-blue">
                <div class="about-feature-head d-flex align-items-center gap-3 mb-3">
                  <div class="about-feature-icon-wrap about-icon-blue mb-0">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <h3 class="feature-title mb-0">Solutions for Different Moving Requirements</h3>
                </div>
                <p>Relocation needs can vary considerably, our company provides support for <em>household shifting, office relocation, local and domestic moving, car transportation, bike transportation, packing, loading and unloading</em>. This range allows customers to discuss their actual requirement instead of trying to fit their move into a fixed format. Whether it is a family preparing for a new home or a business planning an office transition, the requirement can be assessed according to the nature of the move.</p>
              </div>
            </div>

            <!-- 6: A Name Built on Responsibility -->
            <div class="col-12">
              <div class="about-feature-box box-red">
                <div class="about-feature-head d-flex align-items-center gap-3 mb-3">
                  <div class="about-feature-icon-wrap about-icon-red mb-0">
                    <i class="bi bi-headset"></i>
                  </div>
                  <h3 class="feature-title mb-0">A Name Built on Responsibility</h3>
                </div>
                <p>There is one thing we consider more important than any slogan: responsibility. Customers expect their belongings to be treated with care. They expect communication to remain clear. They want to know that their requirement has been understood and that the people handling their move take the assignment seriously. This is the standard we work towards, our achievements, industry participation and seven-plus years of experience are important parts of our story, but the relationship with customers remains at the centre of it.</p>
              </div>
            </div>
          </div>

          <!-- Moving Partner Callout Card -->
          <div class="choose-partner-box mb-4">
            <h3 class="choose-partner-title">Looking for a <span class="text-danger">Moving Partner?</span></h3>
            <p class="choose-partner-text mb-3">
              If you’re looking for a reliable packers and movers company in India, consider a team that combines experience, professional industry involvement, and a customer-first approach.
            </p>
            <div class="choose-partner-cta p-3 rounded-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
              <div class="d-flex align-items-center gap-2">
                <div class="choose-partner-cta-icon mb-0">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div>
                  <span class="choose-partner-cta-subtext">Ready for a seamless move?</span>
                  <span class="fw-bold text-dark">Get in touch with our moving experts</span>
                </div>
              </div>
              <a href="<?= $phonehtml ?>" class="choose-partner-cta-btn text-decoration-none rounded-2 flex-shrink-0">
                <i class="bi bi-telephone-fill"></i> Contact us at <?= htmlspecialchars($phone) ?>
              </a>
            </div>
          </div>

          <!-- Showcase Image Card -->
          <div class="about-single-img-card rounded-4 overflow-hidden shadow-sm border mb-4">
            <img src="<?= base_url('assets/img/choose_img.jpg') ?>" alt="Packaging Showcase"
              class="img-fluid w-100 about-showcase-img" loading="lazy">
          </div>

        </div><!-- /.about-advantage-card -->

        <!-- 2. WHY CHOOSE FAQS CARD -->
        <div class="about-faq-card p-4 p-md-5 bg-white border rounded-3 shadow-sm mb-4" id="chooseFaqCard">
          <span class="about-section-eyebrow">HELP &amp; FAQS</span>
          <h2 class="about-section-title">Frequently Asked <span class="text-danger">Questions</span></h2>
          <div class="about-red-accent-bar"></div>
          <p class="about-section-desc">Find answers to common questions about why customers choose us.</p>

          <div class="accordion about-faq-accordion" id="chooseFaqAccordion">
            <!-- FAQ 01 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="cHeadOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cCollapseOne"
                  aria-expanded="true" aria-controls="cCollapseOne">
                  <span class="about-faq-badge-num">01</span>
                  <span>What makes Make My Shift different from other packers and movers?</span>
                </button>
              </h3>
              <div id="cCollapseOne" class="accordion-collapse collapse show" aria-labelledby="cHeadOne"
                data-bs-parent="#chooseFaqAccordion">
                <div class="accordion-body">
                  At <?= htmlspecialchars($company3) ?>, we bring over
                  <?= htmlspecialchars($experience) ?> years of industry experience, ISO certified moving
                  protocols, and trained in-house personnel. We use premium multilayer packing materials, provide live
                  transit updates, transparent pricing without hidden surprises, and guaranteed on-time delivery across
                  India.
                </div>
              </div>
            </div>

            <!-- FAQ 02 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="cHeadTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#cCollapseTwo" aria-expanded="false" aria-controls="cCollapseTwo">
                  <span class="about-faq-badge-num">02</span>
                  <span>Are your services safe and insured?</span>
                </button>
              </h3>
              <div id="cCollapseTwo" class="accordion-collapse collapse" aria-labelledby="cHeadTwo"
                data-bs-parent="#chooseFaqAccordion">
                <div class="accordion-body">
                  Yes, 100%. Safety is our top priority. We provide complete transit insurance options for household
                  goods, corporate assets, and vehicle transportation. In the rare event of unforeseen transit damage,
                  our dedicated claim support team ensures swift, hassle-free settlement.
                </div>
              </div>
            </div>

            <!-- FAQ 03 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="cHeadThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#cCollapseThree" aria-expanded="false" aria-controls="cCollapseThree">
                  <span class="about-faq-badge-num">03</span>
                  <span>Do you provide services across India?</span>
                </button>
              </h3>
              <div id="cCollapseThree" class="accordion-collapse collapse" aria-labelledby="cHeadThree"
                data-bs-parent="#chooseFaqAccordion">
                <div class="accordion-body">
                  Yes! We have an extensive pan-India network with over 100+ branches spanning
                  <?= !empty($statesCovered) ? $statesCovered : '20+' ?> states. Whether you are relocating locally
                  within a city or inter-state across the country, we provide seamless doorstep packing, loading,
                  transportation, and unloading.
                </div>
              </div>
            </div>

            <!-- FAQ 04 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="cHeadFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#cCollapseFour" aria-expanded="false" aria-controls="cCollapseFour">
                  <span class="about-faq-badge-num">04</span>
                  <span>How experienced is your team?</span>
                </button>
              </h3>
              <div id="cCollapseFour" class="accordion-collapse collapse" aria-labelledby="cHeadFour"
                data-bs-parent="#chooseFaqAccordion">
                <div class="accordion-body">
                  Our team comprises background-verified, professionally trained packers and moving supervisors with
                  years of hands-on experience. Each team member is trained in delicate item handling, furniture
                  dismantling &amp; reassembly, and heavy equipment packing techniques.
                </div>
              </div>
            </div>

            <!-- FAQ 05 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="cHeadFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#cCollapseFive" aria-expanded="false" aria-controls="cCollapseFive">
                  <span class="about-faq-badge-num">05</span>
                  <span>How can I get a quote for my move?</span>
                </button>
              </h3>
              <div id="cCollapseFive" class="accordion-collapse collapse" aria-labelledby="cHeadFive"
                data-bs-parent="#chooseFaqAccordion">
                <div class="accordion-body">
                  Getting a quotation is quick and simple! You can click the "Get Free Quote" button on this page to
                  fill in your shifting details, or call our 24/7 customer support line at <a
                    href="<?= $phonehtml ?>"
                    class="fw-bold text-decoration-none text-danger"><?= htmlspecialchars($phone) ?></a><?php if (!empty($phone1)): ?>
                    / <a href="<?= $phonehtml1 ?>"
                      class="fw-bold text-decoration-none text-danger"><?= htmlspecialchars($phone1) ?></a><?php endif; ?>.
                  We provide instant free estimates and conduct doorstep or video surveys as needed.
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.about-faq-card -->

      </div><!-- /.col-lg-8 -->

      <!-- Right Column (Sticky Sidebar - NO Nearby Cities) -->
      <div class="col-lg-4">
        <?php $this->load->view('about/company_sidebar', ['topic' => 'Relocation', 'active_page' => 'why-choose-us']); ?>
      </div><!-- /.col-lg-4 -->

    </div><!-- /#chooseMainRow -->
  </div>
</section>