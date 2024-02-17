<nav class="main-nav full-width" id="mainNav">
    <div class="sticky-wrapper">
    <div class="topbar desktop-only">
        <div class="content">
            <div class="top-nav__drawer">
                <?php wp_nav_menu(array(
                    'theme_location' => 'top-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="top-nav__container">
                        <ul class="top-nav">
                            %3$s
                        </ul></div>'
                ));
                ?>
            </div>
        </div>
    </div>

        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <div class="logo">
                <? if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }?>
                </div>
            </div>

            <div class="main-nav__bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav">
                            %3$s
                        </ul></div>'
                ));
                ?>

            </div>
        </div>
    </div>
</nav>
