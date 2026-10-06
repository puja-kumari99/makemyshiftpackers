<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'Payment',
  'bc_desc' => 'Scan QR code or use official bank details for payment.',
  'breadcrumbs' => [
    ['name' => 'About Us'],
    ['name' => 'Payment']
  ]
]);
?>

<!-- ======================================================
     MAIN PAYMENT SECTION (NO SIDEBAR, MINIMAL & CLEAN)
     ====================================================== -->
<section class="py-5 about-page-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">

        <div class="payment-main-card p-3 p-md-4">
          <div class="payment-box text-center">
            
            <h2 class="payment-box-title mb-3 fs-5">
              <i class="bi bi-qr-code-scan text-danger me-2"></i>Scan to Pay
            </h2>

            <!-- Payment Standee Image Container (Full Width with Lightest Blue Frame) -->
            <div class="payment-qr-frame w-100 overflow-hidden mb-3">
              <img src="<?= base_url('assets/img/payment.jpeg') ?>" alt="Official Payment QR Code &amp; Bank Details" class="img-fluid rounded-2 w-100 d-block">
            </div>

            <div class="mt-3">
              <div class="small text-muted mb-1">Official UPI ID:</div>
              <div class="payment-upi-badge d-inline-block">
                makemyshiftmovers@sbi
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
