<main class="main">
<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Reviews',
    'bc_desc' => 'Read what our customers have to say',
    'breadcrumbs' => [
        ['name' => 'Reviews']
    ]
]);
?>

    <div class="reviews-service-page reviews-feature-content-section">
        <div ng-app="reviewsApp" ng-controller="reviewsctrl">
            <br />
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-2 mb-3 reviews-header-wrap">
                    <h3 class="m-0 reviews-header-title">
                        <i class="bi bi-chat-left-quote me-2"></i>Customer Experiences
                    </h3>
                    <button class="btn btn-primary rounded-pill px-4 shadow-sm reviews-write-btn" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="bi bi-pencil-square me-1"></i> Write a Review
                    </button>
                    <div class="reviews-header-line"></div>
                </div>
                
                <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i><?= $this->session->flashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                
                <?php if($this->session->flashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i><?= $this->session->flashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                
                <div class="reviews-single-reviewr mt-4 pb-4">
                    <div class="row">
                    <?php
                    if (empty($reviews)) {
                        $CI = &get_instance();
                        if (!isset($CI->db)) {
                            @$CI->load->database();
                        }
                        if (isset($CI->db) && is_object($CI->db)) {
                            $CI->db->where('status', 1);
                            $CI->db->order_by('r_id', 'desc');
                            $CI->db->limit(50);
                            $reviews = $CI->db->get('reviews');
                        }
                    }
                    $has_reviews = !empty($reviews) && is_object($reviews) && method_exists($reviews, 'num_rows') && $reviews->num_rows() > 0;
                    if (!$has_reviews) {
                        echo "<div class='col-12'><p class='no-reviews-text text-center'>No reviews yet...</p></div>";
                    } else {
                        foreach ($reviews->result() as $r) {
                            $pdate = !empty($r->posted_date) ? explode(" ", $r->posted_date)[0] : '';
                            $email_val = !empty($r->email) ? (string)$r->email : '';
                            if (strpos($email_val, '@') !== false) {
                                $email_parts = explode("@", $email_val);
                                $user_part = $email_parts[0];
                                $domain_part = $email_parts[1];
                                if (strlen($user_part) > 2) {
                                    $em = substr($user_part, 0, 2) . str_repeat("*", max(0, strlen($user_part) - 2)) . '@' . $domain_part;
                                } else {
                                    $em = substr($user_part, 0, 1) . '**@' . $domain_part;
                                }
                            } else {
                                $em = !empty($email_val) ? substr($email_val, 0, 2) . '***' : '';
                            }
                    ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="reviews-single-review h-100 shadow-sm rounded border p-3 bg-white">
                                    <div class="reviews-review-content h-100 d-flex flex-column" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                        <meta itemprop="name" content="<?= htmlspecialchars($r->r_title) ?>" />
                                        <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                            <meta itemprop="name" content="<?= htmlspecialchars($company3) ?>" />
                                        </div>
                                        
                                        <div class="reviews-review-rating mb-2">
                                            <?php for ($i = 0; $i < $r->stars; $i++) { ?>
                                                <i class="bi bi-star-fill text-warning"></i>
                                            <?php } ?>
                                            <span class="d-none reviews-rating-value" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                                <span itemprop="ratingValue"><?= $r->stars ?></span> stars
                                            </span>
                                        </div>
                                        
                                        <p itemprop="reviewBody" class="mb-3">"<?=$r->r_desc?>"</p>
                                        
                                        <?php if (!empty($r->r_img)) { 
                                            $images = explode(',', $r->r_img);
                                        ?>
                                            <div class="d-flex flex-wrap gap-2 mt-2 mb-3">
                                                <?php foreach($images as $img) { 
                                                    if(trim($img) !== '') {
                                                ?>
                                                    <img src="<?= base_url(trim($img)) ?>" alt="Review Image" class="img-thumbnail shadow-sm review-img-clickable" onclick="openImageModal(this.src)">
                                                <?php } } ?>
                                            </div>
                                        <?php } ?>
                                        
                                        <?php if (!empty($r->admin_reply)) { ?>
                                            <div class="admin-reply-box mt-2 p-2 bg-light rounded">
                                                <h6 class="mb-1 admin-reply-title"><i class="bi bi-person-badge me-1"></i><?= htmlspecialchars($company3) ?></h6>
                                                <p class="mb-0 admin-reply-body"><?= nl2br(htmlspecialchars($r->admin_reply)) ?></p>
                                            </div>
                                        <?php } ?>
                                        
                                        <div class="reviews-review-author mt-auto pt-3 border-top">
                                            <div>
                                                <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                    <span itemprop="name"><?= htmlspecialchars($r->name) ?></span>
                                                </strong>
                                                <small class="d-block text-muted mb-1"><?= $em ?></small>
                                                <div class="d-flex align-items-center text-muted review-author-meta">
                                                    <?php if (!empty($r->r_title)): ?>
                                                        <span class="me-3"><i class="bi bi-geo-alt-fill me-1"></i><?= htmlspecialchars($r->r_title) ?></span>
                                                    <?php endif; ?>
                                                    <span><i class="bi bi-calendar3 me-1"></i><?= date('M d, Y', strtotime($r->posted_date)) ?></span>
                                                </div>
                                                <meta itemprop="datePublished" content="<?= $pdate ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    </div>
                    <div class="mt-4 w-100 d-flex justify-content-center">
                        <div class="pagination">
                            <?php echo $this->pagination->create_links() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full Screen Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 pb-0 justify-content-end">
        <button type="button" class="btn-close bg-white rounded-circle p-2 review-lightbox-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-0">
        <img id="fullImage" src="" class="img-fluid rounded shadow-lg review-lightbox-img">
      </div>
    </div>
  </div>
</div>

<script>
function openImageModal(src) {
    document.getElementById('fullImage').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
}
</script>

</main>
