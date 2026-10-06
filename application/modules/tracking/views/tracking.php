<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs">
  <div class="container">
    <nav class="bc-nav">
      <a href="<?= site_url() ?>">Home</a>
      <span class="bc-sep">›</span>
      <span class="bc-current">Track Your Consignment</span>
    </nav>
    <h1><span class="bc-title-white">Track Your</span> <span class="bc-title-orange">Consignment</span></h1>
    <p class="bc-desc">Get real-time updates and accurate status of your shipment.</p>
  </div>
  <div class="bc-wave-wrap">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 64" preserveAspectRatio="none">
      <path d="M0,30 C480,64 960,0 1440,30 L1440,64 L0,64 Z" fill="#ffffff" />
    </svg>
  </div>
</section>
<div class="container py-5">
    <div class="row">
        <!-- Center Column for Premium Design -->
        <div class="col-lg-9 mx-auto">
            <div class="premium-tracking-card p-4 p-md-5 mb-4 bg-white rounded-4 shadow-sm text-center position-relative overflow-hidden">
                <!-- Top Decorative Line -->
                <div class="premium-tracking-top-bar"></div>
                
                <h2 class="mb-3 premium-tracking-title fs-3">Track Your Shipment</h2>
                <p class="mb-4 px-md-5" style="color: #374151;">Enter your tracking number below to get real-time updates and the accurate status of your cargo.</p>
                
                <form action="" id="tracking_form" class="mx-auto premium-tracking-form">
                    <div class="d-flex flex-column flex-md-row gap-3">
                        <div class="position-relative flex-grow-1">
                            <i class="bi bi-box position-absolute premium-tracking-input-icon"></i>
                            <input type="text" class="form-control form-control-lg premium-tracking-input" id="trackingNumber" name="trackingNumber" placeholder="Enter Tracking Number (e.g. 123456)" required>
                        </div>
                        <button type="submit" class="btn btn-lg premium-tracking-btn px-4" id="tracking_submit" style="background: linear-gradient(135deg, #b91c1c 0%, #991b1b 100%); color: #ffffff !important; border: none;">
                            <i class="bi bi-search me-2"></i> Track Now
                        </button>
                        <button type="reset" class="btn btn-lg btn-light rounded-circle premium-clear-btn d-none d-md-flex align-items-center justify-content-center" title="Clear">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div id="statusMessage" class="mt-3 text-start"></div>
                </form>
            </div>

            <!-- Tracking Details Wrapper (Removed contact-tracking-form div to flatten) -->
            <div class="w-100">

                <!-- Tracking Details (hidden until data loads) -->
                <div class="contact-tracking-details-card mt-4">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h3 class="mb-0 fs-5">Tracking Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">Customer Name: </span></p>
                                    <p id="customerName"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">LR NO.: </span></p>
                                    <p id="lrNumber"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">Shipment Type: </span></p>
                                    <p id="shipmentType"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">ORIGIN: </span></p>
                                    <p id="origin"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">DESTINATION: </span></p>
                                    <p id="destination"></p>
                                </div>
                                <div class="col-md-2 contact-track-details-flex">
                                    <p><span class="contact-tracking-label">Expected Delivery Date: </span></p>
                                    <span id="ex_del_date"></span> <i class="bi bi-check-circle-fill contact-tracking-success"></i>
                                </div>
                            </div>

                            <!-- Progress Bar Tracking -->
                            <div class="contact-tracking-progress mb-4">
                                <div class="contact-progress-bar-container">
                                    <div class="contact-progress">
                                        <div class="contact-progress-bar" role="progressbar"></div>
                                    </div>
                                    <div class="contact-progress-steps">
                                        <div class="contact-step step-processing">
                                            <div class="contact-step-icon">1</div>
                                            <div class="contact-step-label">Process</div>
                                            <div class="contact-step-date" id="processing-date"></div>
                                        </div>
                                        <div class="contact-step step-picked">
                                            <div class="contact-step-icon">2</div>
                                            <div class="contact-step-label">Picked</div>
                                            <div class="contact-step-date" id="picked-date"></div>
                                        </div>
                                        <div class="contact-step step-transit">
                                            <div class="contact-step-icon">3</div>
                                            <div class="contact-step-label">In Transit</div>
                                            <div class="contact-step-date" id="transit-date"></div>
                                        </div>
                                        <div class="contact-step step-delivered">
                                            <div class="contact-step-icon">4</div>
                                            <div class="contact-step-label">Delivered</div>
                                            <div class="contact-step-date" id="delivered-date"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tracking Details Table -->
                            <div class="contact-tracking-table mt-4">
                                <h4 class="border-bottom pb-2 fs-6">TRACKING HISTORY</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>STATUS</th>
                                                <th>DATE</th>
                                                <th>EVENT</th>
                                            </tr>
                                        </thead>
                                        <tbody id="trackingTableBody">
                                            <!-- Table rows will be injected here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mt-4">
                                <p style="color: #374151;">For more details, Please call us: 
                                    <strong class="me-2"><i class="bi bi-telephone-fill"></i> Phone:</strong> <a class="contact-tracking-link d-inline-block mb-2" href="<?= $phonehtml ?>"><?= $phone ?></a>
                                    <br><br>
                                    or leave your
                                    <a class="contact-tracking-underline" href="<?= site_url('contacts') ?>">contact
                                        number / email
                                        id</a> and our representative will contact you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function () {
        const steps = {
            '1': 'Processing',
            '2': 'Picked',
            '3': 'In Transit',
            '4': 'Delivered',
        };

        $('#tracking_submit').click(function (e) {
            e.preventDefault();
            $('#statusMessage').html('<div class="alert alert-info">Please wait...</div>');
            $(this).prop('disabled', true);
            $('.contact-tracking-details-card').hide();

            $.post("<?php echo site_url('tracking/track') ?>", $("#tracking_form").serialize(), function (
                response) {
                $('#tracking_submit').prop('disabled', false);
                $('#trackingTableBody').empty();

                if (response.status === 'success') {
                    // Show details section
                    $('.contact-tracking-details-card').show();

                    // Populate details
                    $('#customerName').text(response.main.c_name);
                    $('#lrNumber').text(response.main.tracking_id);
                    $('#shipmentType').text(response.main.ship_type);
                    $('#origin').text(response.main.ship_from);
                    $('#destination').text(response.main.ship_to);
                    $('#ex_del_date').text(response.main.ex_del_date);

                    // Build map of fetched steps
                    const received = {};
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            received[item.type.toString()] = item;
                        });
                    }

                    // Update progress bar and steps
                    let progress = 0;
                    let activeStep = 0;

                    if (received['1']) {
                        progress = 25;
                        activeStep = 1;
                        $('.step-processing').addClass('completed');
                        $('#processing-date').text(received['1'].date);
                    }

                    if (received['2']) {
                        progress = 50;
                        activeStep = 2;
                        $('.step-picked').addClass('completed');
                        $('#picked-date').text(received['2'].date);
                    }

                    if (received['3']) {
                        progress = 75;
                        activeStep = 3;
                        $('.step-transit').addClass('completed');
                        $('#transit-date').text(received['3'].date);
                    }

                    if (received['4']) {
                        progress = 100;
                        activeStep = 4;
                        $('.step-delivered').addClass('completed');
                        $('#delivered-date').text(received['4'].date);
                    }

                    // Set active step
                    $('.contact-step').removeClass('active');
                    if (activeStep > 0) {
                        $(`.contact-step:nth-child(${activeStep})`).addClass('active');
                    }

                    // Update progress bar width
                    $('.contact-progress-bar').css('width', progress + '%');

                    // Build tracking table
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            $('#trackingTableBody').append(`
                                <tr>
                                    <td>${steps[item.type]}</td>
                                    <td>${item.date}</td>
                                    <td>${item.remarks}</td>
                                </tr>
                            `);
                        });
                    }

                    $('#statusMessage').empty();
                } else {
                    // Error: hide details, show message
                    $('.contact-tracking-details-card').hide();
                    $('#statusMessage').html(
                        `<div class="alert alert-danger">${response.message}</div>`);
                }
            }, 'json').fail(function(jqXHR, textStatus, errorThrown) {
                $('#tracking_submit').prop('disabled', false);
                $('#statusMessage').html('<div class="alert alert-danger">Error: ' + textStatus + ' - ' + errorThrown + '</div>');
            });
        });

        // Clear resets everything
        $('button[type="reset"]').click(function () {
            $('#statusMessage').empty();
            $('.contact-tracking-details-card').hide();
            $('.contact-step').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#customerName, #lrNumber, #shipmentType, #origin, #destination, #ex_del_date, #processing-date, #picked-date, #transit-date, #delivered-date')
                .text('');
            $('#trackingTableBody').empty();
        });
    });
</script>
