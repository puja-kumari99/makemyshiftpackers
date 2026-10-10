<?php
$priceCity = isset($city) && $city != '' ? $city : 'Your City';

/*
|--------------------------------------------------------------------------
| PRICE DATA
|--------------------------------------------------------------------------
| You can change these prices later from this single array.
| All city pages will automatically use the same structure.
*/

$priceData = [

    'home' => [
        'title' => 'Home Shifting',
        'ranges' => ['0-10 KM', '10-50 KM', '50-200 KM', '200+ KM'],
        'items' => [

            '1 BHK Shifting' => [
                [4000, 10500],
                [10500, 15500],
                [15500, 24500],
                [24500, 29500]
            ],

            '2 BHK Shifting' => [
                [11500, 14500],
                [14500, 24500],
                [24500, 30500],
                [30500, 40500]
            ],

            '3 BHK Shifting' => [
                [14500, 20500],
                [20500, 29500],
                [29500, 38500],
                [38500, 51500]
            ],

            '4 BHK Shifting' => [
                [18000, 26000],
                [26000, 36000],
                [36000, 48000],
                [48000, 65000]
            ]
        ]
    ],


    'office' => [
        'title' => 'Office Shifting',
        'ranges' => ['0-10 KM', '10-50 KM', '50-200 KM', '200+ KM'],
        'items' => [

            'Small Office' => [
                [5000, 9000],
                [9000, 14000],
                [14000, 22000],
                [22000, 32000]
            ],

            'Medium Office' => [
                [9000, 16000],
                [16000, 24000],
                [24000, 35000],
                [35000, 50000]
            ],

            'Large Office' => [
                [18000, 30000],
                [30000, 45000],
                [45000, 65000],
                [65000, 90000]
            ],

            'Corporate Office' => [
                [30000, 50000],
                [50000, 75000],
                [75000, 110000],
                [110000, 150000]
            ]
        ]
    ],


    'bike' => [
        'title' => 'Bike Shifting',
        'ranges' => ['0-200 KM', '200-500 KM', '500-1000 KM', '1000+ KM'],
        'items' => [

            'Standard Bike' => [
                [2000, 3500],
                [3500, 5500],
                [5500, 8000],
                [8000, 12000]
            ],

            'Premium Bike' => [
                [2500, 4500],
                [4500, 6500],
                [6500, 9500],
                [9500, 14000]
            ],

            'Sports Bike' => [
                [3000, 5000],
                [5000, 7500],
                [7500, 11000],
                [11000, 16000]
            ]
        ]
    ],


    'car' => [
        'title' => 'Car Transportation',
        'ranges' => ['0-500 KM', '500-1000 KM', '1000-1500 KM', '1500+ KM'],
        'items' => [

            'Hatchback' => [
                [6000, 9000],
                [9000, 14000],
                [14000, 20000],
                [20000, 28000]
            ],

            'Sedan' => [
                [7000, 10000],
                [10000, 15000],
                [15000, 22000],
                [22000, 30000]
            ],

            'SUV' => [
                [8000, 12000],
                [12000, 18000],
                [18000, 27000],
                [27000, 38000]
            ],

            'Luxury Car' => [
                [10000, 16000],
                [16000, 25000],
                [25000, 35000],
                [35000, 50000]
            ]
        ]
    ]

];
?>


