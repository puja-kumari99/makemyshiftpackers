<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');



$fraud_news = [
  ['src' => base_url('assets/img/fraudnews1.jpg'), 'title' => 'Media Report - Packers & Movers Fraud Case Exposed'],
  ['src' => base_url('assets/img/fraudnews2.jpg'), 'title' => 'Newspaper Coverage - Warning Against Fake Moving Companies'],
  ['src' => base_url('assets/img/fraudnews3.jpg'), 'title' => 'Police Action Against Rogue Movers and Extortion Scams'],
  ['src' => base_url('assets/img/fraudnews4.jpg'), 'title' => 'Consumer Advisory - Beware of Fraudulent Packers and Movers'],
  ['src' => base_url('assets/img/fraudnews5.jpg'), 'title' => 'Investigation Report on Fake Relocation Agencies'],
  ['src' => base_url('assets/img/fraudnews6.jpg'), 'title' => 'Media Feature - How to Protect Yourself from Moving Scams']
];
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'Beware of Fraud Packers and Movers',
  'bc_desc' => 'Essential consumer awareness guide on recognizing relocation scams, red flags, and protecting your valuable goods.',
  'breadcrumbs' => [
    ['name' => 'About Us'],
    ['name' => 'Beware of Fraud']
  ]
]);
?>

<!-- ======================================================
     MAIN CONTENT SECTION
     ====================================================== -->
