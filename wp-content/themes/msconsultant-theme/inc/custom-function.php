<?php 
function create_custome_post_type() {
    $custom_post_array = [
        
        [
            'name'=>'Gallery',
            'singular_name'=>'gallery',
            'slug'=>'gallery',
            'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon'=>'dashicons-images-alt',
            'menu_position'=>5,
            'post_type_name'=>'gallery',
            'menu_catagories'=>1,
            'catagory_name'=>'gallery_catagories'
        ],
        [
          'name'=>'Faq',
          'singular_name'=>'faq',
          'slug'=>'faq',
          'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
          'menu_icon'=>'dashicons-editor-help',
          'menu_position'=>5,
          'post_type_name'=>'faq',
          'menu_catagories'=>1,
          'catagory_name'=>'faq_catagories'
        ],
        [
          'name'=>'Testimonials',
          'singular_name'=>'testimonials',
          'slug'=>'testimonial',
          'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
          'menu_icon'=>'dashicons-testimonial',
          'menu_position'=>5,
          'post_type_name'=>'testimonial',
          'menu_catagories'=>1,
          'catagory_name'=>'testimonial_catagories'
      ],
      [
        'name'=>'Slider',
        'singular_name'=>'slider',
        'slug'=>'slider',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'=>'dashicons-images-alt',
        'menu_position'=>5,
        'post_type_name'=>'slider',
        'menu_catagories'=>1,
        'catagory_name'=>'slider_catagories'
      ],
      [
        'name'=>'Service',
        'singular_name'=>'service',
        'slug'=>'service',
        'supports'=>array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'=>'dashicons-admin-tools ',
        'menu_position'=>5,
        'post_type_name'=>'service',
        'menu_catagories'=>1,
        'catagory_name'=>'service_catagories'
      ],
       
  ];
  foreach ($custom_post_array as $key => $value) {
    $postlabels = array(
        'name'                  => _x($value['name'], 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x($value['name'], 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __($value['name'], 'text_domain'),
        'name_admin_bar'        => __($value['name'], 'text_domain'),
        'archives'              => __($value['name'].' Archives', 'text_domain'),
        'attributes'            => __(''.$value['name'].' Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent '.$value['name'].'', 'text_domain'),
        'all_items'             => __('All '.$value['name'].'', 'text_domain'),
        'add_new_item'          => __('Add New '.$value['name'].'', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New '.$value['name'].'', 'text_domain'),
        'edit_item'             => __('Edit '.$value['name'].'', 'text_domain'),
        'update_item'           => __('Update '.$value['name'].'', 'text_domain'),
        'view_item'             => __('View '.$value['name'].'', 'text_domain'),
        'view_items'            => __('View '.$value['name'].'', 'text_domain'),
        'search_items'          => __('Search '.$value['name'].'', 'text_domain'),
        'not_found'             => __('Not found in '.$value['name'].'', 'text_domain'),
        'featured_image'        => __('Featured Image for '.$value['name'].'', 'text_domain'),
        'set_featured_image'    => __('Set featured image for '.$value['name'].'', 'text_domain'),
        'insert_into_item'      => __('Insert into '.$value['name'].'', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this '.$value['name'].'', 'text_domain'),
        'items_list'            => __(''.$value['name'].' list', 'text_domain'),
        'items_list_navigation' => __(''.$value['name'].' list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter '.$value['name'].' list', 'text_domain'),
    );
    $Postargs = array(
        'label'                 => __(''.$value['name'].'', 'text_domain'),
        'description'           => __(''.$value['name'].' posts', 'text_domain'),
        'labels'                => $postlabels,
        'supports'           => $value['supports'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         =>  $value['menu_position'],
        'menu_icon'             => $value['menu_icon'], // You can choose a different icon from Dashicons
        'show_in_admin_bar'     => true,
        'rewrite'       => array('slug' => $value['slug']),
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type($value['post_type_name'], $Postargs);
    //
    if ($value['menu_catagories']) {
         $catagories_labels = array(
        'name'                       => _x(''.$value['name'].' Categories', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x(''.$value['name'].' Category', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __(''.$value['name'].' Category', 'text_domain'),
        'all_items'                  => __('All '.$value['name'].' Categories', 'text_domain'),
        'parent_item'                => __('Parent '.$value['name'].' Category', 'text_domain'),
        'parent_item_colon'          => __('Parent '.$value['name'].' Category:', 'text_domain'),
        'new_item_name'              => __('New  '.$value['name'].' Category Name', 'text_domain'),
        'add_new_item'               => __('Add '.$value['name'].' New Category', 'text_domain'),
        'edit_item'                  => __('Edit '.$value['name'].' Category', 'text_domain'),
        'update_item'                => __('Update '.$value['name'].' Category', 'text_domain'),
        'view_item'                  => __('View '.$value['name'].' Category', 'text_domain'),
        'popular_items'              => __('Popular Categories in '.$value['name'].'', 'text_domain'),
        'search_items'               => __('Search Categories in '.$value['name'].'', 'text_domain'),
        'not_found'                  => __('Not Found in '.$value['name'].'', 'text_domain'),
        'no_terms'                   => __('No '.$value['name'].' categories', 'text_domain'),
        'items_list'                 => __(''.$value['name'].' Categories list', 'text_domain'),
        'items_list_navigation'      => __(''.$value['name'].' Categories list navigation', 'text_domain'),
    );
        $catagoriesargs = array(
        'labels'                     => $catagories_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy($value['catagory_name'], array($value['post_type_name']), $catagoriesargs);
    }
  }
  }

function enable_imagick(){
    if (!extension_loaded('imagick')) {
        // Enable Imagick extension
        if (function_exists('ini_set')) {
            ini_set('extension', 'imagick.so'); // Adjust the extension name as needed for your environment
        }
    }
}


add_action('init', function () {
    // wpb_custom_new_menu();
    create_custome_post_type();
    enable_imagick();
});


?>