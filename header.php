<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <?php wp_head(); ?>

</head>

<body>
    <header class="header">
        <div class="header__inner container">
            <nav class="nav">
                <a href="./index.html" class="nav__logo">
                    <img
                        src="<?php bloginfo('template_url'); ?>/assets/img/header-logo.svg"
                        alt="header-logo"
                        class="header__logo" />
                </a>
                <button class="nav__toggle" aria-label="Toggle navigation">
                    <span class="nav__toggle-bar"></span>
                    <span class="nav__toggle-bar"></span>
                    <span class="nav__toggle-bar"></span>
                </button>
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li><a href="/about" class="nav__link">About Us</a></li>
                        <li>
                            <a href="/services" class="nav__link">Services</a>
                        </li>
                        <li>
                            <a href="/contacts" class="nav__link">Contact Us</a>
                        </li>
                        <ul class="nav__points footer__list">
                            <li class="nav__items">
                                <a href="#" class="nav__point">4821 East Street Road, Ste. 201,<br />Feasterville
                                    Trevose, PA 19053</a>
                            </li>
                            <li class="nav__item">
                                <a href="tel" class="nav__point"> +1-973-615-7131</a>
                            </li>
                            <li class="nav__item">
                                <a href="mailto:" class="nav__point">info@astrumlawfirm.com</a>
                            </li>
                            <div class="nav__icons">
                                <div
                                    class="footer__icon nav__icon"
                                    style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/icons/telegram-dark.svg);"></div>
                                <img
                                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/whatsapp-dark.svg"
                                    alt="logo-whatsapp"
                                    class="footer__icon" />
                            </div>
                        </ul>
                    </ul>
                </div>
            </nav>
        </div>
    </header>