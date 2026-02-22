<?php
/**
 * Template part for the Benefits Section
 */
$benefits_tag = get_field('benefits_tag') ?: 'Why Choose Us';
$benefits_title = get_field('benefits_title') ?: 'Focusing on your bottom line, not just lines of code.';
$benefits_image = get_field('benefits_image') ?: get_template_directory_uri() . '/assets/img/benefits-results.jpg';
?>

<section class="benefits-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="img-benefit-wrapper">
                    <img src="<?php echo esc_url($benefits_image); ?>" alt="Results"
                        class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-tag">
                    <?php echo esc_html($benefits_tag); ?>
                </span>
                <h2 class="display-5 fw-bold mb-4">
                    <?php echo $benefits_title; ?>
                </h2>

                <?php if (have_rows('benefits_list')): ?>
                <?php while (have_rows('benefits_list')):
        the_row(); ?>
                <div class="benefit-item d-flex gap-3">
                    <div class="benefit-icon-sm">
                        <i data-lucide="<?php the_sub_field('icon'); ?>"></i>
                    </div>
                    <div class="benefit-text">
                        <h4>
                            <?php the_sub_field('title'); ?>
                        </h4>
                        <p>
                            <?php the_sub_field('description'); ?>
                        </p>
                    </div>
                </div>
                <?php
    endwhile; ?>
                <?php
else: ?>
                <!-- Static Fallback -->
                <div class="benefit-item d-flex gap-3">
                    <div class="benefit-icon-sm"><i data-lucide="check"></i></div>
                    <div class="benefit-text">
                        <h4>Data-Driven Design</h4>
                        <p>Every pixel is placed with a purpose. We use analytics to inform design decisions that drive
                            conversions.</p>
                    </div>
                </div>
                <div class="benefit-item d-flex gap-3">
                    <div class="benefit-icon-sm"><i data-lucide="zap"></i></div>
                    <div class="benefit-text">
                        <h4>Lightning Fast Performance</h4>
                        <p>Speed is a ranking factor. Our websites are optimized for Core Web Vitals to ensure top-tier
                            performance.</p>
                    </div>
                </div>
                <div class="benefit-item d-flex gap-3">
                    <div class="benefit-icon-sm"><i data-lucide="lock"></i></div>
                    <div class="benefit-text">
                        <h4>Secure & Scalable</h4>
                        <p>We build on robust foundations that grow with your business, keeping your data and customers
                            safe.</p>
                    </div>
                </div>
                <?php
endif; ?>
            </div>
        </div>
    </div>
</section>