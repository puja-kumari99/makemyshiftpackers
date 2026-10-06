<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    $total_schema_crumbs = count($breadcrumbs);
    $schema_idx = 0;
    foreach ($breadcrumbs as $crumb) {
        $schema_idx++;
        $is_schema_last = ($schema_idx === $total_schema_crumbs);
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $lower_name = strtolower(trim($name));
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        if (!$url && !$is_schema_last) {
            if (in_array($lower_name, ['about', 'about us'])) {
                $url = site_url('about-us');
            } elseif (in_array($lower_name, ['services', 'our services'])) {
                $url = site_url('our-services');
            } elseif (in_array($lower_name, ['locations', 'our branches', 'branches'])) {
                $url = site_url('our-branches');
            }
        }

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Breadcrumbs Section -->
<section class="dynamic-bc-section">
    <div class="container">
        <nav class="dyn-bc-nav" aria-label="breadcrumb">
            <a href="<?= site_url() ?>" class="dyn-bc-link">Home</a>
            <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                <?php 
                $total_crumbs = count($breadcrumbs);
                $crumb_idx = 0;
                foreach ($breadcrumbs as $crumb): 
                    $crumb_idx++;
                    $is_last = ($crumb_idx === $total_crumbs);
                    $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
                    $lower_name = strtolower(trim($name));
                    $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

                    // Auto-resolve known intermediate section URLs if omitted
                    if (!$url && !$is_last) {
                        if (in_array($lower_name, ['about', 'about us'])) {
                            $url = site_url('about-us');
                        } elseif (in_array($lower_name, ['services', 'our services'])) {
                            $url = site_url('our-services');
                        } elseif (in_array($lower_name, ['locations', 'our branches', 'branches'])) {
                            $url = site_url('our-branches');
                        }
                    }
                    $should_link = (!$is_last && !empty($url));
                ?>
                    <span class="dyn-bc-sep">›</span>
                    <?php if ($should_link): ?>
                        <a href="<?= $url ?>" class="dyn-bc-link"><?= htmlspecialchars($name) ?></a>
                    <?php elseif (!$is_last): ?>
                        <span class="dyn-bc-link"><?= htmlspecialchars($name) ?></span>
                    <?php else: ?>
                        <span class="dyn-bc-current"><?= htmlspecialchars($name) ?></span>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php elseif (isset($bc_current) && !empty($bc_current)): ?>
                <span class="dyn-bc-sep">›</span>
                <span class="dyn-bc-current"><?= htmlspecialchars($bc_current) ?></span>
            <?php endif; ?>
        </nav>
        <h1><?= isset($bc_h1) ? $bc_h1 : '' ?></h1>
        <?php if (isset($bc_desc) && !empty($bc_desc)): ?>
            <p class="dyn-bc-desc"><?= $bc_desc ?></p>
        <?php endif; ?>
    </div>
</section>