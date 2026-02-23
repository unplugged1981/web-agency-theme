<?php
/**
 * Template part for the Hero Section
 * All content is editable via Appearance → Customize → Hero Section
 */

// --- Heading (H1) ---
$hero_heading = get_theme_mod(
    'hero_heading',
    'We build websites that turn <span class="text-primary">visitors</span> into customers.'
);

// --- Paragraph ---
$hero_paragraph = get_theme_mod(
    'hero_paragraph',
    'Helping modern brands scale through high-performance design and expert engineering. Your success is our code.'
);

// --- Buttons ---
$btn_primary_label = get_theme_mod('hero_btn_primary_label', 'Start Your Project');
$btn_primary_url = get_theme_mod('hero_btn_primary_url', '#contact');
$btn_secondary_label = get_theme_mod('hero_btn_secondary_label', 'View Our Work');
$btn_secondary_url = get_theme_mod('hero_btn_secondary_url', '#portfolio');

// --- Image ---
$hero_image = get_theme_mod('hero_image', get_template_directory_uri() . '/assets/img/hero-dashboard.jpg');
?>

<section id="hero" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="hero-title fw-bold">
                        <?php echo wp_kses_post($hero_heading); ?>
                    </h1>
                    <p class="hero-subtitle">
                        <?php echo esc_html($hero_paragraph); ?>
                    </p>
                    <div class="hero-actions d-flex gap-3">
                        <a href="<?php echo esc_url($btn_primary_url); ?>" class="btn btn-primary btn-lg">
                            <?php echo esc_html($btn_primary_label); ?>
                        </a>
                        <a href="<?php echo esc_url($btn_secondary_url); ?>" class="btn btn-outline-dark btn-lg px-4">
                            <?php echo esc_html($btn_secondary_label); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="hero-visual position-relative">
                    <div class="rounded-4 overflow-hidden shadow-lg bg-white p-2">
                        <img src="<?php echo esc_url($hero_image); ?>" alt="Dashboard Preview"
                            class="img-fluid rounded-3">
                    </div>
                    <!-- Small accent element -->
                    <div class="position-absolute bottom-0 start-0 translate-middle-x mb-n4 ms-4 p-3 bg-white rounded-3 shadow-sm d-none d-md-block"
                        style="width: 180px;">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-success rounded-circle" style="width: 10px; height: 10px;"></div>
                            <span class="small fw-semibold">Conversion +24%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>