<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

function page_body_id() {
    global $wp_query;
    $page = '';
    if (is_front_page() ) {
        $page = 'home';
    } elseif (is_page()) {
        $page = $wp_query->query_vars["pagename"];
    } elseif (is_archive()){
        $page = $wp_query->query_vars["post_type"];
    }

    return $page;
}





add_action( 'init', 'post_type_characters' );

function post_type_characters() {
$labels = array(
    'name'               => _x( 'Characters', 'post type general name' ),
    'singular_name'      => _x( 'Character', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'character' ),
    'add_new_item'       => __( 'Add New Character' ),
    'edit_item'          => __( 'Edit Character' ),
    'new_item'           => __( 'New Character' ),
    'all_items'          => __( 'All Characters' ),
    'view_item'          => __( 'View Character' ),
    'search_items'       => __( 'Search Characters' ),
    'not_found'          => __( 'No characters found' ),
    'not_found_in_trash' => __( 'No characters found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Characters'
);
$args = array(
    'labels'        => $labels,
    'description'   => 'Holds our characters and character specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', ),
    'has_archive'   => true,
    'rewrite'       => array('slug' => 'characters')
);
register_post_type( 'character', $args );
}




add_action( 'init', 'post_type_cast' );

function post_type_cast() {
    $labels = array(
        'name'               => _x( 'Cast-members', 'post type general name' ),
        'singular_name'      => _x( 'Cast-member', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Cast-member' ),
        'add_new_item'       => __( 'Add New Cast-member' ),
        'edit_item'          => __( 'Edit Cast-member' ),
        'new_item'           => __( 'New Cast-member' ),
        'all_items'          => __( 'All Cast-members' ),
        'view_item'          => __( 'View Cast-member' ),
        'search_items'       => __( 'Search Cast-members' ),
        'not_found'          => __( 'No Cast-members found' ),
        'not_found_in_trash' => __( 'No Cast-members found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Cast'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Cast-members and Cast-member specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', ),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'cast-type')
    );
    register_post_type( 'cast', $args );
}




add_action( 'init', 'post_type_eskizas' );

function post_type_eskizas() {
    $labels = array(
        'name'               => _x( 'Eskizas', 'post type general name' ),
        'singular_name'      => _x( 'Eskiza', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Eskizas' ),
        'add_new_item'       => __( 'Add New Eskiza' ),
        'edit_item'          => __( 'Edit Eskiza' ),
        'new_item'           => __( 'New Eskiza' ),
        'all_items'          => __( 'All Eskizas' ),
        'view_item'          => __( 'View Eskiza' ),
        'search_items'       => __( 'Search Eskizas' ),
        'not_found'          => __( 'No Eskizas found' ),
        'not_found_in_trash' => __( 'No Eskizas found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Eskizas'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Eskizas and Eskiza specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', ),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'eskiza-type')
    );
    register_post_type( 'eskiza', $args );
}

