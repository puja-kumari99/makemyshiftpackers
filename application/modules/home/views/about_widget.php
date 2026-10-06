<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$aboutDescription = !empty($about_desc) ? $about_desc : "At " . htmlspecialchars($company3) . ", we are committed to making your relocation simple, safe, and completely stress-free. With over " . htmlspecialchars($experience) . " years of proven industry experience, our dedicated crew and modern infrastructure deliver seamless moving solutions across India.";
?>

<!-- Clean About Us Section matching reference media_1788851823318.png & media_1788852469192.png -->
<section class="about-clean-section" itemscope itemtype="https://schema.org/AboutPage">
    <div class="container about-clean-container">
        <div class="row align-items-center g-4 g-lg-5 mb-3 mb-md-4">
            
            <!-- Left Side: Video Showcase (Privacy-friendly facade: 0 cookies on page load, instant play on demand) -->
            <div class="col-lg-6 col-12">
                <div class="about-video-wrapper mx-auto">
                    <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm border bg-dark position-relative" id="aboutVideoContainer">
                        <div id="aboutVideoCover" class="position-absolute inset-0 w-100 h-100 d-flex align-items-center justify-content-center" role="button" aria-label="Play About <?= htmlspecialchars($company3) ?> Video">
                            <img src="<?= base_url('assets/img/about_video_thumb.jpg') ?>" 
                                 alt="About <?= htmlspecialchars($company3) ?> Video" 
                                 class="w-100 h-100 object-fit-cover" 
                                 loading="lazy"
                                 onerror="this.src='https://i.ytimg.com/vi/LX-whMeo0XQ/hqdefault.jpg'">
                            <div class="position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center about-play-btn">
                                <i class="bi bi-play-fill text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Content Details -->
            <div class="col-lg-6 col-12">
                <div class="about-clean-content">
                    
                    <!-- Eyebrow Tag -->
                    <div class="about-clean-eyebrow d-flex align-items-center mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-text">ABOUT US</span>
                    </div>

                    <!-- Main Heading -->
                    <p class="about-clean-title mb-2">
                        “We Move Your World, With Care.”
</p>

                    <!-- Stored & Expanded Description Paragraphs -->
                    <div class="about-clean-desc mb-3">
                        <p class="mb-2">
                            <?= $aboutDescription ?>
                        </p>
                        <p class="mb-0">
                            Planning a home shift, office relocation or vehicle move? <strong><?= htmlspecialchars($company3) ?></strong> is a professional moving service provider, having <?= htmlspecialchars($experience) ?> years of experience in the field of packing and moving services. While thinking about shifting, you may have a lot of questions – Is everything going to be packed up nicely? Will my furniture reach safely? Will the team arrive on time? How complicated will the move become? And we understand these concerns.
                        </p>
                        <p>Our approach is simple: Proper planning of the move, handle things properly and maintain communication throughout. Under the directorship of <b>Alok Kumar Chaudhary, <?= htmlspecialchars($company3) ?></b> is committed to offer you reliable services for relocation of individuals and families or businesses in India.</p>
                        <p class="fw-bold">Looking for reliable packers and movers? Begin your move with the right professionals who understand the value of your belongings.</p>
                    </div>

                    <!-- CTA Button (Opens About Page) -->
                    <div class="about-cta-action">
                        <a href="<?= site_url('about-us') ?>" class="btn-about-know-more">
                            <span>Know More</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <!-- Additional About Content Box -->
        <div class="row mt-4 pt-2">
            <div class="col-12">
                <div class="about-info-box p-4 p-md-5">
                    <div class="about-box-accent-bar"></div>
                    <div class="row g-4 align-items-center ps-md-2">
                        <!-- Left: High-Visibility Certificate Card -->
                        <div class="col-lg-4 col-md-5 col-12">
                            <a href="<?= base_url('assets/uploads/Make%20My%20Shift_%20Udyam%20Registration%20Certificate.pdf') ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none d-block h-100" title="Click to view Registration Certificate PDF">
                                <div class="cert-feature-card text-center d-flex flex-column align-items-center justify-content-center h-100">
                                    <div class="cert-badge-tag mb-2">
                                        <i class="bi bi-shield-fill-check text-success"></i> GOVT. VERIFIED
                                    </div>
                                    <div class="cert-feature-icon mb-3 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </div>
                                    <h4 class="cert-feature-title mb-1">Registration Certificate</h4>
                                    <p class="cert-feature-subtitle mb-3">Govt. Registered &amp; Certified Relocation Services</p>
                                    <span class="btn-cert-feature">
                                        <i class="bi bi-file-earmark-pdf-fill me-1"></i>
                                        <span>View Certificate</span>
                                        <i class="bi bi-arrow-up-right-square ms-1 small"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Right: About Make My Shift Text -->
                        <div class="col-lg-8 col-md-7 col-12">
                            <h3 class="about-box-title mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-building-check text-danger"></i>
                                About Make My Shift
                            </h3>
                            <p class="about-box-lead mb-3">
                                A successful relocation needs more than a transport vehicle. It needs planning, experienced handling and people who take responsibility for the job.
                            </p>
                            <p class="about-box-text mb-3">
                                <?= htmlspecialchars($company3) ?> has built its experience over the last <?= htmlspecialchars($experience) ?> years by focusing on the practical side of relocation. Every move has its own requirements. A 2BHK family's requirements are different from an office relocation and then again, vehicle transportation has its own requirements.
                            </p>
                            <p class="about-box-text mb-3">
                                And our job is to understand those requirements and organize the move accordingly.
                            </p>
                            <p class="about-box-highlight mb-0">
                                It starts from packing and continues through loading, transporting and unloading, with us. No unnecessary confusion. No complicated process for the customer. Just a better way to shift.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Full-Width Dark Navy Stats Strip -->
    <div class="about-stats-bar">
        <div class="container">
            <div class="row g-0 align-items-center about-stats-row">
                <!-- Stat 1: 10K+ Happy Customers -->
                <div class="col-lg-3 col-6 about-stat-col">
                    <div class="about-stat-item d-flex align-items-center justify-content-center">
                        <div class="stat-icon me-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">10K+</div>
                            <div class="stat-label">Happy Customers</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 2: 9+ Years of Experience -->
                <div class="col-lg-3 col-6 about-stat-col">
                    <div class="about-stat-item d-flex align-items-center justify-content-center">
                        <div class="stat-icon me-3">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value"><?= htmlspecialchars($experience) ?></div>
                            <div class="stat-label">Years of Experience</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 3: 100+ Cities Across India -->
                <div class="col-lg-3 col-6 about-stat-col">
                    <div class="about-stat-item d-flex align-items-center justify-content-center">
                        <div class="stat-icon me-3">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">100+</div>
                            <div class="stat-label">Cities Across India</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 4: 4.9/5 Customer Rating -->
                <div class="col-lg-3 col-6 about-stat-col">
                    <div class="about-stat-item d-flex align-items-center justify-content-center">
                        <div class="stat-icon me-3">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">4.9/5</div>
                            <div class="stat-label">Customer Rating</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var cover = document.getElementById('aboutVideoCover');
    if (cover) {
        cover.addEventListener('click', function() {
            var container = document.getElementById('aboutVideoContainer');
            if (container) {
                container.innerHTML = '<iframe src="https://www.youtube.com/embed/LX-whMeo0XQ?autoplay=1&rel=0" title="About <?= htmlspecialchars($company3) ?> Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="border-0 w-100 h-100"></iframe>';
            }
        });
    }
});
</script>