<section class="py-5 bg-white"
         itemscope
         itemtype="https://schema.org/Service">

    <div class="container">

        <!-- SERVICE SCHEMA -->

        <meta itemprop="serviceType" content="Packers and Movers Services">

        <div class="text-center mb-4">

            <h3 class="fw-bold text-dark mb-2" itemprop="name">
                Packers and Movers in <?= $city ?> Price List
            </h3>

            <p class="text-muted mb-0" itemprop="description">
                Get an estimated idea of home shifting, office relocation,
                bike transportation and car transportation charges in
                <?= html_escape($priceCity) ?>.
            </p>

        </div>




        <?php foreach ($priceData as $serviceKey => $service): ?>

            <div class="mb-4"
                 itemprop="hasOfferCatalog"
                 itemscope
                 itemtype="https://schema.org/OfferCatalog">

                <div class="table-responsive border rounded-4 overflow-hidden">

                    <table class="table table-bordered align-middle mb-0 mms-price-table">

                        <thead>
                            <tr>

                                <th class="text-white">
                                    <?= html_escape($service['title']) ?>
                                </th>

                                <?php foreach ($service['ranges'] as $range): ?>

                                    <th class="text-white text-center">
                                        <?= html_escape($range) ?>
                                    </th>

                                <?php endforeach; ?>

                            </tr>
                        </thead>


                        <tbody>

                            <?php foreach ($service['items'] as $itemName => $prices): ?>

                                <tr itemscope
                                    itemprop="itemListElement"
                                    itemtype="https://schema.org/Offer">

                                    <td class="fw-semibold text-danger"
                                        itemprop="name">

                                        <?= html_escape($itemName) ?>

                                    </td>


                                    <?php foreach ($prices as $price): ?>

                                        <td class="text-center"
                                            itemprop="priceSpecification"
                                            itemscope
                                            itemtype="https://schema.org/PriceSpecification">

                                            <meta itemprop="priceCurrency"
                                                  content="INR">

                                            <meta itemprop="minPrice"
                                                  content="<?= $price[0] ?>">

                                            <meta itemprop="maxPrice"
                                                  content="<?= $price[1] ?>">

                                            ₹<?= number_format($price[0]) ?>
                                            - ₹<?= number_format($price[1]) ?>

                                        </td>

                                    <?php endforeach; ?>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        <?php endforeach; ?>


        <div class="alert alert-light  mb-5">

          These are estimated figures. The final price can change based on:
<ul><li>Distance between pickup and delivery locations</li>
<li>Weight and volume of items</li>
<li>Quantity and type of goods</li>
<li>House or office size</li>
<li>Packing requirements</li>
<li>Pickup and delivery floors</li>
<li>Lift availability</li>
<li>Labour requirements</li>
<li>Vehicle size</li>
<li>Insurance requirements</li></ul>
<p>These are estimated figures. The final price can change based on:

Share your pickup and delivery details with Make My Shift to get a quotation based on your actual move.
</p>
        </div>


        <!-- =====================================================
             CALCULATOR
        ====================================================== -->

        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body p-4 p-md-5">

                <div class="text-center mb-4">

                    <h3 class="fw-bold text-dark mb-2">
                        Packers and Movers Cost Calculator
                    </h3>

                    <p class="text-muted mb-0">
                        Calculate an approximate moving cost for
                        <?= html_escape($priceCity) ?>.
                    </p>

                </div>


                <div class="row g-3">

                    <!-- SERVICE -->

                    <div class="col-md-4">

                        <label for="movingService"
                               class="form-label fw-semibold">

                            Select Service

                        </label>

                        <select id="movingService"
                                class="form-select">

                            <option value="home">
                                Home Shifting
                            </option>

                            <option value="office">
                                Office Shifting
                            </option>

                            <option value="bike">
                                Bike Shifting
                            </option>

                            <option value="car">
                                Car Transportation
                            </option>

                        </select>

                    </div>


                    <!-- TYPE -->

                    <div class="col-md-4">

                        <label for="propertyType"
                               class="form-label fw-semibold">

                            Select Type

                        </label>

                        <select id="propertyType"
                                class="form-select">
                        </select>

                    </div>


                    <!-- DISTANCE -->

                    <div class="col-md-4">

                        <label for="movingDistance"
                               class="form-label fw-semibold">

                            Distance (KM)

                        </label>

                        <input type="number"
                               id="movingDistance"
                               class="form-control"
                               min="1"
                               value="10"
                               placeholder="Enter distance">

                    </div>


                    <!-- BUTTON -->

                    <div class="col-12 text-center mt-4">

                        <button type="button"
                                id="calculatePrice"
                                class="btn btn-danger px-4 py-2 fw-semibold">

                            Calculate Estimated Price

                        </button>

                    </div>

                </div>


                <!-- RESULT -->

                <div id="calculatorResult"
                     class="alert alert-danger text-center mt-4 mb-0 d-none">

                    <div class="small text-muted">
                        Estimated Moving Cost
                    </div>

                    <div id="estimatedPrice"
                         class="fs-3 fw-bold text-danger my-1">
                        ₹0
                    </div>

                    <small class="text-muted">
                        This is an approximate estimate. Final charges may
                        vary according to actual shifting requirements.
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* Only small custom CSS */

