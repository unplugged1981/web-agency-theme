<?php
/**
 * Template part for the Contact Section
 */
$contact_title = get_field('contact_title') ?: 'Ready to start your next project?';
$contact_subtitle = get_field('contact_subtitle') ?: "Contact us today for a free discovery session and let's see how we can help your brand grow.";
?>

<section id="contact" class="contact-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <h2 class="display-4 fw-bold mb-4">
                    <?php echo esc_html($contact_title); ?>
                </h2>
                <p class="lead opacity-75 mb-5">
                    <?php echo esc_html($contact_subtitle); ?>
                </p>

                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="bg-primary p-3 rounded-circle"
                        style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <i data-lucide="mail"></i>
                    </div>
                    <div>
                        <h5 class="mb-0">Email us</h5>
                        <p class="mb-0 opacity-75">
                            <?php echo esc_html(get_field('contact_email') ?: 'hello@webagency.com'); ?>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-primary p-3 rounded-circle"
                        style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <i data-lucide="phone"></i>
                    </div>
                    <div>
                        <h5 class="mb-0">Call us</h5>
                        <p class="mb-0 opacity-75">
                            <?php echo esc_html(get_field('contact_phone') ?: '+1 (555) 000-0000'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form-wrapper shadow-lg">
                    <?php
$form_shortcode = get_field('contact_form_shortcode');
if ($form_shortcode):
    echo do_shortcode($form_shortcode);
else: ?>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control" placeholder="john@example.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Subject</label>
                                <input type="text" class="form-control" placeholder="How can we help?">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Message</label>
                                <textarea class="form-control" rows="4"
                                    placeholder="Tell us about your project..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <?php
endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>