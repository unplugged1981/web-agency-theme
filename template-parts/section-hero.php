<?php
/**
 * Template part for the Hero Section
 */
$hero_title = get_field('hero_title') ?: 'We build websites that turn <span class="text-primary">visitors</span> into customers.';
$hero_subtitle = get_field('hero_subtitle') ?: 'Helping modern brands scale through high-performance design and expert engineering. Your success is our code.';
$hero_image = get_field('hero_image') ?: get_template_directory_uri() . '/assets/img/hero-dashboard.jpg';
?>

<section id="hero" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="hero-title fw-bold">
                        <?php echo $hero_title; ?>
                    </h1>
                    <p class="hero-subtitle">
                        <?php echo esc_html($hero_subtitle); ?>
                    </p>
                    <div class="hero-actions d-flex gap-3">
                        <a href="#contact" class="btn btn-primary btn-lg">Start Your Project</a>
                        <a href="#portfolio" class="btn btn-outline-dark btn-lg px-4">View Our Work</a>
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