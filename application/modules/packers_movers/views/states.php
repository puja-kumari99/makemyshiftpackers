<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Locations',
    'bc_desc' => 'Reliable packing and moving services available across major states in India.',
    'breadcrumbs' => [
        ['name' => 'Locations']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "bihar.jpg",
        "category" => "Bihar",
        "link" => "bihar"
    ],
    [
        "image" => "maharashtra.jpg",
        "category" => "Maharashtra",
        "link" => "maharashtra"
    ],
    [
        "image" => "bangalore.jpg",
        "category" => "Bangalore",
        "link" => "bangalore"
    ],

    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
     [
        "image" => "jharkhand.webp",
        "category" => "Jharkhand",
        "link" => "jharkhand"
    ],
];
?>

<!-- Branch Section -->
<section class="portfolio-area py-5 bg-light">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="text-muted">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row g-4">

            <?php foreach ($state as $item): ?>

                <!-- 4 Columns in One Row on Desktop -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">

                    <div class="pm-states-card bg-white rounded-4 overflow-hidden shadow-sm h-100">

                        <!-- Image -->
                        <div class="pm-states-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url() ?>/assets/img/state/<?= $item['image'] ?>"
                                alt="<?= htmlspecialchars($item['category']) ?>" loading="lazy" width="720" height="540">

                            <div class="pm-states-overlay">
                                <a href="<?= site_url($item['link']) ?>" class="btn btn-warning btn-sm rounded-pill px-3">
                                    View
                                </a>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-3 text-start d-flex align-items-center">
                            <a href="<?= site_url($item['link']) ?>" class="text-dark text-decoration-none d-flex align-items-center gap-2">
                                <i class="bi bi-geo-alt-fill text-danger fs-5"></i>
                                <h3 class="fs-6 fw-semibold mb-0">
                                    <?= htmlspecialchars($item['category']) ?>
                                </h3>
                            </a>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>