.mms-price-table {
    min-width: 850px;
}

.mms-price-table thead th {
    background: #044e83;
    border-color: #044e83;
    padding: 16px;
    white-space: nowrap;
}

.mms-price-table tbody td {
    padding: 16px;
    white-space: nowrap;
}


.mms-price-table tbody tr:last-child td {
    border-bottom: 0;
}

@media (max-width: 767px) {

    .mms-price-table {
        min-width: 800px;
    }

    .mms-price-table thead th,
    .mms-price-table tbody td {
        padding: 13px 14px;
        font-size: 14px;
    }

}

</style>


<script>

document.addEventListener("DOMContentLoaded", function () {

    const priceData = <?= json_encode($priceData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;

    const serviceSelect = document.getElementById("movingService");
    const typeSelect = document.getElementById("propertyType");
    const distanceInput = document.getElementById("movingDistance");
    const calculateButton = document.getElementById("calculatePrice");
    const resultBox = document.getElementById("calculatorResult");
    const priceBox = document.getElementById("estimatedPrice");


    /* Load service types */

    function loadTypes() {

        const selectedService = serviceSelect.value;

        typeSelect.innerHTML = "";

        const items = priceData[selectedService].items;

        Object.keys(items).forEach(function (itemName) {

            const option = document.createElement("option");

            option.value = itemName;
            option.textContent = itemName;

            typeSelect.appendChild(option);

        });

    }


    /* Calculate price */

    function calculatePrice() {

        const service = serviceSelect.value;
        const type = typeSelect.value;
        const distance = parseFloat(distanceInput.value);

        if (!distance || distance <= 0) {

            alert("Please enter a valid distance.");

            return;

        }


        let rangeIndex = 0;


        if (service === "home" || service === "office") {

            if (distance <= 10) {
                rangeIndex = 0;
            }
            else if (distance <= 50) {
                rangeIndex = 1;
            }
            else if (distance <= 200) {
                rangeIndex = 2;
            }
            else {
                rangeIndex = 3;
            }

        }


        if (service === "bike") {

            if (distance <= 200) {
                rangeIndex = 0;
            }
            else if (distance <= 500) {
                rangeIndex = 1;
            }
            else if (distance <= 1000) {
                rangeIndex = 2;
            }
            else {
                rangeIndex = 3;
            }

        }


        if (service === "car") {

            if (distance <= 500) {
                rangeIndex = 0;
            }
            else if (distance <= 1000) {
                rangeIndex = 1;
            }
            else if (distance <= 1500) {
                rangeIndex = 2;
            }
            else {
                rangeIndex = 3;
            }

        }


        const selectedPrice =
            priceData[service].items[type][rangeIndex];


        const minPrice = selectedPrice[0];
        const maxPrice = selectedPrice[1];


        priceBox.textContent =
            "₹" +
            minPrice.toLocaleString("en-IN") +
            " – ₹" +
            maxPrice.toLocaleString("en-IN");


        resultBox.classList.remove("d-none");

    }


    serviceSelect.addEventListener("change", function () {

        loadTypes();

        resultBox.classList.add("d-none");

    });


    calculateButton.addEventListener("click", calculatePrice);


    distanceInput.addEventListener("keypress", function (event) {

        if (event.key === "Enter") {
            calculatePrice();
        }

    });


    /* Initial types */

    loadTypes();

});

</script>