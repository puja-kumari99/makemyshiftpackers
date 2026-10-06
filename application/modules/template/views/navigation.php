<body>
  <?php
  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'how-to-choose', 'how-to-choose-movers', 'how-to-choose-verified-packers-movers', 'beware-of-fraud', 'beware-fraud', 'beware-of-fraud-packers-and-movers', 'transit-insurance', 'payment', 'faqs', 'testimonials'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'warehouse-and-storage', 'domestic-relocation', 'international-shifting', 'corporate-shifting', 'intercity-shifting', 'local-shifting', 'logistic-services', 'pet-relocation', 'home-relocation', 'storage-services', 'car-transportation-service', 'packing-and-moving', 'loading-unloading'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
    $active_tab = 'locations';
  } elseif ($class === 'gallery' || in_array($segment1, ['gallery', 'photo-gallery', 'video-gallery'])) {
    $active_tab = 'gallery';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- Slim Top Bar -->
  <div class="top-bar" role="region" aria-label="Quick contact bar">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <!-- Left Side: Email & Phone -->
        <div class="top-bar-left d-flex align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="top-bar-link d-flex align-items-center gap-2">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="top-bar-link d-flex align-items-center gap-2">
            <i class="bi bi-telephone-fill"></i> <span><?= htmlspecialchars($phone) ?></span>
          </a>
        </div>

        <!-- Right Side: Trust Badges -->
        <div class="top-bar-right d-flex align-items-center gap-2">
          <div class="top-trust-badge d-flex align-items-center gap-2">
            <span class="trust-badge-pill">
              <i class="bi bi-patch-check-fill"></i> ISO 9001:2015 Certified
            </span>
          </div>
        </div>
      </div>

      <!-- Mobile Top Bar -->
      <div class="top-bar-mobile d-flex d-lg-none justify-content-between align-items-center py-1">
        <a href="<?= $phonehtml ?>" class="top-bar-link d-flex align-items-center gap-1 me-1">
          <i class="bi bi-telephone-fill"></i> <span><?= htmlspecialchars($phone) ?></span>
        </a>
        <div class="top-trust-badge d-flex align-items-center gap-1">
          <span class="trust-badge-pill">
            <i class="bi bi-patch-check-fill"></i> ISO Certified
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- SEO Friendly SiteNavigationElement Schema -->
  <?php
  $service_items = [
    'home-relocation' => [
      'name' => 'Home Relocation',
      'url' => site_url('home-relocation'),
      'icon' => '<svg width="20" height="20" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 24L26 8L46 24" stroke="#E52B20" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M37 13.5V8H42V17.5" stroke="#E52B20" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 23V44H42V23" stroke="#002569" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 44V31H30V44" stroke="#002569" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    ],
    'office-relocation' => [
      'name' => 'Office Relocation',
      'url' => site_url('office-relocation'),
      'icon' => '<svg width="20" height="20" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="7" y="10" width="18" height="34" rx="1.5" stroke="#002569" stroke-width="2.5" stroke-linejoin="round"/><path d="M12 16H14M18 16H20M12 22H14M18 22H20M12 28H14M18 28H20M12 34H14M18 34H20" stroke="#002569" stroke-width="2.2" stroke-linecap="round"/><rect x="25" y="20" width="20" height="24" rx="1.5" stroke="#E52B20" stroke-width="2.5" stroke-linejoin="round"/><path d="M30 26H33M37 26H40M30 32H33M37 32H40" stroke="#E52B20" stroke-width="2.2" stroke-linecap="round"/><path d="M32 44V38H38V44" stroke="#E52B20" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    ],
    'car-transportation' => [
      'name' => 'Car Transportation',
      'url' => site_url('car-transportation'),
      'icon' => '<svg width="20" height="20" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 20L18 12H34L38 20" stroke="#E52B20" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 22C9 20.895 9.895 20 11 20H41C42.105 20 43 20.895 43 22V31C43 32.105 42.105 33 41 33H11C9.895 33 9 32.105 9 31V22Z" stroke="#E52B20" stroke-width="2.5" stroke-linejoin="round"/><circle cx="15" cy="26" r="2.5" stroke="#E52B20" stroke-width="2"/><circle cx="37" cy="26" r="2.5" stroke="#E52B20" stroke-width="2"/><rect x="21" y="25" width="10" height="3" rx="1.5" stroke="#E52B20" stroke-width="2"/><rect x="10" y="33" width="5" height="5" rx="1" fill="#E52B20"/><rect x="37" y="33" width="5" height="5" rx="1" fill="#E52B20"/></svg>'
    ],
    'bike-transportation' => [
      'name' => 'Bike Transportation',
      'url' => site_url('bike-transportation'),
      'icon' => '<svg width="20" height="20" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="13" cy="35" r="8" stroke="#002569" stroke-width="2.5"/><circle cx="13" cy="35" r="2.5" fill="#002569"/><circle cx="39" cy="35" r="8" stroke="#E52B20" stroke-width="2.5"/><circle cx="39" cy="35" r="2.5" fill="#E52B20"/><path d="M13 35L22 27H29L32 35" stroke="#002569" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 26C16 26 19 24 23 24H27" stroke="#002569" stroke-width="2.5" stroke-linecap="round"/><rect x="20" y="27" width="9" height="7" rx="1.5" stroke="#002569" stroke-width="2"/><path d="M14 38L26 38L30 35" stroke="#002569" stroke-width="2.2" stroke-linecap="round"/><path d="M25 24C25 24 28 19 33 19C36 19 37.5 21 37.5 21" stroke="#E52B20" stroke-width="2.5" stroke-linecap="round"/><path d="M39 35L34 16" stroke="#E52B20" stroke-width="2.5" stroke-linecap="round"/><path d="M31 16H36" stroke="#E52B20" stroke-width="2.8" stroke-linecap="round"/><circle cx="37" cy="20" r="1.5" fill="#E52B20"/></svg>'
    ],
    'packing-and-moving' => [
      'name' => 'Packing & Moving',
      'url' => site_url('packing-and-moving'),
      'icon' => '<svg width="20" height="20" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 16H31V37H6V16Z" stroke="#002569" stroke-width="2.5" stroke-linejoin="round"/><circle cx="14" cy="40" r="4" stroke="#002569" stroke-width="2.5"/><path d="M31 23H40L45 30V37H31" stroke="#E52B20" stroke-width="2.5" stroke-linejoin="round"/><path d="M34 26H39L42 30H34V26Z" stroke="#E52B20" stroke-width="2" stroke-linejoin="round"/><circle cx="39" cy="40" r="4" stroke="#E52B20" stroke-width="2.5"/><path d="M18 37H35" stroke="#002569" stroke-width="2.5"/></svg>'
    ],
    'loading-unloading' => [
      'name' => 'Loading & Unloading',
      'url' => site_url('loading-unloading'),
      'icon' => '<svg width="20" height="20" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 8V40H38" stroke="#002569" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 8H16" stroke="#002569" stroke-width="2.6" stroke-linecap="round"/><circle cx="16" cy="42" r="4" stroke="#002569" stroke-width="2.5"/><rect x="18" y="26" width="22" height="14" rx="2" stroke="#E52B20" stroke-width="2.5"/><path d="M29 26V40" stroke="#E52B20" stroke-width="2" stroke-dasharray="2 2"/><rect x="20" y="14" width="18" height="12" rx="2" stroke="#E52B20" stroke-width="2.5"/><path d="M29 14V26" stroke="#E52B20" stroke-width="2" stroke-dasharray="2 2"/></svg>'
    ]
  ];

  $nav_schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "name" => "Why Choose Us", "url" => site_url('why-choose-us')],
      ["@type" => "SiteNavigationElement", "name" => "FAQs", "url" => site_url('faqs')],
      ["@type" => "SiteNavigationElement", "name" => "Testimonials", "url" => site_url('testimonials')],
      ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
      ["@type" => "SiteNavigationElement", "name" => "Home Relocation", "url" => site_url('home-relocation')],
      ["@type" => "SiteNavigationElement", "name" => "Office Relocation", "url" => site_url('office-relocation')],
      ["@type" => "SiteNavigationElement", "name" => "Car Transportation", "url" => site_url('car-transportation')],
      ["@type" => "SiteNavigationElement", "name" => "Bike Transportation", "url" => site_url('bike-transportation')],
      ["@type" => "SiteNavigationElement", "name" => "Packing & Moving Service", "url" => site_url('packing-and-moving')],
      ["@type" => "SiteNavigationElement", "name" => "Loading Unloading Service", "url" => site_url('loading-unloading')],
      ["@type" => "SiteNavigationElement", "name" => "Locations", "url" => site_url('our-branches')],
      ["@type" => "SiteNavigationElement", "name" => "Gallery", "url" => site_url('photo-gallery')],
      ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "name" => "Contact", "url" => site_url('contact-us')],
      ["@type" => "SiteNavigationElement", "name" => "Track", "url" => site_url('tracking')]
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= $company3 ?>"
          class="brand-logo">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-4" itemscope
        itemtype="https://schema.org/SiteNavigationElement">
        <!-- Home -->
        <a itemprop="url" href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>"><span
            itemprop="name">Home</span></a>

        <!-- About Us Dropdown -->
        <div class="nav-item dropdown">
          <a href="<?= site_url('about-us') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'about' ? ' active' : '' ?>">About Us <i
              class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'about-us' ? ' active' : '' ?>"
                href="<?= site_url('about-us') ?>">About Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>"
                href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
            <li><a class="dropdown-item<?= in_array($segment1, ['how-to-choose', 'how-to-choose-movers', 'how-to-choose-verified-packers-movers']) ? ' active' : '' ?>"
                href="<?= site_url('how-to-choose') ?>">How to Choose</a></li>
            <li><a class="dropdown-item<?= in_array($segment1, ['beware-of-fraud', 'beware-fraud', 'beware-of-fraud-packers-and-movers']) ? ' active' : '' ?>"
                href="<?= site_url('beware-of-fraud') ?>">Beware of Fraud</a></li>
            <li><a class="dropdown-item<?= in_array($segment1, ['transit-insurance', 'transit-insurance-for-packers-and-movers']) ? ' active' : '' ?>"
                href="<?= site_url('transit-insurance') ?>">Transit Insurance</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'payment' ? ' active' : '' ?>"
                href="<?= site_url('payment') ?>">Payment</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'faqs' ? ' active' : '' ?>"
                href="<?= site_url('faqs') ?>">FAQ</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'testimonials' ? ' active' : '' ?>"
                href="<?= site_url('testimonials') ?>">Testimonial</a></li>
          </ul>
        </div>

        <!-- Services Dropdown -->
        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">Services <i
              class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu dropdown-menu-services">
            <?php foreach ($service_items as $slug => $sitem): ?>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-2<?= $segment1 === $slug ? ' active' : '' ?>"
                  href="<?= $sitem['url'] ?>">
                  <span class="dropdown-service-icon"><?= $sitem['icon'] ?></span>
                  <span><?= htmlspecialchars($sitem['name']) ?></span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Locations -->
        <a href="<?= site_url('our-branches') ?>"
          class="nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>">Locations</a>

        <!-- Gallery -->
        <a href="<?= site_url('photo-gallery') ?>"
          class="nav-link<?= $active_tab === 'gallery' ? ' active' : '' ?>">Gallery</a>

        <!-- Blog -->
        <a href="<?= site_url('blog') ?>" class="nav-link<?= $active_tab === 'blog' ? ' active' : '' ?>">Blog</a>

        <!-- Track -->
        <a href="<?= site_url('tracking') ?>"
          class="nav-link<?= $active_tab === 'tracking' ? ' active' : '' ?>">Track</a>

        <!-- Contact -->
        <a href="<?= site_url('contact-us') ?>"
          class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">Contact</a>
      </nav>

      <!-- Header Action Buttons -->
      <div class="header-actions d-flex align-items-center gap-2 gap-sm-3">
        <!-- Highlighted Nav Phone Call Button (Left of Get Free Quote) -->
        <a href="<?= $phonehtml2 ?>" class="btn-nav-phone d-inline-flex align-items-center gap-2" title="Call Us: <?= htmlspecialchars($phone2) ?>">
          <i class="bi bi-telephone-fill"></i>
          <span><?= htmlspecialchars($phone2) ?></span>
        </a>

        <!-- Get Free Quote Button (Hidden on Mobile) -->
        <a href="#" class="btn-quote d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#qteModal">
          <span>Get Free Quote</span>
          <i class="bi bi-arrow-right"></i>
        </a>

        <!-- Hamburger for Mobile -->
        <button class="hamburger d-flex d-lg-none" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu (overlay menu when clicking hamburger) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
      <i class="bi bi-x"></i>
    </button>

    <div class="mega-inner">

      <!-- Navigation Accordion -->
      <div class="mobile-nav-list">
        <div class="mobile-nav-item<?= $active_tab === 'home' ? ' active' : '' ?>">
          <a href="<?= site_url() ?>" class="mobile-nav-link">Home</a>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>About Us</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>">About Us</a>
            <a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>">Why Choose Us</a>
            <a href="<?= site_url('how-to-choose') ?>" class="<?= in_array($segment1, ['how-to-choose', 'how-to-choose-movers', 'how-to-choose-verified-packers-movers']) ? 'active' : '' ?>">How to Choose</a>
            <a href="<?= site_url('beware-of-fraud') ?>" class="<?= in_array($segment1, ['beware-of-fraud', 'beware-fraud', 'beware-of-fraud-packers-and-movers']) ? 'active' : '' ?>">Beware of Fraud</a>
            <a href="<?= site_url('transit-insurance') ?>" class="<?= in_array($segment1, ['transit-insurance', 'transit-insurance-for-packers-and-movers']) ? 'active' : '' ?>">Transit Insurance</a>
            <a href="<?= site_url('payment') ?>" class="<?= $segment1 === 'payment' ? 'active' : '' ?>">Payment</a>
            <a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>">FAQ</a>
            <a href="<?= site_url('testimonials') ?>"
              class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>">Testimonial</a>
          </div>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>Services</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <?php foreach ($service_items as $slug => $sitem): ?>
              <a href="<?= $sitem['url'] ?>"
                class="d-flex align-items-center gap-2<?= $segment1 === $slug ? ' active' : '' ?>">
                <span class="dropdown-service-icon"><?= $sitem['icon'] ?></span>
                <span><?= htmlspecialchars($sitem['name']) ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'locations' ? ' active' : '' ?>">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link">Locations</a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'gallery' ? ' active' : '' ?>">
          <a href="<?= site_url('photo-gallery') ?>" class="mobile-nav-link">Gallery</a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'blog' ? ' active' : '' ?>">
          <a href="<?= site_url('blog') ?>" class="mobile-nav-link">Blog</a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link">Contact</a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'tracking' ? ' active' : '' ?>">
          <a href="<?= site_url('tracking') ?>" class="mobile-nav-link">Track</a>
        </div>
      </div>

      <!-- Mobile Quote Button (Opens existing quote modal) -->
      <div class="mobile-cta-wrap mt-3 mb-2">
        <a href="#" class="btn-quote w-100 justify-content-center" data-bs-toggle="modal" data-bs-target="#qteModal" onclick="closeMegaMenu()">
          <span>Get Free Quote</span>
          <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

      <!-- Secondary Links & Contact -->
      <div class="mobile-sec-links mt-auto">
        <div class="d-flex flex-column gap-2 mb-3">
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-2"><i class="bi bi-telephone-fill text-danger"></i> <span><?= htmlspecialchars($phone) ?></span></a>
          <a href="<?= $phonehtml2 ?>" class="d-flex align-items-center gap-2 text-danger fw-bold"><i class="bi bi-telephone-outbound-fill text-danger"></i> <span><?= htmlspecialchars($phone2) ?></span></a>
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-2"><i class="bi bi-envelope text-danger"></i> <span><?= $mail ?></span></a>
        </div>
        <div class="top-social-icons d-flex align-items-center gap-2">
          <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener" class="top-social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener" class="top-social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?= $linkedinhtml ?>" target="_blank" rel="noopener" class="top-social-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="<?= $youtubehtml ?>" target="_blank" rel="noopener" class="top-social-btn" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    function closeMegaMenu() {
      if (megaMenu) megaMenu.classList.remove('active');
      body.classList.remove('menu-open');
    }
    window.closeMegaMenu = closeMegaMenu;

    if (openMenu) {
      openMenu.addEventListener('click', () => {
        megaMenu.classList.add('active');
        body.classList.add('menu-open');
      });
    }

    if (closeMenu) {
      closeMenu.addEventListener('click', closeMegaMenu);
    }

    // Toggle mobile dropdown accordions
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');

        // Close other open dropdowns (accordion style)
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('active');
          }
        });

        parent.classList.toggle('active');
      });
    });

    // Close menu when clicking on backdrop overlay
    if (megaMenu) {
      megaMenu.addEventListener('click', (e) => {
        if (e.target === megaMenu) {
          closeMegaMenu();
        }
      });
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeMegaMenu();
      }
    });

    window.addEventListener('scroll', () => {
      if (mainHeader) {
        mainHeader.classList.toggle('scrolled', window.scrollY > 20);
      }
    });
  </script>