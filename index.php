<?php get_header(); ?>

<main>
    <?php
// List of modular sections
$sections = array(
    'hero',
    'logos',
    'services',
    'benefits',
    'portfolio',
    'process',
    'contact'
);

foreach ($sections as $section) {
    get_template_part('template-parts/section', $section);
}
?>
</main>

<?php get_footer(); ?>