<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
$city_count = count($cities);
?><!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . htmlspecialchars($state),
    'bc_desc' => 'Licensed, insured, and background-verified moving crews covering all residential sectors, commercial zones, and industrial hubs across ' . $city_count . '+ verified locations in ' . htmlspecialchars($state) . '.',
    'breadcrumbs' => [
        ['name' => 'Locations', 'url' => site_url('our-branches')],
        ['name' => htmlspecialchars($state)]
    ]
]);
?>


<!-- ======================================================
     CITY DIRECTORY SECTION
     ====================================================== -->
<div class="pm-list-service-page">
  <div class="container">

    <!-- Simple & Sleek Search Bar -->
    <div class="pm-simple-search-card">
      <div class="pm-search-input-wrap">
        <div class="pm-search-icon-box">
          <i class="bi bi-search"></i>
        </div>
        <input type="text" 
               id="citySearchInput" 
               class="pm-search-input" 
               placeholder="Search your city in <?= htmlspecialchars($state) ?>..." 
               autocomplete="off"
               aria-label="Search city in <?= htmlspecialchars($state) ?>">
        <button type="button" id="clearCitySearch" class="pm-search-clear-btn" aria-label="Clear search">
          <i class="bi bi-x-lg"></i>
        </button>
        <div class="pm-search-count-badge">
          <i class="bi bi-pin-map-fill text-danger me-1"></i>
          <span><span id="visibleCityCount"><?= $city_count ?></span> Cities</span>
        </div>
      </div>
    </div>

    <!-- Empty Search State -->
    <div id="cityEmptyState" class="pm-directory-empty-state">
      <div class="pm-empty-icon"><i class="bi bi-geo-alt"></i></div>
      <h3 class="h5 fw-bold text-dark mb-2">No Matching Cities Found</h3>
      <p class="text-muted small mb-3">We couldn't find any location matching "<span id="searchQueryEcho" class="fw-semibold text-danger"></span>" in <?= htmlspecialchars($state) ?>.</p>
      <div class="d-flex justify-content-center gap-2">
        <button type="button" class="btn btn-outline-primary btn-sm rounded-pill px-3" id="resetSearchBtn">
          <i class="bi bi-arrow-counterclockwise me-1"></i> View All Cities
        </button>
        <a href="<?= $phonehtml ?>" class="btn btn-danger btn-sm rounded-pill px-3">
          <i class="bi bi-telephone-fill me-1"></i> Call 24/7 Helpline
        </a>
      </div>
    </div>

    <!-- City Cards Grid -->
    <div class="row g-3 mt-2" id="cityCardsContainer">
      <?php
      $st_param = str_replace(" ", "-", $state);
      $statename = urlencode(strtolower($st_param));

      foreach ($cities as $ct):
          $city_name = $ct['nm'];
          $first_letter = strtoupper(substr(trim($city_name), 0, 1));
          $link = urlencode(strtolower(str_replace(" ", "-", $city_name)));
          $city_url = site_url("$link-packers-movers-$statename");
      ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 pm-city-grid-item" 
             data-city-name="<?= strtolower(htmlspecialchars($city_name)) ?>" 
             data-letter="<?= $first_letter ?>">
          <a href="<?= $city_url ?>" class="pm-city-dir-card">
            <!-- Squircle Icon -->
            <div class="pm-city-icon-squircle">
              <i class="bi bi-truck"></i>
            </div>
            
            <!-- City Text & Eyebrow -->
            <div class="pm-city-info">
              <span class="pm-city-info-tag">Packers &amp; Movers</span>
              <h2 class="pm-city-name-title" title="<?= htmlspecialchars($city_name) ?>">
                <?= htmlspecialchars($city_name) ?>
              </h2>
            </div>

            <!-- Directional Chevron -->
            <i class="bi bi-chevron-right pm-city-arrow-icon"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom Coverage CTA Banner -->
    <div class="pm-directory-cta-section">
      <i class="bi bi-truck pm-directory-cta-bg-truck"></i>
      <div class="row align-items-center pm-directory-cta-row">
        <div class="col-lg-8">
          <h2 class="pm-dir-cta-title">Can't Find Your Exact City or Town in <?= htmlspecialchars($state) ?>?</h2>
          <p class="pm-dir-cta-desc">
            We provide full-coverage doorstep household shifting, office shifting, vehicle transport, and warehousing across every pin-code in <?= htmlspecialchars($state) ?>. Connect directly with our logistics coordinator for a custom moving quote.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
          <div class="pm-dir-cta-actions justify-content-lg-end">
            <a href="<?= $phonehtml ?>" class="btn-dir-call">
              <i class="bi bi-telephone-fill me-2"></i> <?= htmlspecialchars($phone) ?>
            </a>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-dir-wa">
              <i class="bi bi-whatsapp me-2"></i> WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /container -->
</div>

<!-- ======================================================
     INTERACTIVE SIMPLE SEARCH JAVASCRIPT
     ====================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('citySearchInput');
    const clearBtn = document.getElementById('clearCitySearch');
    const resetBtn = document.getElementById('resetSearchBtn');
    const countDisplay = document.getElementById('visibleCityCount');
    const emptyState = document.getElementById('cityEmptyState');
    const queryEcho = document.getElementById('searchQueryEcho');
    const cards = Array.from(document.querySelectorAll('.pm-city-grid-item'));

    function filterCities() {
        const query = searchInput ? searchInput.value.trim().toLowerCase() : '';
        let visibleCount = 0;

        if (clearBtn) {
            clearBtn.style.display = query.length > 0 ? 'inline-flex' : 'none';
        }

        cards.forEach(card => {
            const cityName = card.getAttribute('data-city-name') || '';
            if (query === '' || cityName.includes(query)) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (countDisplay) {
            countDisplay.textContent = visibleCount;
        }

        if (emptyState) {
            if (visibleCount === 0) {
                emptyState.style.display = 'block';
                if (queryEcho) {
                    queryEcho.textContent = query;
                }
            } else {
                emptyState.style.display = 'none';
            }
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterCities);
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', function() {
            searchInput.value = '';
            searchInput.focus();
            filterCities();
        });
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', function() {
            if (searchInput) {
                searchInput.value = '';
                searchInput.focus();
            }
            filterCities();
        });
    }
});
</script>