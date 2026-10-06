<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$awards_list = [
    [
        'src' => base_url('assets/img/recog3.jpg'),
        'title' => 'Jagran Icon Award Bihar - Certificate of Excellence'
    ],
    [
        'src' => base_url('assets/img/bihar_icon.jpg'),
        'title' => 'Dainik Jagran Icon Award Bihar Emblem'
    ],
    [
        'src' => base_url('assets/img/recog1.jpg'),
        'title' => 'Movers Federation of India - National Conference Award at Bhopal'
    ],
    [
        'src' => base_url('assets/img/recog4.jpg'),
        'title' => 'Award of Excellence in Logistics & Relocation Services'
    ],
    [
        'src' => base_url('assets/img/recog5.jpg'),
        'title' => 'National Packers & Movers Federation Award & Recognition'
    ],
    [
        'src' => base_url('assets/img/recog6.jpg'),
        'title' => 'Certificate of Achievement - Safe Moving Standards'
    ],
    [
        'src' => base_url('assets/img/recog7.jpg'),
        'title' => 'Excellence in Customer Satisfaction & Quality Shifting'
    ],
    [
        'src' => base_url('assets/img/recog10.jpg'),
        'title' => 'Best Relocation Service Provider Honour'
    ],
    [
        'src' => base_url('assets/img/recog11.jpg'),
        'title' => 'Certificate of Merit - Interstate Transport Excellence'
    ],
    [
        'src' => base_url('assets/img/recog12.jpg'),
        'title' => 'Movers Federation of India Regional Recognition'
    ],
    [
        'src' => base_url('assets/img/recog13.jpg'),
        'title' => 'Outstanding Performance in Packing & Moving'
    ],
    [
        'src' => base_url('assets/img/recog14.jpg'),
        'title' => 'National Transportation & Shifting Award'
    ],
    [
        'src' => base_url('assets/img/recog15.jpg'),
        'title' => 'Certificate of Appreciation - Safe Logistics'
    ]
];

// Automatically remove any missing images so no empty containers render
$awards_list = array_values(array_filter($awards_list, function($item) {
    $relativePath = str_replace(base_url(), '', $item['src']);
    return file_exists(FCPATH . $relativePath);
}));
?>

<!-- ======================================================
     AWARDS & RECOGNITION WIDGET
     ====================================================== -->
<section class="news-clean-section py-5 bg-white" id="recognizationWidget">
    <div class="container">

        <!-- Section Header matching news widget style -->
        <div class="news-section-header mb-4 mb-lg-5">
            <div class="news-eyebrow d-flex align-items-center mb-2">
                <span class="eyebrow-dash"></span>
                <span class="eyebrow-text">AWARDS &amp; RECOGNITION</span>
            </div>
            <h3 class="news-header-title mb-1">
                Awards &amp; <span class="text-brand-red">Recognition</span>
            </h3>
            <p class="news-subtitle mb-0">
                Awarded and recognized for excellence in packing, moving, and logistics services.
            </p>
        </div>

        <!-- Awards Marquee Slider -->
        <div class="testimonials-slider-wrap" id="recogSliderWrap">
            <div class="testimonials-slider-viewport">
                <div class="recog-slider-track testimonials-slider-track" id="recogTrack">
                    <?php foreach ($awards_list as $index => $award): ?>
                        <div class="recog-slide-col">
                            <div class="news-card" onclick="openRecogLightbox(<?= $index ?>)">
                                <div class="news-card-img-container">
                                    <img src="<?= $award['src'] ?>" alt="<?= htmlspecialchars($award['title']) ?>"
                                        class="news-card-img" loading="lazy">
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
        </div>

    </div>
</section>

<!-- Lightbox Modal for Awards & Recognition -->
<div class="news-lightbox-modal" id="recogLightboxModal" onclick="closeRecogLightbox(event)">
    <div class="news-lightbox-backdrop"></div>
    <div class="news-lightbox-dialog">
        <button type="button" class="news-lightbox-close-btn" onclick="closeRecogLightbox(event)" aria-label="Close">
            <i class="bi bi-x-lg"></i>
        </button>
        <button type="button" class="news-lightbox-nav-btn news-lightbox-prev-btn"
            onclick="navigateRecogLightbox(-1, event)" aria-label="Previous">
            <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="news-lightbox-nav-btn news-lightbox-next-btn"
            onclick="navigateRecogLightbox(1, event)" aria-label="Next">
            <i class="bi bi-chevron-right"></i>
        </button>
        <div class="news-lightbox-img-wrap">
            <img src="" id="recogLightboxImage" alt="Award Image Preview">
        </div>
        <div class="news-lightbox-caption" id="recogLightboxCaption"></div>
    </div>
</div>

<script>
    (function () {
        const recogData = <?= json_encode($awards_list); ?>;
        let currentIndex = 0;

        function openRecogLightbox(index) {
            currentIndex = index;
            updateRecogLightboxContent();
            const modal = document.getElementById('recogLightboxModal');
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeRecogLightbox(e) {
            if (e && (e.target.classList.contains('news-lightbox-dialog') || e.target.closest('.news-lightbox-img-wrap'))) {
                return;
            }
            const modal = document.getElementById('recogLightboxModal');
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        function navigateRecogLightbox(direction, e) {
            if (e) e.stopPropagation();
            currentIndex = (currentIndex + direction + recogData.length) % recogData.length;
            updateRecogLightboxContent();
        }

        function updateRecogLightboxContent() {
            const imgEl = document.getElementById('recogLightboxImage');
            const captionEl = document.getElementById('recogLightboxCaption');
            if (imgEl && recogData[currentIndex]) {
                imgEl.src = recogData[currentIndex].src;
                imgEl.alt = recogData[currentIndex].title;
            }
            if (captionEl && recogData[currentIndex]) {
                captionEl.textContent = recogData[currentIndex].title;
            }
        }

        window.openRecogLightbox = openRecogLightbox;
        window.closeRecogLightbox = closeRecogLightbox;
        window.navigateRecogLightbox = navigateRecogLightbox;

        document.addEventListener('keydown', function (e) {
            const modal = document.getElementById('recogLightboxModal');
            if (modal && modal.classList.contains('active')) {
                if (e.key === 'Escape') closeRecogLightbox();
                if (e.key === 'ArrowLeft') navigateRecogLightbox(-1);
                if (e.key === 'ArrowRight') navigateRecogLightbox(1);
            }
        });
    })();
</script>
