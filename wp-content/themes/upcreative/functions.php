<?php
/*
 *  Author: Team Trustylabs
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('secondary-image-thumbnail','', '', true);
    add_image_size('tertiary-image-thumbnail', 176, 58, true);
    add_image_size('quaternary-image-thumbnail', 176, 58, true);

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
    add_theme_support( 'custom-logo' );


    // Localisation Support
    //load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 60,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_head_nav()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menus',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => true,
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="menu-list">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
}


// footer walker
class footer_walker extends Walker_Nav_Menu
{
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . ' col-md-3"' : '';
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<div' . $id . $value . $class_names .'>';
        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'><h5><strong>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</strong></h5></a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</div>\n";
    }
}
// add class in first and last footer-menus
function mytheme_nav_menu_css_class( $classes = array(), $item, $args ) {
    $location_name = 'footer-menus';
    if($args->theme_location== $location_name)
    {
        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $location_name ] ) ) {
            $main_nav = wp_get_nav_menu_object( $locations[ $location_name ] );
            if ($item->menu_order == 1) {
                $classes[] = 'wow fadeInLeft'; //First menu item
            }
            if ($item->menu_order >= $main_nav->count) {
                $classes[] = 'wow fadeInRight'; //Overall last menu item
            }
        }
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'mytheme_nav_menu_css_class', 10, 3 );


function header_menu_atts( $atts, $item, $args )
{
    $location_name = 'header-menus';
if($args->theme_location== $location_name) {
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $location_name ] ) ) {
        $main_nav = wp_get_nav_menu_object( $locations[ $location_name ] );
        if ($item->menu_order >= $main_nav->count) {
            $atts['data-toggle'] = 'modal';
            $atts['data-target'] ="#myModal";
        }
    }
}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'header_menu_atts', 10, 3 );
function footer_menu_atts( $atts, $item, $args )
{
    $location_name = 'footer-menus';
if($args->theme_location== $location_name) {
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $location_name ] ) ) {
        $main_nav = wp_get_nav_menu_object( $locations[ $location_name ] );
        if ($item->menu_order >= $main_nav->count) {
            $atts['data-toggle'] = 'modal';
            $atts['data-target'] ="#myModal";
        }
    }
}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'footer_menu_atts', 10, 3 );
// footer menu
function html5blank_foot_nav()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'footer-menus',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => true,
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '%3$s',
            'depth'           => 0,
            'walker'          => new footer_walker()
        )
    );
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

 
		
		wp_register_script('analytics-up', get_template_directory_uri() . '/js/analytics.js', array(), null);
        wp_enqueue_script('analytics-up'); // Enqueue it!

        wp_register_script('latest-up', get_template_directory_uri() . '/js/jquery-latest.min.js', array(), null);
        wp_enqueue_script('latest-up'); // Enqueue it!

        wp_register_script('mobile-up', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array(), null);
        wp_enqueue_script('mobile-up'); // Enqueue it!

        wp_register_script('placeholder-up', get_template_directory_uri() . '/js/jquery.placeholder.min.js', array(), null);
        wp_enqueue_script('placeholder-up'); // Enqueue it!

        wp_register_script('header-up', get_template_directory_uri() . '/js/header.js', array(), null);
        wp_enqueue_script('header-up'); // Enqueue it!

        wp_register_script('scrollbar-up', get_template_directory_uri() . '/js/jquery.scrollbar.min.js', array('jquery'), null);
        wp_enqueue_script('scrollbar-up'); // Enqueue it!

        wp_register_script('wow-up', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), null);
        wp_enqueue_script('wow-up'); // Enqueue it!

        wp_register_script('jquery-up', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), null);
        wp_enqueue_script('jquery-up'); // Enqueue it!

        wp_register_script('bootstrap-up', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), null);
        wp_enqueue_script('bootstrap-up'); // Enqueue it!
		
		
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('Home')) {
       // wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), null); // Conditional script(s)
        //wp_enqueue_script('scriptname'); // Enqueue it!
		   wp_register_style('main-up', get_template_directory_uri() . '/css/main.css', array(),null,'all');
			wp_enqueue_style('main-up');
		 
	}
	 else if (is_page('Work')) {
       // wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), null); // Conditional script(s)
        //wp_enqueue_script('scriptname'); // Enqueue it!
		   wp_register_style('bootstrap-up', get_template_directory_uri() . '/css/bootstrap.css', array(), null, 'all');
			wp_enqueue_style('bootstrap-up'); // Enqueue it!
		 
	}
}

// Load HTML5 Blank styles
function html5blank_styles()
{

	wp_register_style('style-up', get_template_directory_uri() . '/css/style.css', array(), null, 'all');
    wp_enqueue_style('style-up'); // Enqueue it!
	
    wp_register_style('font-awesome-up', get_template_directory_uri() . '/css/font-awesome.min.css', array(),null,'all');

	wp_register_style('bootstrap-min-up', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-min-up'); // Enqueue it!
	
	wp_register_style('font-awesome-up', get_template_directory_uri() . '/css/font-awesome.min.css', array(),null,'all');

    wp_enqueue_style('font-awesome-up'); // Enqueue it!

    wp_register_style('font-animat', get_template_directory_uri() . '/css/font-animat.css', array(), null, 'all');
    wp_enqueue_style('font-animat'); // Enqueue it!

    wp_register_style('animate-up', get_template_directory_uri() . '/css/animate.css', array(), null, 'all');
    wp_enqueue_style('animate-up'); // Enqueue it!

    wp_register_style('jquery-up', get_template_directory_uri() . '/css/jquery.scrollbar.css', array(), null, 'all');
    wp_enqueue_style('jquery-up'); // Enqueue it!

  


    //wp_register_style('bootstrap-up', get_template_directory_uri() . '/css/bootstrap.css', array(), null, 'all');
    //wp_enqueue_style('bootstrap-up'); // Enqueue it!

   

    wp_register_style('footer-up', get_template_directory_uri() . '/css/footer.css', array(), null, 'all');
    wp_enqueue_style('footer-up'); // Enqueue it!

    wp_register_style('header-up', get_template_directory_uri() . '/css/header.css', array(), null, 'all');
    wp_enqueue_style('header-up'); // Enqueue it!

    wp_register_style('mediaqueries-up', get_template_directory_uri() . '/css/mediaqueries.css', array(), null, 'all');
    wp_enqueue_style('mediaqueries-up'); // Enqueue it!
	
	
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menus' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'footer-menus' => __('Footer Menu', 'html5blank'), // Extra Navigation if needed (duplicate as many as you need!)
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area ', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget footer
    register_sidebar(array(
        'name' => __('Footer right', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));

    register_sidebar( array('name'=>'Footer Left', 'id' => "logo" ) );
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
<?php endif; ?>
    <div class="comment-author vcard">
        <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
        <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
    </div>
    <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br />
<?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
            <?php
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
        ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
        <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
add_action('widgets_init', 'register_social_profile'); // social widget
add_action('widgets_init', 'Footer_logo_Widget_init');// footer logo
add_action('admin_enqueue_scripts', 'Footer_logo_Widget_scripts');//script
add_action('init', 'my_custom_init');// work post Type
add_action("admin_init", "admin_init");// work add data field
add_action('save_post', 'save_details');// save data event work
add_action( 'after_setup_theme', 'themename_custom_logo_setup' ); // add support logo
add_action( 'init', 'create_post_type' );

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter( 'pre_get_posts', 'my_get_posts' );

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

function get_link_works($tab){
	$args = array('post_type' => 'Works','post_status' => 'publish','post__in' => $tab);	
    $loop_previous = new WP_Query( $args );
	if ($loop_previous->have_posts() )
	{
		$link = array();
       while (  $loop_previous->have_posts() )
	   {
	    	$loop_previous->the_post();	
            $link[] = get_the_permalink();			
    	}
	}
	wp_reset_postdata();
	return $link;

}

function get_last_postype()
{
	$args = array('post_type' =>'Works','posts_per_page' => 1,'post_status' => 'publish','orderby'=>'post_date','order' => 'DESC');
	$last_posts = get_posts($args);
	foreach ( $last_posts  as $post )
	{
	return $post->ID;
	}
}

// social Network widget
class Social_Profile extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'Social_Profile',
            __('Social Networks Profiles', 'translation_domain'), // Name
            array('description' => __('Links to Author social media profile', 'translation_domain'),)
        );
    }
    public function widget($args, $instance) {

        $title = apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $google = $instance['google'];
        $inquare = $instance['inquare'];
        $gmail = $instance['gmail'];
        $directory = get_template_directory_uri();

        // social profile link
        $facebook_profile = "<a href='{$facebook}'><img src='{$directory}/img/fb.png' alt='facebook'></a>";
        $google_profile = "<a href='{$google}'><img src='{$directory}/img/goo.png' alt='google'></a>";
        $gmail_profile = "<a href='{$gmail}'> <img src='{$directory}/img/mail.png' alt='gmail'></a>";
        $inquare_profile = "<a href='{$inquare}'><img src='{$directory}/img/in.png' alt='inquare'></a>";
        $twitter_profile = "<a href='{$twitter}'><img src='{$directory}/img/tw.png' alt='tweeter'></a>";

        /*echo $args['before_widget'];*/

        /*if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }*/

        echo '<div class="socialupc">';
        echo (!empty($facebook) ) ? $facebook_profile : null;
        echo (!empty($google) ) ? $google_profile : null;
        echo (!empty($gmail) ) ? $gmail_profile : null;
        echo (!empty($inquare) ) ? $inquare_profile : null;
        echo (!empty($twitter) ) ? $twitter_profile : null;
        echo '</div>';

        echo $args['after_widget'];
    }
    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'Social Profile' : null;

        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null;
        isset($instance['gmail']) ? $gmail = $instance['gmail'] : null;
        isset($instance['inquare']) ? $inquare = $instance['inquare'] : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google+:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('inquare'); ?>"><?php _e('inquare:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('inquare'); ?>" name="<?php echo $this->get_field_name('inquare'); ?>" type="text" value="<?php echo esc_attr($inquare); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('gmail'); ?>"><?php _e('gmail:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('gmail'); ?>" name="<?php echo $this->get_field_name('gmail'); ?>" type="text" value="<?php echo esc_attr($gmail); ?>">
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';
        $instance['gmail'] = (!empty($new_instance['gmail']) ) ? strip_tags($new_instance['gmail']) : '';
        $instance['inquare'] = (!empty($new_instance['inquare']) ) ? strip_tags($new_instance['inquare']) : '';
        return $instance;
    }

}

