<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <span id="qteModalTitle">Get a free quote</span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-person-badge"></i>
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-phone-vibrate"></i>
                                <input type="tel" class="form-control" name="phone" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-envelope-at"></i>
                                <input type="text" class="form-control" name="email" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                                <input type="text" class="form-control" name="mfrom" placeholder="From City">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-map-fill"></i>
                                <input type="text" class="form-control" name="mto" placeholder="To City">
                            </div>
                        </div>
                    </div>
                </div>
           <div class="form-group">
    <div class="form-icon">
        <i class="bi bi-chat-left-text"></i>
        <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Describe your relocation needs..."></textarea>
    </div>
</div>
                <div class="quotemodal-actions-row">
                    <button id="submitbquotemodal" type="submit" class="theme-btn">Get My Free Quote <i class="bi bi-send-fill ms-1"></i></button>
                    <a href="<?= base_url('assets/uploads/' . rawurlencode('Survey Documents.pdf')) ?>" download="Survey_Documents.pdf" target="_blank" class="theme-btn theme-btn-download" title="Download Survey Form (PDF)">
                        <i class="bi bi-file-earmark-arrow-down-fill me-1"></i>
                        <span>Download Survey Form</span>
                    </a>
                    <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="theme-btn theme-btn-reset">Clear Form</button>
                </div>
 
                <div id="resultquotemodal"></div>
            </form>
        </div>
    </div>
</div>

<script>
if (window.location.hash === '#openQuoteModal') {
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var myModal = new bootstrap.Modal(document.getElementById('qteModal'));
            myModal.show();
        }, 300);
    });
}
</script>
