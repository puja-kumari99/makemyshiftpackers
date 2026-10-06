<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => 'Your privacy is paramount. Learn how we collect, protect, and handle your relocation details.',
    'breadcrumbs' => [
        ['name' => 'About Us'],
        ['name' => 'Privacy Policy']
    ]
]);
?>

<!-- Main Content Section -->
<section class="py-5 about-page-bg">
  <div class="container">
    <div class="row g-4" id="privacyMainRow">

      <!-- Left Column: Privacy Content (8 Cols) -->
      <div class="col-lg-8">
        <div class="about-advantage-card mb-4" id="privacyPolicyCard">

          <!-- Header -->
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-2">
            <span class="about-section-eyebrow">LEGAL &amp; COMPLIANCE</span>
            <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill small fw-semibold">
              <i class="bi bi-clock-history me-1 text-primary"></i> Last Updated: <?= date('F Y') ?>
            </span>
          </div>

          <h2 class="about-section-title">Privacy <span class="text-danger">Policy</span></h2>
          <div class="about-red-accent-bar"></div>

          <p class="about-section-desc mb-4">
            At <strong><?= htmlspecialchars($company3) ?></strong> ("we," "our," or "us"), we are dedicated to protecting your personal information and respecting your privacy. This Privacy Policy details the types of data we collect when you visit our website, submit quotation requests, or engage our packing and moving services, and how that information is safeguarded and utilized.
          </p>

          <!-- Key Guarantee Highlights -->
          <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6">
              <div class="p-3 border rounded-3 bg-white shadow-sm h-100 d-flex gap-3 align-items-center">
                <div class="about-feature-icon-wrap about-icon-blue about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-shield-lock-fill"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold">100% Secure Data</strong>
                  <small class="text-muted">Encrypted communication &amp; restricted access</small>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="p-3 border rounded-3 bg-white shadow-sm h-100 d-flex gap-3 align-items-center">
                <div class="about-feature-icon-wrap about-icon-red about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-slash-circle-fill"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold">Zero Spam Guarantee</strong>
                  <small class="text-muted">We never sell or rent your personal info</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Section 1: Information We Collect -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">01</span>
              <h2 class="h5 fw-bold text-dark mb-0">Information We Collect</h2>
            </div>
            <p class="text-muted small mb-3">
              To provide accurate moving estimates and coordinate efficient relocation services, we may collect the following categories of information:
            </p>
            <ul class="policy-list list-unstyled ps-2 mb-0">
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Contact &amp; Identification Data:</strong> Your full name, mobile number, alternate phone, email address, and billing details.</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Relocation &amp; Inventory Details:</strong> Origin pickup address, destination drop-off address, preferred moving dates, residence type (1BHK/2BHK/Villa), and itemized household or vehicle inventory lists.</span>
              </li>
              <li class="d-flex align-items-start gap-2 text-muted small">
                <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                <span><strong>Technical &amp; Log Data:</strong> IP address, device type, browser specifications, and referral sources collected automatically via secure cookies to optimize website performance.</span>
              </li>
            </ul>
          </div>

          <!-- Section 2: How We Use Your Information -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">02</span>
              <h2 class="h5 fw-bold text-dark mb-0">How We Use Your Information</h2>
            </div>
            <p class="text-muted small mb-3">
              We process your data strictly for legitimate operational purposes, including:
            </p>
            <div class="row g-2">
              <div class="col-md-6">
                <div class="p-2 border rounded bg-light small text-muted h-100">
                  <i class="bi bi-calculator text-danger me-1"></i> Preparing transparent, accurate moving estimates &amp; surveys.
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-2 border rounded bg-light small text-muted h-100">
                  <i class="bi bi-truck text-danger me-1"></i> Assigning dedicated moving crews, trucks, and carrier tracking.
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-2 border rounded bg-light small text-muted h-100">
                  <i class="bi bi-file-earmark-medical text-danger me-1"></i> Facilitating comprehensive transit insurance coverage.
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-2 border rounded bg-light small text-muted h-100">
                  <i class="bi bi-headset text-danger me-1"></i> Providing 24/7 client support and post-delivery assistance.
                </div>
              </div>
            </div>
          </div>

          <!-- Section 3: Data Protection & Security -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">03</span>
              <h2 class="h5 fw-bold text-dark mb-0">Data Protection &amp; Security Measures</h2>
            </div>
            <p class="text-muted small mb-3">
              We maintain industry-standard physical, electronic, and procedural safeguards to protect your personal information against unauthorized access, loss, misuse, or alteration. All server interactions are protected through SSL/TLS encryption.
            </p>
            <div class="p-3 bg-danger-subtle border border-danger-subtle rounded-3 text-dark small">
              <i class="bi bi-shield-exclamation text-danger me-2 fs-5 align-middle"></i>
              <strong>No Third-Party Telemarketing:</strong> <?= htmlspecialchars($company3) ?> will never sell, lease, or distribute your phone number or email address to third-party marketing companies.
            </div>
          </div>

          <!-- Section 4: Third-Party Disclosures -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">04</span>
              <h2 class="h5 fw-bold text-dark mb-0">Third-Party Service Providers</h2>
            </div>
            <p class="text-muted small mb-0">
              We may share necessary logistical information only with authorized service partners (such as certified transit insurance underwriters, bank payment gateways, and verified vehicle transit carriers) solely to execute your relocation contract. All such partners are strictly bound by confidentiality agreements.
            </p>
          </div>

          <!-- Section 5: Cookies and Tracking -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">05</span>
              <h2 class="h5 fw-bold text-dark mb-0">Cookies &amp; Analytics</h2>
            </div>
            <p class="text-muted small mb-0">
              Our website uses cookies and similar session management technologies to remember your user preferences, optimize browsing speed, and evaluate traffic analytics. You can choose to accept or decline cookies via your web browser settings.
            </p>
          </div>

          <!-- Section 6: User Rights & Data Control -->
          <div class="policy-section-block mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
              <span class="policy-block-num">06</span>
              <h2 class="h5 fw-bold text-dark mb-0">Your Rights &amp; Choices</h2>
            </div>
            <p class="text-muted small mb-3">
              You have the right to request a review of the personal data we hold, ask for corrections, or request deletion of your move records after your relocation is completed and all accounts are settled.
            </p>
          </div>

          <!-- Section 7: Grievance & Contact Info -->
          <div class="p-4 border rounded-3 bg-light shadow-sm mt-4">
            <div class="d-flex align-items-center gap-3 mb-2">
              <div class="about-feature-icon-wrap about-icon-blue about-feature-icon-44 mb-0">
                <i class="bi bi-envelope-paper-fill"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-0 text-dark">Privacy Inquiries &amp; Grievance Redressal</h3>
                <small class="text-muted">Questions or concerns about our privacy practices?</small>
              </div>
            </div>
            <div class="about-sub-accent-bar mb-3"></div>
            <p class="small text-muted mb-3">
              If you have any questions, feedback, or data requests regarding this Privacy Policy, please reach out to our dedicated compliance officer:
            </p>
            <div class="row g-2 small">
              <div class="col-12 col-md-6">
                <strong><i class="bi bi-envelope-fill text-danger me-1"></i> Email:</strong> 
                <a href="<?= $mailhtml ?>" class="text-decoration-none text-dark fw-semibold"><?= htmlspecialchars($mail) ?></a>
              </div>
              <div class="col-12 col-md-6">
                <strong><i class="bi bi-telephone-fill text-danger me-1"></i> Phone:</strong> 
                <a href="<?= $phonehtml ?>" class="text-decoration-none text-dark fw-semibold"><?= htmlspecialchars($phone) ?></a>
              </div>
              <div class="col-12 mt-2">
                <strong><i class="bi bi-geo-alt-fill text-danger me-1"></i> Address:</strong> 
                <span class="text-muted"><?= htmlspecialchars($corporate_address) ?></span>
              </div>
            </div>
          </div>

        </div><!-- /.about-advantage-card -->
      </div><!-- /.col-lg-8 -->

      <!-- Right Column: Company Sidebar (4 Cols) -->
      <div class="col-lg-4">
        <?php $this->load->view('about/company_sidebar', ['topic' => 'Privacy Policy', 'active_page' => 'privacy-policy']); ?>
      </div><!-- /.col-lg-4 -->

    </div><!-- /#privacyMainRow -->
  </div>
</section>