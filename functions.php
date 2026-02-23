<?php
/**
 * Web Agency Theme functions and definitions
 */

/**
 * ACF Compatibility Layer
 * Prevents fatal errors if ACF plugin is not active.
 */
if (!function_exists('get_field')) {
    function get_field($selector, $post_id = false, $format_value = true)
    {
        return false;
    }
}
if (!function_exists('have_rows')) {
    function have_rows($selector, $post_id = false)
    {
        return false;
    }
}
if (!function_exists('the_row')) {
    function the_row()
    {
    }
}
if (!function_exists('get_sub_field')) {
    function get_sub_field($selector, $format_value = true)
    {
        return false;
    }
}
if (!function_exists('the_sub_field')) {
    function the_sub_field($selector, $format_value = true)
    {
        echo get_sub_field($selector, $format_value);
    }
}

function web_agency_scripts()
{
    // Theme version for cache busting
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue Google Fonts
    wp_enqueue_style('web-agency-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@500;700;800&display=swap', array(), null);

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.3');

    // Enqueue Main Style
    wp_enqueue_style('web-agency-style', get_template_directory_uri() . '/css/style.css', array('bootstrap'), $theme_version);

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '5.3.3', true);

    // Enqueue Lucide Icons
    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@latest', array(), null, true);

    // Enqueue Custom Scripts
    wp_enqueue_script('web-agency-scripts', get_template_directory_uri() . '/js/scripts.js', array('bootstrap-bundle', 'lucide'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'web_agency_scripts');

// Basic Theme Support
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Register Navigation Menus
    register_nav_menus(array(
        'main-menu' => esc_html__('Main Menu', 'web-agency'),
        'footer-menu' => esc_html__('Footer Menu', 'web-agency'),
    ));
});

/**
 * Customizer Settings
 */
function web_agency_customize_register($wp_customize)
{
    // -------------------------------------------------------
    // Panel: Hero Section
    // -------------------------------------------------------
    $wp_customize->add_panel('web_agency_hero_panel', array(
        'title' => __('Hero Section', 'web-agency'),
        'priority' => 25,
    ));

    // Section: Hero Content
    $wp_customize->add_section('web_agency_hero', array(
        'title' => __('Content', 'web-agency'),
        'panel' => 'web_agency_hero_panel',
    ));

    // --- Heading (H1) ---
    $wp_customize->add_setting('hero_heading', array(
        'default' => 'We build websites that turn <span class="text-primary">visitors</span> into customers.',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_heading', array(
        'label' => __('Heading (H1)', 'web-agency'),
        'description' => __('HTML allowed. Wrap a word in <code>&lt;span class="text-primary"&gt;&lt;/span&gt;</code> for the blue highlight.', 'web-agency'),
        'section' => 'web_agency_hero',
        'type' => 'textarea',
    ));

    // --- Paragraph text ---
    $wp_customize->add_setting('hero_paragraph', array(
        'default' => 'Helping modern brands scale through high-performance design and expert engineering. Your success is our code.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_paragraph', array(
        'label' => __('Paragraph Text', 'web-agency'),
        'section' => 'web_agency_hero',
        'type' => 'textarea',
    ));

    // Section: Hero Buttons
    $wp_customize->add_section('web_agency_hero_buttons', array(
        'title' => __('Buttons', 'web-agency'),
        'panel' => 'web_agency_hero_panel',
    ));

    // --- Primary button label ---
    $wp_customize->add_setting('hero_btn_primary_label', array(
        'default' => 'Start Your Project',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_btn_primary_label', array(
        'label' => __('Primary Button Label', 'web-agency'),
        'section' => 'web_agency_hero_buttons',
        'type' => 'text',
    ));

    // --- Primary button URL ---
    $wp_customize->add_setting('hero_btn_primary_url', array(
        'default' => '#contact',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_btn_primary_url', array(
        'label' => __('Primary Button URL', 'web-agency'),
        'section' => 'web_agency_hero_buttons',
        'type' => 'text',
    ));

    // --- Secondary button label ---
    $wp_customize->add_setting('hero_btn_secondary_label', array(
        'default' => 'View Our Work',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_btn_secondary_label', array(
        'label' => __('Secondary Button Label', 'web-agency'),
        'section' => 'web_agency_hero_buttons',
        'type' => 'text',
    ));

    // --- Secondary button URL ---
    $wp_customize->add_setting('hero_btn_secondary_url', array(
        'default' => '#portfolio',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_btn_secondary_url', array(
        'label' => __('Secondary Button URL', 'web-agency'),
        'section' => 'web_agency_hero_buttons',
        'type' => 'text',
    ));

    // Section: Hero Image
    $wp_customize->add_section('web_agency_hero_image', array(
        'title' => __('Image', 'web-agency'),
        'panel' => 'web_agency_hero_panel',
    ));

    // --- Hero image ---
    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Image', 'web-agency'),
        'section' => 'web_agency_hero_image',
    )));

    // -------------------------------------------------------
    // Section: Theme Colors
    // -------------------------------------------------------
    $wp_customize->add_section('web_agency_colors', array(
        'title' => __('Theme Colors', 'web-agency'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('primary_color', array(
        'default' => '#2563EB',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Primary Color', 'web-agency'),
        'section' => 'web_agency_colors',
        'settings' => 'primary_color',
    )));

    // -------------------------------------------------------
    // Section: Footer Settings
    // -------------------------------------------------------
    $wp_customize->add_section('web_agency_footer', array(
        'title' => __('Footer Settings', 'web-agency'),
        'priority' => 200,
    ));

    $wp_customize->add_setting('footer_copyright', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_copyright', array(
        'label' => __('Copyright Text Overlay', 'web-agency'),
        'section' => 'web_agency_footer',
        'type' => 'text',
        'description' => 'Replaces the default copyright text.',
    ));
}
add_action('customize_register', 'web_agency_customize_register');

