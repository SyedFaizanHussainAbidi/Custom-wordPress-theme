<?php



// classis editor
function switch_to_classic_editor() {
    add_filter('use_block_editor_for_post', '__return_false', 10);
  }
  
  add_action('init', 'switch_to_classic_editor');


//   End 

// Svg allow_svg_upload

function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

function svg_thumb() {
    echo '<style type="text/css">
          .media-icon img[src$=".svg"] {
          width: 100% !important;
          height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'svg_thumb');


// End 

// Bootstrap and favicon 
function enqueue_bootstrap_and_fontawesome() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');

    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2', true);

    // Enqueue Font Awesome CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_and_fontawesome');


// End 
// Slick Slider With Mouse Wheel 

function enqueue_slick_slider() {
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array('slick-css'), '1.0');
    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('mousewheel-js', '//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js', array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');

// End 

// enqueue_intersection_observer_polyfill

function enqueue_intersection_observer_polyfill() {
    wp_enqueue_script('intersection-observer-polyfill', 'https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_intersection_observer_polyfill');

// End 


// Register Custom Post Type
function create_carrier_post_type() {
    $labels = array(
        'name' => 'Carriers',
        'singular_name' => 'Carrier',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Carrier',
        'edit_item' => 'Edit Carrier',
        'new_item' => 'New Carrier',
        'view_item' => 'View Carrier',
        'search_items' => 'Search Carriers',
        'not found' => 'No carriers found',
        'not_found_in_trash' => 'No carriers found in Trash',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'carrier'),
        'menu_icon' => 'dashicons-location-alt', // You can change this icon
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('carrier', $args);
}
add_action('init', 'create_carrier_post_type');

// End 

// Add Aos Animation enqueue_aos_library

function enqueue_aos_library() {
    // Enqueue AOS CSS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

    // Enqueue AOS JavaScript
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'enqueue_aos_library');

// End 




//   Acf Page Option
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
	acf_add_options_sub_page('Sec_last');
    acf_add_options_sub_page('Reviews');
	
	if( function_exists('acf_add_options_page') ) {
    
		acf_add_options_page(array(
			'page_title'    => 'Theme General Settings',
			'menu_title'    => 'Theme Settings',
			'menu_slug'     => 'theme-general-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
		));
		
		acf_add_options_sub_page(array(
			'page_title'    => 'Theme Header Settings',
			'menu_title'    => 'Header',
			'parent_slug'   => 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title'    => 'Theme Footer Settings',
			'menu_title'    => 'Footer',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'Theme Reviews Settings',
			'menu_title'    => 'Reviews',
			'parent_slug'   => 'theme-general-settings',
		));
		
	}
    
}


// end 


// register Header Menu 

function register_custom_menus() {
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
        )
    );
}
add_action( 'after_setup_theme', 'register_custom_menus' );


// end 

// Footer 

function register_custom_menu_location() {
    register_nav_menu( 'custom-menu-location', 'Footer' );
}
add_action( 'after_setup_theme', 'register_custom_menu_location' );


function register_customs_menu_location() {
    register_nav_menu( 'custom-menus-location', 'Bottom_Footer' );
}
add_action( 'after_setup_theme', 'register_customs_menu_location' );


// end 



// enqueue_my_styles and js 

function enqueue_my_styles(){
    wp_enqueue_style('style', get_template_directory_uri().'/css/custom.css');
   }
  
   add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );


function my_custom_javascript() {
    wp_enqueue_script( 'example-script', get_template_directory_uri() . '/js/theme_js.js');
    }
    add_action('wp_enqueue_scripts', 'my_custom_javascript');

// End 



// Mega Menu  Funstion

    
   function custom_menu_with_submenus() {
    $menu_name = 'primary-menu'; // Replace with your menu location or name
    $menu_id = 'primary-menu-id'; // Replace with a unique ID for the menu

    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_output = '<ul id="' . $menu_id . '" class="menu">';

        foreach ($menu_items as $menu_item) {
            $menu_output .= '<li class="menu-item menu-item-' . $menu_item->ID . ' ' . implode(' ', $menu_item->classes) . '">';

            $menu_output .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>';

            $submenu_items = get_submenu_items($menu_item->ID, $menu_items);

            if (!empty($submenu_items)) {
                $menu_output .= '<ul class="sub-menu">';

                foreach ($submenu_items as $submenu_item) {
                    $menu_output .= '<li class="menu-item menu-item-' . $submenu_item->ID . ' ' . implode(' ', $submenu_item->classes) . '">';

                    $menu_output .= '<a href="' . $submenu_item->url . '">' . $submenu_item->title . '</a>';

                    $menu_output .= '</li>';
                }

                $menu_output .= '</ul>';
            }

            $menu_output .= '</li>';
        }

        $menu_output .= '</ul>';

        echo $menu_output;
    }
}

function get_submenu_items($parent_id, $menu_items) {
    $submenu_items = array();

    foreach ($menu_items as $menu_item) {
        if ($menu_item->menu_item_parent == $parent_id) {
            $submenu_items[] = $menu_item;
        }
    }

    return $submenu_items;
}


 //Add support for post thumbnails/featured images.

function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');


function reg_tag() {
    register_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'reg_tag');

function get_popular_tags($num_tags = 10) {
    $tags = get_terms(array(
        'taxonomy' => 'post_tag',
        'orderby' => 'count',
        'order' => 'DESC',
        'number' => $num_tags,
    ));

    return $tags;
}




// End 


// this is For custom Mega nav walker 

require_once get_template_directory() . '/includes/custom-navwalker.php';


// end 