<section class="py-5 about-page-bg">
  <div class="container">
    <div class="row g-4" id="bewareFraudMainRow">

      <!-- Left Column (Main Scam Awareness & Safety Guide) -->
      <div class="col-lg-8">

        <!-- 1. INTRO & ALERT HERO CARD -->
        <div class="about-advantage-card mb-4" id="bewareFraudIntroCard">
          <div class="about-eyebrow-badge">
            <i class="bi bi-shield-exclamation"></i> CONSUMER AWARENESS &amp; SAFETY ADVISORY
          </div>
          <h2 class="about-section-title">Beware of Fraud Packers and Movers: <span class="text-danger">Things to Check
              Before Booking</span></h2>
          <div class="about-red-accent-bar"></div>

          <p>
            House shifts usually involve larger expenses and efforts than people expect. You have to arrange packing,
            labour, transportation and delivery, often within a fixed time. In the middle of all this, it is easy to
            trust the first moving company that gives you a reasonable quote.
            Some unreliable movers attract customers with attractive prices and then change the terms after the booking.
            Others may have little information about their actual business operations. Before you hand over your
            belongings, take a little time to find out who will be handling your move.
          </p>

          <!-- Make My Shift Packers and Movers at a Glance -->
          <div class="choose-partner-box box-blue my-4">
            <h3 class="choose-partner-title"><?= htmlspecialchars($company3) ?> <span class="text-primary">at a
                Glance</span></h3>
            <p class="mb-3">
              <b><?= htmlspecialchars($company3) ?></b> is an experienced relocation services provider operating on the
              market for more than <b><?= htmlspecialchars($experience) ?> years</b>. The company works with customers planning household
              shifts, office moves and vehicle transportation.
            </p>
            <p class="mb-0">
              Its services include packing, loading, unloading, transportation, car shifting and bike transportation.
              Local moves as well as relocations between cities can be planned according to the customer's requirements.
            </p>
          </div>

          <!-- 1. Don't Make Your Decision From an Advertisement -->
          <div class="choose-partner-box my-4">
            <h3 class="choose-partner-title">Don't Make Your Decision <span class="text-danger">From an
                Advertisement</span></h3>
            <p class="mb-2">
              An attractive website, a social media page or a sponsored search result can help you find a moving
              company. It cannot, by itself, tell you whether the company is right for your move.
            </p>
            <p class="mb-2">
              Once you shortlist a mover, check the information behind the advertisement. Look for a business address,
              contact details, GST information and the means to contact the company.
            </p>
            <p class="mb-0">
              If the information is ambiguous or the person you talk to cannot provide some answers to the questions, it
              may be a red flag.
            </p>
          </div>

          <!-- 2. Ask Why the Price Is So Low -->
          <div class="choose-partner-box box-blue my-4">
            <h3 class="choose-partner-title">Ask Why the Price <span class="text-primary">Is So Low</span></h3>
            <p class="mb-2">
              Everyone wants to save money while moving. However, a quotation should make sense in relation to the work
              involved.
            </p>
            <p class="mb-2">
              Ask for the reasons for the amount charged rather than just taking the lowest price. The cost of
              materials, labour, vehicle, distance, loading, unloading and taxes may be the reasons for the price
              increase.
            </p>
            <p class="mb-0">
              A company quoting less than others is not automatically dishonest. The important question is whether you
              understand <b>what you are getting for that price</b>.
            </p>
          </div>

          <!-- 3. Don't Leave Everything for Moving Day -->
          <div class="choose-partner-box my-4">
            <h3 class="choose-partner-title">Don't Leave Everything for <span class="text-danger">Moving Day</span></h3>
            <p class="mb-2">
              One mistake customers often make is discussing important details only when the movers arrive.
            </p>
            <p class="mb-2">
              Discuss the complications beforehand. If you have a big wardrobe, heavy home appliances, fragile
              glassware, narrow stairs or no parking area, inform the company about it. Mention whether you are moving
              from higher floors without a lift.
            </p>
            <p class="mb-0">
              These details can affect the manpower, equipment and time required for the job.
            </p>
          </div>

          <!-- 4. Keep Your Own Record of the Shipment -->
          <div class="choose-partner-box box-blue my-4">
            <h3 class="choose-partner-title">Keep Your Own Record <span class="text-primary">of the Shipment</span></h3>
            <p class="mb-2">
              You don't need a complicated inventory system. A simple list of important belongings is enough.
            </p>
            <p class="mb-2">
              Take photos of expensive furniture, televisions, refrigerators, computers and other valuable things before
              packing. You should keep the important documents, jewellery, money and other valuables separately.
            </p>
            <p class="mb-0">
              Keep all the quotations, invoices, receipts and conversations with the mover. You may need them if there
              will be any misunderstandings later on.
            </p>
          </div>

          <!-- 5. Be Careful With Last-Minute Demands -->
          <div class="choose-partner-box my-4">
            <h3 class="choose-partner-title">Be Careful With <span class="text-danger">Last-Minute Demands</span></h3>
            <p class="mb-2">
              Imagine that the movers have already loaded your belongings and you are suddenly told that the price has
              increased because of a reason that was never discussed earlier.
            </p>
            <p class=" mb-2">
              This is why the quotation should be discussed before the truck arrives.
            </p>
            <p class="mb-0">
              Ask about possible additional charges in advance. If there are conditions under which the price can
              change, get them explained before confirming the booking.
            </p>
          </div>

          <!-- 6. Ask About Damage During Transportation -->
          <div class="choose-partner-box box-blue my-4">
            <h3 class="choose-partner-title">Ask About Damage <span class="text-primary">During Transportation</span>
            </h3>
            <p class=" mb-2">
              The furniture may become scratched, the glass items may crack, and the electronics may need special
              treatment during the moving.
            </p>
            <p class=" mb-0">
              If transit insurance is available, understand the coverage and claim procedure before the shipment leaves.
              Don't assume that every moving company provides the same protection.
            </p>
          </div>

          <!-- 7. Why Make My Shift Can Be Considered for Your Move -->
          <div class="choose-partner-box my-4">
            <h3 class="choose-partner-title">Why Make My Shift Can Be Considered <span class="text-danger">for Your
                Move</span></h3>
            <p class="mb-2">
              Make My Shift Packers and Movers has more than seven years of experience in handling different relocation
              requirements. The company supports household shifting, office relocation and vehicle transportation.
            </p>
            <p class="mb-2">
              Its moving services cover the main stages of relocation, from packing and loading to transportation and
              unloading. Customers can also discuss car or bike transportation when a vehicle needs to be moved along
              with the relocation.
            </p>
            <p class="mb-0">
              The idea is to plan the work around the actual shipment rather than treating every move as identical.
            </p>
          </div>

          <!-- 8. A Quick Check Before You Pay -->
          <div class="choose-partner-box box-blue my-4">
            <h3 class="choose-partner-title">A Quick Check <span class="text-primary">Before You Pay</span></h3>
            <p class="mb-2">
              Before confirming your booking, ask yourself:
            </p>
            <div class="row g-2 mb-3 ps-1">
              <div class="col-md-6">
                <div class="d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                  <span>Do I know the actual business name and address?</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                  <span>Have I received the quotation in writing?</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                  <span>Are all major charges explained?</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                  <span>Have I checked recent customer reviews?</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                  <span>Have I discussed fragile and oversized items?</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                  <span>Do I know who to contact during transit?</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                  <span>Have I asked about insurance?</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-start gap-2">
                  <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                  <span>Do I have a payment receipt?</span>
                </div>
              </div>
            </div>
            <p class="mb-0">
              If several of these questions still have no clear answer, take another look at the company before making
              the payment.
            </p>
          </div>

          <!-- 9. Choose After Checking, Not Guessing -->
          <div class="choose-partner-box my-4">
            <h3 class="choose-partner-title">Choose After Checking, <span class="text-danger">Not Guessing</span></h3>
            <p class="mb-3">
              Your belongings deserve more than a quick booking based on a low quotation. Check the company, ask direct
              questions and understand the terms before the moving team starts work.
            </p>
            <div
              class="choose-partner-cta p-3 rounded-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
              <div class="d-flex align-items-center gap-2">
                <div class="choose-partner-cta-icon mb-0">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div>
                  <span class="choose-partner-cta-subtext">For shifting of household goods, office relocation or vehicle
                    transportation,</span>
                  <span class="fw-bold text-dark">Contact <b><?= htmlspecialchars($company3) ?></b> on
                    <?= htmlspecialchars($phone) ?></span>
                </div>
              </div>
              <a href="<?= $phonehtml ?>"
                class="choose-partner-cta-btn text-decoration-none rounded-2 flex-shrink-0">
                <i class="bi bi-telephone-fill"></i> <?= htmlspecialchars($phone) ?>
              </a>
            </div>
          </div>
        </div>

        <!-- 2. TOP 6 COMMON MOVING SCAMS EXPOSED (News Container Style with fraudnews1-6) -->
        <div class="about-advantage-card mb-4" id="commonScamsExposedCard">
          <span class="about-section-eyebrow eyebrow-red">MEDIA &amp; NEWS REPORTS</span>
          <h2 class="about-section-title">Packers &amp; Movers Fraud <span class="text-danger">Exposed in Media</span>
          </h2>
          <div class="about-red-accent-bar mb-3"></div>
          <p class="small mb-3 text-dark-muted">
            Real newspaper reports and media coverage highlighting how rogue operators cheat customers and how to stay
            protected:
          </p>

          <div class="row g-3">
            <?php foreach ($fraud_news as $index => $news): ?>
              <div class="col-6 col-md-4">
                <div class="news-card" onclick="openFraudLightbox(<?= $index ?>)">
                  <div class="news-card-img-container news-card-compact">
                    <img src="<?= $news['src'] ?>" alt="<?= htmlspecialchars($news['title']) ?>" class="news-card-img"
                      loading="lazy">
                    <div class="news-card-overlay">
                      <div class="news-zoom-badge">
                        <i class="bi bi-search"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 3. FAQS ON FRAUD PREVENTION -->
        <div class="about-faq-card p-4 p-md-4 bg-white border rounded-3 shadow-sm" id="fraudFaqCard">
          <div class="mb-3">
            <span class="faq-head-eyebrow">FREQUENTLY ASKED</span>
            <h2 class="fw-bold mb-2 fs-5 about-section-title">FAQs About Fraud <span class="text-danger">Packers and Movers</span></h2>
            <div class="about-red-accent-bar mb-3"></div>
          </div>

          <div class="accordion about-faq-accordion" id="fraudFaqAccordion">

            <div class="accordion-item">
              <h3 class="accordion-header" id="ffaqHead1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ffaqCollapse1"
                  aria-expanded="true" aria-controls="ffaqCollapse1">
                  <span class="about-faq-badge-num">01</span>
                  <span>Can I trust a company just because it has good online reviews?</span>
                </button>
              </h3>
              <div id="ffaqCollapse1" class="accordion-collapse collapse show" aria-labelledby="ffaqHead1"
                data-bs-parent="#fraudFaqAccordion">
                <div class="accordion-body">
                  Reviews are useful but should not be your only check. Look at recent feedback along with the company's
                  business information and quotation.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="ffaqHead2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#ffaqCollapse2" aria-expanded="false" aria-controls="ffaqCollapse2">
                  <span class="about-faq-badge-num">02</span>
                  <span>Why do moving companies charge different prices?</span>
                </button>
              </h3>
              <div id="ffaqCollapse2" class="accordion-collapse collapse" aria-labelledby="ffaqHead2"
                data-bs-parent="#fraudFaqAccordion">
                <div class="accordion-body">
                  The cost can vary because of distance, quantity of goods, packing requirements, labour, vehicle type,
                  floor level and other moving conditions.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="ffaqHead3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#ffaqCollapse3" aria-expanded="false" aria-controls="ffaqCollapse3">
                  <span class="about-faq-badge-num">03</span>
                  <span>Should I keep a list of my belongings?</span>
                </button>
              </h3>
              <div id="ffaqCollapse3" class="accordion-collapse collapse" aria-labelledby="ffaqHead3"
                data-bs-parent="#fraudFaqAccordion">
                <div class="accordion-body">
                  Yes. A basic inventory of important items can help you keep track of the shipment.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="ffaqHead4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#ffaqCollapse4" aria-expanded="false" aria-controls="ffaqCollapse4">
                  <span class="about-faq-badge-num">04</span>
                  <span>Does Make My Shift Packers and Movers provide office shifting?</span>
                </button>
              </h3>
              <div id="ffaqCollapse4" class="accordion-collapse collapse" aria-labelledby="ffaqHead4"
                data-bs-parent="#fraudFaqAccordion">
                <div class="accordion-body">
                  Yes. Office relocation is one of the moving services provided by Make My Shift.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h3 class="accordion-header" id="ffaqHead5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#ffaqCollapse5" aria-expanded="false" aria-controls="ffaqCollapse5">
                  <span class="about-faq-badge-num">05</span>
                  <span>Can I move my bike or car with Make My Shift?</span>
                </button>
              </h3>
              <div id="ffaqCollapse5" class="accordion-collapse collapse" aria-labelledby="ffaqHead5"
                data-bs-parent="#fraudFaqAccordion">
                <div class="accordion-body">
                  Yes. The company provides transportation support for both cars and bikes.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Right Column (Sidebar with Contact CTA & Company Links) -->
      <div class="col-lg-4">
        <?php $this->load->view('about/company_sidebar', [
          'topic' => 'Fraud Prevention & Safety',
          'active_page' => 'beware-of-fraud'
        ]); ?>
      </div>

    </div>
  </div>
