<?php

$customer_reviews = [

    'purnia' => [
        [
            'name'   => 'Rahul Kumar, Purnia, Bihar',
            'review' => 'The team handled our household items carefully and completed the shifting without unnecessary delays.'
        ],
        [
            'name'   => 'Priya Singh, Purnia, Bihar',
            'review' => 'Packing was done properly, especially for our glass and kitchen items. The team was also easy to coordinate with'
        ],
        [
            'name'   => 'Amit Sharma, Purnia, Bihar',
            'review' => 'We moved our 2BHK to another city and the process was well organised from pickup to delivery.'
        ]
    ],

    // 'gaya' => [
    //     [
    //         'name'   => 'Neha Singh',
    //         'review' => 'The packing team was professional and handled our household items carefully.'
    //     ],
    //     [
    //         'name'   => 'Ravi Kumar',
    //         'review' => 'The shifting process was smooth and the team delivered our belongings safely.'
    //     ],
    //     [
    //         'name'   => 'Ankit Sharma',
    //         'review' => 'Good coordination throughout the move and the delivery was completed on time.'
    //     ]
    // ],

    'bhagalpur' => [
        [
            'name'   => 'Priya Sharma, Bangalore',
            'review' => 'Excellent service! The team was professional, polite and handled all my belongings with great care.'
        ],
        [
            'name'   => ' Rahul Mehta, Mumbai',
            'review' => 'Smooth and hassle-free experience from start to finish. Everything arrived on time and in perfect condition.'
        ],
        [
            'name'   => 'Sneha Iyer, Chennai ',
            'review' => 'Great support and transparent pricing. The team made our home shifting so easy.'
        ]
    ],

    // 'patna' => [
    //     [
    //         'name'   => 'Rohit Kumar',
    //         'review' => 'The packing was done carefully and the team completed our move without unnecessary delays.'
    //     ],
    //     [
    //         'name'   => 'Pooja Singh',
    //         'review' => 'The team handled our furniture and kitchen items properly during the shifting.'
    //     ],
    //     [
    //         'name'   => 'Manish Sharma',
    //         'review' => 'The complete shifting process from pickup to delivery was smooth and organised.'
    //     ]
    // ]

];
$city_key = strtolower(trim($city));

$reviews = $customer_reviews[$city_key] ?? [];

?>

<?php if (!empty($reviews)) { ?>

<section class="customer-reviews py-4">
    <div class="container">

        <div class="text-center mb-4">
            <h3 class="mb-2">What Customers Say</h3>
            <p class="text-muted mb-0">
                Hear from customers about their shifting experience.
            </p>
        </div>

        <div class="row g-4">

            <?php foreach ($reviews as $review) { ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-0 shadow-sm customer-review-card">

                        <div class="card-body p-4">

                            <div class="mb-3">
                                <i class="bi bi-quote fs-2 text-danger"></i>
                            </div>

                            <p class="mb-4 text-muted">
                                "<?= html_escape($review['review']); ?>"
                            </p>

                            <div class="border-top pt-3">

                                <h6 class="mb-1 fw-bold">
                                    <?= html_escape($review['name']); ?>
                                </h6>

                                <small class="text-muted">
                                    <?= html_escape($city); ?>,
                                    <?= html_escape($state); ?>
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>
</section>

<?php } ?>
<style>
    .customer-review-card {
    border-radius: 12px;
    transition: all 0.3s ease;
}

.customer-review-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.10) !important;
}

.customer-review-card .bi-quote {
    opacity: 0.8;
}
</style>

