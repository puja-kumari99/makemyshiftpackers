<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => 'Contact Us',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="contact-page-section py-5">
    <div class="container">
        <!-- Main Side-by-Side Row: CTA Container on Left, Contact Form on Right (Matching user design) -->
        <div class="row g-4 align-items-stretch mb-5">
            <!-- Left Side: Blue CTA Card Container -->
            <div class="col-12 col-lg-5 col-xl-5">
                <div class="pm-city-sidebar-widget pm-city-cta-card contact-cta-box h-100">
                    <div class="pm-cta-bg-blob-1"></div>
                    <div class="pm-cta-bg-blob-2"></div>
                    <div class="pm-city-cta-inner">
                        <div class="pm-city-cta-header-row">
                            <div class="pm-city-cta-icon-wrap">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div class="pm-city-cta-header-text">
                                <h2 class="pm-city-cta-title">Need Help With Your <span>Home Move</span>?</h2>
                                <div class="pm-cta-bar">
                                    <span class="pm-cta-bar-red"></span>
                                    <span class="pm-cta-bar-blue"></span>
                                </div>
                            </div>
                        </div>

                        <div class="pm-city-cta-buttons">
                            <!-- Phone 1 -->
                            <a href="<?= $phonehtml1 ?>" class="pm-city-cta-btn pm-city-cta-call">
                                <div class="pm-cta-btn-icon icon-red">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="pm-cta-btn-text">
                                    <small>Call Support</small>
                                    <strong><?= htmlspecialchars($phone1) ?></strong>
                                </div>
                                <i class="bi bi-arrow-right pm-cta-btn-arrow"></i>
                            </a>

                            <!-- Phone 2 -->
                            <a href="<?= $phonehtml2 ?>" class="pm-city-cta-btn pm-city-cta-alt-call">
                                <div class="pm-cta-btn-icon icon-blue">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="pm-cta-btn-text">
                                    <small>Alternate Line</small>
                                    <strong><?= htmlspecialchars($phone2) ?></strong>
                                </div>
                                <i class="bi bi-arrow-right pm-cta-btn-arrow"></i>
                            </a>

                            <!-- Action Row -->
                            <div class="pm-city-cta-action-row">
                                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="pm-city-action-btn pm-city-whatsapp-btn">
                                    <i class="bi bi-whatsapp"></i>
                                    <span class="action-btn-label">
                                        <span>WhatsApp</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </span>
                                </a>
                                <button type="button" class="pm-city-action-btn pm-city-quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                    <i class="bi bi-clipboard-check"></i>
                                    <span class="action-btn-label">
                                        <span>Get Quote</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form Card -->
            <div class="col-12 col-lg-7 col-xl-7">
                <div class="contact-form-side-card h-100">
                    <h2 class="contact-form-heading">CONTACT</h2>
                    <div class="contact-form-red-bar"></div>
                    <p class="contact-form-subtitle">Fill out the form below and our team will get back to you shortly with the best moving solution for your needs.</p>

                    <form id="contactPageForm" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactFormResult" onsubmit="return false;">
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-12 col-md-6">
                                <div class="contact-fcard">
                                    <div class="contact-fcard-icon">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div class="contact-fcard-content">
                                        <label class="contact-fcard-label" for="contact_name">Full Name <span class="required-star">*</span></label>
                                        <input type="text" id="contact_name" name="name" class="contact-fcard-input" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-12 col-md-6">
                                <div class="contact-fcard">
                                    <div class="contact-fcard-icon">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div class="contact-fcard-content">
                                        <label class="contact-fcard-label" for="contact_phone">Phone Number <span class="required-star">*</span></label>
                                        <input type="tel" id="contact_phone" name="phone" class="contact-fcard-input" placeholder="Enter your phone number" maxlength="10" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Message (Optional) -->
                            <div class="col-12">
                                <div class="contact-fcard contact-fcard-textarea-wrap">
                                    <div class="contact-fcard-icon">
                                        <i class="bi bi-chat-square-text-fill"></i>
                                    </div>
                                    <div class="contact-fcard-content">
                                        <label class="contact-fcard-label" for="contact_message">Message (Optional)</label>
                                        <textarea id="contact_message" name="message" class="contact-fcard-input contact-fcard-textarea" rows="2" placeholder="Tell us about your moving requirements..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="contact-fcard-submit-btn">
                                    <span>Send Message</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Ajax result box -->
                        <div id="contactFormResult" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Lower Section: Reach Out Anytime -->
        <div class="contact-reach-section mt-5 pt-4">
            <div class="contact-header-wrap text-center mb-4">
                <span class="contact-eyebrow" style="color: #991b1b; font-weight: 800;">REACH OUT ANYTIME</span>
                <h2 class="contact-title">We're Always <span class="contact-title-accent" style="color: #b91c1c;">Here for You</span></h2>
                <div class="contact-title-bar" style="background-color: #b91c1c;"></div>
                <p class="contact-subtitle" style="color: #374151;">Get in touch with us through any of the following channels. Our team is available 24/7 to assist you.</p>
            </div>

            <!-- Contact Channels (4-Card Grid with both addresses) -->
            <div class="row g-3 g-lg-4 justify-content-center contact-channels-row">
                <?php if (!empty($phone1) || !empty($phone2)): ?>
                <div class="col-12 col-sm-6 col-lg-3 contact-channel-col contact-channel-col-call">
                    <div class="contact-channel-card">
                        <div class="contact-channel-icon-wrap icon-blue">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h3 class="contact-channel-title">Call Us</h3>
                        <div class="contact-channel-value d-flex flex-column gap-2">
                            <?php if (!empty($phone1)): ?>
                            <div>
                                <a href="<?= $phonehtml1 ?>" class="contact-link d-inline-flex align-items-center py-2 px-1">
                                    <?= htmlspecialchars(trim($phone1)) ?>
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($phone2)): ?>
                            <div>
                                <a href="<?= $phonehtml2 ?>" class="contact-link d-inline-flex align-items-center py-2 px-1">
                                    <?= htmlspecialchars(trim($phone2)) ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <p class="contact-channel-subtext" style="color: #4b5563;">24/7 Support</p>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($mail)): ?>
                <div class="col-12 col-sm-6 col-lg-3 contact-channel-col contact-channel-col-mail">
                    <div class="contact-channel-card">
                        <div class="contact-channel-icon-wrap icon-red">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <h3 class="contact-channel-title">Email Us</h3>
                        <div class="contact-channel-value">
                            <a href="<?= $mailhtml ?>" class="contact-link d-inline-flex align-items-center py-2 px-1">
                                <?= htmlspecialchars($mail) ?>
                            </a>
                        </div>
                        <p class="contact-channel-subtext" style="color: #4b5563;">24h Response</p>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($corporate_address)): ?>
                <div class="col-12 col-sm-6 col-lg-3 contact-channel-col">
                    <div class="contact-channel-card">
                        <div class="contact-channel-icon-wrap icon-blue">
                            <i class="bi bi-buildings-fill"></i>
                        </div>
                        <h3 class="contact-channel-title">Corporate Office</h3>
                        <div class="contact-channel-value">
                            <span class="contact-address-text">
                                <?= htmlspecialchars($corporate_address) ?>
                            </span>
                        </div>
                        <p class="contact-channel-subtext">Main Operations</p>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($address)): ?>
                <div class="col-12 col-sm-6 col-lg-3 contact-channel-col">
                    <div class="contact-channel-card">
                        <div class="contact-channel-icon-wrap icon-red">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3 class="contact-channel-title">Head Office</h3>
                        <div class="contact-channel-value">
                            <span class="contact-address-text">
                                <?= htmlspecialchars($address) ?>
                            </span>
                        </div>
                        <p class="contact-channel-subtext">Registered Office</p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('contactPageForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            var dateInput = form.querySelector('input[name="mdate"]');
            var msgInput = form.querySelector('textarea[name="message"]');
            if (dateInput && dateInput.value && msgInput) {
                var dateTag = '[Moving Date: ' + dateInput.value + ']';
                if (!msgInput.value.includes(dateTag)) {
                    msgInput.value = (msgInput.value.trim() ? msgInput.value.trim() + '\n' : '') + dateTag;
                }
            }
        }, true);
    }
});
</script>