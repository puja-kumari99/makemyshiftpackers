<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="testimonials-clean-section" id="testimonials">
    <div class="container">
        <!-- Section Header Row -->
        <div class="row align-items-end justify-content-between g-3 mb-2">
            <div class="col-md-8 col-sm-12">
                <div class="reviews-eyebrow">
                    <span class="eyebrow-dash"></span>
                    <span class="eyebrow-text">TESTIMONIALS</span>
                </div>
                <h2 class="reviews-title mb-0">
                    What Our <span class="text-brand-red">Customers Say</span>
                    <span class="reviews-heading-comment-icon" aria-hidden="true">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="#E52B20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-12 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                        </svg>
                    </span>
                </h2>
            </div>
            <div class="col-md-4 col-sm-12 text-md-end">
                <p class="reviews-subtitle mb-0">Real stories. Real trust.</p>
            </div>
        </div>

        <!-- 1. Text Testimonials Slider Wrapper -->
        <div class="testimonials-slider-wrap" id="reviewSliderWrap">
            <!-- Slider Viewport -->
            <div class="testimonials-slider-viewport">
                <div class="testimonials-slider-track" id="testimonialsTrack">

                    <?php
                    // Dynamically load approved reviews from database
                    $home_db_revs = [];
                    $CI = &get_instance();
                    if (!isset($CI->db)) {
                        @$CI->load->database();
                    }
                    if (isset($CI->db) && is_object($CI->db)) {
                        $CI->db->where('status', 1);
                        $CI->db->order_by('r_id', 'desc');
                        $CI->db->limit(10);
                        $hq = $CI->db->get('reviews');
                        if ($hq && is_object($hq) && method_exists($hq, 'num_rows') && $hq->num_rows() > 0) {
                            $home_db_revs = $hq->result();
                        }
                    }

                    if (!empty($home_db_revs)):
                        foreach ($home_db_revs as $hrev):
                            $hstars = max(1, min(5, (int) $hrev->stars));
                            $hcity = !empty($hrev->city) ? htmlspecialchars($hrev->city) : (!empty($hrev->r_title) ? htmlspecialchars($hrev->r_title) : 'Verified Customer');
                    ?>
                    <!-- Dynamic DB Card: <?= htmlspecialchars($hrev->name) ?> -->
                    <div class="testimonial-slide-col">
                        <div class="testimonial-card-item">
                            <div class="testimonial-avatar-badge">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="#E52B20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12c2.7 0 4.8-2.15 4.8-4.8S14.7 2.4 12 2.4 7.2 4.55 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testimonial-body">
                                <p class="testimonial-quote-text">
                                    &ldquo;<?= htmlspecialchars($hrev->r_desc) ?>&rdquo;
                                </p>
                                <div class="testimonial-footer-row">
                                    <div class="testimonial-author-info">
                                        <div class="testimonial-author-name"><?= htmlspecialchars($hrev->name) ?></div>
                                        <div class="testimonial-author-city"><?= $hcity ?></div>
                                    </div>
                                    <div class="testimonial-rating-stars" role="img" aria-label="<?= $hstars ?> stars rating">
                                        <?php for ($hs = 1; $hs <= 5; $hs++): ?>
                                            <i class="bi bi-star<?= ($hs <= $hstars) ? '-fill' : '' ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                    endif; 
                    ?>

                    <!-- Card 1: Priya Sharma -->
                    <div class="testimonial-slide-col">
                        <div class="testimonial-card-item">
                            <div class="testimonial-avatar-badge">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="#E52B20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12c2.7 0 4.8-2.15 4.8-4.8S14.7 2.4 12 2.4 7.2 4.55 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testimonial-body">
                                <p class="testimonial-quote-text">
                                    &ldquo;Excellent service! The team was professional, polite and handled all my belongings with great care. Highly recommended!&rdquo;
                                </p>
                                <div class="testimonial-footer-row">
                                    <div class="testimonial-author-info">
                                        <div class="testimonial-author-name">Priya Sharma</div>
                                        <div class="testimonial-author-city">Bangalore</div>
                                    </div>
                                    <div class="testimonial-rating-stars" role="img" aria-label="5 stars rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Rahul Mehta -->
                    <div class="testimonial-slide-col">
                        <div class="testimonial-card-item">
                            <div class="testimonial-avatar-badge">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="#E52B20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12c2.7 0 4.8-2.15 4.8-4.8S14.7 2.4 12 2.4 7.2 4.55 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testimonial-body">
                                <p class="testimonial-quote-text">
                                    &ldquo;Smooth and hassle-free experience from start to finish. Everything arrived on time and in perfect condition.&rdquo;
                                </p>
                                <div class="testimonial-footer-row">
                                    <div class="testimonial-author-info">
                                        <div class="testimonial-author-name">Rahul Mehta</div>
                                        <div class="testimonial-author-city">Mumbai</div>
                                    </div>
                                    <div class="testimonial-rating-stars" role="img" aria-label="5 stars rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Sneha Iyer -->
                    <div class="testimonial-slide-col">
                        <div class="testimonial-card-item">
                            <div class="testimonial-avatar-badge">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="#E52B20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12c2.7 0 4.8-2.15 4.8-4.8S14.7 2.4 12 2.4 7.2 4.55 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testimonial-body">
                                <p class="testimonial-quote-text">
                                    &ldquo;Great support and transparent pricing. The team made our home shifting so easy. Thank you Make My Shift!&rdquo;
                                </p>
                                <div class="testimonial-footer-row">
                                    <div class="testimonial-author-info">
                                        <div class="testimonial-author-name">Sneha Iyer</div>
                                        <div class="testimonial-author-city">Chennai</div>
                                    </div>
                                    <div class="testimonial-rating-stars" role="img" aria-label="5 stars rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Amit Verma -->
                    <div class="testimonial-slide-col">
                        <div class="testimonial-card-item">
                            <div class="testimonial-avatar-badge">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="#E52B20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12c2.7 0 4.8-2.15 4.8-4.8S14.7 2.4 12 2.4 7.2 4.55 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testimonial-body">
                                <p class="testimonial-quote-text">
                                    &ldquo;Best packing and moving experience! Prompt communication, safe vehicle transit and goods carefully handled for safe and secure delivery. Top-notch service!&rdquo;
                                </p>
                                <div class="testimonial-footer-row">
                                    <div class="testimonial-author-info">
                                        <div class="testimonial-author-name">Amit Verma</div>
                                        <div class="testimonial-author-city">Delhi</div>
                                    </div>
                                    <div class="testimonial-rating-stars" role="img" aria-label="5 stars rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Vikram Singh -->
                    <div class="testimonial-slide-col">
                        <div class="testimonial-card-item">
                            <div class="testimonial-avatar-badge">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="#E52B20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12c2.7 0 4.8-2.15 4.8-4.8S14.7 2.4 12 2.4 7.2 4.55 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testimonial-body">
                                <p class="testimonial-quote-text">
                                    &ldquo;Shifted our 3BHK household goods with zero hassle. Excellent packing and very cooperative staff!&rdquo;
                                </p>
                                <div class="testimonial-footer-row">
                                    <div class="testimonial-author-info">
                                        <div class="testimonial-author-name">Vikram Singh</div>
                                        <div class="testimonial-author-city">Jaipur</div>
                                    </div>
                                    <div class="testimonial-rating-stars" role="img" aria-label="5 stars rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: Anjali Sharma -->
                    <div class="testimonial-slide-col">
                        <div class="testimonial-card-item">
                            <div class="testimonial-avatar-badge">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="#E52B20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12c2.7 0 4.8-2.15 4.8-4.8S14.7 2.4 12 2.4 7.2 4.55 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testimonial-body">
                                <p class="testimonial-quote-text">
                                    &ldquo;Very professional team! Car transportation and household relocation were both done smoothly.&rdquo;
                                </p>
                                <div class="testimonial-footer-row">
                                    <div class="testimonial-author-info">
                                        <div class="testimonial-author-name">Anjali Sharma</div>
                                        <div class="testimonial-author-city">Pune</div>
                                    </div>
                                    <div class="testimonial-rating-stars" role="img" aria-label="5 stars rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Dots Indicator -->
            <div class="testimonials-dots-wrap" id="testimonialsDotsWrap"></div>
        </div>
    </div>
