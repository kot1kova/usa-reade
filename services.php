<?php

// Template Name: Services
?>
<?php get_header(); ?>
<main class="services-page">
    <section
        class="hero"
        style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/Hero-services.png)">
        <div class="hero__inner container">
            <div class="hero__banner">
                <h1 class="hero__title">Services</h1>
            </div>
        </div>
    </section>
    <section class="info">
        <p class="info__text container">
            <?php the_field('service_info_box', 33) ?>
        </p>
    </section>
    <section class="tabs">
        <div class="tabs__inner container">
            <ul class="tabs__wrapper">
                <li data-tab="tab-1" class="tabs__title">Immigration Law</li>
                <li data-tab="tab-2" class="tabs__title">Criminal Defense</li>
                <li data-tab="tab-3" class="tabs__title">
                    Citizenship & Naturalization
                </li>
                <li data-tab="tab-4" class="tabs__title">Family Immigration</li>
                <li data-tab="tab-5" class="tabs__title">Removal & Deportation</li>
                <li data-tab="tab-6" class="tabs__title">Waivers</li>
            </ul>
            <!-- dropdown -->
            <div class="tabs__dropdown">
                <div class="tabs__dropdown-wrapper">
                    <button
                        onclick="dropdown()"
                        class="tabs__btn-drop"
                        id="dropdownButton">
                        Immigration Law
                        <img
                            class="tabs__arrow drop-down"
                            id="arrowDown"
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-downDrop.png"
                            alt="Стрелка вниз" />
                        <img
                            class="tabs__arrow drop-up"
                            id="arrowUp"
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-upDrop.png"
                            alt="Стрелка вверх"
                            style="display: none" />
                    </button>
                    <ul id="dropdown" class="tabs__drop-content">
                        <li class="tabs__drop-list">
                            <a
                                class="tabs__drop-link"
                                onclick="selectTab('tab-1', 'Immigration Law')">Immigration Law</a>
                        </li>
                        <li class="tabs__drop-list">
                            <a
                                class="tabs__drop-link"
                                onclick="selectTab('tab-2', 'Criminal Defense')">Criminal Defense</a>
                        </li>
                        <li class="tabs__drop-list">
                            <a
                                class="tabs__drop-link"
                                onclick="selectTab('tab-3', 'Citizenship & Naturalization')">Citizenship & Naturalization</a>
                        </li>
                        <li class="tabs__drop-list">
                            <a
                                class="tabs__drop-link"
                                onclick="selectTab('tab-4', 'Family Immigration')">Family Immigration</a>
                        </li>
                        <li class="tabs__drop-list">
                            <a
                                class="tabs__drop-link"
                                onclick="selectTab('tab-5', 'Removal & Deportation')">Removal & Deportation</a>
                        </li>
                        <li class="tabs__drop-list">
                            <a
                                class="tabs__drop-link"
                                onclick="selectTab('tab-6', 'Waivers')">Waivers</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- dropdown -->
            <div class="tabs__items">
                <div id="tab-1" class="tabs__item hidden-tabs-item">
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('immigration_law_title', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('immigration_law_text', 33) ?>
                        </p>
                    </div>
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('immigration_law_title_2', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('immigration_law_text_2', 33) ?>
                        </p>
                    </div>
                    <div class="call tabs__call">
                        <div class="call__inner">
                            <div class="call__box">
                                <p class="call__text">
                                    <?php the_field('info_box_phone', 33) ?>
                                </p>
                            </div>
                            <div class="call__form">
                                <a href="tel: +12345678" class="call__phone"><?php the_field('phone_nub', 33) ?>
                                </a>
                                <a class="call__icons">
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/call-icon.png"
                                        alt=""
                                        class="call__icon" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acardion">
                        <div class="acardion__inner">
                            <h2 class="tabs__subtitle"><?php the_field('immigration_law_title_3', 33) ?></h2>
                            <?php if (have_rows('imigration_faq', 33)) :
                                while (have_rows('imigration_faq', 33)) :
                                    the_row(); ?>
                                    <button class="accordion">
                                        <?php the_sub_field('faq_title'); ?>
                                        <img
                                            class="btn-acardion"
                                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-down.png"
                                            alt="" />
                                    </button>
                                    <div class="panel">
                                        <p>
                                            <?php the_sub_field('faq_text'); ?>
                                        </p>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tabs__item hidden-tabs-item">
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('criminal_cefense_title', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('criminal_cefense_text', 33) ?>
                        </p>
                    </div>
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('criminal_cefense_title_2', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('immigration_law_text_2', 33) ?>
                        </p>
                    </div>
                    <div class="call tabs__call">
                        <div class="call__inner">
                            <div class="call__box">
                                <p class="call__text">
                                    <?php the_field('info_box_phone', 33) ?>
                                </p>
                            </div>
                            <div class="call__form">
                                <a href="tel: +12345678" class="call__phone"><?php the_field('phone_nub', 33) ?>
                                </a>
                                <a class="call__icons">
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/call-icon.png"
                                        alt=""
                                        class="call__icon" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acardion">
                        <div class="acardion__inner">
                            <h2 class="tabs__subtitle"><?php the_field('criminal_cefense_title_3', 33) ?></h2>
                            <?php if (have_rows('criminal_faq', 33)) :
                                while (have_rows('criminal_faq', 33)) :
                                    the_row(); ?>
                                    <button class="accordion">
                                        <?php the_sub_field('criminal_tltle'); ?>
                                        <img
                                            class="btn-acardion"
                                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-down.png"
                                            alt="" />
                                    </button>
                                    <div class="panel">
                                        <p>
                                            <?php the_sub_field('criminal_text'); ?>
                                        </p>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>

                <div id="tab-3" class="tabs__item hidden-tabs-item">
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('citizenship_naturalization_title', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('citizenship_naturalization_text', 33) ?>
                        </p>
                    </div>
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('citizenship_naturalization_title_2', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('citizenship_naturalization_text_2', 33) ?>
                        </p>
                    </div>
                    <div class="call tabs__call">
                        <div class="call__inner">
                            <div class="call__box">
                                <p class="call__text">
                                    <?php the_field('info_box_phone', 33) ?>
                                </p>
                            </div>
                            <div class="call__form">
                                <a href="tel: +12345678" class="call__phone"><?php the_field('phone_nub', 33) ?>
                                </a>
                                <a class="call__icons">
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/call-icon.png"
                                        alt=""
                                        class="call__icon" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acardion">
                        <div class="acardion__inner">
                            <h2 class="tabs__subtitle"><?php the_field('citizenship_naturalization_title_3', 33) ?></h2>
                            <?php if (have_rows('citizenship_faq', 33)) :
                                while (have_rows('citizenship_faq', 33)) :
                                    the_row(); ?>
                                    <button class="accordion">
                                        <?php the_sub_field('citizenship_title'); ?>
                                        <img
                                            class="btn-acardion"
                                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-down.png"
                                            alt="" />
                                    </button>
                                    <div class="panel">
                                        <p>
                                            <?php the_sub_field('citizenship_text'); ?>
                                        </p>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>

                <div id="tab-4" class="tabs__item hidden-tabs-item">
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('family_immigration_title', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('family_immigration_text', 33) ?>
                        </p>
                    </div>
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('family_immigration_title_2', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('family_immigration_text_2', 33) ?>
                        </p>
                    </div>
                    <div class="call tabs__call">
                        <div class="call__inner">
                            <div class="call__box">
                                <p class="call__text">
                                    <?php the_field('info_box_phone', 33) ?>
                                </p>
                            </div>
                            <div class="call__form">
                                <a href="tel: +12345678" class="call__phone"><?php the_field('phone_nub', 33) ?>
                                </a>
                                <a class="call__icons">
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/call-icon.png"
                                        alt=""
                                        class="call__icon" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acardion">
                        <div class="acardion__inner">
                            <h2 class="tabs__subtitle"><?php the_field('family_immigration_title_3', 33) ?></h2>
                            <?php if (have_rows('family_faq', 33)) :
                                while (have_rows('family_faq', 33)) :
                                    the_row(); ?>
                                    <button class="accordion">
                                        <?php the_sub_field('family_title'); ?>
                                        <img
                                            class="btn-acardion"
                                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-down.png"
                                            alt="" />
                                    </button>
                                    <div class="panel">
                                        <p>
                                            <?php the_sub_field('family_text'); ?>
                                        </p>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>

                <div id="tab-5" class="tabs__item hidden-tabs-item">
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('removal_deportation_title', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('removal_deportation_text', 33) ?>
                        </p>
                    </div>
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('removal_deportation_title_2', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('removal_deportation_text_2', 33) ?>
                        </p>
                    </div>
                    <div class="call tabs__call">
                        <div class="call__inner">
                            <div class="call__box">
                                <p class="call__text">
                                    <?php the_field('info_box_phone', 33) ?>
                                </p>
                            </div>
                            <div class="call__form">
                                <a href="tel: +12345678" class="call__phone"><?php the_field('phone_nub', 33) ?>
                                </a>
                                <a class="call__icons">
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/call-icon.png"
                                        alt=""
                                        class="call__icon" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acardion">
                        <div class="acardion__inner">
                            <h2 class="tabs__subtitle"><?php the_field('removal_deportation_title_3', 33) ?></h2>
                            <?php if (have_rows('removal_fqa', 33)) :
                                while (have_rows('removal_fqa', 33)) :
                                    the_row(); ?>
                                    <button class="accordion">
                                        <?php the_sub_field('removal_title'); ?>
                                        <img
                                            class="btn-acardion"
                                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-down.png"
                                            alt="" />
                                    </button>
                                    <div class="panel">
                                        <p>
                                            <?php the_sub_field('removal_text'); ?>
                                        </p>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>

                <div id="tab-6" class="tabs__item hidden-tabs-item">
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('waivers_title', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('waivers_text', 33) ?>
                        </p>
                    </div>
                    <div class="tabs__info">
                        <h2 class="tabs__subtitle"><?php the_field('waivers_title_2', 33) ?></h2>
                        <p class="tabs__text">
                            <?php the_field('waivers_text_2', 33) ?>
                        </p>
                    </div>
                    <div class="call tabs__call">
                        <div class="call__inner">
                            <div class="call__box">
                                <p class="call__text">
                                    <?php the_field('info_box_phone', 33) ?>
                                </p>
                            </div>
                            <div class="call__form">
                                <a href="tel: +12345678" class="call__phone"><?php the_field('phone_nub', 33) ?>
                                </a>
                                <a class="call__icons">
                                    <img
                                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/call-icon.png"
                                        alt=""
                                        class="call__icon" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="acardion">
                        <div class="acardion__inner">
                            <h2 class="tabs__subtitle"><?php the_field('waivers_title_3', 33) ?></h2>
                            <?php if (have_rows('waivers_faq', 33)) :
                                while (have_rows('waivers_faq', 33)) :
                                    the_row(); ?>
                                    <button class="accordion">
                                        <?php the_sub_field('waivers_faq_title'); ?>
                                        <img
                                            class="btn-acardion"
                                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-down.png"
                                            alt="" />
                                    </button>
                                    <div class="panel">
                                        <p>
                                            <?php the_sub_field('waivers_faq_text'); ?>
                                        </p>
                                    </div>

                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- </div> -->
    </section>

    <!-- ============= -->

    <!-- ================================= -->
    <section class="about">
        <div class="about__inner container">
            <div class="about__card citation">
                <p class="about__text citation__text">
                    <?php the_field('service_citation', 33) ?>
                </p>
                <a href="#" class="btn btn-card">Contact Us</a>
            </div>
            <!-- about__card -->
            <!-- <div class="abous__img"></div> -->
            <img src="<?php bloginfo('template_url'); ?>/assets/img/img_woman.png" alt="" class="about__img" />
        </div>
    </section>
    <section class="reviews">
        <div class="reviews__inner">
            <h2 class="reviews__title">Clients Testimonials</h2>
            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">
                    <?php if (have_rows('reviews', 33)) :
                        while (have_rows('reviews', 33)) :
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