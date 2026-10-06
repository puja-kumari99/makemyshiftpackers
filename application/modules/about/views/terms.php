<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms & Conditions',
    'bc_desc' => 'Important guidelines, service terms, and agreements for hassle-free relocations.',
    'breadcrumbs' => [
        ['name' => 'About Us'],
        ['name' => 'Terms & Conditions']
    ]
]);
?>

<!-- Main Content Section -->
<section class="py-5 about-page-bg">
  <div class="container">
    <div class="row g-4" id="termsMainRow">

      <!-- Left Column: Terms Content (8 Cols) -->
      <div class="col-lg-8">
        <div class="about-advantage-card mb-4" id="termsConditionsCard">

          <!-- Header -->
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-2">
            <span class="about-section-eyebrow">TERMS OF SERVICE</span>
            <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill small fw-semibold">
              <i class="bi bi-file-earmark-text me-1 text-primary"></i> Effective Date: <?= date('F Y') ?>
            </span>
          </div>

          <h2 class="about-section-title">Terms &amp; <span class="text-danger">Conditions</span></h2>
          <div class="about-red-accent-bar"></div>

          <p class="about-section-desc mb-4">
            Welcome to <strong><?= htmlspecialchars($company3) ?></strong>. These Terms &amp; Conditions govern all packing, loading, transportation, unpacking, vehicle transit, and warehousing services provided by us across India. By booking a move, paying an advance token, or accepting our quotation, you agree to comply with the terms set forth below.
          </p>

          <!-- Key Highlights / Quick Summary Cards -->
          <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6">
              <div class="p-3 border rounded-3 bg-white shadow-sm h-100 d-flex gap-3 align-items-center">
                <div class="about-feature-icon-wrap about-icon-blue about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-file-text-fill"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold">Transparent Quotes</strong>
                  <small class="text-muted">No hidden charges or unexpected terminal fees</small>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 border rounded-3 bg-white shadow-sm h-100 d-flex gap-3 align-items-center">
                <div class="about-feature-icon-wrap about-icon-red about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-patch-check-fill"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold">Licensed &amp; Insured</strong>
                  <small class="text-muted">Verified carriers with full transit coverage</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Section 1: Quotation & Booking -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">01</span>
              <h2 class="h5 fw-bold text-dark mb-0">Quotation, Survey &amp; Booking Confirmation</h2>
            </div>
            <p class="text-muted small mb-2">
              All written or digital quotations issued by <?= htmlspecialchars($company3) ?> are based on the initial item inventory, distance, floor levels, and packing requirements shared during the survey.
            </p>
            <ul class="policy-list list-unstyled ps-2 mb-0">
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>Quotations remain valid for <strong>15 days</strong> from the date of issue unless specified otherwise.</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>A move is formally confirmed only upon receipt of the agreed booking advance deposit and verification of moving date availability.</span>
              </li>
              <li class="d-flex align-items-start gap-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>Any unlisted additional items or extra long-carry distances (beyond 50 meters from truck to elevator) will be charged reasonably as per actuals.</span>
              </li>
            </ul>
          </div>

          <!-- Section 2: Prohibited & Restricted Items -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">02</span>
              <h2 class="h5 fw-bold text-dark mb-0">Prohibited &amp; Restricted Items</h2>
            </div>
            <p class="text-muted small mb-3">
              For safety, statutory road compliance, and transit security, clients must strictly <strong>NOT</strong> include the following in shifting consignments:
            </p>
            <div class="p-3 bg-warning-subtle border border-warning-subtle rounded-3 text-dark small mb-3">
              <i class="bi bi-exclamation-triangle-fill text-warning-emphasis me-2 fs-5 align-middle"></i>
              <strong>Strictly Excluded:</strong> Cash, gold/silver jewelry, precious stones, original educational degrees, legal deed certificates, firearms, inflammable liquids (petrol/diesel/kerosene), gas cylinders, fireworks, and perishable foods.
            </div>
            <p class="text-muted small mb-0">
              The company will not be held accountable for loss or damage to undeclared valuables, cash, or hazardous items packed without written authorization.
            </p>
          </div>

          <!-- Section 3: Client Responsibilities -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">03</span>
              <h2 class="h5 fw-bold text-dark mb-0">Client Responsibilities &amp; Site Access</h2>
            </div>
            <ul class="policy-list list-unstyled ps-2 mb-0">
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Building &amp; Society Permissions:</strong> The client is responsible for securing gate passes, service elevator permissions, and parking clearances at both pickup and delivery locations.</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Appliance Disconnection:</strong> Refrigerators must be defrosted and dried at least 12 hours before moving. Air conditioners and water purifiers should be uninstalled prior to team arrival unless technician add-on is booked.</span>
              </li>
              <li class="d-flex align-items-start gap-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Consignment Checklist:</strong> The client or authorized representative must verify and sign the inventory manifest before truck departure.</span>
              </li>
            </ul>
          </div>

          <!-- Section 4: Vehicle Transportation Specifics -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">04</span>
              <h2 class="h5 fw-bold text-dark mb-0">Car &amp; Bike Transportation Guidelines</h2>
            </div>
            <p class="text-muted small mb-2">
              For four-wheeler and two-wheeler relocations across state boundaries:
            </p>
            <ul class="policy-list list-unstyled ps-2 mb-0">
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>Mandatory documents required: Photocopy of RC Book/Card, valid vehicle insurance policy, PUC certificate, and owner's ID proof.</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>Fuel tanks should maintain approximately <strong>10% to 15% fuel</strong> (enough for loading/unloading maneuvers) for transport safety regulations.</span>
              </li>
              <li class="d-flex align-items-start gap-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>A joint physical vehicle condition report noting current scratch marks and odometer readings is signed at pickup and delivery.</span>
              </li>
            </ul>
          </div>

          <!-- Section 5: Transit Insurance & Damage Claims -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">05</span>
              <h2 class="h5 fw-bold text-dark mb-0">Transit Insurance &amp; Damage Claims Policy</h2>
            </div>
            <p class="text-muted small mb-2">
              We provide comprehensive transit insurance options through recognized third-party underwriters.
            </p>
            <ul class="policy-list list-unstyled ps-2 mb-0">
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>Transit insurance covers unforeseen accidental collision, overturning, fire, or theft during transit as per underwriter terms.</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>Any damage claim must be noted on the delivery receipt and officially reported to our customer support within <strong>48 hours of unloading</strong> with photographic evidence.</span>
              </li>
              <li class="d-flex align-items-start gap-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span>Internal electrical failure without external physical box impact is not covered under standard transit insurance policies.</span>
              </li>
            </ul>
          </div>

          <!-- Section 6: Payment Terms & Schedule -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">06</span>
              <h2 class="h5 fw-bold text-dark mb-0">Payment Terms &amp; Invoicing</h2>
            </div>
            <div class="row g-2 mb-2">
              <div class="col-md-4">
                <div class="p-3 border rounded text-center bg-light h-100">
                  <div class="fw-bold text-danger mb-1">Advance Token</div>
                  <small class="text-muted">10% - 20% to confirm slot reservation.</small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-3 border rounded text-center bg-light h-100">
                  <div class="fw-bold text-danger mb-1">On Loading</div>
                  <small class="text-muted">70% - 80% upon packing &amp; dispatch.</small>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-3 border rounded text-center bg-light h-100">
                  <div class="fw-bold text-danger mb-1">Prior to Unloading</div>
                  <small class="text-muted">Remaining balance upon arrival at destination.</small>
                </div>
              </div>
            </div>
            <p class="text-muted small mb-0">
              Payments can be made via UPI, Net Banking, Credit/Debit Cards, or Bank Transfer. GST tax invoices will be issued digitally.
            </p>
          </div>

          <!-- Section 7: Rescheduling, Cancellation & Force Majeure -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">07</span>
              <h2 class="h5 fw-bold text-dark mb-0">Rescheduling, Cancellation &amp; Force Majeure</h2>
            </div>
            <ul class="policy-list list-unstyled ps-2 mb-0">
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Free Rescheduling:</strong> You can reschedule your move free of charge by informing us at least 48 hours prior to the booked slot.</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Cancellations:</strong> Cancellations made 48+ hours in advance are eligible for advance refund after a nominal administrative charge.</span>
              </li>
              <li class="d-flex align-items-start gap-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Force Majeure:</strong> We are not liable for transit delays caused by natural calamities, extreme weather, highway blockades, civil riots, or government curfew orders.</span>
              </li>
            </ul>
          </div>

          <!-- Section 8: Support & Grievance -->
          <div class="p-4 border rounded-3 bg-light shadow-sm mt-4">
            <div class="d-flex align-items-center gap-3 mb-2">
              <div class="about-feature-icon-wrap about-icon-red about-feature-icon-44 mb-0">
                <i class="bi bi-headset"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-0 text-dark">Questions About Our Terms?</h3>
                <small class="text-muted">Our customer support team is available 24/7 to help you.</small>
              </div>
            </div>
            <div class="about-sub-accent-bar mb-3"></div>
            <p class="small text-muted mb-3">
              For any clarifications on our service terms, quotations, or booking policies, please connect with our team:
            </p>
            <div class="row g-2 small">
              <div class="col-12 col-md-6">
                <strong><i class="bi bi-telephone-fill text-danger me-1"></i> Helpline:</strong> 
                <a href="<?= $phonehtml ?>" class="text-decoration-none text-dark fw-semibold"><?= htmlspecialchars($phone) ?></a>
              </div>
              <div class="col-12 col-md-6">
                <strong><i class="bi bi-envelope-fill text-danger me-1"></i> Email:</strong> 
                <a href="<?= $mailhtml ?>" class="text-decoration-none text-dark fw-semibold"><?= htmlspecialchars($mail) ?></a>
              </div>
              <div class="col-12 mt-2">
                <strong><i class="bi bi-geo-alt-fill text-danger me-1"></i> Office:</strong> 
                <span class="text-muted"><?= htmlspecialchars($corporate_address) ?></span>
              </div>
            </div>
          </div>

        </div><!-- /.about-advantage-card -->
      </div><!-- /.col-lg-8 -->

      <!-- Right Column: Company Sidebar (4 Cols) -->
      <div class="col-lg-4">
        <?php $this->load->view('about/company_sidebar', ['topic' => 'Terms of Service', 'active_page' => 'terms-and-conditions']); ?>
      </div><!-- /.col-lg-4 -->

    </div><!-- /#termsMainRow -->
  </div>
</section>