<?php

$city_moving_data = array(

    'purnia' => array(

        'city_name' => 'Purnia',

        'moving_experience' => array(
            array(
                'title' => 'Line Bazar',
                'description' => "Line Bazar is Purnia's medical hub, with hospitals and clinics drawing patients from across the surrounding districts."
            ),
            array(
                'title' => 'Gulabbagh',
                'description' => 'A major mandi and transport junction on NH 27 and NH 231. Vehicle access is planned around market hours.'
            ),
            array(
                'title' => 'Rambagh',
                'description' => 'A residential locality close to Line Bazar, with narrower internal roads.'
            ),
            array(
                'title' => 'Khuskibagh',
                'description' => 'Near Purnea Junction, so moves here often connect straight to onward rail routes.'
            ),
            array(
                'title' => 'Rani Nagar and Shivaji Colony',
                'description' => 'Settled residential pockets where floor and lift access are checked before the quote.'
            ),
            array(
                'title' => 'Kasba',
                'description' => 'A separate satellite town in the Purnia urban area, handled as its own stop rather than folded into city moves.'
            )
        ),

        'short_distance_routes' => array(
            array(
                'title' => 'Within Purnia',
                'routes' => 'Line Bazar → Gulabbagh • Gulabbagh → Kasba',
                'description' => 'A move between Line Bazar and Gulabbagh, or out toward Kasba, is planned around the goods, floor access and road width more than the distance itself.'
            ),
            array(
                'title' => 'Nearby Bihar Towns',
                'routes' => 'Katihar • Araria • Kishanganj • Saharsa • Khagaria',
                'description' => 'Katihar, Araria, Kishanganj, Saharsa and Khagaria are nearby routes from Purnia, each handled with the same packing and loading process.'
            )
        ),

        'long_distance_routes' => array(
            array(
                'title' => 'East and Northeast Routes',
                'places' => array(
                    'Kolkata',
                    'Siliguri',
                    'Northeast'
                )
            ),
            array(
                'title' => 'North and Central Routes',
                'places' => array(
                    'Delhi',
                    'Patna',
                    'Lucknow'
                )
            ),
            array(
                'title' => 'South and West India',
                'places' => array(
                    'Mumbai',
                    'Pune',
                    'Bangalore',
                    'Hyderabad'
                )
            )
        )
    ),

    /*
    |--------------------------------------------------------------------------
    | Add another city here
    |--------------------------------------------------------------------------
    */

    'bhagalpur' => array(

        'city_name' => 'Bhagalpur',

        'moving_experience' => array(
            array(
                'title' => 'Adampur and Khalifabagh',
                'description' => 'Lanes are tight and traffic is heavy, so we start early and use a smaller vehicle for the first leg.'
            ),
            array(
                'title' => 'Barari and Mojahidpur',
                'description' => 'Wider roads make loading simple, so most moves here finish in a few hours.'
            ),
            array(
                'title' => 'Tilkamanjhi',
                'description' => 'Many families here are linked to the university. We plan moves around semester dates and busy periods.'
            )
        ),

        'short_distance_routes' => array(
            array(
                'title' => 'Within the city',
                'routes' => 'Adampur to Barari • Khalifabagh to Tilkamanjhi • Nathnagar to Mojahidpur',
            
            ),
            array(
                'title' => 'Nearby cities',
                'routes' => 'Sultanganj • Naugachhia • Banka •  Munger •  Kahalgaon
',
               
            )
        ),

        'long_distance_routes' => array(
            array(
                'title' => 'North India',
                'places' => array(
                    'Delhi',
                    'Lucknow',
                    'Jaipur'
                )
            ),
            array(
                'title' => 'West India',
                'places' => array(
                    'Mumbai',
                    'Pune',
                    'Ahemdabad'
                )
            ),
              array(
                'title' => 'South India',
                'places' => array(
                    'Bangalore',
                    'Chennai',
                    'Hyderabad'
                )
            ),
           
           
        )
    )

);




