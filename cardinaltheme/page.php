<?php

get_header();

// Check value exists.
if (have_rows('modules')) :
    // Loop through rows.
    while (have_rows('modules')) : the_row();
        
        // Case: blurb layout.
        if (get_row_layout() == 'blurb') :
            get_template_part('modules/blurb');
        endif;  

        // Case: banner-cta layout.
        if (get_row_layout() == 'banner_cta') :
            get_template_part('modules/banner-cta');
        endif;  

        // Case: banner-cta-v2 layout.
        if (get_row_layout() == 'banner_cta_v2') :
            get_template_part('modules/banner-cta-v2');
        endif;  

        // Case: banner-cta-v3 layout.
        if (get_row_layout() == 'banner_cta_v3') :
            get_template_part('modules/banner-cta-v3');
        endif;  
        
        // Case: callouts layout.
        if (get_row_layout() == 'callouts') :
            get_template_part('modules/callouts');
        endif;  

        // Case: calculator layout.
        if (get_row_layout() == 'calculator') :
            get_template_part('modules/calculator');
        endif;  

        // Case: contact layout.
        if (get_row_layout() == 'contact') :
            get_template_part('modules/contact');
        endif;  

        // Case: faqs layout.
        if (get_row_layout() == 'faqs') :
            get_template_part('modules/faqs');
        endif;

        // Case: featured-customer-series layout.
        if (get_row_layout() == 'featured_customer_series') :
            get_template_part('modules/featured-customer-series');
        endif;  
        
        // Case: featured-blogs layout.
        if (get_row_layout() == 'featured_blogs') :
            get_template_part('modules/featured-blogs');
        endif;

        // Case: feature-boxes layout.
        if (get_row_layout() == 'feature_boxes') :
            get_template_part('modules/feature-boxes');
        endif;

        // Case: featured-testimonial layout.
        if (get_row_layout() == 'featured_testimonial') :
            get_template_part('modules/featured-testimonial');
        endif;

        // Case: featured-video layout.
        if (get_row_layout() == 'featured_video') :
            get_template_part('modules/featured-video');
        endif;

        // Case: four-panels layout.
        if (get_row_layout() == 'four_panels') :
            get_template_part('modules/four-panels');
        endif;

        // Case: four-panels-v2 layout.
        if (get_row_layout() == 'four_panels_v2') :
            get_template_part('modules/four-panels-v2');
        endif;

        // Case: gallery layout.
        if (get_row_layout() == 'gallery') :
            get_template_part('modules/gallery');
        endif;

        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;

         // Case: hero-banner layout.
         if (get_row_layout() == 'hero_banner') :
            get_template_part('modules/hero-banner');
        endif;

        // Case: icons-row layout.
        if (get_row_layout() == 'icons_row') :
            get_template_part('modules/icons-row');
        endif;

        // Case: logo-slider layout.
        if (get_row_layout() == 'logo_slider') :
            get_template_part('modules/logo-slider');
        endif;

        // Case: partners layout.
        if (get_row_layout() == 'partners') :
            get_template_part('modules/partners');
        endif;

        // Case: side-by-side layout.
        if (get_row_layout() == 'side_by_side') :
            get_template_part('modules/side-by-side');
        endif;   

        // Case: side-by-side-v2 layout.
        if (get_row_layout() == 'side_by_side_v2') :
            get_template_part('modules/side-by-side-v2');
        endif; 

        // Case: side-by-side-v3 layout.
        if (get_row_layout() == 'side_by_side_v3') :
            get_template_part('modules/side-by-side-v3');
        endif; 

        // Case: side-by-side-v4 layout.
        if (get_row_layout() == 'side_by_side_v4') :
            get_template_part('modules/side-by-side-v4');
        endif; 

        // Case: side-by-side-v5 layout.
        if (get_row_layout() == 'side_by_side_v5') :
            get_template_part('modules/side-by-side-v5');
        endif; 

        // Case: side-by-side-v6 layout.
        if (get_row_layout() == 'side_by_side_v6') :
            get_template_part('modules/side-by-side-v6');
        endif; 
        
        // Case: side-by-side-four-squares layout.
        if (get_row_layout() == 'side_by_side_four_squares') :
            get_template_part('modules/side-by-side-four-squares');
        endif; 

        // Case: side-by-side-four-squares-v2 layout.
        if (get_row_layout() == 'side_by_side_four_squares_v2') :
            get_template_part('modules/side-by-side-four-squares-v2');
        endif; 

        // Case: side-by-side-infograph layout.
        if (get_row_layout() == 'side_by_side_infograph') :
            get_template_part('modules/side-by-side-infograph');
        endif;      

         // Case: side-by-side-list-image layout.
         if (get_row_layout() == 'side_by_side_list_image') :
            get_template_part('modules/side-by-side-list-image');
        endif;   

        // Case: side-by-side-video layout.
        if (get_row_layout() == 'side_by_side_video') :
            get_template_part('modules/side-by-side-video');
        endif;      

        // Case: statistics layout.
        if (get_row_layout() == 'statistics') :
            get_template_part('modules/statistics');
        endif;

        // Case: tabs layout.
        if (get_row_layout() == 'tabs') :
            get_template_part('modules/tabs');
        endif;

        // Case: team-members layout.
        if (get_row_layout() == 'team_members') :
            get_template_part('modules/team-members');
        endif;

        // Case: testimonials layout.
        if (get_row_layout() == 'testimonials') :
            get_template_part('modules/testimonials');
        endif;

        // Case: text-editor layout.
        if (get_row_layout() == 'text_editor') :
            get_template_part('modules/text-editor');
        endif;

        // Case: three-panels layout.
        if (get_row_layout() == 'three_panels') :
            get_template_part('modules/three-panels');
        endif;

        // Case: three-panels-v2 layout.
        if (get_row_layout() == 'three_panels_v2') :
            get_template_part('modules/three-panels-v2');
        endif;

        // Case: tiles layout.
        if (get_row_layout() == 'tiles') :
            get_template_part('modules/tiles');
        endif;

    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

get_footer();
