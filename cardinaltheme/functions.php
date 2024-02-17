<?php

if (!function_exists('cardinaltheme')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function cardinaltheme()
    {
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ));

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        add_theme_support('custom-logo');
    }
endif;
add_action('after_setup_theme', 'cardinaltheme');


function cardinaltheme_scripts()
{
    wp_register_script('jQuery', '//code.jquery.com/jquery-3.5.1.min.js', null, null, true);
    wp_enqueue_script('jQuery');

    wp_register_script('reCaptcha', '//www.google.com/recaptcha/api.js', null, null, true);
    wp_enqueue_script('reCaptcha');

    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css');

    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_style('slick-theme-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');

    wp_enqueue_style('cardinal-styleheet', get_stylesheet_uri(), array(), rand(111, 9999));

    wp_register_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js', null, null, true);
    wp_enqueue_script('slick-js');

    wp_register_script('waypoints-js', get_template_directory_uri() . '/scripts/jquery.waypoints.js', null, null, true);
    wp_enqueue_script('waypoints-js');

    wp_register_script('counter-js',  get_template_directory_uri() . '/scripts/jquery.counter.js', null, null, true);
    wp_enqueue_script('counter-js');

    wp_enqueue_script('cardinal-script', get_template_directory_uri() . '/scripts/main.js', array(), filemtime(get_template_directory() . '/scripts/main.js'), true);
}
add_action('wp_enqueue_scripts', 'cardinaltheme_scripts');


/* DYNAMIC CSS FOR ACF FIELDS IN CSS */
add_action('wp_enqueue_scripts', 'theme_custom_style_script', 11);
function theme_custom_style_script()
{
    wp_enqueue_style('dynamic-css', admin_url('admin-ajax.php') . '?action=dynamic_css', '');
}

add_action('wp_ajax_dynamic_css', 'dynamic_css');
add_action('wp_ajax_nopriv_dynamic_css', 'dynamic_css');
function dynamic_css()
{
    require(get_template_directory() . '/inc/custom.css.php');
    exit;
}


/* ENABLE SVG SUPPORT */
function upload_svg_files($allowed)
{
    if (!current_user_can('manage_options'))
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}
add_filter('upload_mimes', 'upload_svg_files');


/* MENUS */
function register_menus()
{
    register_nav_menus(
        array(
            'top-nav' => __('Top Nav'),
            'primary-nav' => __('Primary Nav'),
            'footer-nav' => __('Footer Nav')
        )
    );
}
add_action('init', 'register_menus');


/* DISABLE GUTENBERG */
add_filter('use_block_editor_for_post', '__return_false', 10);


/* PAGE TEXTAREA REMOVAL */
function remove_textarea()
{
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_textarea');


/* EXCERPT LENGTH */
add_filter('excerpt_length', function ($length) {
    return 20;
}, PHP_INT_MAX);


/* WIDGETS */
function blog_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'blog_widgets_init');


/* ADMIN FOOTER MODIFICATION */
function remove_footer_admin()
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.cardinaldigitalmarketing.com" target="_blank">Cardinal Digital Marketing</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


/* CUSTOM POST TYPES */
function custom_post_types()
{   
    register_post_type(
        'team-members',
        // CPT Options  
        array(
            'labels' => array(
                'name' => __('Team Members'),
                'singular_name' => __('Team Member')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team-members'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-businessperson',
            'supports' => array('title', 'thumbnail', 'excerpt', 'editor')

        )
    );

    register_post_type(
        'success-stories',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Success Stories'),
                'singular_name' => __('Success Story')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'success-stories'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-testimonial',
            'supports' => array('title', 'thumbnail', 'excerpt', 'editor')

        )
    );
    
    register_post_type(
        'news',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('News')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'resources/news', 'with_front' => false),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-cover-image',
            'supports' => array('title', 'thumbnail', 'excerpt', 'editor')

        )
    );

    register_post_type(
        'education',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Library'),
                'singular_name' => __('Education')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'resources/library'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-media-document',
            'supports' => array('title', 'thumbnail', 'excerpt', 'editor')

        )
    );
    
    register_post_type(
        'events',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'events'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-nametag',
            'supports' => array('title', 'thumbnail', 'excerpt', 'editor')

        )
    );
}
add_action('init', 'custom_post_types');


/* NEWS TYPE TAXONOMY */
add_action('init', 'news_type_taxonomy', 0);

