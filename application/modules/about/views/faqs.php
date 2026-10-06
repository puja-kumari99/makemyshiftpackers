<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => 'Get clear answers to the most common questions about our relocation services.',
    'breadcrumbs' => [
        ['name' => 'About Us'],
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="py-5 about-page-bg">
  <div class="container">
    <div class="row" id="faqMainRow">

      <!-- Full-Width FAQ Content (Aligns with navbar logo & heading on left, and Get Quote button on right) -->
      <div class="col-12">
        <div class="about-faq-card p-4 p-md-5 bg-white border rounded-3 shadow-sm" id="faqAccordionCard">

          <!-- FAQ Header (Centered per reference image media_1788951570193.png) -->
          <div class="text-center mb-4 pb-2">
            <span class="text-danger fw-bold text-uppercase d-block mb-1 faq-head-eyebrow">HELP &amp; FAQS</span>
            <h2 class="fw-bold mb-2 faq-head-title">Frequently Asked <span class="text-danger">Questions</span></h2>
            <div class="mx-auto my-2 faq-head-divider"></div>
            <p class="mb-0 faq-head-desc">Get clear answers to the most common questions about our relocation services.</p>
          </div>

          <!-- 13 Accordion Items -->
          <div class="accordion about-faq-accordion" id="relocationFaqAccordion">

            <!-- FAQ Item 01 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                  <span class="about-faq-badge-num">01</span>
                  <span>What services does Make My Shift Packers and Movers offer?</span>
                </button>
              </h3>
              <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHead1" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  There are several options depending on what you are moving. We offer household shifting, office relocation, local shifting and domestic moves. Packing, loading and unloading are also available. Car and bike transportation can be added when needed.
                </div>
              </div>
            </div>

            <!-- FAQ Item 02 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                  <span class="about-faq-badge-num">02</span>
                  <span>How many years of experience does Make My Shift have?</span>
                </button>
              </h3>
              <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  <?= htmlspecialchars($company3) ?> has been in the relocation and logistics field for more than <?= htmlspecialchars($experience) ?> years. During this time, the company has handled different kinds of moving requirements for homes, offices and vehicles.
                </div>
              </div>
            </div>

            <!-- FAQ Item 03 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                  <span class="about-faq-badge-num">03</span>
                  <span>Why do people choose Make My Shift for relocation?</span>
                </button>
              </h3>
              <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  A move involves quite a few things apart from transportation. Packing, lifting, loading and unloading all need attention. We provide support across these stages and also offer different moving options based on the customer's requirement.
                </div>
              </div>
            </div>

            <!-- FAQ Item 04 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                  <span class="about-faq-badge-num">04</span>
                  <span>Can you shift my household belongings?</span>
                </button>
              </h3>
              <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  Yes, household shifting is one of the services offered. Depending on the move, support may cover packing, loading, transportation and unloading. The arrangement can be planned according to the number and type of household items.
                </div>
              </div>
            </div>

            <!-- FAQ Item 05 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                  <span class="about-faq-badge-num">05</span>
                  <span>Do you also handle office shifting?</span>
                </button>
              </h3>
              <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHead5" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  Office relocation is available too. Desks, chairs, files, computers and other workplace items may all have to be moved at once. The work can be planned around the size of the office and the items involved.
                </div>
              </div>
            </div>

            <!-- FAQ Item 06 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                  <span class="about-faq-badge-num">06</span>
                  <span>Can you transport my car or bike?</span>
                </button>
              </h3>
              <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHead6" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  Yes, our company provides car and bike transportation for relocation requirements. When requesting the service, you can provide the vehicle details along with the pickup and delivery locations.
                </div>
              </div>
            </div>

            <!-- FAQ Item 07 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                  <span class="about-faq-badge-num">07</span>
                  <span>Will you help with packing?</span>
                </button>
              </h3>
              <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHead7" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  Packing support is available if you need it. Not every item needs to be packed in the same way, so the method and materials can depend on what is being moved. Fragile goods and electronics, for instance, may need extra care.
                </div>
              </div>
            </div>

            <!-- FAQ Item 08 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                  <span class="about-faq-badge-num">08</span>
                  <span>What happens during the moving process?</span>
                </button>
              </h3>
              <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHead8" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  First, the moving requirement is discussed. The belongings are then packed and loaded as planned, followed by transportation to the destination. After arrival, the goods are unloaded. Simple enough in principle, although the actual steps depend on the size of the move.
                </div>
              </div>
            </div>

            <!-- FAQ Item 09 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                  <span class="about-faq-badge-num">09</span>
                  <span>How is the moving cost calculated?</span>
                </button>
              </h3>
              <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHead9" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  There is no fixed price for every relocation. The cost can depend on the pickup and destination, the quantity of goods, the type of items and the services you choose. Sharing these details helps in discussing a suitable quotation.
                </div>
              </div>
            </div>

            <!-- FAQ Item 10 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
                  <span class="about-faq-badge-num">10</span>
                  <span>Do you provide shifting services between cities?</span>
                </button>
              </h3>
              <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHead10" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  Yes. Make My Shift handles domestic relocation as well. So, if you are moving your belongings from one city to another, you can discuss the route and moving requirements with the team.
                </div>
              </div>
            </div>

            <!-- FAQ Item 11 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead11">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse11" aria-expanded="false" aria-controls="faqCollapse11">
                  <span class="about-faq-badge-num">11</span>
                  <span>Do you shift both homes and offices?</span>
                </button>
              </h3>
              <div id="faqCollapse11" class="accordion-collapse collapse" aria-labelledby="faqHead11" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  Both types of moves are covered. A family moving to a new house may need household shifting, while a business changing its premises may require office relocation. The service can be arranged around the nature of the move.
                </div>
              </div>
            </div>

            <!-- FAQ Item 12 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead12">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse12" aria-expanded="false" aria-controls="faqCollapse12">
                  <span class="about-faq-badge-num">12</span>
                  <span>How is a packers and movers service different from a regular transporter?</span>
                </button>
              </h3>
              <div id="faqCollapse12" class="accordion-collapse collapse" aria-labelledby="faqHead12" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  A regular transporter mainly takes care of moving goods from one place to another. Packers and movers can be involved in the work before and after transportation as well, including packing, loading, unloading and coordination.
                </div>
              </div>
            </div>

            <!-- FAQ Item 13 -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHead13">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse13" aria-expanded="false" aria-controls="faqCollapse13">
                  <span class="about-faq-badge-num">13</span>
                  <span>How can I discuss my moving requirement?</span>
                </button>
              </h3>
              <div id="faqCollapse13" class="accordion-collapse collapse" aria-labelledby="faqHead13" data-bs-parent="#relocationFaqAccordion">
                <div class="accordion-body">
                  Just share the basic details of your move. The pickup and destination, type of belongings and services you need are a good starting point. If a car or bike is involved, mention that too. The team can then discuss the next steps with you.
                </div>
              </div>
            </div>

          </div><!-- /.accordion -->

          <!-- Bottom Contact Box: "Still Have Questions?" (media_1788951570193.png) -->
          <div class="faq-contact-card mt-5 p-4 rounded-4 faq-cta-box">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
              
              <!-- Left Side: Icon + Headline + Subtitle -->
              <div class="d-flex align-items-center gap-3">
                <div class="faq-contact-icon flex-shrink-0 d-flex align-items-center justify-content-center rounded-3 faq-cta-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <div>
                  <h3 class="fw-bold mb-1 faq-cta-heading fs-5">
                    Still Have <span class="text-danger">Questions?</span>
                  </h3>
                  <p class="mb-0 small faq-cta-text">
                    Our team is here to help you. Get in touch with us for personalized assistance.
                  </p>
                </div>
              </div>

              <!-- Right Side: Contact Us Button + Phone Line -->
              <div class="d-flex align-items-center gap-3 flex-wrap flex-sm-nowrap pt-2 pt-md-0 border-top border-md-0 border-light-subtle">
                <a href="<?= site_url('contact-us') ?>" class="btn fw-bold px-4 py-2 rounded-2 text-white d-inline-flex align-items-center gap-2 faq-cta-btn">
                  Contact Us <i class="bi bi-arrow-right"></i>
                </a>

                <div class="d-flex align-items-center gap-2 faq-phone-wrap">
                  <div class="d-flex align-items-center justify-content-center rounded-circle text-white flex-shrink-0 faq-phone-icon">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div>
                    <div class="fw-bold lh-1 faq-phone-text">
                      <a href="<?= $phonehtml ?>" class="text-decoration-none text-dark"><?= htmlspecialchars($phone) ?></a>
                      <?php if (!empty($phone1)): ?>
                        <span class="text-muted mx-1">/</span>
                        <a href="<?= $phonehtml1 ?>" class="text-decoration-none text-dark"><?= htmlspecialchars($phone1) ?></a>
                      <?php endif; ?>
                    </div>
                    <small class="faq-phone-sub">24/7 Customer Support</small>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div><!-- /.about-faq-card -->
      </div><!-- /.col-12 -->

    </div><!-- /#faqMainRow -->
  </div>
</section>