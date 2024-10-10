<?php

// Template Name: Contact
?>
<?php get_header(); ?>
<main class="contact-page">
    <section
        class="hero"
        style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/Hero-contact.png)">
        <div class="hero__inner container">
            <div class="hero__banner">
                <h1 class="hero__title">Contact Us</h1>
            </div>
        </div>
    </section>
    <section class="info">
        <p class="info__text container">
            <?php the_field('inform', 25) ?>
        </p>
    </section>
    <section class="contacts">
        <div class="contacts__inner container">
            <div class="contacts__cards">
                <div class="contact__card">
                    <img
                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/mail-contact.png"
                        alt="mail icon"
                        class="contact__icon" />
                    <div class="contact__info">
                        <p class="contact__title">By email</p>
                        <a href="mail: hello@example.com" class="contact__mail">
                            <?php the_field('email_info', 25) ?>
                        </a>
                    </div>
                </div>
                <div class="contact__card">
                    <img
                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/phone-contact.png"
                        alt="mail icon"
                        class="contact__icon" />
                    <div class="contact__info">
                        <p class="contact__title">By Call</p>
                        <a href="tel: +123 456 7892" class="contact__phone">
                            <?php the_field('phone_info', 25) ?>
                        </a>
                    </div>
                </div>
                <div class="contact__card">
                    <img
                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/point-contact.png"
                        alt="mail icon"
                        class="contact__icon" />
                    <div class="contact__info">
                        <p class="contact__title">By Online Form:</p>
                        <a href="#" class="btn btn-contact">Contact us
                            <svg
                                width="17"
                                height="16"
                                viewBox="0 0 17 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6" clip-path="url(#clip0_48_1089)">
                                    <path
                                        d="M1.07129 4.40002L8.09986 11.4286C8.15116 11.4833 8.21313 11.5268 8.28192 11.5566C8.35072 11.5864 8.42489 11.6018 8.49986 11.6018C8.57483 11.6018 8.649 11.5864 8.7178 11.5566C8.78659 11.5268 8.84856 11.4833 8.89986 11.4286L15.9284 4.40002"
                                        stroke="#000001"
                                        style="
                          stroke: #000001;
                          stroke: color(display-p3 0 0 0.0039);
                          stroke-opacity: 1;
                        "
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_48_1089">
                                        <rect
                                            width="16"
                                            height="16"
                                            fill="white"
                                            style="fill: white; fill-opacity: 1"
                                            transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="contact__frame-wrapper">
                <iframe
                    class="contact__map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325516.5693625097!2d30.20304561135033!3d50.40200749830818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1727867831208!5m2!1sru!2sua"
                    height="550"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section class="feedback"
        style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/bg-feedback.png);">
        <div class="feedback__inner container">
            <div class="feedback__bg">
                <h2 class="feedback__title">Book Your Appointment</h2>
                <p class="feedback__subtitle">Get the Legal Support You Need Today</p>
                <?php echo do_shortcode('[contact-form-7 id="6c6a7ba" title="FeedBack form"]') ?>
                <p class="feedback__text">* indicates a required field</p>
            </div>


        </div>
    </section>
</main>
<?php get_footer(); ?>