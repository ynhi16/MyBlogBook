<?php
function settup_theme(){
	// Hỗ trợ thubmail
	add_theme_support('post-thumbnails');
	// Remove chiều cao, chiều rộng của hình ảnh trong bài viết
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}
	add_filter('max_srcset_image_width', 'returnOne');
	function returnOne(){
		return 1;
	}
	// Thêm sidebar
	if (function_exists('register_sidebar')){
		register_sidebar(array(
			'name'=> 'Cột phải',
			'id' => 'sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => "</div></div>\n",
			'before_title'  => '<h3 class="title-w"><span><i class="fa fa-bars"></i>',
			'after_title'   => "</span></h3><div class='content-view'>\n",
		));
	}
	// Thêm menu
	register_nav_menus(
		array(
			'main_nav' => 'Main menu',
			'footer_nav' => 'Footer menu',
		)
	);
	// Hàm get đoạn mô tả bài viết
	function teaser($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'[...]';
		} else {
			$excerpt = implode(" ",$excerpt);
		}
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt.'...';
	}
	// Hàm để tăng lượt xem sử dung trong file single.php
	function setpostview($postID){
	    $count_key ='views';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count == ''){
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	    } else {
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}
	// Hàm hiển thị lượt xem
	function getpostviews($postID){
	    $count_key ='views';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count == ''){
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	        return "0";
	    }
	    return $count;
	}
	
	// add style và scirpt
	function add_theme_scripts() {
		wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
		wp_enqueue_style( 'OwlCarousel2', get_template_directory_uri() . '/libs/OwlCarousel2/assets/owl.carousel.min.css', array(), '1.0', 'all');
		wp_enqueue_style( 'OwlCarousel2-theme', get_template_directory_uri() . '/libs/OwlCarousel2/assets/owl.theme.default.min.css', array(), '1.0', 'all');
		wp_enqueue_style( 'font-icon', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');
	  	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.0.min.js', array(), '1.0', true);
	  	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true);
	  	wp_enqueue_script( 'owl', get_template_directory_uri() . '/libs/OwlCarousel2/owl.carousel.min.js', array(), '1.0', true);
	  	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
}
add_action('init','settup_theme');