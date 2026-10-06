<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Video Gallery',
    'bc_desc' => 'Watch our step-by-step cargo handling processes, transport safety standards, and global freight forwarding in action.',
    'breadcrumbs' => [
        ['name' => 'Gallery'],
        ['name' => 'Video Gallery']
    ]
]); 
?>

<!-- Main Page Content Section -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-main-content">
                    
                    <h2 class="service-section-title">Logistics Process Videos</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            At <strong><?= $company3 ?></strong>, we maintain complete transparency in our logistics operations. Watch our field videos to see how our trained professionals handle heavy-duty cargo loading, customs clearance, and safe global transportation to ensure a worry-free shipping experience.
                        </p>
                    </div>

                    <!-- Videos Grid -->
                    <div class="row g-3 g-md-4">
                        <?php 
                        if (empty($videos)) {
                            $CI = &get_instance();
                            if (!isset($CI->db)) {
                                @$CI->load->database();
                            }
                            if (isset($CI->db) && is_object($CI->db)) {
                                $CI->db->where('status', 1);
                                $CI->db->order_by('auto_id', 'DESC');
                                $vq = $CI->db->get('video_gallery');
                                if ($vq && is_object($vq) && method_exists($vq, 'num_rows') && $vq->num_rows() > 0) {
                                    $videos = $vq->result();
                                }
                            }
                        }
                        if(!empty($videos)): 
                        ?>
                            <?php foreach($videos as $video): 
                                $embed_url = $video->video_url;
                                if (preg_match('/youtube\.com\/watch\?.*v=([^&]+)/', $embed_url, $m)) {
                                    $embed_url = 'https://www.youtube.com/embed/' . $m[1];
                                } elseif (preg_match('/youtu\.be\/([^?&]+)/', $embed_url, $m)) {
                                    $embed_url = 'https://www.youtube.com/embed/' . $m[1];
                                } elseif (preg_match('/youtube\.com\/shorts\/([^?&]+)/', $embed_url, $m)) {
                                    $embed_url = 'https://www.youtube.com/embed/' . $m[1];
                                } elseif (preg_match('/vimeo\.com\/(\d+)/', $embed_url, $m)) {
                                    $embed_url = 'https://player.vimeo.com/video/' . $m[1];
                                }
                                $v_title = !empty($video->title) ? $video->title : 'Relocation Video';
                            ?>
                            <div class="col-12 col-sm-6 col-md-4 mb-3">
                                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden gallery-video-card">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="<?= htmlspecialchars($embed_url) ?>" title="<?= htmlspecialchars($v_title) ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="border-0"></iframe>
                                    </div>
                                    <div class="card-body p-3">
                                        <h3 class="fw-bold mb-1 gallery-title-sm text-dark fs-6"><?= htmlspecialchars($v_title) ?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-12 text-center py-5 text-muted">
                                <i class="bi bi-play-btn fs-1 d-block mb-3 text-secondary"></i>
                                <p class="fs-5 fw-semibold mb-1">No videos available in the gallery.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Quality commitment banner -->
                    <div class="p-4 bg-light border-start border-4 border-primary rounded-3 mt-4">
                        <h3 class="fw-bold text-dark mb-2 fs-6">Our Video Guidelines</h3>
                        <p class="mb-0 small" style="color: #374151;">
                            All video clips shown are recorded on-site during actual shifting operations. We do not use simulated or stock footage, ensuring that what you see represents the true quality of service you will receive.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
