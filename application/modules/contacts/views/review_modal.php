
<!-- Modern Customer Review Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 review-modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-0 text-white review-modal-header">
                <div>
                    <h5 class="modal-title fw-bold text-white mb-1" id="reviewModalLabel">
                        <i class="bi bi-pencil-square text-warning me-2"></i>Write a Customer Review
                    </h5>
                    <p class="text-white-50 mb-0 review-modal-sub">
                        Share your moving experience and help others choose the right relocation partner.
                    </p>
                </div>
                <button type="button" class="btn-close btn-close-white align-self-start" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-4 review-modal-body">
                <div id="reviewModalAlert"></div>

                <form id="customerReviewForm" action="<?= site_url('reviews/submit') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="is_ajax" value="1">

                    <!-- Interactive Star Rating -->
                    <div class="p-3 mb-3 text-center rounded-3 review-rating-box">
                        <label class="form-label d-block text-uppercase fw-bold text-muted mb-2 review-rating-label">
                            Rate Your Experience
                        </label>
                        <div class="d-flex justify-content-center align-items-center gap-2 mb-1" id="modalStarRating">
                            <i class="bi bi-star-fill text-warning fs-3 modal-star-btn" data-value="1" role="button" title="1 Star"></i>
                            <i class="bi bi-star-fill text-warning fs-3 modal-star-btn" data-value="2" role="button" title="2 Stars"></i>
                            <i class="bi bi-star-fill text-warning fs-3 modal-star-btn" data-value="3" role="button" title="3 Stars"></i>
                            <i class="bi bi-star-fill text-warning fs-3 modal-star-btn" data-value="4" role="button" title="4 Stars"></i>
                            <i class="bi bi-star-fill text-warning fs-3 modal-star-btn" data-value="5" role="button" title="5 Stars"></i>
                        </div>
                        <div id="modalRatingText" class="fw-bold text-primary mt-1">
                            😍 5/5 - Outstanding Experience!
                        </div>
                        <input type="hidden" name="rating" id="modalRatingInput" value="5">
                    </div>

                    <!-- Customer Info Fields -->
                    <div class="row g-2 mb-2">
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold text-dark mb-1 review-field-label">
                                Full Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="name" class="form-control form-control-sm review-modal-input" placeholder="e.g. Rajesh Kumar" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold text-dark mb-1 review-field-label">
                                Email Address <span class="text-danger">*</span>
                            </label>
                            <input type="email" name="email" class="form-control form-control-sm review-modal-input" placeholder="e.g. rajesh@gmail.com" required>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label fw-semibold text-dark mb-1 review-field-label">
                            Shifting Route or City
                        </label>
                        <input type="text" name="city" class="form-control form-control-sm review-modal-input" placeholder="e.g. Bangalore to Mumbai or Pune" value="<?= isset($city) ? htmlspecialchars($city) : '' ?>">
                    </div>

                    <div class="mb-2">
                        <label class="form-label fw-semibold text-dark mb-1 review-field-label">
                            Your Review <span class="text-danger">*</span>
                        </label>
                        <textarea name="review" class="form-control form-control-sm review-modal-input" rows="3" placeholder="Share details about the packing quality, staff behavior, timeliness and overall relocation service..." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark mb-1 review-field-label">
                            Attach Photos <span class="text-muted fw-normal">(Optional, max 4)</span>
                        </label>
                        <input type="file" id="modalReviewImages" name="review_images[]" class="form-control form-control-sm review-modal-file-input" accept="image/jpeg, image/png, image/webp" multiple>
                        <small class="text-muted d-block mt-1 review-photo-note">Accepts JPG, PNG, WEBP. Max 4 images.</small>
                    </div>

                    <button type="submit" id="modalReviewSubmitBtn" class="btn w-100 fw-bold text-white py-2">
                        <i class="bi bi-send-fill me-1"></i> Submit Review
                    </button>
                </form>

                <div class="text-center mt-3 text-muted review-modal-footer-note">
                    <i class="bi bi-shield-check text-success me-1"></i> Your feedback helps thousands of relocating families every month.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Star Rating Interactivity
    const ratingLabels = {
        1: '😞 1/5 - Poor Experience',
        2: '😕 2/5 - Fair Service',
        3: '😐 3/5 - Average Experience',
        4: '😊 4/5 - Very Good Service',
        5: '😍 5/5 - Outstanding Experience!'
    };
    
    const starBtns = document.querySelectorAll('.modal-star-btn');
    const ratingInput = document.getElementById('modalRatingInput');
    const ratingText = document.getElementById('modalRatingText');
    
    if (starBtns.length && ratingInput && ratingText) {
        starBtns.forEach(function(star) {
            star.addEventListener('click', function() {
                const val = parseInt(this.getAttribute('data-value'), 10);
                ratingInput.value = val;
                ratingText.textContent = ratingLabels[val] || (val + '/5 Stars');
                
                starBtns.forEach(function(s) {
                    const sVal = parseInt(s.getAttribute('data-value'), 10);
                    if (sVal <= val) {
                        s.classList.remove('bi-star', 'text-secondary');
                        s.classList.add('bi-star-fill', 'text-warning');
                    } else {
                        s.classList.remove('bi-star-fill', 'text-warning');
                        s.classList.add('bi-star', 'text-secondary');
                    }
                });
            });
            
            // Subtle hover feedback
            star.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.2)';
            });
            star.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    }

    // Image upload validation
    const imgInput = document.getElementById('modalReviewImages');
    if (imgInput) {
        imgInput.addEventListener('change', function() {
            if (this.files && this.files.length > 4) {
                alert('You can select up to 4 images maximum.');
                this.value = '';
            }
        });
    }

    // AJAX Form Submission
    const form = document.getElementById('customerReviewForm');
    const alertBox = document.getElementById('reviewModalAlert');
    const submitBtn = document.getElementById('modalReviewSubmitBtn');
    
    if (form && alertBox && submitBtn) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            alertBox.style.display = 'none';
            alertBox.innerHTML = '';
            
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Submitting...';
            
            const formData = new FormData(form);
            formData.append('is_ajax', '1');
            
            fetch('<?= site_url("reviews/submit") ?>', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData
            })
            .then(function(res) {
                return res.json();
            })
            .then(function(data) {
                if (data && data.err === 0) {
                    alertBox.className = 'alert alert-success d-flex align-items-center mb-3';
                    alertBox.innerHTML = '<i class="bi bi-check-circle-fill fs-5 me-2 flex-shrink-0"></i><div><strong>Thank you!</strong> ' + (data.msg || 'Your review has been submitted successfully.') + '</div>';
                    alertBox.style.display = 'flex';
                    form.reset();
                    
                    // Reset star UI to 5
                    if (ratingInput) ratingInput.value = '5';
                    if (ratingText) ratingText.textContent = ratingLabels[5];
                    starBtns.forEach(function(s) {
                        s.classList.remove('bi-star', 'text-secondary');
                        s.classList.add('bi-star-fill', 'text-warning');
                    });
                    
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="bi bi-check-lg me-1"></i> Submitted!';
                    
                    // Smoothly refresh after 1.5 seconds so review appears on website
                    setTimeout(function() {
                        const modalEl = document.getElementById('reviewModal');
                        if (modalEl && window.bootstrap && window.bootstrap.Modal) {
                            const modalInst = bootstrap.Modal.getInstance(modalEl);
                            if (modalInst) modalInst.hide();
                        }
                        window.location.reload();
                    }, 1500);
                } else {
                    alertBox.className = 'alert alert-danger d-flex align-items-center mb-3';
                    alertBox.innerHTML = '<i class="bi bi-exclamation-triangle-fill fs-5 me-2 flex-shrink-0"></i><div>' + (data.msg || 'An error occurred while submitting your review.') + '</div>';
                    alertBox.style.display = 'flex';
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                }
            })
            .catch(function(err) {
                console.error(err);
                alertBox.className = 'alert alert-danger d-flex align-items-center mb-3';
                alertBox.innerHTML = '<i class="bi bi-exclamation-triangle-fill fs-5 me-2 flex-shrink-0"></i><div>Something went wrong. Please check your connection and try again.</div>';
                alertBox.style.display = 'flex';
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            });
        });
    }
});
</script>