function register_social_profile() {
    register_widget('Social_Profile');
}


function Footer_logo_Widget_init() {
    register_widget("Footer_logo_Widget"); //Footer_logo_Widget is the class defined hereunder, extending WP_Widget
}

//Enqueue WordPress media JS to handle image upload dialog box
function Footer_logo_Widget_scripts() {
    global $pagenow;
    if( $pagenow == 'widgets.php' ){
        wp_enqueue_media();
    }
}

//Create a class extending WP_Widget
class Footer_logo_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'Footer_logo_Widget', // Base ID
            'Footer logo Widget', // Name
            array( 'description' => __( 'Footer logo Widget description' ) ) // Args
        );
    }

    /**
     * Widget Front-end display
     */
    public function widget( $args, $instance ) {

        $img = $instance['img'];
        $url = $instance['url'];
        $title = $instance['title'];
        $url_data = isset($img)?$img:$url;

        if( !empty($url_data) ){
            ?>
            <img class="logoup" src="<?php echo $url_data ?>" class="left" width="120" alt="<?php echo $title ?>">
            <?php
        }
    }

    /**
     * Sanitize widget form values as they are saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();

        $instance['img'] = strip_tags( $new_instance['img'] );
        $instance['url'] = strip_tags( $new_instance['url'] );
        $instance['title'] = strip_tags( $new_instance['title'] );

        return $instance;
    }

    /**
     * Back-end widget form.
     */
    public function form( $instance ) {

        $img = isset( $instance[ 'img' ] ) ? $instance[ 'img' ] : '';
        $url = isset( $instance[ 'url' ] ) ? $instance[ 'url' ] : '';
        $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

        $img_field_id = $this->get_field_id('img');

        ?>

        <p>
            <label for="<?php echo $img_field_id ?>">Image :</label><br/>
            <input class="upload_image" id="<?php echo $img_field_id ?>" type="hidden" name="<?php echo $this->get_field_name('img') ?>" value="<?php echo $img ?>" />
            <input class="upload_image_button" id="<?php echo $img_field_id ?>_button" type="button" value="Charger une image" data-field-id="<?php echo $img_field_id ?>" />
        <div id="<?php echo $img_field_id ?>_img" class="upload_image_wrapper">
            <?php if( !empty($img) ):?>
                <img src="<?php echo $img ?>" />
                <a href="#" class="upload_image_delete" data-field-id="<?php echo $img_field_id ?>">Supprimer l'image</a>
            <?php endif ?>
        </div>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('url') ?>">URL du lien :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('url') ?>" name="<?php echo $this->get_field_name('url') ?>" type="text" value="<?php echo esc_attr($url) ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('title') ?>">Message au survol de l'image :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo esc_attr($title) ?>" />
        </p>

        <style>
            .upload_image_wrapper img{ width:100% }
        </style>

        <script>
            //Le code suivant doit normalement être positionné dans un fichier Javascript séparé,
            //notamment dans le cas où on positionne plusieurs fois le widget dans l'interface,
            //sinon le "jQuery(document).ready()" ci-dessous est lancé autant de fois que le nombre
            //de widgets positionnés. Ca fonctionne car on fait des "unbind()" mais
            //ce n'est pas optimisé.

            var upload_image_custom_uploaders = upload_image_custom_uploaders || {};

            jQuery(document).ready(function($){

                $('.upload_image_button').unbind().click(function(e) {

                    e.preventDefault();

                    var field_id = $(this).data('field-id');

                    //If the uploader object has already been created, reopen the dialog
                    if( upload_image_custom_uploaders.hasOwnProperty( field_id ) ) {
                        upload_image_custom_uploaders[field_id].open();
                        return;
                    }

                    //Extend the wp.media object
                    var upload_image_custom_uploader = wp.media.frames.file_frame = wp.media({
                        title: 'Choisir une image',
                        button: {
                            text: 'Choisir cette image'
                        },
                        multiple: false
                    });

                    upload_image_custom_uploaders[field_id] = upload_image_custom_uploader;

                    //When a file is selected, grab the URL and set it as the text field's value
                    upload_image_custom_uploader.on('select', function() {
                        attachment = upload_image_custom_uploader.state().get('selection').first().toJSON();
                        $('#'+ field_id).val(attachment.url);
                        $('#'+ field_id +'_img').html('<img src="'+ attachment.url +'" />');
                    });

                    //Open the uploader dialog
                    upload_image_custom_uploader.open();

                });

                $('.upload_image_delete').unbind().click(function(e){
                    e.preventDefault();
                    var field_id = $(this).data('field-id');
                    $('#'+ field_id).val('');
                    $('#'+ field_id +'_img').html('');
                });

            });
        </script>

        <?php
    }

}