/**
 * Output Customizer CSS
 */
function web_agency_customizer_css()
{
    $primary_color = get_theme_mod('primary_color', '#2563EB');
?>
<style type="text/css">
    :root {
        --primary-color: <?php echo esc_attr($primary_color);
?>;
    }
</style>
<?php
}
add_action('wp_head', 'web_agency_customizer_css', 100);

/**
 * Register ACF Fields programmatically
 */
if (function_exists('acf_add_local_field_group')):

    // Field Group: Landing Page Sections
    acf_add_local_field_group(array(
        'key' => 'group_landing_page',
        'title' => 'Landing Page Content',
        'fields' => array(
            // Hero Section
                array(
                'key' => 'field_hero_tab',
                'label' => 'Hero Section',
                'type' => 'tab',
            ),
                array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'textarea',
                'rows' => 2,
                'default_value' => 'We build websites that turn <span class="text-primary">visitors</span> into customers.',
            ),
                array(
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'text',
                'default_value' => 'Helping modern brands scale through high-performance design and expert engineering.',
            ),
                array(
                'key' => 'field_hero_image',
                'label' => 'Hero Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            // Services Section
                array(
                'key' => 'field_services_tab',
                'label' => 'Services Section',
                'type' => 'tab',
            ),
                array(
                'key' => 'field_services_title',
                'label' => 'Services Title',
                'name' => 'services_title',
                'type' => 'text',
                'default_value' => 'Tailored solutions for your digital growth',
            ),
                array(
                'key' => 'field_services_list',
                'label' => 'Services List',
                'name' => 'services_list',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                        array(
                        'key' => 'field_service_icon',
                        'label' => 'Lucide Icon Name',
                        'name' => 'icon',
                        'type' => 'text',
                    ),
                        array(
                        'key' => 'field_service_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                        array(
                        'key' => 'field_service_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
            // Client Logos
                array(
                'key' => 'field_logos_tab',
                'label' => 'Client Logos',
                'type' => 'tab',
            ),
                array(
                'key' => 'field_logos_gallery',
                'label' => 'Logos Gallery',
                'name' => 'client_logos',
                'type' => 'gallery',
            ),
            // Benefits Section
                array(
                'key' => 'field_benefits_tab',
                'label' => 'Benefits Section',
                'type' => 'tab',
            ),
                array(
                'key' => 'field_benefits_title',
                'label' => 'Benefits Title',
                'name' => 'benefits_title',
                'type' => 'text',
                'default_value' => 'Focusing on your bottom line, not just lines of code.',
            ),
                array(
                'key' => 'field_benefits_image',
                'label' => 'Benefits Image',
                'name' => 'benefits_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
                array(
                'key' => 'field_benefits_list',
                'label' => 'Benefits List',
                'name' => 'benefits_list',
                'type' => 'repeater',
                'sub_fields' => array(
                        array(
                        'key' => 'field_benefit_icon',
                        'label' => 'Lucide icon',
                        'name' => 'icon',
                        'type' => 'text',
                    ),
                        array(
                        'key' => 'field_benefit_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                        array(
                        'key' => 'field_benefit_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
            // Portfolio Section
                array(
                'key' => 'field_portfolio_tab',
                'label' => 'Portfolio Section',
                'type' => 'tab',
            ),
                array(
                'key' => 'field_portfolio_list',
                'label' => 'Portfolio Items',
                'name' => 'portfolio_list',
                'type' => 'repeater',
                'sub_fields' => array(
                        array(
                        'key' => 'field_portfolio_image',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'url',
                    ),
                        array(
                        'key' => 'field_portfolio_cat',
                        'label' => 'Category',
                        'name' => 'category',
                        'type' => 'text',
                    ),
                        array(
                        'key' => 'field_portfolio_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                        array(
                        'key' => 'field_portfolio_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ),
                ),
            ),
            // Process Section
                array(
                'key' => 'field_process_tab',
                'label' => 'Process Section',
                'type' => 'tab',
            ),
                array(
                'key' => 'field_process_list',
                'label' => 'Process Steps',
                'name' => 'process_list',
                'type' => 'repeater',
                'sub_fields' => array(
                        array(
                        'key' => 'field_process_step_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                        array(
                        'key' => 'field_process_step_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                ),
            ),
            // Contact Section
                array(
                'key' => 'field_contact_tab',
                'label' => 'Contact Section',
                'type' => 'tab',
            ),
                array(
                'key' => 'field_contact_email',
                'label' => 'Email address',
                'name' => 'contact_email',
                'type' => 'text',
            ),
                array(
                'key' => 'field_contact_phone',
                'label' => 'Phone number',
                'name' => 'contact_phone',
                'type' => 'text',
            ),
                array(
                'key' => 'field_contact_form',
                'label' => 'Contact Form Shortcode',
                'name' => 'contact_form_shortcode',
                'type' => 'text',
            ),
        ),
        'location' => array(
                array(
                    array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));

endif;