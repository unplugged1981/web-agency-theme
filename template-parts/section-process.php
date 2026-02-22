<?php
/**
 * Template part for the Process Section
 */
$process_tag = get_field('process_tag') ?: 'Our Process';
$process_title = get_field('process_title') ?: 'How we bring your vision to life';
$process_subtitle = get_field('process_subtitle') ?: 'A streamlined four-step approach to delivering world-class digital solutions.';
?>

<section id="process" class="process-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-7">
                <span class="section-tag">
                    <?php echo esc_html($process_tag); ?>
                </span>
                <h2 class="display-5 fw-bold mb-3">
                    <?php echo esc_html($process_title); ?>
                </h2>
                <p class="text-muted lead">
                    <?php echo esc_html($process_subtitle); ?>
                </p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <?php if (have_rows('process_list')): ?>
            <?php $i = 1;
    while (have_rows('process_list')):
        the_row(); ?>
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="process-number">
                        <?php echo $i; ?>
                    </div>
                    <h4>
                        <?php the_sub_field('title'); ?>
                    </h4>
                    <p>
                        <?php the_sub_field('description'); ?>
                    </p>
                </div>
            </div>
            <?php $i++;
    endwhile; ?>
            <?php
else: ?>
            <!-- Static Fallback 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="process-number">1</div>
                    <h4>Discovery</h4>
                    <p>We dive deep into your brand, goals, and audience to create a strategic roadmap.</p>
                </div>
            </div>
            <!-- Static Fallback 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="process-number">2</div>
                    <h4>Design</h4>
                    <p>We craft high-fidelity prototypes and UI designs that prioritize user experience.</p>
                </div>
            </div>
            <!-- Static Fallback 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="process-number">3</div>
                    <h4>Development</h4>
                    <p>Our engineers build your site using the cleanest and most efficient code practices.</p>
                </div>
            </div>
            <!-- Static Fallback 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="process-step">
                    <div class="process-number">4</div>
                    <h4>Launch</h4>
                    <p>After rigorous testing, we go live and provide ongoing support and optimization.</p>
                </div>
            </div>
            <?php
endif; ?>
        </div>
    </div>
</section>