function news_type_taxonomy()
{

    $labels = array(
        'name' => _x('News Types', 'taxonomy general name'),
        'singular_name' => _x('News Type', 'taxonomy singular name'),
        'search_items' =>  __('Search News Types'),
        'all_items' => __('All News Types'),
        'parent_item' => __('Parent News Type'),
        'parent_item_colon' => __('Parent News Type:'),
        'edit_item' => __('Edit News Type'),
        'update_item' => __('Update News Type'),
        'add_new_item' => __('Add New News Type'),
        'new_item_name' => __('New News Type Name'),
        'menu_name' => __('Assign News Types'),
    );

    register_taxonomy('news-types', array('news'), array(
        'labels' => $labels,
        'hierarchical' => false, 
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'resources/news/category', 'with_front' => true),
    ));
}
// /* DISPLAY A CUSTOM POST TAXONOMY DROPDOWN IN ADMIN */
// add_action('restrict_manage_posts', 'news_types_taxonomy_filter');
// function news_types_taxonomy_filter()
// {
//     global $typenow;
//     $post_type = 'news'; // change to your post type
//     $taxonomy  = 'news-types'; // change to your taxonomy
//     if ($typenow == $post_type) {
//         $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
//         $info_taxonomy = get_taxonomy($taxonomy);
//         wp_dropdown_categories(array(
//             'show_option_all' => sprintf(__('Show all %s', 'textdomain'), $info_taxonomy->label),
//             'taxonomy'        => $taxonomy,
//             'name'            => $taxonomy,
//             'orderby'         => 'name',
//             'selected'        => $selected,
//             'show_count'      => true,
//             'hide_empty'      => true,
//         ));
//     };
// }
// /* FILTER POSTS BY TAXONOMY IN ADMIN */
// add_filter('parse_query', 'news_types_convert_id_to_term_in_query');
// function news_types_convert_id_to_term_in_query($query)
// {
//     global $pagenow;
//     $post_type = 'news'; // change to your post type
//     $taxonomy  = 'news-types'; // change to your taxonomy
//     $q_vars    = &$query->query_vars;
//     if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0) {
//         $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
//         $q_vars[$taxonomy] = $term->slug;
//     }
// }


/* EDUCATION TYPE TAXONOMY */
add_action('init', 'education_type_taxonomy', 0);

function education_type_taxonomy()
{

    $labels = array(
        'name' => _x('Education Types', 'taxonomy general name'),
        'singular_name' => _x('Education Type', 'taxonomy singular name'),
        'search_items' =>  __('Search Education Types'),
        'all_items' => __('All Education Types'),
        'parent_item' => __('Parent Education Type'),
        'parent_item_colon' => __('Parent Education Type:'),
        'edit_item' => __('Edit Education Type'),
        'update_item' => __('Update Education Type'),
        'add_new_item' => __('Add New Education Type'),
        'new_item_name' => __('New Education Type Name'),
        'menu_name' => __('Assign Education Types'),
    );

    register_taxonomy('education-types', array('education'), array(
        'labels' => $labels,
        'hierarchical' => false, 
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'resources/library/category', 'with_front' => true),
    ));
}
// /* DISPLAY A CUSTOM POST TAXONOMY DROPDOWN IN ADMIN */
// add_action('restrict_manage_posts', 'education_types_taxonomy_filter');
// function education_types_taxonomy_filter()
// {
//     global $typenow;
//     $post_type = 'education'; // change to your post type
//     $taxonomy  = 'education-types'; // change to your taxonomy
//     if ($typenow == $post_type) {
//         $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
//         $info_taxonomy = get_taxonomy($taxonomy);
//         wp_dropdown_categories(array(
//             'show_option_all' => sprintf(__('Show all %s', 'textdomain'), $info_taxonomy->label),
//             'taxonomy'        => $taxonomy,
//             'name'            => $taxonomy,
//             'orderby'         => 'name',
//             'selected'        => $selected,
//             'show_count'      => true,
//             'hide_empty'      => true,
//         ));
//     };
// }
// /* FILTER POSTS BY TAXONOMY IN ADMIN */
// add_filter('parse_query', 'education_types_convert_id_to_term_in_query');
// function education_types_convert_id_to_term_in_query($query)
// {
//     global $pagenow;
//     $post_type = 'education'; // change to your post type
//     $taxonomy  = 'education-types'; // change to your taxonomy
//     $q_vars    = &$query->query_vars;
//     if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0) {
//         $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
//         $q_vars[$taxonomy] = $term->slug;
//     }
// }



/* EVENTS TYPE TAXONOMY */
add_action('init', 'event_type_taxonomy', 0);