$current_city = strtolower(trim($city));

if (isset($city_moving_data[$current_city])) {

    $city_data = $city_moving_data[$current_city];

    $moving_experience = $city_data['moving_experience'];
    $short_distance_routes = $city_data['short_distance_routes'];
    $long_distance_routes = $city_data['long_distance_routes'];

} else {

    $moving_experience = array();
    $short_distance_routes = array();
    $long_distance_routes = array();

}

?>


<?php if (!empty($moving_experience)) { ?>

<!-- Local Moving Experience -->
<section class="py-4">
    <div class="container">

        <div class="text-center mb-4">
            <h3>Local Moving Experience in <?php echo htmlspecialchars($city_data['city_name']); ?></h3>
        </div>

        <div class="row g-4">

            <?php foreach ($moving_experience as $area) { ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-0 shadow-sm moving-area-card">

                        <div class="card-body p-4">

                            <div class="area-icon mb-3">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>

                            <h4 class="h5 fw-bold mb-3">
                                <?php echo htmlspecialchars($area['title']); ?>
                            </h4>

                            <p class="text-muted mb-0">
                                <?php echo htmlspecialchars($area['description']); ?>
                            </p>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>
</section>

<?php } ?>


<?php if (!empty($short_distance_routes)) { ?>

<!-- Short Distance Routes -->
<section class="py-4">
    <div class="container">

        <div class="text-center mb-4">
            <h3>Short-Distance Routes From <?php echo htmlspecialchars($city_data['city_name']); ?></h3>
        </div>

        <div class="row g-4">

            <?php foreach ($short_distance_routes as $route) { ?>

                <div class="col-lg-6">

                    <div class="card h-100 border-0 shadow-sm route-card">

                        <div class="card-body p-4">

                            <div class="d-flex align-items-center mb-3">

                                <div class="route-icon me-3">
                                    <i class="bi bi-sign-turn-right-fill"></i>
                                </div>

                                <h4 class="h5 fw-bold mb-0">
                                    <?php echo htmlspecialchars($route['title']); ?>
                                </h4>

                            </div>

                            <p class="fw-semibold mb-2">
                                <?php echo htmlspecialchars($route['routes']); ?>
                            </p>

                            <p class="text-muted mb-0">
                                <?php echo htmlspecialchars($route['description']); ?>
                            </p>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>
</section>

<?php } ?>


<?php if (!empty($long_distance_routes)) { ?>

<!-- Long Distance Routes -->
<section class="py-4">
    <div class="container">

        <div class="text-center mb-4">
            <h3>Long-Distance Routes From <?php echo htmlspecialchars($city_data['city_name']); ?></h3>
        </div>

        <div class="row g-4">

            <?php foreach ($long_distance_routes as $route) { ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-0 shadow-sm route-card">

                        <div class="card-body p-4">

                            <div class="d-flex align-items-center mb-3">

                                <div class="route-icon me-3">
                                    <i class="bi bi-truck"></i>
                                </div>

                                <h4 class="h5 fw-bold mb-0">
                                    <?php echo htmlspecialchars($route['title']); ?>
                                </h4>

                            </div>

                            <?php foreach ($route['places'] as $place) { ?>

                                <span class="badge bg-light text-dark border me-1 mb-2">
                                    <?php echo htmlspecialchars($place); ?>
                                </span>

                            <?php } ?>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>
</section>

<?php } ?>


<style>
.moving-area-card,
.route-card {
    border-radius: 12px;
    transition: all 0.3s ease;
}

.moving-area-card:hover,
.route-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.10) !important;
}

.area-icon,
.route-icon {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #f8f9fa;
    font-size: 20px;
}

.area-icon {
    color: #dc3545;
}

.route-icon {
    color: #0d6efd;
}

.route-card p,
.moving-area-card p {
    line-height: 1.7;
}

.route-card .badge {
    padding: 7px 10px;
    border-radius: 20px;
    font-weight: 500;
}
</style>