</section>

<!-- Lightbox Modal for Fraud News Images -->
<div class="news-lightbox-modal" id="fraudLightboxModal" onclick="closeFraudLightbox(event)">
  <div class="news-lightbox-backdrop"></div>
  <div class="news-lightbox-dialog">
    <button type="button" class="news-lightbox-close-btn" onclick="closeFraudLightbox(event)" aria-label="Close">
      <i class="bi bi-x-lg"></i>
    </button>
    <button type="button" class="news-lightbox-nav-btn news-lightbox-prev-btn"
      onclick="navigateFraudLightbox(-1, event)" aria-label="Previous">
      <i class="bi bi-chevron-left"></i>
    </button>
    <button type="button" class="news-lightbox-nav-btn news-lightbox-next-btn" onclick="navigateFraudLightbox(1, event)"
      aria-label="Next">
      <i class="bi bi-chevron-right"></i>
    </button>
    <div class="news-lightbox-img-wrap">
      <img src="" id="fraudLightboxImage" alt="Fraud News Image Preview">
    </div>
    <div class="news-lightbox-caption" id="fraudLightboxCaption"></div>
  </div>
</div>

<script>
  (function () {
    const fraudData = <?= json_encode($fraud_news); ?>;
    let currentIndex = 0;

    function openFraudLightbox(index) {
      currentIndex = index;
      updateFraudLightboxContent();
      const modal = document.getElementById('fraudLightboxModal');
      if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeFraudLightbox(e) {
      if (e && (e.target.classList.contains('news-lightbox-dialog') || e.target.closest('.news-lightbox-img-wrap'))) {
        return;
      }
      const modal = document.getElementById('fraudLightboxModal');
      if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
      }
    }

    function navigateFraudLightbox(direction, e) {
      if (e) e.stopPropagation();
      currentIndex = (currentIndex + direction + fraudData.length) % fraudData.length;
      updateFraudLightboxContent();
    }

    function updateFraudLightboxContent() {
      const imgEl = document.getElementById('fraudLightboxImage');
      const captionEl = document.getElementById('fraudLightboxCaption');
      if (imgEl && fraudData[currentIndex]) {
        imgEl.src = fraudData[currentIndex].src;
        imgEl.alt = fraudData[currentIndex].title;
      }
      if (captionEl && fraudData[currentIndex]) {
        captionEl.textContent = fraudData[currentIndex].title;
      }
    }

    window.openFraudLightbox = openFraudLightbox;
    window.closeFraudLightbox = closeFraudLightbox;
    window.navigateFraudLightbox = navigateFraudLightbox;

    document.addEventListener('keydown', function (e) {
      const modal = document.getElementById('fraudLightboxModal');
      if (modal && modal.classList.contains('active')) {
        if (e.key === 'Escape') closeFraudLightbox();
        if (e.key === 'ArrowLeft') navigateFraudLightbox(-1);
        if (e.key === 'ArrowRight') navigateFraudLightbox(1);
      }
    });
  })();
</script>