// add multiple post thumbnail
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(array (
            'label' => 'Set 2nd Featured Image',
            'id' => 'secondary-image',
            'post_type' => 'Works', )
    );
    new MultiPostThumbnails(array(
            'label' => 'Set 3rd Featured Image',
            'id' => 'tertiary-image',
            'post_type' => 'Works',)
    );
    new MultiPostThumbnails(array(
            'label' => 'Set 4th Featured Image',
            'id' => 'quaternary-image',
            'post_type' => 'Works',)
    );
    new MultiPostThumbnails(array(
            'label' => 'Set 5th Featured Image',
            'id' => 'quinternary-image',
            'post_type' => 'Works',)
    );
}
// Work
function my_custom_init()
{
    register_post_type('Works',
        array('labels' => array(
            'name' => __('Works', 'post type general name'), /* This is the Title of the Group */
            'singular_name' => __('Work', 'post type singular name'), /* This is the individual type */
            'add_new' => __('Add Work', 'custom post type item'), /* The add new menu item */
            'add_new_item' => __('Add Work'), /* Add New Display Title */
            'edit' => __( 'Edit' ), /* Edit Dialog */
            'edit_item' => __('Edit'), /* Edit Display Title */
            'new_item' => __('New '), /* New Display Title */
            'view_item' => __('View'), /* View Display Title */
            'search_items' => __('Search Works Post'), /* Search Custom Type Title */
            'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
        ), /* end of arrays */
            'description' => __( 'This is custom post type works' ), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */
            'capability_type' => 'post',
            'hierarchical' => false,
            /*'rewrite' => array('slug' => 'news', 'with_front' => true ),*/
            'has_archive' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor','thumbnail','excerpt','comments','page-attributes')
        )
    );

    register_post_type('About',
        array('labels' => array(
            'name' => __('Abouts', 'post type general name'), /* This is the Title of the Group */
            'singular_name' => __('About', 'post type singular name'), /* This is the individual type */
            'add_new' => __('Add About', 'custom post type item'), /* The add new menu item */
            'add_new_item' => __('Add About'), /* Add New Display Title */
            'edit' => __( 'Edit' ), /* Edit Dialog */
            'edit_item' => __('Edit'), /* Edit Display Title */
            'new_item' => __('New '), /* New Display Title */
            'view_item' => __('View'), /* View Display Title */
            'search_items' => __('Search About Post'), /* Search Custom Type Title */
            'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
        ), /* end of arrays */
            'description' => __( 'This is custom post type About' ), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */
            'capability_type' => 'post',
            'hierarchical' => false,
            /*'rewrite' => array('slug' => 'news', 'with_front' => true ),*/
            'has_archive' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor','thumbnail','excerpt')
        )
    );
    flush_rewrite_rules();
}
// REGISTER TAXOMONIES join us
register_taxonomy( 'project',
    array('works'),
    array('hierarchical' => true,
        'labels' => array(
            'name' => __( 'News Categories' ), /* name of the custom taxonomy */
            'singular_name' => __( 'news Category' ), /* single taxonomy name */
            'search_items' =>  __( 'Search news Categories' ), /* search title for taxomony */
            'all_items' => __( 'All news Categories' ), /* all title for taxonomies */
            'parent_item' => __( 'Parent news Category' ), /* parent title for taxonomy */
            'parent_item_colon' => __( 'Parent news Category:' ), /* parent taxonomy title */
            'edit_item' => __( 'Edit news Category' ), /* edit custom taxonomy title */
            'update_item' => __( 'Update news Category' ), /* update title for taxonomy */
            'add_new_item' => __( 'Add New Category item' ), /* add new title for taxonomy */
            'new_item_name' => __( 'New Custom Category' ) /* name title for taxonomy */
        ),
        'show_ui' => true,
        'query_var' => true,
    )
);

