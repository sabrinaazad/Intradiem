<section class="section section--side-by-side-infograph" id="<?php echo the_sub_field('id')?>">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                
                   <div class="bloom-wrapper"> 
                        <div class="image-wrapper"> 
                            <img src="/wp-content/themes/cardinaltheme/assets/bloom.png" alt="infograph" />
                            <img src="/wp-content/themes/cardinaltheme/assets/middle-circle.png" alt="circle" class="middle-circle" />
                            <img src="/wp-content/themes/cardinaltheme/assets/logo.png" alt="logo" class="middle-logo" />
                            <h4 class="middle-title"><?php the_sub_field('title_in_center'); ?></h4>
                       </div>
                       <a class="circle one" href="<?php the_sub_field('link_one'); ?>">
                            <img class="icon" src="<?php the_sub_field('icon_one'); ?>" alt="icon" />
                            <h4 class="title"><?php the_sub_field('title_one'); ?></h4>
                            <div class="blurb"><?php the_sub_field('blurb_one'); ?></div>
                            <div class="label">
                                <svg viewBox="0 0 500 500">
                                    <path id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                                    <text width="500">
                                    <textPath xlink:href="#curve">
                                        <?php the_sub_field('title_one'); ?>
                                    </textPath>
                                    </text>
                                </svg>    
                            </div>
                        </a>
                       <a class="circle two" href="<?php the_sub_field('link_two'); ?>">
                            <img class="icon" src="<?php the_sub_field('icon_two'); ?>" alt="icon" />
                            <h4 class="title"><?php the_sub_field('title_two'); ?></h4>
                            <div class="blurb"><?php the_sub_field('blurb_two'); ?></div>
                            <div class="label">
                                <svg viewBox="0 0 500 500">
                                    <path id="curve2" d="M59.1,87.1c4,4.8,65.5,75.9,178.6,74.9c111.3-0.9,170.8-70.8,175.1-76"/>
                                    <text width="500">
                                    <textPath xlink:href="#curve2">
                                        <?php the_sub_field('title_two'); ?>
                                    </textPath>
                                    </text>
                                </svg>    
                            </div>
                        </a>
                       <a class="circle three" href="<?php the_sub_field('link_three'); ?>">
                            <img class="icon" src="<?php the_sub_field('icon_three'); ?>" alt="icon" />
                            <h4 class="title"><?php the_sub_field('title_three'); ?></h4>
                            <div class="blurb"><?php the_sub_field('blurb_three'); ?></div>
                            <div class="label">
                                <svg viewBox="0 0 500 500">
                                    <path id="curve3" d="M59.1,87.1c4,4.8,65.5,75.9,178.6,74.9c111.3-0.9,170.8-70.8,175.1-76"/>
                                    <text width="500">
                                    <textPath xlink:href="#curve3">
                                        <?php the_sub_field('title_three'); ?>
                                    </textPath>
                                    </text>
                                </svg>    
                            </div>
                        </a>
                   </div>
       
            </div>          
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
            <div class="col">
                <div class="section-wrapper">

                    <?php $heading = get_sub_field('heading');
                    if( $heading ): ?>
                        <h2 class="heading left-aligned"><?php echo $heading; ?></h2>
                    <?php endif; ?>

                    <?php $blurb = get_sub_field('blurb');
                    if( $blurb ): ?>
                        <?php echo $blurb; ?>
                    <?php endif; ?>
                    
                    <?php $button = get_sub_field('button');
                    if ($button) :
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                        $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <div class="button-wrapper">
                        <a class="btn btn-primary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                    </div>
                    <?php endif; ?>
                </div>   
        </div>         
        <?php endwhile; else :  endif; ?>
        
    </div>
</section>