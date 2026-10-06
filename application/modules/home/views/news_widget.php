<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$news_images = [
    ['src' => base_url('assets/img/news-no-1.jpg'), 'title' => 'Make My Shift Awarded at National Conference in Goa'],
    ['src' => base_url('assets/img/news-no-2.jpg'), 'title' => 'City Bytes Coverage - Make My Shift Packers'],
    ['src' => base_url('assets/img/news-no-3.jpg'), 'title' => 'Media Coverage on Safe Relocation Services'],
    ['src' => base_url('assets/img/news-no-7.jpg'), 'title' => 'Make My Shift Proprietor Honored in Jaipur'],
    ['src' => base_url('assets/img/news-no-9.jpg'), 'title' => 'National Conference Award Recognition'],
    ['src' => base_url('assets/img/news-no-18.jpg'), 'title' => 'Dainik Bhaskar - Transit Insurance & Safe Relocation Coverage'],
    ['src' => base_url('assets/img/news-no-19.jpg'), 'title' => 'Prabhat Khabar City Bytes - Director Alok Kumar Honored by Indian Movers Association'],
    ['src' => base_url('assets/img/news-no-20.jpg'), 'title' => 'Prabhat Khabar Feature - Quality Logistics & Relocation Services'],
    ['src' => base_url('assets/img/news-no-21.jpg'), 'title' => 'Director Alok Kumar Honored at MFI National Conference']
];

// Automatically remove any missing images so no empty containers render
$news_images = array_values(array_filter($news_images, function($item) {
    $relativePath = str_replace(base_url(), '', $item['src']);
    return file_exists(FCPATH . $relativePath);
}));
?>

<!-- ======================================================
     IN THE NEWS GALLERY WIDGET
     ====================================================== -->
<section class="news-clean-section py-5" id="newsWidget">
    <div class="container">

        <!-- Section Header matching process/about widget style (Image 2) -->
        <div class="news-section-header mb-4 mb-lg-5">
            <!-- Eyebrow Tag -->
            <div class="news-eyebrow d-flex align-items-center mb-2">
                <span class="eyebrow-dash"></span>
                <span class="eyebrow-text">MEDIA COVERAGE</span>
            </div>
            <!-- Section Title -->
            <h3 class="news-header-title mb-1">
                In The <span class="text-brand-red">News &amp; Media</span>
            </h3>
            <!-- Subtitle -->
            <p class="news-subtitle mb-0">
                Media features and recognition of Make My Shift.
            </p>
        </div>

        <!-- News Marquee Slider -->
        <div class="testimonials-slider-wrap" id="newsSliderWrap">
            <div class="testimonials-slider-viewport">
                <div class="news-slider-track testimonials-slider-track" id="newsTrack">
                    <?php foreach ($news_images as $index => $news): ?>
                        <div class="news-slide-col">
                            <div class="news-card" onclick="openNewsLightbox(<?= $index ?>)">
                                <div class="news-card-img-container">
                                    <img src="<?= $news['src'] ?>" alt="<?= htmlspecialchars($news['title']) ?>"
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

<!-- Lightbox Modal for Full View -->
<div class="news-lightbox-modal" id="newsLightboxModal" onclick="closeNewsLightbox(event)">
    <div class="news-lightbox-backdrop"></div>
    <div class="news-lightbox-dialog">
        <button type="button" class="news-lightbox-close-btn" onclick="closeNewsLightbox(event)" aria-label="Close">
            <i class="bi bi-x-lg"></i>
        </button>
        <button type="button" class="news-lightbox-nav-btn news-lightbox-prev-btn"
            onclick="navigateNewsLightbox(-1, event)" aria-label="Previous">
            <i class="bi bi-chevron-left"></i>
        </button>
        <button type="button" class="news-lightbox-nav-btn news-lightbox-next-btn"
            onclick="navigateNewsLightbox(1, event)" aria-label="Next">
            <i class="bi bi-chevron-right"></i>
        </button>
        <div class="news-lightbox-img-wrap">
            <img src="" id="newsLightboxImage" alt="News Image Preview">
        </div>
        <div class="news-lightbox-caption" id="newsLightboxCaption"></div>
    </div>
</div>

<script>
    (function () {
        const newsData = <?= json_encode($news_images); ?>;
        let currentIndex = 0;

        function openNewsLightbox(index) {
            currentIndex = index;
            updateLightboxContent();
            const modal = document.getElementById('newsLightboxModal');
            if (modal) {
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeNewsLightbox(e) {
            if (e && (e.target.classList.contains('news-lightbox-dialog') || e.target.closest('.news-lightbox-img-wrap'))) {
                return;
            }
            const modal = document.getElementById('newsLightboxModal');
            if (modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        function navigateNewsLightbox(direction, e) {
            if (e) e.stopPropagation();
            currentIndex = (currentIndex + direction + newsData.length) % newsData.length;
            updateLightboxContent();
        }

        function updateLightboxContent() {
            const imgEl = document.getElementById('newsLightboxImage');
            const captionEl = document.getElementById('newsLightboxCaption');
            if (imgEl && newsData[currentIndex]) {
                imgEl.src = newsData[currentIndex].src;
                imgEl.alt = newsData[currentIndex].title;
            }
            if (captionEl && newsData[currentIndex]) {
                captionEl.textContent = newsData[currentIndex].title;
            }
        }

        window.openNewsLightbox = openNewsLightbox;
        window.closeNewsLightbox = closeNewsLightbox;
        window.navigateNewsLightbox = navigateNewsLightbox;

        document.addEventListener('keydown', function (e) {
            const modal = document.getElementById('newsLightboxModal');
            if (modal && modal.classList.contains('active')) {
                if (e.key === 'Escape') closeNewsLightbox();
                if (e.key === 'ArrowLeft') navigateNewsLightbox(-1);
                if (e.key === 'ArrowRight') navigateNewsLightbox(1);
            }
        });
    })();
</script>