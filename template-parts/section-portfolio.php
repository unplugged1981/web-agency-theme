<?php
/**
 * Template part for the Portfolio Section
 */
$portfolio_tag = get_field('portfolio_tag') ?: 'Our Portfolio';
$portfolio_title = get_field('portfolio_title') ?: 'Recent work that speaks for itself';
$portfolio_subtitle = get_field('portfolio_subtitle') ?: 'A selection of projects where we helped our clients achieve remarkable growth.';
?>

<section id="portfolio" class="portfolio-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-7">
                <span class="section-tag">
                    <?php echo esc_html($portfolio_tag); ?>
                </span>
                <h2 class="display-5 fw-bold mb-3">
                    <?php echo esc_html($portfolio_title); ?>
                </h2>
                <p class="text-muted lead">
                    <?php echo esc_html($portfolio_subtitle); ?>
                </p>
            </div>
        </div>
        <div class="row g-4">
            <?php if (have_rows('portfolio_list')): ?>
            <?php while (have_rows('portfolio_list')):
        the_row();
        $p_img = get_sub_field('image');
        $p_cat = get_sub_field('category');
        $p_title = get_sub_field('title');
        $p_link = get_sub_field('link') ?: '#';
?>
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-card">
                    <div class="portfolio-img-wrapper">
                        <img src="<?php echo esc_url($p_img); ?>" alt="<?php echo esc_attr($p_title); ?>">
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">
                            <?php echo esc_html($p_cat); ?>
                        </span>
                        <h4 class="portfolio-title">
                            <?php echo esc_html($p_title); ?>
                        </h4>
                        <a href="<?php echo esc_url($p_link); ?>" class="btn-link-portfolio">View Case Study <i
                                data-lucide="arrow-right" style="width: 18px;"></i></a>
                    </div>
                </div>
            </div>
            <?php
    endwhile; ?>
            <?php
else: ?>
            <!-- Static Fallback 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-card">
                    <div class="portfolio-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-1.jpg"
                            alt="E-commerce Project">
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">E-commerce</span>
                        <h4 class="portfolio-title">Modern Retail Platform</h4>
                        <a href="#" class="btn-link-portfolio">View Case Study <i data-lucide="arrow-right"
                                style="width: 18px;"></i></a>
                    </div>
                </div>
            </div>
            <!-- Static Fallback 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-card">
                    <div class="portfolio-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-2.jpg"
                            alt="SaaS Dashboard">
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">SaaS</span>
                        <h4 class="portfolio-title">Analytics Cloud Dashboard</h4>
                        <a href="#" class="btn-link-portfolio">View Case Study <i data-lucide="arrow-right"
                                style="width: 18px;"></i></a>
                    </div>
                </div>
            </div>
            <!-- Static Fallback 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-card">
                    <div class="portfolio-img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-3.jpg"
                            alt="Corporate Site">
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category">Corporate</span>
                        <h4 class="portfolio-title">Fintech Global Identity</h4>
                        <a href="#" class="btn-link-portfolio">View Case Study <i data-lucide="arrow-right"
                                style="width: 18px;"></i></a>
                    </div>
                </div>
            </div>
            <?php
endif; ?>
        </div>
        <div class="text-center mt-5">
            <a href="<?php echo esc_url(get_field('portfolio_button_link') ?: '#'); ?>"
                class="btn btn-outline-dark btn-lg">Explore All Projects</a>
        </div>
    </div>