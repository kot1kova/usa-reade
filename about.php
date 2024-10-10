<?php

// Template Name: About
?>
<?php get_header(); ?>
<main class="about-page">
    <section
        class="hero"
        style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/Hero-about.png)">
        <div class="hero__inner container">
            <div class="hero__banner">
                <h1 class="hero__title">About Us</h1>
            </div>
        </div>
    </section>
    <section class="stats">
        <div class="stats__inner container">
            <h2 class="stats__title">Some count that matters</h2>
            <p class="stats__subtitle">
                Our achievement in the journey depicted in numbers
            </p>
            <div class="stats__items">
                <div class="stats__item">
                    <p class="stats__number">38</p>
                    <p class="stats__desc">Clients</p>
                </div>
                <div class="stats__item central">
                    <p class="stats__number">300+</p>
                    <p class="stats__desc">Taken business legalities</p>
                </div>
                <div class="stats__item">
                    <p class="stats__number">8</p>
                    <p class="stats__desc">Years of Journey</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about__inner container">
            <div class="about__row row-top">
                <div class="about__card">
                    <h2 class="about__title">About us</h2>
                    <p class="about__text">
                        <?php the_field('about_us_text', 21) ?>
                    </p>
                    <a href="#" class="btn btn-card">More on Our History</a>
                </div>
                <div
                    class="about__img img-right"
                    style="background-image: url(<?php the_field('about_women', 21); ?>)"></div>
            </div>
            <div class="about__row row-bottom">
                <img
                    src="<?php the_field('about_photo_two', 21); ?>"
                    alt=""
                    class="about__img img-left" />
                <div class="about__card">
                    <p class="about__text">
                        <?php the_field('about_us_text_two', 21) ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="team__inner container">
            <h2 class="team__title">Meet our leading and strong team</h2>
            <div class="team__row">
                <?php if (have_rows('teams', 21)) :
                    while (have_rows('teams', 21)) :
                        the_row(); ?>

                        <div class="team__person">
                            <div class="team__photo">
                                <img src="<?php the_sub_field('team_photo', 21); ?>" alt="employee image" />
                            </div>
                            <div class="team__info">
                                <p class="team__name"><?php the_sub_field('team_name'); ?></p>
                                <p class="team__prof"><?php the_sub_field('team_profession'); ?></p>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>
    <section class="call">
        <div class="call__inner container">
            <div class="call__box">
                <p class="call__text">
                    <?php the_field('info_box_phone', 21) ?>
                </p>
            </div>
            <div class="call__form">
                <a href="tel: +12345678" class="call__phone"> <?php the_field('phone_info', 21) ?></a>
                <a class="call__icons">
                    <img
                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/call-icon.png"
                        alt=""
                        class="call__icon" />
                </a>
            </div>
        </div>
    </section>
    <section class="values">
        <h2 class="values__title">Our values</h2>
        <div class="values__inner">
            <div class="values__wrapper container">
                <div class="values__cards">
                    <div class="values__card">
                        <img
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/scales.png"
                            alt=""
                            class="card__icon" />
                        <p class="card__title"><?php the_field('values_cart_title', 21) ?></p>
                        <p class="card__text">

                            <?php the_field('values_card_text', 21) ?>

                        </p>
                    </div>
                    <div class="values__card">
                        <img
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/scales.png"
                            alt=""
                            class="card__icon" />
                        <p class="card__title">Integrity and Trust</p>
                        <p class="card__text">
                            We fight tirelessly for our clients’ rights, offering
                            strategic, thorough defense for immigration and criminal
                            matters, striving for the best outcomes.
                        </p>
                    </div>
                    <div class="values__card">
                        <img
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/scales.png"
                            alt=""
                            class="card__icon" />
                        <p class="card__title">Integrity and Trust</p>
                        <p class="card__text">
                            We fight tirelessly for our clients’ rights, offering
                            strategic, thorough defense for immigration and criminal
                            matters, striving for the best outcomes.
                        </p>
                    </div>
                    <div class="values__card">
                        <img
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/scales.png"
                            alt=""
                            class="card__icon" />
                        <p class="card__title">Integrity and Trust</p>
                        <p class="card__text">
                            We fight tirelessly for our clients’ rights, offering
                            strategic, thorough defense for immigration and criminal
                            matters, striving for the best outcomes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="reviews__inner">
            <h2 class="reviews__title">Clients Testimonials</h2>
            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">
                    <?php if (have_rows('reviews', 21)) :
                        while (have_rows('reviews', 21)) :
                            the_row(); ?>

                            <div class="swiper-slide">
                                <div class="reviews__deсor">
                                    <div class="reviews__quotes">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/quotes.png" alt="quotes" />
                                    </div>
                                </div>
                                <p class="reviews__name">
                                    <?php the_sub_field('review_title'); ?>
                                </p>
                                <p class="reviews__text">
                                    <?php the_sub_field('review_text'); ?>
                                </p>
                                <div
                                    class="reviews__star"
                                    style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/star-5.png)"></div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
                <div class="reviews__slider-box">
                    <div class="custom-prev">
                        <svg
                            width="26"
                            height="17"
                            viewBox="0 0 26 17"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M26 8.5C26 8.24955 25.9022 8.00936 25.728 7.83227C25.5539 7.65518 25.3177 7.55569 25.0715 7.55569H3.1716L9.01566 1.61408C9.10198 1.52628 9.17047 1.42205 9.21719 1.30733C9.26391 1.19262 9.28796 1.06967 9.28796 0.945505C9.28796 0.821339 9.26391 0.69839 9.21719 0.583676C9.17047 0.468962 9.10198 0.36473 9.01566 0.276932C8.92933 0.189133 8.82684 0.119488 8.71405 0.0719723C8.60125 0.0244563 8.48036 0 8.35827 0C8.23618 0 8.11529 0.0244563 8.00249 0.0719723C7.8897 0.119488 7.78721 0.189133 7.70088 0.276932L0.272785 7.83143C0.186316 7.91914 0.117712 8.02335 0.0709035 8.13808C0.0240945 8.2528 0 8.37579 0 8.5C0 8.62421 0.0240945 8.7472 0.0709035 8.86192C0.117712 8.97665 0.186316 9.08085 0.272785 9.16857L7.70088 16.7231C7.78721 16.8109 7.8897 16.8805 8.00249 16.928C8.11529 16.9755 8.23618 17 8.35827 17C8.48036 17 8.60125 16.9755 8.71405 16.928C8.82684 16.8805 8.92933 16.8109 9.01566 16.7231C9.10198 16.6353 9.17047 16.531 9.21719 16.4163C9.26391 16.3016 9.28796 16.1787 9.28796 16.0545C9.28796 15.9303 9.26391 15.8074 9.21719 15.6927C9.17047 15.578 9.10198 15.4737 9.01566 15.3859L3.1716 9.44431H25.0715C25.3177 9.44431 25.5539 9.34482 25.728 9.16773C25.9022 8.99064 26 8.75045 26 8.5Z"
                                fill="#070707"
                                style="
                        fill: #070707;
                        fill: color(display-p3 0.0275 0.0275 0.0275);
                        fill-opacity: 1;
                        " />
                        </svg>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="custom-next">
                        <svg
                            width="26"
                            height="17"
                            viewBox="0 0 26 17"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M-1.16426e-06 8.5C-1.18615e-06 8.75045 0.0978229 8.99063 0.271952 9.16773C0.446082 9.34482 0.682254 9.44431 0.928509 9.44431L22.8284 9.44431L16.9843 15.3859C16.898 15.4737 16.8295 15.578 16.7828 15.6927C16.7361 15.8074 16.712 15.9303 16.712 16.0545C16.712 16.1787 16.7361 16.3016 16.7828 16.4163C16.8295 16.531 16.898 16.6353 16.9843 16.7231C17.0707 16.8109 17.1732 16.8805 17.286 16.928C17.3987 16.9755 17.5196 17 17.6417 17C17.7638 17 17.8847 16.9755 17.9975 16.928C18.1103 16.8805 18.2128 16.8109 18.2991 16.7231L25.7272 9.16857C25.8137 9.08086 25.8823 8.97665 25.9291 8.86192C25.9759 8.7472 26 8.62421 26 8.5C26 8.37579 25.9759 8.2528 25.9291 8.13808C25.8823 8.02335 25.8137 7.91915 25.7272 7.83143L18.2991 0.276933C18.2128 0.189136 18.1103 0.119489 17.9975 0.0719731C17.8847 0.0244572 17.7638 1.18732e-06 17.6417 1.17665e-06C17.5196 1.16597e-06 17.3988 0.0244572 17.286 0.071973C17.1732 0.119489 17.0707 0.189136 16.9843 0.276933C16.898 0.364732 16.8295 0.468963 16.7828 0.583676C16.7361 0.69839 16.712 0.82134 16.712 0.945504C16.712 1.06967 16.7361 1.19262 16.7828 1.30734C16.8295 1.42205 16.898 1.52628 16.9843 1.61408L22.8284 7.55569L0.92851 7.55569C0.682254 7.55569 0.446082 7.65518 0.271952 7.83227C0.097823 8.00936 -1.14236e-06 8.24955 -1.16426e-06 8.5Z"
                                fill="#070707"
                                style="
                        fill: #070707;
                        fill: color(display-p3 0.0275 0.0275 0.0275);
                        fill-opacity: 1;
                        " />
                        </svg>
                    </div>
                </div>
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