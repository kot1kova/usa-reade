<footer class="footer">
    <div class="footer__inner container">
        <div
            class="footer__logo"
            style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/footer__logo.svg)"></div>
        <div class="footer__contact">
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="#" class="footer__link"><?php the_field('address_footer', 25) ?></a>
                </li>
                <li class="footer__item">
                    <a href="tele:+1-973-615-7131" class="footer__link"><?php the_field('phone_info', 25) ?></a>
                </li>
                <li class="footer__item">
                    <a href="email" class="footer__link"><?php the_field('email_info', 25) ?></a>
                </li>
            </ul>
        </div>
        <div class="footer__menu">
            <ul class="footer__links">
                <li class="footer__item">
                    <a href="#" class="footer__link">About Us</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Services</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Contact Us</a>
                </li>
                <li class="footer__item footer__testimonials">
                    <a href="#" class="footer__link">Testimonials</a>
                </li>
            </ul>
        </div>
        <div class="footer__icons">
            <div
                class="footer__icon"
                style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.svg)"></div>
            <img
                src="<?php bloginfo('template_url'); ?>/assets/img/icons/whatsapp.svg"
                alt="logo-whatsapp"
                class="footer__icon" />
        </div>
    </div>
    <div class="copyright">
        <div class="copyright__inner container">
            <p class="copyright__text">2023 furino. All rights reverved</p>
            <div class="copyright__btn">
                <div class="call">
                    <!-- <div class="call__inner container"> -->

                    <div class="call__box">
                        <h2 class="call__title">Call Me</h2>
                        <p class="call__subtitle">We'll call you!</p>
                        <?php echo do_shortcode('[contact-form-7 id="a6afcbd" title="Call Me"]') ?>
                        <p class="call__text">* indicates a required field</p>
                        <a href="tele: +123 123 3321" class="btn btn-call">Request call</a>
                    </div>

                </div>
                <a href="mailto:<?php the_field('email_info', 25) ?>" class="copyright__mail">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/mail-footer.png" alt="" class="copyright__icon">
                </a>
                <button class="copyright__phone">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/phone-footer.png" alt="" class="copyright__icon">
                </button>
            </div>

            <!--  </div> -->
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>


</body>

</html>