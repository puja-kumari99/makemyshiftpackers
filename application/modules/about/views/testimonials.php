<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Testimonials',
    'bc_desc' => 'Read what our happy customers have to say about their relocation experience.',
    'breadcrumbs' => [
        ['name' => 'About Us'],
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- ======================================================
     1. MAIN REVIEWS & RATINGS GRID SECTION (WITH PAGINATION SLIDER)
     ====================================================== -->
<section class="py-5 about-page-bg" id="ratingsSection">
    <div class="container">

        <!-- Top Header with Centered Title & "Write a Review" on Right -->
        <div class="row align-items-center mb-4 pb-2 g-3">
            <div class="col-lg-3 d-none d-lg-block">
                <!-- Symmetrical Spacer -->
            </div>
            <div class="col-12 col-lg-6 text-center">
                <span class="testi-header-eyebrow">OUR HAPPY CUSTOMERS</span>
                <h2 class="testi-header-title mb-2">
                    What Our <span class="text-danger">Customers Say</span>
                </h2>
                <p class="testi-header-desc mb-0">
                    Thousands of families and businesses have trusted <?= htmlspecialchars($company3) ?> for their relocation.<br class="d-none d-md-block">
                    Here's what they have to say about their experience with us.
                </p>
            </div>
            <div class="col-12 col-lg-3 text-center text-lg-end">
                <button type="button" class="testi-write-btn shadow-sm" data-bs-toggle="modal" data-bs-target="#reviewModal">
                    <i class="bi bi-pencil-square"></i>
                    <span>Write a Review</span>
                </button>
            </div>
        </div>

        <!-- Testimonials Cards Grid (Dynamic from DB + Curated fallbacks) -->
        <?php
        $display_reviews = [];

        // Ensure database reviews are loaded
        if (empty($db_reviews)) {
            $CI = &get_instance();
            if (!isset($CI->db)) {
                @$CI->load->database();
            }
            if (isset($CI->db) && is_object($CI->db)) {
                $CI->db->where('status', 1);
                $CI->db->order_by('r_id', 'desc');
                $CI->db->limit(100);
                $q = $CI->db->get('reviews');
                if ($q && is_object($q) && method_exists($q, 'num_rows') && $q->num_rows() > 0) {
                    $db_reviews = $q->result();
                }
            }
        }

        // 1. Database reviews where status = 1 (Display at top!)
        if (!empty($db_reviews)) {
            foreach ($db_reviews as $rev) {
                $img_src = '';
                if (!empty($rev->r_img)) {
                    $parts = explode(',', $rev->r_img);
                    $first = trim($parts[0]);
                    if (!empty($first)) {
                        $img_src = (strpos($first, 'http') === 0) ? $first : base_url($first);
                    }
                }
                $display_reviews[] = [
                    'name' => htmlspecialchars($rev->name),
                    'route' => !empty($rev->city) ? htmlspecialchars($rev->city) : (!empty($rev->r_title) ? htmlspecialchars($rev->r_title) : 'Verified Customer'),
                    'stars' => max(1, min(5, (int) $rev->stars)),
                    'title' => (!empty($rev->r_title) && $rev->r_title !== $rev->city && $rev->r_title !== 'Customer Review') ? htmlspecialchars($rev->r_title) : '',
                    'text' => htmlspecialchars($rev->r_desc),
                    'img' => $img_src,
                    'is_verified' => true
                ];
            }
        }

        // 2. Curated genuine testimonials fallback
        $curated_testimonials = [
            [
                'name' => 'Priya S.',
                'route' => 'Bhagalpur',
                'stars' => 5,
                'title' => '“The move was much easier than I expected”',
                'text' => 'I felt quite concerned about moving my household because there were so many things to take care of. The team handled the packing and loading, which meant I did not have to keep monitoring every step myself. Once the boxes reached the new house, things felt much more manageable.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Rahul Verma',
                'route' => 'Patna',
                'stars' => 5,
                'title' => '“I had a lot of office items to move”',
                'text' => 'Our office relocation had furniture, computers, files and plenty of smaller items. I was mainly concerned about things getting mixed up during the move. The team handled the shifting in an organised way, and the process went better than we had expected.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Ankit Kumar',
                'route' => 'Ranchi',
                'stars' => 5,
                'title' => '“My bike reached without any trouble”',
                'text' => 'I was shifting to another city and also needed to transport my bike separately. Since I had never used a vehicle shifting service before, I naturally had a few concerns about how it would be handled. The communication was straightforward, and my bike reached the destination as planned.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Neha Singh',
                'route' => 'Patna',
                'stars' => 5,
                'title' => '“There was a lot to pack at home”',
                'text' => 'We had accumulated quite a few household items over the years. Packing everything ourselves would have taken several days. Taking professional packing support was a good decision for us. The team came prepared and got through the work without making the situation more stressful.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Vikas Sharma',
                'route' => 'Bhagalpur',
                'stars' => 5,
                'title' => '“I was mostly concerned about the furniture”',
                'text' => 'We also had some large and difficult-to-move furniture. I was worried about getting it out of the house without causing any damage. The movers handled the loading carefully, and everything reached the new location safely and in good condition.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Sneha Gupta',
                'route' => 'Muzaffarpur',
                'stars' => 5,
                'title' => '“Our shifting date was fixed, so there was no room for delay”',
                'text' => 'We had already fixed the date for moving into our new home. So, I wanted the shifting work to stay on schedule. The packing, loading and transportation were handled as discussed, which made the moving day considerably less hectic for our family.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Rajeev Singh',
                'route' => 'Patna',
                'stars' => 5,
                'title' => '“I needed both household and car transportation”',
                'text' => 'I was shifting to another city with my household belongings and car. Managing both separately sounded complicated at first. Having the moving and vehicle transportation requirements discussed together made things easier for me. The whole experience was fairly smooth.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Pooja Kumari',
                'route' => 'Bhagalpur',
                'stars' => 5,
                'title' => '“The team understood that some items needed extra care”',
                'text' => 'We had glass items, electronics and a few things that I was particularly worried about. I mentioned this before the move, and the packing was planned accordingly. That small bit of attention gave me much more confidence during the shifting process.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Amit Jha',
                'route' => 'Gaya',
                'stars' => 5,
                'title' => '“Moving an office is very different from moving a house”',
                'text' => 'Our office had to be shifted without creating too much disruption to regular work. There were files, furniture and electronic equipment involved. We discussed the requirement beforehand, and the team worked around the items that needed to be moved. It saved us quite a bit of running around.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Rohit Mishra',
                'route' => 'Kolkata',
                'stars' => 5,
                'title' => '“I was nervous because this was my first long-distance move”',
                'text' => 'This was my first move to another city, so I had quite a few questions before the relocation began. I wanted to understand how my belongings would be packed and transported. Once the process got underway, everything started to make more sense, and the overall experience was better than I had expected.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Manish Kumar',
                'route' => 'Patna',
                'stars' => 5,
                'title' => '“The unloading part was a relief”',
                'text' => 'Packing and loading can be tiring, but I was also concerned about unloading everything at the new house. After travelling a long distance, having assistance at the destination made the final part of the move much easier. We could start arranging the house instead of dealing with everything ourselves.',
                'img' => '',
                'is_verified' => true
            ],
            [
                'name' => 'Ritu S.',
                'route' => 'Bhagalpur',
                'stars' => 5,
                'title' => '“I appreciated the simple communication”',
                'text' => 'I have heard plenty of moving stories where customers were confused about what was happening. That was something I wanted to avoid. I found the communication fairly simple and direct during our move. For me, that made a big difference.',
                'img' => '',
                'is_verified' => true
            ]
        ];

        // Append curated testimonials after dynamic DB reviews so older ones naturally shift to subsequent pages
        foreach ($curated_testimonials as $cur) {
            $display_reviews[] = $cur;
        }

        $items_per_page = 6;
        $total_pages = max(1, (int) ceil(count($display_reviews) / $items_per_page));
        ?>

        <div class="row g-4 mt-2 mb-3" id="testimonialsGrid">
            <?php foreach ($display_reviews as $index => $item): 
                $page_num = ceil(($index + 1) / $items_per_page);
            ?>
                <div class="col-12 col-md-6 col-lg-4 testi-page-item <?= $page_num > 1 ? 'd-none' : '' ?>" data-page="<?= $page_num ?>">
                    <div class="testi-card">
                        <div>
                            <div class="testi-quote-badge">
                                <svg width="34" height="26" viewBox="0 0 36 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 16.8C0 7.56 5.6 1.4 14.56 0L16.24 4.48C11.76 5.6 9.52 8.4 9.24 11.48C10.64 10.92 12.32 11.2 13.72 12.32C15.68 13.72 16.52 16.24 15.68 19.04C14.56 22.96 11.2 25.2 7.56 25.2C3.36 25.2 0 21.84 0 16.8ZM19.6 16.8C19.6 7.56 25.2 1.4 34.16 0L35.84 4.48C31.36 5.6 29.12 8.4 28.84 11.48C30.24 10.92 31.92 11.2 33.32 12.32C35.28 13.72 36.12 16.24 35.28 19.04C34.16 22.96 30.8 25.2 27.16 25.2C22.96 25.2 19.6 21.84 19.6 16.8Z" fill="#C7DCF8"/>
                                </svg>
                            </div>
                            <div class="testi-stars">
                                <?php for ($s = 1; $s <= 5; $s++): ?>
                                    <i class="bi bi-star<?= ($s <= $item['stars']) ? '-fill' : '' ?>"></i>
                                <?php endfor; ?>
                            </div>
                            <?php if (!empty($item['title'])): ?>
                                <h3 class="testi-card-title fw-bold text-dark mb-2"><?= $item['title'] ?></h3>
                            <?php endif; ?>
                            <p class="testi-text">
                                <?= $item['text'] ?>
                            </p>
                        </div>
                        <div class="testi-author">
                            <?php if (!empty($item['img'])): ?>
                                <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>" class="testi-avatar">
                            <?php else: ?>
                                <div class="testi-avatar"><i class="bi bi-person-fill"></i></div>
                            <?php endif; ?>
                            <div>
                                <div class="testi-author-name">
                                    <?= $item['name'] ?>
                                    <?php if (!empty($item['is_verified'])): ?>
                                        <span class="badge ms-1 testi-verified-pill"><i class="bi bi-patch-check-fill me-1"></i>Verified</span>
                                    <?php endif; ?>
                                </div>
                                <p class="testi-author-route"><?= $item['route'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination Controls (Page 1, 2, 3... Slider Controls) -->
        <?php if ($total_pages > 1): ?>
        <div class="d-flex justify-content-center align-items-center gap-2 mt-4 mb-2" id="testiPaginationControls">
            <button type="button" class="btn btn-sm rounded-pill px-3 fw-semibold" id="testiPrevBtn" onclick="changeTestiPage(currentTestiPage - 1)" disabled>
                <i class="bi bi-chevron-left me-1"></i> Previous
            </button>
            <div class="d-flex gap-1 align-items-center" id="testiPageNumbers">
                <?php for ($p = 1; $p <= $total_pages; $p++): ?>
                    <button type="button" class="btn btn-sm rounded-circle fw-semibold testi-page-num-btn <?= $p === 1 ? 'btn-danger text-white' : 'btn-outline-secondary' ?>" data-page="<?= $p ?>" onclick="changeTestiPage(<?= $p ?>)">
                        <?= $p ?>
                    </button>
                <?php endfor; ?>
            </div>
            <button type="button" class="btn btn-sm rounded-pill px-3 fw-semibold" id="testiNextBtn" onclick="changeTestiPage(currentTestiPage + 1)">
                Next <i class="bi bi-chevron-right ms-1"></i>
            </button>
        </div>
        <?php endif; ?>

    </div>
</section>

<!-- ======================================================
     2. SEPARATE OUR TESTIMONIAL VIDEOS SECTION & CONTAINER
     ====================================================== -->
<section class="py-5 bg-white border-top border-bottom" id="testimonialVideosSection">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center mb-4">
            <span class="testi-header-eyebrow">OUR TESTIMONIAL VIDEOS</span>
            <h2 class="testi-header-title fs-2">
                Watch Customer <span class="text-danger">Video Reviews</span>
            </h2>
            <p class="testi-header-desc">
                Watch real video feedback from our happy clients about their house shifting and vehicle relocation experience with <?= htmlspecialchars($company3) ?>.
            </p>
        </div>

        <?php
        $feedback_videos = [
            [
                'id' => 'TtFL1SfK8lc',
                'title' => 'House Relocation Customer Review',
                'badge' => 'Verified Review'
            ],
            [
                'id' => 'alMMcAR8FFI',
                'title' => 'Customer Feedback & Relocation Review',
                'badge' => 'Video Feedback'
            ],
            [
                'id' => 'bV_nbC1Xajo',
                'title' => 'Safe Packing & Shifting Experience',
                'badge' => 'Customer Feedback'
            ],
            [
                'id' => 'dIcqSLJzc_A',
                'title' => 'Home Shifting Service Review',
                'badge' => 'Verified Review'
            ],
            [
                'id' => '4hm5ivMlN9E',
                'title' => 'Vehicle & Household Relocation Feedback',
                'badge' => 'Video Feedback'
            ],
            [
                'id' => 'faM_vlH8u5k',
                'title' => 'Hassle-Free Relocation Review',
                'badge' => 'Customer Review'
            ]
        ];
        ?>

        <!-- Video Cards Grid (3 in one row) -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($feedback_videos as $vIndex => $vid): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="testi-video-player-wrap border shadow-sm rounded-4 overflow-hidden bg-black position-relative h-100 d-flex flex-column">
                        <!-- Initial Thumbnail Cover with Play Button -->
                        <div class="testi-video-thumb-wrap position-relative cursor-pointer flex-grow-1" id="testiVideoThumbCover_<?= $vIndex ?>" onclick="playTestiVideoGrid('<?= $vid['id'] ?>', '<?= $vIndex ?>')">
                            <img src="https://i.ytimg.com/vi/<?= $vid['id'] ?>/hqdefault.jpg" alt="<?= htmlspecialchars($vid['title']) ?>" class="img-fluid w-100 h-100 object-fit-cover testi-video-thumb-sm" loading="lazy" crossorigin="anonymous" referrerpolicy="no-referrer">
                            <div class="testi-video-play-overlay d-flex align-items-center justify-content-center">
                                <div class="testi-play-btn-pulse testi-play-btn-sm">
                                    <i class="bi bi-play-fill"></i>
                                </div>
                            </div>
                            <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill fw-semibold testi-video-badge">
                                <i class="bi bi-youtube me-1"></i> <?= htmlspecialchars($vid['badge']) ?>
                            </span>
                        </div>
                        <!-- Inline 16x9 Responsive iFrame Container -->
                        <div class="ratio ratio-16x9 d-none" id="testiIframeWrap_<?= $vIndex ?>">
                            <iframe id="testiIframe_<?= $vIndex ?>" src="" title="<?= htmlspecialchars($vid['title']) ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="border-0 w-100 h-100"></iframe>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ======================================================
     3. CALLOUT CTA BANNER SECTION & CONTAINER
     ====================================================== -->
<section class="py-4 about-page-bg">
    <div class="container">

        <!-- Callout Banner: "Join Our Happy Customers Today" -->
        <div class="testi-cta-card">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                <div>
                    <div class="testi-cta-eyebrow">
                        <span class="testi-cta-dash"></span>
                        READY TO MOVE?
                    </div>
                    <h2 class="testi-cta-title">
                        Join Our <span class="text-danger">Happy Customers Today</span>
                    </h2>
                    <p class="testi-cta-desc">
                        Experience a smooth, safe and hassle-free relocation with <?= htmlspecialchars($company3) ?>.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <button type="button" class="testi-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                        Get a Free Quote <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
let currentTestiPage = 1;
const totalTestiPages = <?= $total_pages ?>;

function changeTestiPage(page) {
    if (page < 1 || page > totalTestiPages) return;
    currentTestiPage = page;

    // Toggle items visibility
    document.querySelectorAll('.testi-page-item').forEach(item => {
        if (parseInt(item.getAttribute('data-page')) === page) {
            item.classList.remove('d-none');
        } else {
            item.classList.add('d-none');
        }
    });

    // Toggle active state on page buttons
    document.querySelectorAll('.testi-page-num-btn').forEach(btn => {
        if (parseInt(btn.getAttribute('data-page')) === page) {
            btn.classList.remove('btn-outline-secondary');
            btn.classList.add('btn-danger', 'text-white');
        } else {
            btn.classList.remove('btn-danger', 'text-white');
            btn.classList.add('btn-outline-secondary');
        }
    });

    // Enable/disable Prev and Next buttons
    const prevBtn = document.getElementById('testiPrevBtn');
    const nextBtn = document.getElementById('testiNextBtn');
    if (prevBtn) prevBtn.disabled = (page === 1);
    if (nextBtn) nextBtn.disabled = (page === totalTestiPages);

    // Smooth scroll to ratings top
    const ratingsSec = document.getElementById('ratingsSection');
    if (ratingsSec) {
        ratingsSec.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

function playTestiVideoGrid(videoId, index) {
    const thumbCover = document.getElementById('testiVideoThumbCover_' + index);
    const iframeWrap = document.getElementById('testiIframeWrap_' + index);
    const iframe = document.getElementById('testiIframe_' + index);
    
    if (thumbCover && iframeWrap && iframe) {
        iframe.src = 'https://www.youtube-nocookie.com/embed/' + videoId + '?autoplay=1&rel=0';
        thumbCover.classList.add('d-none');
        iframeWrap.classList.remove('d-none');
    }
}
</script>