//cf7 authentication
function add_this_script_footer(){ ?>
	<script>
	function addLink() {
	var selection = window.getSelection();
	pagelink = "This content is original and belongs to CO/LAB. and should not be copied. You should write your own original content or find a better SEO company to work with.";
	copytext = pagelink;
	newdiv = document.createElement('div');
	newdiv.style.position = 'absolute';
	newdiv.style.left = '-99999px';
	document.body.appendChild(newdiv);
	newdiv.innerHTML = copytext;
	selection.selectAllChildren(newdiv);
	window.setTimeout(function () {
	document.body.removeChild(newdiv);
	}, 100);
	}
	document.addEventListener('copy', addLink);
		
		jQuery(document).ready(function(){
		jQuery('textarea, .wpcf7-text').not('.wpcf7-email').on('keypress', function (event) {
		//var regex = new RegExp("^[a-zA-Z0-9]+$");
		  //var regex = new RegExp("^[a-zA-Z0-9 ]+$");
		  var regex = new RegExp("^[a-zA-Z0-9\\s]+$");
		var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		if (!regex.test(key)) {
		   event.preventDefault();
		   return false;
		}
	});
		});
	</script>
	<script type="text/javascript">
	  document.addEventListener('DOMContentLoaded', function() {
		var formFields = document.querySelectorAll('.wpcf7-form-control');
		formFields.forEach(function(field) {
		  field.addEventListener('input', function(e) {
			if (e.data && e.data.match(/[<>]/g)) {
			  e.preventDefault();
			  alert('Code not allowed in this field.');
			  return false;
			}
		  });
		  field.addEventListener('copy', function(e) {
			e.preventDefault();
			alert('Copying is not allowed in this field.');
			return false;
		  });
		  field.addEventListener('cut', function(e) {
			e.preventDefault();
			alert('Cutting is not allowed in this field.');
			return false;
		  });
		  field.addEventListener('paste', function(e) {
			e.preventDefault();
			alert('Pasting is not allowed in this field.');
			return false;
		  });
		});
	  });
	</script>
	<?php }
	add_action('wp_footer', 'add_this_script_footer');
	add_filter( 'wpcf7_validate_text', 'no_urls_allowed', 10, 3 );
	add_filter( 'wpcf7_validate_text*', 'no_urls_allowed', 10, 3 );
	add_filter( 'wpcf7_validate_textarea', 'no_urls_allowed', 10, 3 );
	add_filter( 'wpcf7_validate_textarea*', 'no_urls_allowed', 10, 3 );
	add_filter( 'wpcf7_validate_email', 'no_urls_allowed_email', 10, 3 );
	add_filter( 'wpcf7_validate_email*', 'no_urls_allowed_email', 10, 3 );
	function no_urls_allowed( $result, $tag ) {
		$tag = new WPCF7_Shortcode( $tag );
		$type = $tag->type;
		$name = $tag->name;
		$value = isset( $_POST[$name] )
			? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
			: '';
		// If this is meant to be a URL field, do nothing
		if ( 'url' == $tag->basetype || stristr($name, 'url') ) {
			return $result;
		}
		// Check for URLs
		$value = $_POST[$name];
		$not_allowed = array( 'http://', 'https://', 'www.', '[url', '<a ', ' seo ', '.com', '.net', '.org', '.xyz', '.ga', '.ly','.ru' );
		foreach ( $not_allowed as $na ) {
			if ( stristr( $value, $na ) ) {
				//$result->invalidate( $tag, 'URLs are not allowed. Please remove any URLs from the textarea.' );
				$result->invalidate( $tag, 'URLs are not allowed. Please remove any URLs from the textarea.' );
				return $result;
			}
		}
	 
		return $result;
		
	}
	function no_urls_allowed_email( $result, $tag ) {
		$tag = new WPCF7_Shortcode( $tag );
		$type = $tag->type;
		$name = $tag->name;
		$value = isset( $_POST[$name] )
			? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
			: '';
		// If this is meant to be a URL field, do nothing
		if ( 'url' == $tag->basetype || stristr($name, 'url') ) {
			return $result;
		}
		// Check for URLs
		$value = $_POST[$name];
		$not_allowed = array( '.ru' );
		foreach ( $not_allowed as $na ) {
			if ( stristr( $value, $na ) ) {
				//$result->invalidate( $tag, 'URLs are not allowed. Please remove any URLs from the textarea.' );
				$result->invalidate( $tag, 'This URL is not allowed. Please remove any URLs from the email field.' );
				return $result;
			}
		}
	 
		return $result;
		
	}
	
	
	function your_function() {
	   ?>
	<script>
	jQuery(document).ready(function(){
		jQuery(document).bind("contextmenu",function(e){
			return false;
		});
	});
	</script>
	<?php
	}
	add_action('wp_footer', 'your_function');




// pagination Ajax function 

	function load_more_posts() {
	
		$page = $_POST['page'];
		$args = array(
			'post_type'      => 'our_project',
			'posts_per_page' => 10,
			'order'          => 'ASC',
			'paged'          => $page,
		);
	
		$query = new WP_Query($args);
	
		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
			?>
				<div class="projects-inner col-sm-12 col-md-6 col-lg-4">
					<div class="prjects-inners">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="featured-projects">
						<div class="inner-work">
                                <h2 class="projects_head">
                                    <?php the_title(); ?>
                                </h2>
                                <h2 class="work-details">
                                <?php the_content(); ?>

                                </h2>
                                <a href="<?php echo get_permalink(); ?>" class="pro_url">VIEW PROJECT</a>
                           
                           </div>
					</div>
				</div>
			<?php
			endwhile;
		endif;
	
		wp_reset_postdata();
	
		die();
	}
	
	add_action('wp_ajax_load_more_posts', 'load_more_posts');
	add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
	
// end 