<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-4">
                <?php if (has_custom_logo()): ?>
                <div class="mb-3">
                    <?php the_custom_logo(); ?>
                </div>
                <?php
else: ?>
                <a class="navbar-brand fw-bold fs-3 mb-3 d-block" href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="text-primary">
                        <?php bloginfo('name'); ?>
                    </span>
                </a>
                <?php
endif; ?>
                <p class="text-muted">
                    <?php bloginfo('description'); ?>
                </p>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-2">
                <h5 class="fw-bold mb-4">Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link d-block mb-2">About Us</a></li>
                    <li><a href="#portfolio" class="footer-link d-block mb-2">Portfolio</a></li>
                    <li><a href="#services" class="footer-link d-block mb-2">Services</a></li>
                    <li><a href="#" class="footer-link d-block mb-2">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-2">
                <h5 class="fw-bold mb-4">Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link d-block mb-2">Web Design</a></li>
                    <li><a href="#" class="footer-link d-block mb-2">Development</a></li>
                    <li><a href="#" class="footer-link d-block mb-2">E-commerce</a></li>
                    <li><a href="#" class="footer-link d-block mb-2">SEO</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-2">
                <h5 class="fw-bold mb-4">Social</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link d-block mb-2">Twitter</a></li>
                    <li><a href="#" class="footer-link d-block mb-2">LinkedIn</a></li>
                    <li><a href="#" class="footer-link d-block mb-2">Instagram</a></li>
                    <li><a href="#" class="footer-link d-block mb-2">Dribbble</a></li>
                </ul>
            </div>
        </div>
        <hr class="opacity-10 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-muted small mb-0">
                    <?php
$copyright = get_theme_mod('footer_copyright');
if ($copyright) {
    echo esc_html($copyright);
}
else {
    echo '&copy; ' . date('Y') . ' ' . get_bloginfo('name') . '. All rights reserved.';
}
?>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <a href="#" class="footer-link small me-3">Privacy Policy</a>
                <a href="#" class="footer-link small">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>