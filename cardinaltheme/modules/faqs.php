<section class="section section--faqs full-width" id="<?php echo the_sub_field('id'); ?>" style="background-image: url(<?php echo the_sub_field('background_image'); ?>);">
    <div class="section-wrapper">
        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        <div class="content-wrapper">
            <?php if (have_rows('tabs')) : $count=0; ?>
                <div class="tabs hide-on-mobile">
                    <?php while (have_rows('tabs')) : the_row(); ?>
                        <button id="tablinks<?php echo $count ?>" class="tablinks" onclick="openTab(event, '<? the_sub_field('tab_name') ?>')"><?php the_sub_field("tab_name") ?></button>
                    <?php  $count++; endwhile; ?>
                </div>
            <?php else : endif; ?>

            <?php if (have_rows('tab_content')) : ?>
                <div class="tab-content">
                    <?php while (have_rows('tab_content')) : the_row(); ?>
                        <div id="<? the_sub_field('tab_name') ?>" class="tabcontent">
                            <h3 class="hide-on-desktop"><? the_sub_field('tab_name') ?></h3>
                            <?php if (have_rows('faq')) : ?>
                                <div class="faq-wrapper">
                                    <?php while (have_rows('faq')) : the_row(); ?>
                                        <div class="faq">
                                            <h4 class="question">
                                                <button id="button">
                                                    <span></span>
                                                    <span></span>
                                                </button>
                                                <?php the_sub_field("question") ?>   
                                            </h4>
                                            <div class="answer"><?php the_sub_field("answer") ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php else : endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : endif; ?>
        </div>
    </div>
</section>
