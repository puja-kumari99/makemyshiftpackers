<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'About Us',
  'bc_desc' => '',
  'breadcrumbs' => [
    ['name' => 'About Us']
  ]
]);
?>

<!-- ======================================================
     MAIN CONTENT SECTION
     ====================================================== -->
<section class="py-5 about-page-bg">
  <div class="container">
    <!-- Row 1: Left Advantage Container & Right Sticky Sidebar -->
    <div class="row g-4" id="aboutMainRow">

      <!-- Left Column (Advantage & Image Banner) -->
      <div class="col-lg-8">

        <!-- 1. WHO WE ARE CARD -->
        <div class="about-advantage-card mb-4" id="aboutWhoWeAreCard">
          <span class="about-section-eyebrow">ABOUT MAKE MY SHIFT</span>
          <h2 class="about-section-title">Who We <span class="text-danger">Are</span></h2>
          <div class="about-red-accent-bar"></div>
          <p class=" mb-3">
            <strong>Moving More Than Goods, Building Trust Along the Way
            </strong>
            A relocation is never just about moving boxes. It is about moving a part of someone’s life.
            <b>Make My Shift Packers and Movers Pvt. Ltd.</b> was built around this simple understanding. Based in
            <b>Bhagalpur, Bihar,</b> the company has been growing over the past <?= htmlspecialchars($experience) ?> years, gaining experience in packing
            and moving services and earning respect through the responsible approach to goods transportation and
            reliable support.

          </p>
          <p>
            Behind all these processes, there is one person - the Director of<b> Make My Shift Packers and Movers - Mr.
              Alok Kumar Chaudhary.</b> His approach has always been practical: understand the customer's requirements,
            respect their belongings and keep improving the way relocation services are delivered.
            Nowadays, our company is not only a transportation service provider. It is also an attempt to make
            relocation safe and well-organised.

          </p>

          <!-- Mission & Vision 2-Column Grid -->
          <div class="row g-3 mb-4">
            <!-- Our Mission -->
            <div class="col-12 col-md-6">
              <div class="about-mission-card p-4 border rounded-3 bg-white h-100 shadow-sm">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="about-feature-icon-wrap about-icon-blue about-feature-icon-46 mb-0">
                    <i class="bi bi-bullseye"></i>
                  </div>
                  <h3 class="h5 fw-bold mb-0 text-dark">Our Mission</h3>
                </div>
                <div class="about-sub-accent-bar mb-3"></div>
                <div class="about-mission-tagline mb-3 p-2 px-3 rounded-2">
                  To Make Every Move More Reliable and Customer-Focused
                </div>
                <p class="about-card-text mb-2">
                  Our mission is to provide relocation support where customers feel informed, respected and confident throughout the moving process.
                </p>
                <p class="about-card-text mb-2">
                  We believe professional packing and moving should involve more than transportation. The process of moving or transporting must include proper planning, responsible handling, proper coordination and consideration of the requirements of the client.
                </p>
                <p class="about-card-text mb-0">
                  Whether it is a household move, office relocation or vehicle transportation, our aim is to make the experience simpler for the customer.
                </p>
              </div>
            </div>

            <!-- Our Vision -->
            <div class="col-12 col-md-6">
              <div class="about-vision-card p-4 border rounded-3 bg-white h-100 shadow-sm">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="about-feature-icon-wrap about-icon-blue about-feature-icon-46 mb-0">
                    <i class="bi bi-eye-fill"></i>
                  </div>
                  <h3 class="h5 fw-bold mb-0 text-dark">Our Vision</h3>
                </div>
                <div class="about-sub-accent-bar mb-3"></div>
                <div class="about-vision-tagline mb-3 p-2 px-3 rounded-2">
                  To Become a Trusted Name in India's Relocation Industry
                </div>
                <p class="about-card-text mb-2">
                  Our vision is to grow Make My Shift into a respected and dependable name in the Indian packing and moving industry while maintaining the values that shaped the company.
                </p>
                <p class="about-card-text mb-2">
                  Growth matters, but not at the cost of trust.
                </p>
                <p class="about-card-text mb-0">
                  We want to expand our reach, strengthen our service standards and continue learning from customers and the changing logistics industry. The goal is straightforward: when people think about professional relocation, they should think about a company they can trust.
                </p>
              </div>
            </div>
          </div>

          <!-- Our Journey Box -->
          <div class="about-journey-card p-4 border rounded-3 shadow-sm">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="about-feature-icon-wrap about-icon-blue about-feature-icon-44 mb-0">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-0 text-dark">Our Journey</h3>
                <small class="text-muted fw-bold">Trusted Since <?= $startYear ?></small>
              </div>
            </div>
            <div class="about-sub-accent-bar mb-3"></div>

            <p class="mb-2">
              The journey of our company has been shaped by experience, industry participation and a continuous focus on better service.
            </p>
            <p class="mb-2">
              Over the years, the company has participated in industry events organised through the Movers Federation of India (MFI), gaining recognition within the professional relocation community.
            </p>
            <p class="mb-2">
              One notable milestone came in 2022, when Director Alok Kumar Chaudhary was honoured at an Indian Movers Association event in Jaipur for his contribution and service in the moving industry.
            </p>
            <p class="mb-2">
              The journey continued with participation and recognition at national industry gatherings. Make My Shift was recognised at the 7th National Conference in Goa, reflecting its continued involvement in the organised movers and packers sector.
            </p>
            <p class="mb-3">
              Then came another important milestone in April 2025. For its successful work, Make My Shift Packers and Movers Pvt. Ltd. got a certificate on the 8th National Conference, which was organised by Movers Federation of India in Radisson Hotel, Bhopal. Such achievements are important not only for the reason that they provide us with a certificate, but also due to the fact that such awards mean years of our work in the shadows.
            </p>

            <!-- Bottom Horizontal Stat Badges -->
            <div class="row g-3 pt-2">
              <div class="col-6">
                <div class="about-journey-stat-badge p-3 rounded-3 text-center">
                  <div class="fs-3 fw-bold text-danger lh-1 mb-1"><?= $experience ?></div>
                  <small class="text-dark fw-bold">Years of Experience</small>
                </div>
              </div>
              <div class="col-6">
                <div class="about-journey-stat-badge p-3 rounded-3 text-center">
                  <div class="fs-3 fw-bold text-danger lh-1 mb-1"><?= $happyClients ?></div>
                  <small class="text-dark fw-bold">Happy Clients</small>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /#aboutWhoWeAreCard -->

        <!-- 2. OUR CERTIFICATIONS CARD -->
        <div class="about-advantage-card mb-4" id="aboutCertificationsCard">
          <span class="about-section-eyebrow">OUR CERTIFICATIONS</span>
          <h2 class="about-section-title">Certified. Trusted. <span class="text-danger">Reliable.</span></h2>
          <div class="about-red-accent-bar"></div>
          <p class="mb-4">
            We are certified and trusted service providers with verified industry standards.
          </p>

          <!-- 6 Certificate Cards Grid -->
          <div class="row g-3">
            <?php
            $certificates_list = [
              [
                'src' => base_url('assets/img/cert1.jpg'),
                'title' => 'ISO Approved',
                'desc' => 'ISO 9001:2015 Certified for Quality Management Systems.',
                'icon' => 'bi-patch-check-fill'
              ],
              [
                'src' => base_url('assets/img/cert3.jpg'),
                'title' => 'GST-IN Registered',
                'desc' => 'Government Registered & GSTIN Approved Company.',
                'icon' => 'bi-bank2'
              ],
              [
                'src' => base_url('assets/img/cert2.jpg'),
                'title' => 'INCORPORATION & UDYAM',
                'desc' => 'Registered under UDYAM with Government of India.',
                'icon' => 'bi-award-fill'
              ],
              [
                'src' => base_url('assets/img/cert4.jpg'),
                'title' => 'MFI Certified Member',
                'desc' => 'Verified Member of Movers Federation of India.',
                'icon' => 'bi-shield-fill-check'
              ],
              [
                'src' => base_url('assets/img/cert5.jpg'),
                'title' => 'Trade & Logistics License',
                'desc' => 'Authorized & Licensed Relocation Logistics Service Provider.',
                'icon' => 'bi-file-earmark-check-fill'
              ],
              [
                'src' => base_url('assets/img/cert6.jpg'),
                'title' => 'Quality & Compliance Standards',
                'desc' => 'Certified adherence to all safety and packing regulations.',
                'icon' => 'bi-check-circle-fill'
              ]
            ];

            foreach ($certificates_list as $cert):
            ?>
            <div class="col-12 col-sm-6 col-md-4">
              <div class="cert-card border rounded-3 bg-white h-100 p-3 shadow-sm text-center d-flex flex-column align-items-center">
                <div class="cert-img-wrapper rounded-3 overflow-hidden border bg-white w-100 mb-3">
                  <a href="<?= $cert['src'] ?>" target="_blank" title="View <?= htmlspecialchars($cert['title']) ?>">
                    <img src="<?= $cert['src'] ?>" alt="<?= htmlspecialchars($cert['title']) ?>" class="img-fluid cert-img" loading="lazy">
                  </a>
                </div>
                <div class="cert-icon-floating-wrap">
                  <span class="cert-floating-icon shadow-sm">
                    <i class="bi <?= $cert['icon'] ?>"></i>
                  </span>
                </div>
                <div class="cert-card-body pt-2 w-100">
                  <h3 class="h6 fw-bold text-dark mb-1"><?= htmlspecialchars($cert['title']) ?></h3>
                  <p class="small text-muted about-sub-desc mb-0"><?= htmlspecialchars($cert['desc']) ?></p>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <!-- Industry Achievements & Recognition Box -->
          <div class="about-achievements-box mt-4 p-4 border rounded-3 bg-white shadow-sm">
            <p class="mb-3">
              Our achievements are closely connected with our participation in the organised logistics and relocation industry.
            </p>
            <ul class="about-achievements-list list-unstyled mb-3">
              <li class="d-flex align-items-start gap-2 mb-2">
                <i class="bi bi-patch-check-fill text-danger mt-1 flex-shrink-0"></i>
                <span>Recognition at the Indian Movers Association event in Jaipur in 2022</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2">
                <i class="bi bi-patch-check-fill text-danger mt-1 flex-shrink-0"></i>
                <span>Participation at the 7th National Conference in Goa</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2">
                <i class="bi bi-patch-check-fill text-danger mt-1 flex-shrink-0"></i>
                <span>Recognition at the 8th National Conference organised by Movers Federation of India in Bhopal in April 2025</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2">
                <i class="bi bi-patch-check-fill text-danger mt-1 flex-shrink-0"></i>
                <span>Certificate of participation in the MFI 2-Day Annual Conference held on 13th and 14th April 2025</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-2">
                <i class="bi bi-patch-check-fill text-danger mt-1 flex-shrink-0"></i>
                <span>Continued involvement in professional discussions around safer, more transparent relocation services</span>
              </li>
            </ul>
            <div class="about-achievements-outro p-3 rounded-2">
              The recognitions shown in our journey are reminders of something important: good relocation work is built over time.
            </div>
          </div>
        </div><!-- /#aboutCertificationsCard -->

        <!-- 2. WHY CHOOSE CARD -->
        <div class="about-advantage-card mb-4" id="aboutWhyChooseCard">
          <div class="d-flex align-items-center gap-3 mb-2">
            <div class="about-feature-icon-wrap about-icon-red about-feature-icon-head-46 mb-0">
              <i class="bi bi-shield-fill-check"></i>
            </div>
            <div>
              <h2 class="h4 fw-bold mb-0 text-dark">Why Choose <span
                  class="text-danger"><?= htmlspecialchars($company3) ?>?</span></h2>
              <small class="text-muted">Trusted across India by thousands of happy customers.</small>
            </div>
          </div>
          <div class="about-red-accent-bar mt-2 mb-4"></div>

          <!-- 5 Horizontal Trust Pills/Boxes -->
          <div class="row g-3">
            <!-- 1: Experience -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="p-3 border rounded-3 bg-white h-100 d-flex gap-3 align-items-center shadow-sm">
                <div class="about-feature-icon-wrap about-icon-blue about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold"><?= $experience ?> Years Experience</strong>
                  <small class="text-muted about-trust-caption">Trusted since <?= $startYear ?></small>
                </div>
              </div>
            </div>

            <!-- 2: Happy Clients -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="p-3 border rounded-3 bg-white h-100 d-flex gap-3 align-items-center shadow-sm">
                <div class="about-feature-icon-wrap about-icon-red about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold"><?= $happyClients ?> Happy Clients</strong>
                  <small class="text-muted about-trust-caption">Families &amp; businesses trust us</small>
                </div>
              </div>
            </div>

            <!-- 3: Verified & Licensed -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="p-3 border rounded-3 bg-white h-100 d-flex gap-3 align-items-center shadow-sm">
                <div class="about-feature-icon-wrap about-icon-blue about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-patch-check-fill"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold">Verified &amp; Licensed</strong>
                  <small class="text-muted about-trust-caption">ISO certified packers and movers</small>
                </div>
              </div>
            </div>

            <!-- 4: 100% Secure Shifting -->
            <div class="col-12 col-sm-6 col-lg-6">
              <div class="p-3 border rounded-3 bg-white h-100 d-flex gap-3 align-items-center shadow-sm">
                <div class="about-feature-icon-wrap about-icon-red about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-shield-fill-check"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold"><?= $secureShifting ?> Secure Shifting</strong>
                  <small class="text-muted about-trust-caption">Complete transit insurance options</small>
                </div>
              </div>
            </div>

            <!-- 5: Pan-India Coverage -->
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="p-3 border rounded-3 bg-white h-100 d-flex gap-3 align-items-center shadow-sm">
                <div class="about-feature-icon-wrap about-icon-blue about-trust-icon-40 mb-0 flex-shrink-0">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small fw-bold">Pan-India Coverage</strong>
                  <small class="text-muted about-trust-caption">100+ branches across <?= $statesCovered ?>
                    states</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Our Commitment Box -->
          <div class="about-commitment-box mt-4 p-4 border rounded-3 bg-white shadow-sm">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="about-feature-icon-wrap about-icon-red about-feature-icon-44 mb-0">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-0 text-dark">Our Commitment</h3>
              </div>
            </div>
            <div class="about-sub-accent-bar mb-3"></div>

            <p class="mb-3">
              Our journey is still being written. From Bhagalpur to national industry platforms, Make My Shift continues to move forward with the same basic belief: take care of the customer's belongings, respect their time and treat every relocation as important.
            </p>

            <div class="about-commitment-brand-card p-3 rounded-3 mb-3 text-center text-md-start d-md-flex align-items-center justify-content-between gap-3">
              <div>
                <div class="h6 fw-bold mb-1 text-dark">Make My Shift Packers and Movers</div>
                <div class="about-commitment-badges d-flex flex-wrap gap-2 mt-2">
                  <span class="badge commitment-pill-red"><?= htmlspecialchars($experience) ?> Years of Experience</span>
                  <span class="badge commitment-pill-blue">Moving With Care</span>
                  <span class="badge commitment-pill-blue">Building Trust</span>
                </div>
              </div>
            </div>

            <div class="about-commitment-cta p-3 rounded-3 d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
              <div>
                <p class="mb-0 fw-semibold text-dark">
                  Planning your next move? Talk to our team and let’s make your shift a better one.
                </p>
              </div>
              <a href="<?= $phonehtml ?>" class="btn btn-danger btn-sm px-3 py-2 fw-bold text-nowrap flex-shrink-0">
                <i class="bi bi-telephone-fill me-1"></i> Contact us at <?= htmlspecialchars($phone) ?>
              </a>
            </div>
          </div>
        </div><!-- /#aboutWhyChooseCard -->

        <!-- 3. HOW WE WORK CARD -->
        <div class="about-advantage-card mb-4" id="aboutHowWeWorkCard">
          <div class="d-flex align-items-center gap-3 mb-2">
            <div class="about-feature-icon-wrap about-icon-red about-feature-icon-head-46 mb-0">
              <i class="bi bi-gear-fill"></i>
            </div>
            <div>
              <h2 class="h4 fw-bold mb-0 text-dark">How We Work</h2>
              <small class="text-muted">A simple and transparent process for a stress-free move.</small>
            </div>
          </div>
          <div class="about-red-accent-bar mt-2 mb-4"></div>

          <!-- 4 Process Step Boxes in a Row -->
          <div class="row g-3">
            <!-- Step 1 -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div
                class="p-3 border rounded-3 bg-white h-100 text-center shadow-sm d-flex flex-column align-items-center">
                <span
                  class="rounded-circle d-inline-flex align-items-center justify-content-center fw-bold mb-3 about-step-badge-blue">1</span>
                <h3 class="h6 fw-bold mb-2 text-dark">Survey &amp; Quote</h3>
                <p class="small mb-0 about-step-subdesc">
                  We understand your requirements and provide a fair, transparent quote.
                </p>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div
                class="p-3 border rounded-3 bg-white h-100 text-center shadow-sm d-flex flex-column align-items-center">
                <span
                  class="rounded-circle d-inline-flex align-items-center justify-content-center fw-bold mb-3 about-step-badge-red">2</span>
                <h3 class="h6 fw-bold mb-2 text-dark">Expert Packing</h3>
                <p class="small mb-0 about-step-subdesc">
                  High-quality packing materials and skilled professionals to ensure safety.
                </p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div
                class="p-3 border rounded-3 bg-white h-100 text-center shadow-sm d-flex flex-column align-items-center">
                <span
                  class="rounded-circle d-inline-flex align-items-center justify-content-center fw-bold mb-3 about-step-badge-blue">3</span>
                <h3 class="h6 fw-bold mb-2 text-dark">Safe Transit</h3>
                <p class="small mb-0 about-step-subdesc">
                  Your belongings are transported securely with real-time updates.
                </p>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div
                class="p-3 border rounded-3 bg-white h-100 text-center shadow-sm d-flex flex-column align-items-center">
                <span
                  class="rounded-circle d-inline-flex align-items-center justify-content-center fw-bold mb-3 about-step-badge-red">4</span>
                <h3 class="h6 fw-bold mb-2 text-dark">Setup &amp; Placement</h3>
                <p class="small mb-0 about-step-subdesc">
                  We unload and place your items at your new location with care.
                </p>
              </div>
            </div>
          </div>
        </div><!-- /#aboutHowWeWorkCard -->

      </div><!-- /.col-lg-8 -->

      <!-- Right Column (Sticky Sidebar) -->
      <div class="col-lg-4">
        <?php $this->load->view('about/company_sidebar', ['topic' => 'Home Move', 'active_page' => 'about-us']); ?>
      </div><!-- /.col-lg-4 -->

    </div><!-- /#aboutMainRow -->

  </div>
</section>