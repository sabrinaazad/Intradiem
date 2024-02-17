<section class="section section--side-by-side-list-image full-width no-padded-sides" id="<?php echo the_sub_field('id'); ?>">
   <div class="border"></div>
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <div class="section-wrapper">

                    <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
                    <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
                    <?php if (get_sub_field("blurb")) : ?><div class="blurb"><?php the_sub_field("blurb"); ?></div><?php endif; ?>
                    
                    <ul class="list">
                        <?php if (have_rows('list')) : $count=0; while (have_rows('list')) : the_row(); ?>
                            <li><div class="image-wrapper"><img src="<?php the_sub_field('icon')?>" alt="icon" class="icon" /></div><div class="item"><?php the_sub_field('list_item'); ?></div></li>  
                        <?php $count++; endwhile; else : endif; ?>
                    </ul>
                    
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
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>  
            <div class="col">
            <?php   
                $video = get_sub_field('video');
                $image = get_sub_field('image');
            ?>
            <?php 
                if( get_sub_field('image_or_video') == 'Video' ) { ?>
                    <div class="video"><?php echo $video; ?></div>
            <?php 
                } elseif (get_sub_field('image_or_video') == 'Image' ) { ?>
                    <div class="image-wrapper" style="background-image: url(<?php echo the_sub_field('image'); ?>)"></div>
            <?php } ?>
            
            </div>           
        <?php endwhile; else :  endif; ?>
    </div>
</section>