</section>

<!-- 2. Separate Video Testimonials Section (Outside main background) -->
<section class="video-testimonials-clean-section" id="videoTestimonials">
    <div class="container">
        <!-- Video Testimonials Row Slider Header -->
        <div class="row align-items-end justify-content-between g-3 mb-3">
            <div class="col-md-8 col-sm-12">
                <div class="reviews-eyebrow">
                    <span class="eyebrow-dash"></span>
                    <span class="eyebrow-text video-eyebrow-text">VIDEO REVIEWS</span>
                </div>
                <h2 class="reviews-title video-reviews-title mb-0">
                    Customer <span class="text-brand-red">Video Testimonials</span>
                </h2>
            </div>
            <div class="col-md-4 col-sm-12 text-md-end">
                <p class="reviews-subtitle video-reviews-subtitle mb-0">Watch real feedback &amp; experiences</p>
            </div>
        </div>

        <!-- Video Testimonials Slider Wrapper -->
        <div class="video-testimonials-slider-wrap" id="videoSliderWrap">
            <!-- Slider Viewport -->
            <div class="testimonials-slider-viewport">
                <div class="video-slider-track" id="videoTrack">

                    <!-- Video 1 -->
                    <div class="video-slide-col">
                        <div class="testi-video-player-wrap border shadow-sm rounded-4 overflow-hidden bg-black position-relative h-100 d-flex flex-column">
                            <div class="testi-video-thumb-wrap position-relative cursor-pointer flex-grow-1" id="homeVideoThumbCover_0" onclick="playHomeTestiVideo('TtFL1SfK8lc', 0)">
                                <img src="https://i.ytimg.com/vi/TtFL1SfK8lc/hqdefault.jpg" alt="House Relocation Customer Review" class="img-fluid w-100 h-100 object-fit-cover video-slide-thumb" loading="lazy" crossorigin="anonymous" referrerpolicy="no-referrer">
                                <div class="testi-video-play-overlay d-flex align-items-center justify-content-center position-absolute inset-0">
                                    <div class="testi-play-btn-pulse testi-play-btn-sm">
                                        <i class="bi bi-play-fill"></i>
                                    </div>
                                </div>
                                <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill fw-semibold video-slide-badge">
                                    <i class="bi bi-youtube me-1"></i> Verified Review
                                </span>
                            </div>
                            <div class="ratio ratio-16x9 d-none" id="homeVideoIframeWrap_0">
                                <iframe id="homeVideoIframe_0" src="" title="House Relocation Customer Review" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="border-0 w-100 h-100"></iframe>
                            </div>
                            <div class="p-2 px-3 bg-dark text-white d-flex justify-content-between align-items-center">
                                <span class="fw-bold small">House Relocation Review</span>
                                <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="video-slide-col">
                        <div class="testi-video-player-wrap border shadow-sm rounded-4 overflow-hidden bg-black position-relative h-100 d-flex flex-column">
                            <div class="testi-video-thumb-wrap position-relative cursor-pointer flex-grow-1" id="homeVideoThumbCover_1" onclick="playHomeTestiVideo('alMMcAR8FFI', 1)">
                                <img src="https://i.ytimg.com/vi/alMMcAR8FFI/hqdefault.jpg" alt="Customer Feedback & Relocation Review" class="img-fluid w-100 h-100 object-fit-cover video-slide-thumb" loading="lazy" crossorigin="anonymous" referrerpolicy="no-referrer">
                                <div class="testi-video-play-overlay d-flex align-items-center justify-content-center position-absolute inset-0">
                                    <div class="testi-play-btn-pulse testi-play-btn-sm">
                                        <i class="bi bi-play-fill"></i>
                                    </div>
                                </div>
                                <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill fw-semibold video-slide-badge">
                                    <i class="bi bi-youtube me-1"></i> Video Feedback
                                </span>
                            </div>
                            <div class="ratio ratio-16x9 d-none" id="homeVideoIframeWrap_1">
                                <iframe id="homeVideoIframe_1" src="" title="Customer Feedback & Relocation Review" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="border-0 w-100 h-100"></iframe>
                            </div>
                            <div class="p-2 px-3 bg-dark text-white d-flex justify-content-between align-items-center">
                                <span class="fw-bold small">Customer Video Feedback</span>
                                <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Video 3 -->
                    <div class="video-slide-col">
                        <div class="testi-video-player-wrap border shadow-sm rounded-4 overflow-hidden bg-black position-relative h-100 d-flex flex-column">
                            <div class="testi-video-thumb-wrap position-relative cursor-pointer flex-grow-1" id="homeVideoThumbCover_2" onclick="playHomeTestiVideo('bV_nbC1Xajo', 2)">
                                <img src="https://i.ytimg.com/vi/bV_nbC1Xajo/hqdefault.jpg" alt="Safe Packing & Shifting Experience" class="img-fluid w-100 h-100 object-fit-cover video-slide-thumb" loading="lazy" crossorigin="anonymous" referrerpolicy="no-referrer">
                                <div class="testi-video-play-overlay d-flex align-items-center justify-content-center position-absolute inset-0">
                                    <div class="testi-play-btn-pulse testi-play-btn-sm">
                                        <i class="bi bi-play-fill"></i>
                                    </div>
                                </div>
                                <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill fw-semibold video-slide-badge">
                                    <i class="bi bi-youtube me-1"></i> Customer Feedback
                                </span>
                            </div>
                            <div class="ratio ratio-16x9 d-none" id="homeVideoIframeWrap_2">
                                <iframe id="homeVideoIframe_2" src="" title="Safe Packing & Shifting Experience" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="border-0 w-100 h-100"></iframe>
                            </div>
                            <div class="p-2 px-3 bg-dark text-white d-flex justify-content-between align-items-center">
                                <span class="fw-bold small">Safe Packing &amp; Shifting</span>
                                <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Video 4 -->
                    <div class="video-slide-col">
                        <div class="testi-video-player-wrap border shadow-sm rounded-4 overflow-hidden bg-black position-relative h-100 d-flex flex-column">
                            <div class="testi-video-thumb-wrap position-relative cursor-pointer flex-grow-1" id="homeVideoThumbCover_3" onclick="playHomeTestiVideo('dIcqSLJzc_A', 3)">
                                <img src="https://i.ytimg.com/vi/dIcqSLJzc_A/hqdefault.jpg" alt="Home Shifting Service Review" class="img-fluid w-100 h-100 object-fit-cover video-slide-thumb" loading="lazy" crossorigin="anonymous" referrerpolicy="no-referrer">
                                <div class="testi-video-play-overlay d-flex align-items-center justify-content-center position-absolute inset-0">
                                    <div class="testi-play-btn-pulse testi-play-btn-sm">
                                        <i class="bi bi-play-fill"></i>
                                    </div>
                                </div>
                                <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill fw-semibold video-slide-badge">
                                    <i class="bi bi-youtube me-1"></i> Verified Review
                                </span>
                            </div>
                            <div class="ratio ratio-16x9 d-none" id="homeVideoIframeWrap_3">
                                <iframe id="homeVideoIframe_3" src="" title="Home Shifting Service Review" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="border-0 w-100 h-100"></iframe>
                            </div>
                            <div class="p-2 px-3 bg-dark text-white d-flex justify-content-between align-items-center">
                                <span class="fw-bold small">Home Shifting Review</span>
                                <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Video 5 -->
                    <div class="video-slide-col">
                        <div class="testi-video-player-wrap border shadow-sm rounded-4 overflow-hidden bg-black position-relative h-100 d-flex flex-column">
                            <div class="testi-video-thumb-wrap position-relative cursor-pointer flex-grow-1" id="homeVideoThumbCover_4" onclick="playHomeTestiVideo('4hm5ivMlN9E', 4)">
                                <img src="https://i.ytimg.com/vi/4hm5ivMlN9E/hqdefault.jpg" alt="Vehicle & Household Relocation Feedback" class="img-fluid w-100 h-100 object-fit-cover video-slide-thumb" loading="lazy" crossorigin="anonymous" referrerpolicy="no-referrer">
                                <div class="testi-video-play-overlay d-flex align-items-center justify-content-center position-absolute inset-0">
                                    <div class="testi-play-btn-pulse testi-play-btn-sm">
                                        <i class="bi bi-play-fill"></i>
                                    </div>
                                </div>
                                <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill fw-semibold video-slide-badge">
                                    <i class="bi bi-youtube me-1"></i> Video Feedback
                                </span>
                            </div>
                            <div class="ratio ratio-16x9 d-none" id="homeVideoIframeWrap_4">
                                <iframe id="homeVideoIframe_4" src="" title="Vehicle & Household Relocation Feedback" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="border-0 w-100 h-100"></iframe>
                            </div>
                            <div class="p-2 px-3 bg-dark text-white d-flex justify-content-between align-items-center">
                                <span class="fw-bold small">Vehicle Relocation Feedback</span>
                                <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Dots Indicator -->
            <div class="testimonials-dots-wrap" id="videoDotsWrap"></div>
        </div>

    </div>
</section>