function admin_init(){
    add_meta_box("credits_meta", "Work Details", "works_meta", "Works", "normal", "high");
}

function works_meta() {
    global $post;
    $custom = get_post_custom($post->ID);
    $name = $custom["name"][0];
    $services = $custom["services"][0];
    $date = $custom["date"][0];
    $link = $custom["link"][0];
?>
  <p><strong style="font-size: 14px;">Work name:</strong> <input style="width: 100%" type="text" style="width: 100%" name="name" value="<?php echo isset($name)?$name:"";?>"></p>
  <p><strong style="font-size: 14px;">Services :</strong> <input style="width: 100%" type="text" style="width: 100%" name="services" value="<?php echo isset($services)?$services:"";?>"></p>
  <p><strong style="font-size: 14px;">Date :</strong> <input style="width: 100%" type="text" style="width: 100%" name="date" value="<?php echo isset($date)?$date:"";?>"></p>
  <p><strong style="font-size: 14px;">Link:</strong> <input style="width: 100%" type="text" style="width: 100%" name="link" value="<?php echo isset($link)?$link:"";?>"></p>
<?php
}
// save page work details
function save_details(){
    global $post;
    update_post_meta($post->ID, "name", $_POST["name"]);
    update_post_meta($post->ID, "services", $_POST["services"]);
    update_post_meta($post->ID, "date", $_POST["date"]);
    update_post_meta($post->ID, "link", $_POST["link"]);
}

function create_post_type() {
  register_post_type( 'service',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' )
      ),
      'public' => true,
	  'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */
    )
  );
}

function my_get_posts( $query ) {
 if ( is_home() )
 $query->set( 'post_type', array( 'service' ) );

 return $query;
}
?>