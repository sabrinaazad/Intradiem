<section class="section section--tabs">
    <div class="tab">
        <?php if (have_rows('tablinks')) : $counter=0; while (have_rows('tablinks')) : the_row(); ?>
            <div class="col">
                <?php $label = get_sub_field('label'); ?>
                <button class="tab-links" onclick="openATab(event, 'label<?php echo $counter; ?>')" id="tabLink<?php echo $counter; ?>"><?php echo $label; ?></button>
            </div>                 
        <?php $counter++; endwhile; else :  endif; ?>
    </div>
        <?php if (have_rows('tabcontent')) : $count=0; while (have_rows('tabcontent')) : the_row(); 
        $reverse = get_sub_field('reverse');
        if ($reverse) {
            $reverse = "reverse";
        } else {
            $reverse = "";
        }
        ?>
            <div id="label<?php echo $count ?>" class="tab-content">
                <div class="two-col <?php echo $reverse ?>">
                    <div class="col">
                        <?php $heading = get_sub_field('heading');
                            $subheading = get_sub_field('subheading');
                            $blurb = get_sub_field('blurb'); ?>

                        <?php if ($subheading) : ?><h4><?php echo $subheading ?></h4><?php endif; ?>
                        <?php if ($heading) : ?><h2><?php echo $heading ?></h2><?php endif; ?>
                        <?php if ($blurb) : ?><div class="blurb"><?php echo $blurb ?></div><?php endif; ?>
                        
                        <?php if (have_rows('list')) : ?> 
                            <ul class="list">
                                <?php while (have_rows('list')) : the_row(); ?>
                                    <li>
                                        <div class="image-wrapper"><img src="<?php the_sub_field('icon')?>" alt="icon" class="icon" /></div>
                                        <div class="item"><?php the_sub_field('list_item'); ?></div>
                                    </li>  
                                <?php endwhile; ?> 
                            </ul>
                        <?php else : endif; ?>       

                        <?php $button = get_sub_field('button');
                        if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                            <div class="button-wrapper">
                                <a class="btn btn-secondary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>   
                    <div class="col">
                        <?php $image = get_sub_field('image');
                        if( ( $image ) ): ?>
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?> 
                    </div>  
                </div> 
            </div>             
        <?php $count++; endwhile; else :  endif; ?>
</section>