function event_type_taxonomy()
{

    $labels = array(
        'name' => _x('Event Types', 'taxonomy general name'),
        'singular_name' => _x('Event Type', 'taxonomy singular name'),
        'search_items' =>  __('Search Event Types'),
        'all_items' => __('All Event Types'),
        'parent_item' => __('Parent Event Type'),
        'parent_item_colon' => __('Parent Event Type:'),
        'edit_item' => __('Edit Event Type'),
        'update_item' => __('Update Event Type'),
        'add_new_item' => __('Add New Event Type'),
        'new_item_name' => __('New Event Type Name'),
        'menu_name' => __('Assign Event Types'),
    );

    register_taxonomy('event-types', array('events'), array(
        'labels' => $labels,
        'hierarchical' => false, 
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'events/category', 'with_front' => true),
    ));
}
// /* DISPLAY A CUSTOM POST TAXONOMY DROPDOWN IN ADMIN */
// add_action('restrict_manage_posts', 'events_types_taxonomy_filter');
// function events_types_taxonomy_filter()
// {
//     global $typenow;
//     $post_type = 'events'; // change to your post type
//     $taxonomy  = 'events-types'; // change to your taxonomy
//     if ($typenow == $post_type) {
//         $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
//         $info_taxonomy = get_taxonomy($taxonomy);
//         wp_dropdown_categories(array(
//             'show_option_all' => sprintf(__('Show all %s', 'textdomain'), $info_taxonomy->label),
//             'taxonomy'        => $taxonomy,
//             'name'            => $taxonomy,
//             'orderby'         => 'name',
//             'selected'        => $selected,
//             'show_count'      => true,
//             'hide_empty'      => true,
//         ));
//     };
// }
// /* FILTER POSTS BY TAXONOMY IN ADMIN */
// add_filter('parse_query', 'events_types_convert_id_to_term_in_query');
// function events_types_convert_id_to_term_in_query($query)
// {
//     global $pagenow;
//     $post_type = 'events'; // change to your post type
//     $taxonomy  = 'events-types'; // change to your taxonomy
//     $q_vars    = &$query->query_vars;
//     if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0) {
//         $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
//         $q_vars[$taxonomy] = $term->slug;
//     }
// }


/* THEMES OPTIONS */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'General Settings',
        'menu_title'    => 'General Settings',
        'menu_slug'     => 'general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
}
$my_excerpt = wp_strip_all_tags(get_the_excerpt(), true);


function wpshock_search_filter($query)
{
    if ($query->is_search) {
        $query->set('post_type', array('post', 'page'));
    }
    return $query;
}
add_filter('pre_get_posts', 'wpshock_search_filter');


// Add styles to control column width
add_action('admin_head', 'my_custom_table_styles');

function my_custom_table_styles()
{
    echo '<style>
   .fixed #featured_thumb {
       width:10%
   }
  </style>';
}


//// ADD FEATURED IMAGE TO PAGES AND POSTS ////

// Add the posts and pages columns filter. They both use the same function.
add_filter('manage_posts_columns', 'theme_add_post_admin_thumbnail_column', 2);
add_filter('manage_pages_columns', 'theme_add_post_admin_thumbnail_column', 2);

// Add the column
function theme_add_post_admin_thumbnail_column($columns)
{

    // Check if post type is 'team-members'
    global $pagenow, $typenow;
    if ('team-members' === $typenow && 'edit.php' === $pagenow) {


        $new = array();
        foreach ($columns as $key => $title) {
            if ($key == 'date') // Put the Thumbnail column before the Author column
            {
                $new['featured_thumb'] = __('Image');
            }

            $new[$key] = $title;
        }
        return $new;
    } else {
        return $columns;
    }
}

// Manage Post and Page Admin Panel Columns
add_action('manage_posts_custom_column', 'theme_show_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'theme_show_post_thumbnail_column', 5, 2);

// Get featured-thumbnail size post thumbnail and display it
function theme_show_post_thumbnail_column($theme_columns, $theme_id)
{

    // Check if post type is 'team-members'
    global $pagenow, $typenow;
    if ('team-members' === $typenow && 'edit.php' === $pagenow) {

        switch ($theme_columns) {
            case 'featured_thumb':
                if (function_exists('the_post_thumbnail')) {

                    $permalink = get_edit_post_link();

                    $thumb = get_the_post_thumbnail_url(null, 'thumbnail');

                    echo '<a href="' . $permalink . '"><img src="' . $thumb . '" style="width:50px;border-radius:50%;border:1px solid #2271b1;"></a>';
                } else {
                    echo 'Your theme doesn\'t support featured image…';
                }

                break;
        }
    } else {

        return $theme_columns;
    }
}
 
//// END ADD FEATURED IMAGE TO PAGES AND POSTS ////
