<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <!-- Breadcrumbs Section -->
    <?php $this->load->view('about/dynamic_breadcrumbs', [
        'bc_h1' => 'Blog',
        'bc_desc' => '',
        'breadcrumbs' => [
            ['name' => 'Blog']
        ]
    ]);
    ?>

    <section class="blog-section py-5 bg-light">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Our Latest <span class="blog-title-highlight">News & Blog</span>
                </h2>
                <p style="color: #374151;">
                    Stay updated with our latest packing and moving insights.
                </p>
            </div>

            <div class="row g-4">
                <?php
                $schemaData = []; // Initialize the schema data array

                if (empty($blogs)) {
                    $CI = &get_instance();
                    if (!isset($CI->db)) {
                        @$CI->load->database();
                    }
                    if (isset($CI->db) && is_object($CI->db)) {
                        $CI->db->order_by('b_id', 'DESC');
                        $bq = $CI->db->get('blog');
                        if ($bq && is_object($bq) && method_exists($bq, 'num_rows') && $bq->num_rows() > 0) {
                            $blogs = $bq->result_array();
                        }
                    }
                }
                
                if (!empty($blogs)):
                    foreach ($blogs as $b_arr):
                        $b = (object) $b_arr;
                        $custom_slug = !empty($b->slug) ? $b->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $b->title)))), "-");
                        $link = strtolower(site_url('blog/' . $custom_slug));

                        // Image resolution
                        $img = base_url('assets/img/packers_movers.jpg');
                        if (!empty($b->image)) {
                            if (strpos($b->image, 'http://') === 0 || strpos($b->image, 'https://') === 0) {
                                $img = $b->image;
                            } elseif (file_exists(FCPATH . 'assets/uploads/blog/' . $b->image)) {
                                $img = base_url('assets/uploads/blog/' . $b->image);
                            } elseif (file_exists(FCPATH . 'assets/uploads/blog/thumb/' . $b->image)) {
                                $img = base_url('assets/uploads/blog/thumb/' . $b->image);
                            } elseif (file_exists(FCPATH . 'uploads/blogs/' . $b->image)) {
                                $img = base_url('uploads/blogs/' . $b->image);
                            } else {
                                $img = base_url('assets/uploads/blog/' . $b->image);
                            }
                        }

                        // Date parsing
                        $raw_date = !empty($b->timestamp) ? $b->timestamp : (!empty($b->created_at) ? $b->created_at : (!empty($b->date) ? $b->date : 'now'));
                        $time_val = strtotime(str_replace('/', '-', $raw_date));
                        if (!$time_val) $time_val = time();
                        $day = date('d', $time_val);
                        $month = date('M', $time_val);
                        $created_at = date('Y-m-d H:i:s', $time_val);
                        $author_name = !empty($b->author) ? htmlspecialchars($b->author) : 'Admin';

                        $schemaData[] = [
                            "@context" => "https://schema.org",
                            "@type" => "BlogPosting",
                            "headline" => $b->title,
                            "image" => $img,
                            "datePublished" => $created_at,
                            "author" => [
                                "@type" => "Person",
                                "name" => $author_name
                            ],
                            "publisher" => [
                                "@type" => "Organization",
                                "name" => $company3,
                                "logo" => [
                                    "@type" => "ImageObject",
                                    "url" => base_url('assets/img/logo/logo.png')
                                ]
                            ],
                            "description" => substr(strip_tags(!empty($b->description) ? $b->description : @$b->content), 0, 160) . '...'
                        ];
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div
                                class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden blog-card blog-transition-hover">
                                <div class="position-relative">
                                    <a href="<?= $link ?>" aria-label="<?= htmlspecialchars($b->title) ?>">
                                        <img src="<?= $img ?>" class="card-img-top blog-card-img"
                                             alt="<?= htmlspecialchars($b->title) ?>">
                                    </a>
                                    <div
                                        class="position-absolute top-0 end-0 bg-warning text-dark fw-bold px-3 py-2 rounded-bottom-start shadow-sm blog-date-badge">
                                        <?= $day ?> <?= $month ?>
                                    </div>
                                </div>
                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="d-flex align-items-center gap-3 mb-3 small" style="color: #4b5563;">
                                        <span class="d-flex align-items-center gap-1"><i
                                                class="bi bi-person-circle blog-icon-primary"></i> By <?= $author_name ?></span>
                                        <span class="d-flex align-items-center gap-1"><i
                                                class="bi bi-patch-check-fill text-success"></i> Verified</span>
                                    </div>
                                    <h3 class="card-title fw-bold mb-3 fs-5">
                                        <a href="<?= $link ?>"
                                            class="text-dark text-decoration-none blog-title-link"><?= htmlspecialchars($b->title) ?></a>
                                    </h3>
                                    <p class="card-text small mb-4 flex-grow-1" style="color: #374151;">
                                        <?= substr(strip_tags(!empty($b->description) ? $b->description : @$b->content), 0, 110) ?>...
                                    </p>
                                    <div>
                                        <a href="<?= $link ?>" class="btn btn-sm px-4 rounded-pill fw-bold blog-btn-primary" aria-label="Read more: <?= htmlspecialchars($b->title) ?>">
                                            Read More <span class="visually-hidden">about <?= htmlspecialchars($b->title) ?></span><i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="p-5 bg-white rounded-4 shadow-sm text-muted">No blogs published yet. Check back soon!</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</main>


<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>