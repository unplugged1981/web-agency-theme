<?php
/**
 * Template part for the Client Logos Section
 */
?>
<section class="client-logos">
    <div class="container">
        <div class="row align-items-center justify-content-center g-4 text-center">
            <?php
$logos = get_field('client_logos');
if ($logos):
    foreach ($logos as $logo): ?>
            <div class="col-6 col-md-4 col-lg-2">
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"
                    class="logo-item img-fluid">
            </div>
            <?php
    endforeach;
else: ?>
            <!-- Static Fallback -->
            <div class="col-6 col-md-4 col-lg-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/amazon-logo.svg" alt="Amazon"
                    class="logo-item img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/google-logo.svg" alt="Google"
                    class="logo-item img-fluid" style="max-height: 25px;">
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ibm-logo.svg" alt="IBM"
                    class="logo-item img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/netflix-logo.svg" alt="Netflix"
                    class="logo-item img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/microsoft-logo.svg" alt="Microsoft"
                    class="logo-item img-fluid">
            </div>
            <?php
endif; ?>
        </div>
    </div>
</section>