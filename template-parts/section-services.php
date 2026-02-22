<?php
/**
 * Template part for the Services Section
 */
?>
<section id="services" class="services-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-7">
                <span class="section-tag">
                    <?php echo esc_html(get_field('services_tag') ?: 'Our Expertise'); ?>
                </span>
                <h2 class="display-5 fw-bold mb-3">
                    <?php echo esc_html(get_field('services_title') ?: 'Tailored solutions for your digital growth'); ?>
                </h2>
                <p class="text-muted lead">
                    <?php echo esc_html(get_field('services_subtitle') ?: 'We merge creativity with technology to deliver results that matter.'); ?>
                </p>
            </div>
        </div>
        <div class="row g-4">
            <?php
// ACF Repeater check
if (have_rows('services_list')):
    while (have_rows('services_list')):
        the_row();
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $desc = get_sub_field('description');
?>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i data-lucide="<?php echo esc_attr($icon); ?>"></i>
                    </div>
                    <h3>
                        <?php echo esc_html($title); ?>
                    </h3>
                    <p>
                        <?php echo esc_html($desc); ?>
                    </p>
                </div>
            </div>
            <?php
    endwhile;
else:
    // Static Fallback
    $static_services = array(
            array('icon' => 'layout', 'title' => 'UI/UX Design', 'desc' => 'User-centric designs that are visually stunning and intuitive, ensuring a seamless journey for your visitors.'),
            array('icon' => 'code', 'title' => 'Web Development', 'desc' => 'Custom, scalable, and high-performance websites built with the latest technologies and best practices.'),
            array('icon' => 'search', 'title' => 'SEO Optimization', 'desc' => 'Strategically optimized structures and content to improve your visibility and drive organic traffic.'),
            array('icon' => 'smartphone', 'title' => 'Mobile Apps', 'desc' => 'Native and cross-platform mobile applications tailored to provide the best user experience on all devices.'),
            array('icon' => 'database', 'title' => 'Cloud Solutions', 'desc' => 'Secure and scalable cloud infrastructure to power your digital ecosystem with maximum reliability.'),
            array('icon' => 'bar-chart-3', 'title' => 'Digital Marketing', 'desc' => 'Data-driven marketing strategies that help you reach your audience and maximize your ROI.')
    );
    foreach ($static_services as $service): ?>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i data-lucide="<?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3>
                        <?php echo $service['title']; ?>
                    </h3>
                    <p>
                        <?php echo $service['desc']; ?>
                    </p>
                </div>
            </div>
            <?php
    endforeach;
endif; ?>
        </div>
    </div>
</section>