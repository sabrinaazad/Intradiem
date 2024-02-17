<?php
/* Template Name: Contact Template */
get_header();

?>
<main class="main-wrapper">
    <section class="section section--contact-info full-width">
        <div class="box-one"></div>
        <div class="box-two hide-on-mobile"></div>
        <div class="section-wrapper">
            <div class="subheading"><?php the_field("subheading"); ?></div>
            <h2 class="title"><?php the_field("title"); ?></h2>

            <?php if (have_rows('locations')) : ?>
                <div class="location-wrapper">
                    <?php while (have_rows('locations')) : the_row(); ?>
                        <div class="location">
                            <div class="location-title">
                                <h3 class="city"><?php the_sub_field("city"); ?></h3>
                                <div class="country"><?php the_sub_field("country"); ?></div>
                            </div>
                            <div class="info-wrapper">
                                <div class="icon-wrapper"><img src="/wp-content/themes/cardinaltheme/assets/contact-icon.png" alt="contact icon" /></div>
                                <div class="address"><?php the_sub_field("address"); ?></div>
                            </div>
                            <?php if (get_sub_field("phone_main")) : ?>
                                <div class="phone-wrapper">
                                    <div class="icon-wrapper"><img src="/wp-content/themes/cardinaltheme/assets/contact-icon.png" alt="contact icon" /></div>
                                    <a class="phone" href="tel:<?php the_sub_field("phone_main"); ?>">Main: <?php the_sub_field("phone_main"); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field("phone_toll")) : ?>
                                <div class="phone-wrapper">
                                    <div class="icon-wrapper"><img src="/wp-content/themes/cardinaltheme/assets/contact-icon.png" alt="contact icon" /></div>
                                    <a class="phone" href="tel:<?php the_sub_field("phone_toll"); ?>">Toll Free: <?php the_sub_field("phone_toll"); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : endif; ?>
        </div>
    </section>
    <section class="section section--form">
        <div class="border-one"></div>
        <div class="border-two"></div>
        <div class="section-wrapper">
            <h2 class="heading"><?php the_field("form_heading"); ?></h2>
            <p class="blurb"><?php the_field("form_blurb"); ?></p>
            <?php the_field('form'); ?>
        </div>
    </section>
</main>
<?php

get_footer();
