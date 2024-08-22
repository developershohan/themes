<?php $myblogger_side_logo_switch = get_theme_mod('myblogger_side_logo_switch', 'true') ?>
<?php $myblogger_side_social_switch = get_theme_mod('myblogger_side_social_switch', 'true') ?>

<!-- offcanvas area start -->
<div class="offcanvas__area offcanvas__area-1">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__shape">
            <img class="offcanvas__shape-1" src="assets/img/shape/offcanvas-shape-1.png" alt="">
        </div>
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="offcanvas__content">
            <?php if (!empty($myblogger_side_logo_switch)): ?>
                <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <?php myblogger_side_panel_logo() ?>
                    </div>

                <?php endif ?>
            </div>
            <div class="mobile-menu fix d-lg-none"></div>
            <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
                <nav>
                    <?php myblogger_side_panel_menu(); ?>
                    <!-- <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="services.html">Service</a></li>
                  <li><a href="blog-grid-2.html">Blog</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="contact.html">Contact</a></li>
               </ul> -->
                </nav>
            </div>
            <div class="offcanvas__btn">
                <a href="contact.html" class="tp-btn-offcanvas">Getting Started <i
                        class="fa-regular fa-chevron-right"></i></a>
            </div>
            <?php if (!empty($myblogger_side_social_switch)): ?>
            <div class="offcanvas__social">
                <h3 class="offcanvas__social-title">Follow :</h3>
                <?php myblogger_social_media() ?>
            </div>
            <?php endif ?>
            <div class="offcanvas__contact">
                <p class="offcanvas__contact-call"><a href="tel:+964-742-44-763">+964 742 44 763</a></p>
                <p class="offcanvas__contact-mail"><a href="mailto:info@harry.com">info@harry.com</a></p>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- offcanvas area end -->