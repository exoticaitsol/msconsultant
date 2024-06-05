<?php
include(dirname(__FILE__) . "/inc/custom-function.php");

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function add_css_js_on_wp_admin_and_frontend_also() {
    // Enqueue Font Awesome from CDN
    wp_enqueue_style( 'cdnstyling', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' );

    // Enqueue Bootstrap from your theme directory
    // Uncomment the line below if you want to use Bootstrap from your theme
    // wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'add_css_js_on_wp_admin_and_frontend_also', 10 );

function register_my_menus() {
    register_nav_menus(
      array(
        'Header Menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Quick Links'),
        'footer-menu2' => __( 'Our Services')
        
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  function custom_theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');


  function fetch_all_term_id_Catagories( $postType,$texnomy,$type){
    $terms_meta = [];
    $terms = get_terms($texnomy,array('hide_empty' => false, 'parent' => 0 ,'exclude'=> array(12) ));//category 
    return $type == 'all' ? ($terms_string = !empty($terms) ? preg_replace('/\s+/', ' ', trim(implode(',', array_map(function ($term) { return $term->term_id; }, $terms)))) : '') : $terms;
  }
  
  add_action('wp_ajax_get_term_posts_callback', 'get_term_posts_callback');
  add_action('wp_ajax_nopriv_get_term_posts_callback', 'get_term_posts_callback');
  
  function get_term_posts_callback() {
    header('Content-Type: application/json');
    $post_type = 'gallery';
    $tax = sanitize_text_field($_POST['taxonomy']);
    $paged = sanitize_text_field($_POST['paged']);
    $term = sanitize_text_field($_POST['term_id']); 
    $terms = explode(',', $term);
    $term_name = sanitize_text_field($_REQUEST['term_name']); 
    $tax_qry[]  = (strtolower($term_name) == 'all') ?  ['taxonomy' => $tax,'field' => 'term_id','terms' => $terms,'operator' => 'IN', ] : ['taxonomy' => $tax,'field' => 'term_id', 'terms' => $terms,] ;
    $fetch_records = new WP_Query([ 'paged' =>$paged, 'post_type' => $post_type, 'post_status' => 'publish','posts_per_page' => -1, 'tax_query' => $tax_qry, 'order' => 'ASC', ]);
    ob_start();
    $filepath = get_stylesheet_directory() . '/Templetes/ajax/fetch_all_gallery_image_catagory.php';
    if (file_exists($filepath)) {
        include_once $filepath;
    }
    $response = [
        'status' => 'true',
        'content' =>  ob_get_clean(),
    ];
    die(json_encode($response));
    
  }

  
  
?>
