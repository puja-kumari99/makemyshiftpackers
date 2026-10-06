<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Gallery',
    'bc_desc' => 'Explore visual highlights of our packaging, moving, warehouse storage, container fleets, and relocation operations.',
    'breadcrumbs' => [
        ['name' => 'Gallery']
    ]
]); 
?>

<!-- Main Page Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-main-content">
                    

                    <!-- Photo Gallery Grid -->
                    <div class="row g-3 g-md-4">
                        <?php 
                        if (empty($photos)) {
                            $CI = &get_instance();
                            if (!isset($CI->db)) {
                                @$CI->load->database();
                            }
                            if (isset($CI->db) && is_object($CI->db)) {
                                $CI->db->where('status', 1);
                                $CI->db->order_by('auto_id', 'DESC');
                                $gq = $CI->db->get('gallery');
                                if ($gq && is_object($gq) && method_exists($gq, 'num_rows') && $gq->num_rows() > 0) {
                                    $photos = $gq->result();
                                }
                            }
                        }
                        if(!empty($photos)): 
                        ?>
                            <?php foreach($photos as $photo): ?>
                            <?php 
                            $photo_img = !empty($photo->image) ? $photo->image : '';
                            $img_src = base_url('assets/uploads/gallery/' . $photo_img);
                            $photo_title = !empty($photo->title) ? htmlspecialchars($photo->title) : (!empty($photo->album_name) ? htmlspecialchars($photo->album_name) : 'Relocation Operation');
                            ?>
                            <div class="col-12 col-sm-6 col-md-4 mb-3">
                                <div class="card border-0 shadow-sm rounded-4 overflow-hidden gallery-photo-card h-100">
                                    <div class="gallery-img-wrapper position-relative">
                                        <a href="<?= $img_src ?>" target="_blank" rel="noopener" class="d-block gallery-lightbox-link" title="<?= $photo_title ?>">
                                            <img loading="lazy" src="<?= $img_src ?>" class="w-100 img-fluid gallery-img" alt="<?= $photo_title ?>" onerror="this.onerror=null;this.src='<?= base_url('assets/img/service/1.jpg') ?>';">
                                            <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                                <span class="gallery-zoom-circle"><i class="bi bi-zoom-in text-white fs-4"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body p-3">
                                        <?php if(!empty($photo->album_name)): ?>
                                        <span class="badge gallery-badge-cat mb-2"><?= htmlspecialchars($photo->album_name) ?></span>
                                        <?php endif; ?>
                                        <h3 class="fw-bold mb-1 gallery-title-sm text-dark fs-6"><?= $photo_title ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-12 text-center py-5 text-muted">
                                <i class="bi bi-images fs-1 d-block mb-3 text-secondary"></i>
                                <p class="fs-5 fw-semibold mb-1">No photos available in the gallery yet.</p>
                                <p class="small">Photos uploaded from the admin panel will appear here automatically.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
