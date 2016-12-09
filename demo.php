<?php
/**
 * Filter value when demo launching
 * This file need remove in download package
 *
 * @since 1.0
 */

function penci_demos_homepage() {
	$return = array( 'mixed', 'mixed-2', 'overlay-grid', 'overlay-list', 'overlay', 'standard', 'classic', 'magazine-1', 'magazine-2', 'photography', 'grid', 'grid-2', 'masonry', 'masonry-2', 'list', 'boxed-1', 'boxed-2', 'standard-grid', 'standard-grid-2', 'standard-list', 'standard-boxed-1', 'classic-grid', 'classic-grid-2', 'classic-list', 'classic-boxed-1', );
	return $return;
}

function penci_demos_header() {
	$return = array( 'header-1', 'header-2', 'header-3', 'header-4', 'header-5', 'header-6' );
	return $return;
}

function penci_demos_sliders() {
	$return = array( 'style-1', 'style-2', 'style-3', 'style-4', 'style-5', 'style-6', 'style-7', 'style-8', 'style-9' );
	return $return;
}

$demo_id = get_current_blog_id();

function penci_demos_id() {
	$demo_id = get_current_blog_id();
	return $demo_id;
}
/**
 * Demos id
 * #main:  1
 * #food: 2
 * #fashion: 3
 * #travel: 4
 * #beauti: 5
 * #technology: 6
 * #magazine: 7
 * #craft-diy: 8
 * #interior blog: 9
 * #sport 10
 * #video 11
 * #game 12
 */

$demo_val = isset( $_GET['demo'] ) ? esc_html( trim( $_GET['demo'] ) ) : '';
$demo_video = isset( $_GET['video'] ) ? esc_html( trim( $_GET['video'] ) ) : '';
$demo_sidebar = isset( $_GET['sidebar'] ) ? esc_html( trim( $_GET['sidebar'] ) ) : '';
$demo_pagenavi = isset( $_GET['pagenavi'] ) ? esc_html( trim( $_GET['pagenavi'] ) ) : '';
$demo_slider = isset( $_GET['slider'] ) ? esc_html( trim( $_GET['slider'] ) ) : '';
$demo_boxes = isset( $_GET['boxes'] ) ? esc_html( trim( $_GET['boxes'] ) ) : '';
$demo_boxed = isset( $_GET['body'] ) ? esc_html( trim( $_GET['body'] ) ) : '';
$demo_header = isset( $_GET['header'] ) ? esc_html( trim( $_GET['header'] ) ) : '';
$demo_popular = isset( $_GET['popular'] ) ? esc_html( trim( $_GET['popular'] ) ) : '';
$demo_topbar = isset( $_GET['topbar'] ) ? esc_html( trim( $_GET['topbar'] ) ) : '';

if( $demo_id == '1' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/1.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '2' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/2.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '3' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/3.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '4' && $demo_boxed != 'boxed-3' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/4.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '5' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/5.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '6' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/6.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '7' && ! $demo_boxed ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return ''; } );
}
if( $demo_id == '7' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/7.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '8' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/8.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '10' && $demo_boxed != 'boxed-3' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/9.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '9' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/10.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '11' && $demo_boxed == 'boxed-2' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/11.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}
if( $demo_id == '12' && $demo_boxed != 'boxed-3' ) {
	add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return 'http://pencidesign.com/soledad/boxed-img/12.jpg'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_repeat', function() { return 'no-repeat'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_attachment', function() { return 'fixed'; } );
	add_filter( 'theme_mod_penci_body_boxed_bg_size', function() { return 'cover'; } );
}

if( $demo_id == '7' && ( $demo_val == 'magazine-1' || $demo_val == 'magazine-2' ) ) {
	$demos_magazine = isset( $_GET['layout'] ) ? esc_html( trim( $_GET['layout'] ) ) : '';
	if( $demos_magazine == '2' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'technology, entertainment, editors-pick, sport, movies'; } );
	} elseif( $demos_magazine == '3' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'travel, movies, sport, editors-pick'; } );
	}
}

if( $demo_id == '10' && ( $demo_val == 'magazine-1' || $demo_val == 'magazine-2' ) ) {
	$demos_magazine = isset( $_GET['layout'] ) ? esc_html( trim( $_GET['layout'] ) ) : '';
	if( $demos_magazine == '2' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'daily-update, featured, nfl, sport-news'; } );
	} elseif( $demos_magazine == '3' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'nfl, soccer, basketball, sport-news, featured'; } );
	}
}

if( $demo_id == '11' && ( $demo_val == 'magazine-1' || $demo_val == 'magazine-2' ) ) {
	$demos_magazine = isset( $_GET['layout'] ) ? esc_html( trim( $_GET['layout'] ) ) : '';
	if( $demos_magazine == '2' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'gaming, youtube, vimeo, entertainment, sport, life-style'; } );
	} elseif( $demos_magazine == '3' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'youtube, vimeo, entertainment, tech, gaming'; } );
	}
}

if( $demo_id == '12' ) {
	$demos_magazine = isset( $_GET['layout'] ) ? esc_html( trim( $_GET['layout'] ) ) : '';
	if( $demos_magazine == '1' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'platforms, featured, xbox, playstation, game-reviews, windows-pc'; } );
	} elseif( $demos_magazine == '2' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'windows-pc, platforms, game-reviews, news-updates, featured'; } );
	} elseif( $demos_magazine == '3' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'featured, platforms, windows-pc, game-reviews, news-updates'; } );
	} elseif( $demos_magazine == '4' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'windows-pc, xbox, playstation, platforms, game-reviews, featured'; } );
	} elseif( $demos_magazine == '5' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'xbox, playstation, featured, game-reviews, news-updates, platforms'; } );
	} elseif( $demos_magazine == '6' ) {
		add_filter( 'theme_mod_penci_home_featured_cat', function() { return 'game-reviews, featured, platforms, news-updates, windows-pc'; } );
	}
}

if( $demo_popular == 'none' ){
	add_filter( 'theme_mod_penci_enable_home_popular_posts', function() { return false; } );
	add_filter( 'theme_mod_penci_home_hide_boxes', function() { return false; } );
}

if( $demo_topbar == 'none' ) {
	add_filter( 'theme_mod_penci_top_bar_show', function() { return false; } );
	add_filter( 'theme_mod_penci_header_social_check', function() { return false; } );
}

if( $demo_val == 'full-style' ) {
	add_filter( 'theme_mod_penci_enable_single_style2', function() { return true; } );
}
if( $demo_val == 'full-none' ) {
	add_filter( 'theme_mod_penci_enable_single_style2', function() { return false; } );
}

if( $demo_id != '7' && $demo_id != '10' && $demo_id != '9' && $demo_id != '11' ) {
	add_filter( 'theme_mod_penci_home_title', function() { return ''; } );
}

if( $demo_sidebar == 'none' ) {
	add_filter( 'theme_mod_penci_sidebar_home', function() { return false; } );
	add_filter( 'theme_mod_penci_sidebar_posts', function() { return false; } );
	add_filter( 'theme_mod_penci_sidebar_archive', function() { return false; } );
	add_filter( 'theme_mod_penci_woo_shop_enable_sidebar', function() { return false; } );
	add_filter( 'theme_mod_penci_woo_cat_enable_sidebar', function() { return false; } );
	add_filter( 'theme_mod_penci_woo_single_enable_sidebar', function() { return false; } );
	add_filter( 'theme_mod_penci_woo_number_related_products', function() { return 4; } );
} elseif( $demo_sidebar == 'right' ) {
	add_filter( 'theme_mod_penci_sidebar_home', function() { return true; } );
	add_filter( 'theme_mod_penci_sidebar_posts', function() { return true; } );
	add_filter( 'theme_mod_penci_sidebar_archive', function() { return true; } );
	add_filter( 'theme_mod_penci_left_sidebar_home', function() { return false; } );
	add_filter( 'theme_mod_penci_left_sidebar_posts', function() { return false; } );
	add_filter( 'theme_mod_penci_left_sidebar_archive', function() { return false; } );
	add_filter( 'theme_mod_penci_woo_shop_enable_sidebar', function() { return true; } );
	add_filter( 'theme_mod_penci_woo_cat_enable_sidebar', function() { return true; } );
	add_filter( 'theme_mod_penci_woo_single_enable_sidebar', function() { return true; } );
	add_filter( 'theme_mod_penci_woo_left_sidebar', function() { return false; } );
	add_filter( 'theme_mod_penci_woo_number_related_products', function() { return 6; } );
} elseif( $demo_sidebar == 'left' ) {
	add_filter( 'theme_mod_penci_sidebar_home', function() { return true; } );
	add_filter( 'theme_mod_penci_sidebar_posts', function() { return true; } );
	add_filter( 'theme_mod_penci_sidebar_archive', function() { return true; } );
	add_filter( 'theme_mod_penci_left_sidebar_home', function() { return true; } );
	add_filter( 'theme_mod_penci_left_sidebar_posts', function() { return true; } );
	add_filter( 'theme_mod_penci_left_sidebar_archive', function() { return true; } );
	add_filter( 'theme_mod_penci_woo_shop_enable_sidebar', function() { return true; } );
	add_filter( 'theme_mod_penci_woo_cat_enable_sidebar', function() { return true; } );
	add_filter( 'theme_mod_penci_woo_single_enable_sidebar', function() { return true; } );
	add_filter( 'theme_mod_penci_woo_left_sidebar', function() { return true; } );
	add_filter( 'theme_mod_penci_woo_number_related_products', function() { return 6; } );
}

/* Fix sidebar for beauti */
if( ( $demo_id == '5' || $demo_id == '3' || $demo_id == '8' ) && ( $demo_sidebar == 'left' || $demo_sidebar == 'right' ) ) {
	add_filter( 'theme_mod_penci_home_layout', function() { return 'standard-grid'; } );
}

if( $demo_boxed == 'boxed-none' ) {
	add_filter( 'theme_mod_penci_body_boxed_layout', function() { return false; } );
}
if( $demo_boxed == 'boxed-1' || $demo_boxed == 'boxed-2' || $demo_boxed == 'boxed-3' ) {
	if( $demo_boxed == 'boxed-1' ){
		add_filter( 'theme_mod_penci_body_boxed_bg_image', function() { return ''; } );
	}
	add_filter( 'theme_mod_penci_body_boxed_layout', function() { return true; } );
}

if( get_theme_mod( 'penci_body_boxed_layout' ) ) {
	add_filter( 'theme_mod_penci_featured_video_height', function() { return '500'; } );
}

if( $demo_boxes == 'style-2' ) {
	add_filter( 'theme_mod_penci_home_box_style_2', function() { return true; } );
}

if( $demo_pagenavi == 'numbers' ) {
	add_filter( 'theme_mod_penci_page_navigation_numbers', function() { return true; } );
}

if( in_array( $demo_slider, penci_demos_sliders() ) ) {
	if( $demo_slider == 'style-3' || $demo_slider == 'style-5' || $demo_slider == 'style-7' || $demo_slider == 'style-8' ) {
		add_filter( 'theme_mod_penci_body_boxed_layout', function() { return false; } );
	} elseif ( $demo_slider == 'style-1' || $demo_slider == 'style-2' || $demo_slider == 'style-4' || $demo_slider == 'style-5' ) {
		add_filter( 'theme_mod_penci_featured_slider_overlay_bg_opacity', function() { return '0'; } );
	}
	add_filter( 'theme_mod_penci_featured_slider_style', function() { $demo_slider = isset( $_GET['slider'] ) ? esc_html( trim( $_GET['slider'] ) ) : ''; return $demo_slider; } );
}

if( ( $demo_slider == 'style-8' || get_theme_mod( 'penci_featured_slider_style' ) == 'style-8' ) && $demo_id != '11' ) {
	add_filter( 'theme_mod_penci_featured_slider_slides', function() { return '12'; } );
	add_filter( 'theme_mod_penci_featured_cat', function() { return ''; } );
	add_filter( 'theme_mod_penci_featured_slider_cat_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_cat_hover_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_title_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_title_hover_color', function() { return '#ffffff'; } );
} elseif ( ( $demo_slider == 'style-8' || get_theme_mod( 'penci_featured_slider_style' ) == 'style-8' ) && $demo_id == '11' ) {
	add_filter( 'theme_mod_penci_featured_slider_slides', function() { return '12'; } );
	add_filter( 'theme_mod_penci_featured_slider_cat_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_cat_hover_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_title_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_title_hover_color', function() { return '#ffffff'; } );
} elseif( ( $demo_slider == 'style-9' || get_theme_mod( 'penci_featured_slider_style' ) == 'style-9' ) ) {
	add_filter( 'theme_mod_penci_featured_slider_slides', function() { return '10'; } );
} else {
	add_filter( 'theme_mod_penci_featured_slider_slides', function() { return '6'; } );
}

if( $demo_id == '7' && ( $demo_header == 'header-1' || $demo_header == 'header-2' || $demo_header == 'header-4' || $demo_header == 'header-5' ) ) {
	add_filter( 'theme_mod_penci_top_bar_show', function() { return false; } );
}

if( $demo_id == '10' && ( $demo_header == 'header-1' || $demo_header == 'header-2' || $demo_header == 'header-3' || $demo_header == 'header-4' || $demo_header == 'header-5' ) ) {
	add_filter( 'theme_mod_penci_logo', function() { return 'http://pencidesign.com/soledad/boxed-img/sport_logo.png'; } );
	add_filter( 'theme_mod_penci_logo_retina', function() { return 'http://pencidesign.com/soledad/boxed-img/sport_logo.png'; } );
}

if( get_theme_mod( 'penci_featured_slider_style' ) == 'style-9' || $demo_slider == 'style-9' ) {
	add_filter( 'theme_mod_penci_featured_slider_cat_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_cat_hover_color', function() { return '#ffffff'; } );
}

if( get_theme_mod( 'penci_header_layout' ) == 'header-3' && $demo_topbar != 'none' ) {
	add_filter( 'theme_mod_penci_top_bar_show', function() { return true; } );
}

if( in_array( $demo_header, penci_demos_header() ) ) {
	if( ( $demo_header == 'header-3' || get_theme_mod( 'penci_header_layout' ) == 'header-3' ) && $demo_topbar != 'none' ) {
		add_filter( 'theme_mod_penci_top_bar_show', function() { return true; } );
	}
	add_filter( 'theme_mod_penci_header_layout', function() { $demo_header = isset( $_GET['header'] ) ? esc_html( trim( $_GET['header'] ) ) : ''; return $demo_header; } );
}

if( in_array( $demo_val, penci_demos_header() ) ) {
	add_filter( 'theme_mod_penci_header_layout', function() { $demo_val = isset( $_GET['demo'] ) ? esc_html( trim( $_GET['demo'] ) ) : ''; return $demo_val; } );
} elseif ( $demo_val == 'fullwidth' ) {
	add_filter( 'theme_mod_penci_sidebar_home', function() { return false; } );
	add_filter( 'theme_mod_penci_sidebar_posts', function() { return false; } );
	add_filter( 'theme_mod_penci_sidebar_archive', function() { return false; } );
} elseif( in_array( $demo_val, penci_demos_homepage() ) ) {
	add_filter( 'theme_mod_penci_home_layout', function() { $demo_val = isset( $_GET['demo'] ) ? esc_html( trim( $_GET['demo'] ) ) : ''; return $demo_val; } );
} elseif ( $demo_val == 'sticky-sidebar' ) {
	add_filter( 'theme_mod_penci_sidebar_home', function() { return true; } );
	add_filter( 'theme_mod_penci_sidebar_posts', function() { return true; } );
	add_filter( 'theme_mod_penci_sidebar_archive', function() { return true; } );
	add_filter( 'theme_mod_penci_home_layout', function() { return 'standard'; } );
	add_filter( 'theme_mod_penci_sidebar_sticky', function() { return true; } );
}

if( in_array( $demo_slider, penci_demos_sliders() ) ) {
	add_filter( 'theme_mod_penci_enable_featured_video_bg', function() { return false; } );
}

if( $demo_video == 'video-bg' && $demo_slider == '' ) {
	add_filter( 'theme_mod_penci_enable_featured_video_bg', function() { return true; } );
}

if( get_theme_mod( 'penci_featured_slider_style' ) == 'style-6' ) {
	add_filter( 'theme_mod_penci_featured_slider_cat_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_title_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_title_hover_color', function() { return '#ffffff'; } );
	add_filter( 'theme_mod_penci_featured_slider_meta_color', function() { return '#ffffff'; } );
}

// Set sidebar for array layouts
$penci_demos_array_sidebars = array('standard', 'classic', 'grid', 'list', 'masonry', 'magazine-1', 'magazine-2', 'standard-grid', 'standard-list', 'classic-grid', 'classic-list');
$penci_demos_home_layouts = get_theme_mod( 'penci_home_layout' );
$penci_demos_archive_layouts = get_theme_mod( 'penci_archive_layout' );
if( in_array( $demo_val, $penci_demos_array_sidebars ) && $demo_sidebar != 'none' ) {
	add_filter( 'theme_mod_penci_sidebar_home', function() { return true; } );
}

if( $penci_demos_home_layouts == 'photography-1' && $demo_sidebar != 'left' && $demo_sidebar != 'right'  ) {
	add_filter( 'theme_mod_penci_sidebar_home', function() { return false; } );
}

if( is_archive() && in_array( $penci_demos_archive_layouts, $penci_demos_array_sidebars ) && $demo_sidebar != 'none' ) {
	add_filter( 'theme_mod_penci_sidebar_archive', function() { return true; } );
}

// Change post per page for layouts
function penci_demos_pre_get_posts($query) {
	if ( !is_admin() && $query->is_main_query() ) {
		$array_layouts = array( 'grid', 'masonry', 'boxed-2', 'standard-grid-2', 'classic-grid-2', 'magazine-2' );
		$array_layouts2 = array( 'standard-grid', 'classic-grid', 'overlay-grid', 'overlay-list', 'mixed-2' );
		$array_layouts3 = array( 'standard', 'classic', 'overlay' );
		$home_layouts = get_theme_mod( 'penci_home_layout' );
		$home_sidebar = get_theme_mod( 'penci_sidebar_home' );
		$archive_sidebar = get_theme_mod( 'penci_sidebar_archive' );
		$archive_layouts =  get_theme_mod( 'penci_archive_layout' );
		$demo_sidebar = isset( $_GET['sidebar'] ) ? esc_html( trim( $_GET['sidebar'] ) ) : '';

		if( function_exists( 'is_shop' ) && function_exists( 'is_product_category' ) && function_exists( 'is_product_tag' ) && function_exists( 'is_product' ) ) {
			if( is_shop() || is_product_category() || is_product_tag() ) {
				$query->set('posts_per_page', 12);
			} else {
				if( $home_layouts == 'mixed' || ( $home_layouts == 'mixed-2' && $home_sidebar != true ) ) {
					$query->set('posts_per_page', 12);
				} elseif( ( in_array( $home_layouts, $array_layouts3 ) && is_home() ) || ( in_array( $archive_layouts, $array_layouts3 ) && is_archive() ) ) {
					$query->set('posts_per_page', 6);
				} elseif( ( $home_layouts == 'standard-grid' && ! $home_sidebar ) || ( $home_layouts == 'classic-grid' && ! $home_sidebar ) ) {
					$query->set('posts_per_page', 10);
				} elseif ( ( is_home() &&  ( ( in_array( $home_layouts, $array_layouts ) && $demo_sidebar == 'none' ) || ( in_array( $home_layouts, $array_layouts ) && $home_sidebar == false ) ) ) || ( is_archive() && ( ( in_array( $archive_layouts, $array_layouts ) && $demo_sidebar == 'none' ) || ( in_array( $archive_layouts, $array_layouts ) && $archive_sidebar == false ) ) ) ) {
					$query->set('posts_per_page', 9);
				} elseif (( is_home() &&  ( ( in_array( $home_layouts, $array_layouts2 ) && $demo_sidebar != 'none' ) || ( in_array( $home_layouts, $array_layouts2 ) && $home_sidebar != false ) ) ) || ( is_archive() && ( ( in_array( $archive_layouts, $array_layouts2 ) && $demo_sidebar != 'none' ) || ( in_array( $archive_layouts, $array_layouts2 ) && $archive_sidebar != false ) ) ) ) {
					$query->set('posts_per_page', 9);
				}
			}
		} else {
			if( $home_layouts == 'mixed' || ( $home_layouts == 'mixed-2' && $home_sidebar != true ) ) {
				$query->set('posts_per_page', 12);
			} elseif( ( in_array( $home_layouts, $array_layouts3 ) && is_home() ) || ( in_array( $archive_layouts, $array_layouts3 ) && is_archive() ) ) {
				$query->set('posts_per_page', 6);
			} elseif( ( $home_layouts == 'standard-grid' && ! $home_sidebar ) || ( $home_layouts == 'classic-grid' && ! $home_sidebar ) ) {
				$query->set('posts_per_page', 10);
			} elseif ( ( is_home() &&  ( ( in_array( $home_layouts, $array_layouts ) && $demo_sidebar == 'none' ) || ( in_array( $home_layouts, $array_layouts ) && $home_sidebar == false ) ) ) || ( is_archive() && ( ( in_array( $archive_layouts, $array_layouts ) && $demo_sidebar == 'none' ) || ( in_array( $archive_layouts, $array_layouts ) && $archive_sidebar == false ) ) ) ) {
				$query->set('posts_per_page', 9);
			} elseif (( is_home() &&  ( ( in_array( $home_layouts, $array_layouts2 ) && $demo_sidebar != 'none' ) || ( in_array( $home_layouts, $array_layouts2 ) && $home_sidebar != false ) ) ) || ( is_archive() && ( ( in_array( $archive_layouts, $array_layouts2 ) && $demo_sidebar != 'none' ) || ( in_array( $archive_layouts, $array_layouts2 ) && $archive_sidebar != false ) ) ) ) {
				$query->set('posts_per_page', 9);
			}
		}
	}
}
add_action('pre_get_posts','penci_demos_pre_get_posts');

/**
 * Custom numbers instagram show on footer when site is boxed
 *
 */
add_action( 'wp_head', 'penci_custom_number_instagram_footer' );
function penci_custom_number_instagram_footer() {
	/* Custom instagram */
	?>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Lato:400,400italic,700);.penci-soledad-demos-one-click{font-family:'Lato',sans-serif;text-align:center;position:fixed;top:50%;left:0;width:160px;background-color:#fff;border:1px solid #DEDEDE;border-left:none;padding:5px 12px;z-index:100;height:560px;margin-top:-280px;-webkit-transition:all .4s;-moz-transition:all .4s;-o-transition:all .4s;transition:all .4s}.penci-soledad-demos-one-click.hide-demos-bar{left:-160px}.penci-button-options{position:absolute;top:37px;right:-40px;cursor:pointer;z-index:12;background:#fff;width:40px;height:44px;text-align:center;border-radius:0 5px 5px 0;-webkit-border-radius:0 5px 5px 0;border:1px solid #DEDEDE;border-left:none}@-webkit-keyframes animate-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes animate-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.penci-button-options i{font-size:20px;line-height:42px;color:#E42929;margin-right:2px;-webkit-animation:animate-spin 2s infinite linear;animation:animate-spin 2s infinite linear}.header-demos{font-family:'Lato',sans-serif;font-weight:700;font-size:14px;line-height:24px!important;color:#313131;border-bottom:1px solid #DEDEDE;padding:1px 0 6px;margin-bottom:15px;text-transform:uppercase}.soledad-demos-description{font-family:'Lato',sans-serif;font-size:11px;line-height:1.7;margin-bottom:14px;color:#2D2D2D}.penci-soledad-skin{display:inline-block;width:100%;vertical-align:top}.penci-click-demos-style{text-align:center;margin-bottom:12px}.penci-click-demos-style a{font-family:'Lato',sans-serif;display:block;position:relative;font-size:12px;height:23px;line-height:22px;border:1px solid #DEDEDE;color:#888!important;transition:all .2s;-webkit-transition:all .2s}.penci-click-demos-style a:hover{color:#313131!important;border-color:#888}.penci-click-demos-style a.penci-buy-now-click{ background: #313131;color: #fff !important;border-color: #313131; }.penci-click-demos-style a span{font-family:'Lato',sans-serif;color:#FF2E2E;font-size:9px;position:absolute;right:3px;top:3px;line-height:1}@media only screen and (max-width: 960px){.penci-soledad-demos-one-click{display:none}}.pllexislider .slides li{position:relative}.pllexislider-overlay ul li .jr-insta-wrap{position:absolute;bottom:0;width:100%}.pllexislider .slides li > a{position:absolute;top:0;left:0;width:100%;height:100%;background-size:cover;background-position:center center}.widget .jr-insta-thumb ul.thumbnails.jr_col_3 li{padding-bottom:33.33%!important;position:relative}.widget .jr-insta-thumb ul.thumbnails.jr_col_3 li > a{position:absolute;top:5px;left:5px;right:5px;bottom:5px;background-size:cover;background-position:center center;width: auto;}.jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li{padding-bottom:12.5%!important;position:relative}.jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li > a{position:absolute;top:0;left:0;width:100%;height:100%;background-size:cover;background-position:center center}@media only screen and (max-width: 960px){.widget .jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li{width:25%!important;padding-bottom:25%!important}}@media only screen and (max-width: 640px){.widget .jr-insta-thumb ul.thumbnails.jr_col_3 li{width: 50% !important;padding-bottom:50%!important}}
		#navigation ul.menu li.featured-text a:after{ content: "HOT" !important; font-family: 'Lato',sans-serif !important;color: #FF2E2E !important;font-size:8px !important;right: 3px;top:3px;line-height:1 !important;vertical-align:top !important;font-weight:bold !important;margin-left:2px !important;}#navigation ul.menu li.featured-new a:after{ content: "NEW" !important; font-family: 'Lato',sans-serif !important;color: #FF2E2E !important;font-size:8px !important;right: 3px;top:3px;line-height:1 !important;vertical-align:top !important;font-weight:bold !important;margin-left:2px !important;}
		.wrapper-boxed.enable-boxed .jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li{width:16.66%!important;padding-bottom:16.66%!important}.wrapper-boxed.enable-boxed .jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li:nth-child(7),.wrapper-boxed.enable-boxed .jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li:nth-child(8),.wrapper-boxed.enable-boxed .jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li:nth-child(15),.wrapper-boxed.enable-boxed .jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li:nth-child(16){display:none!important}@media only screen and (max-width: 960px){.wrapper-boxed.enable-boxed .widget .jr-insta-thumb ul.thumbnails.no-border.jr_col_8 li{width:33.33%!important;padding-bottom:33.33%!important}}
		.jr-insta-thumb ul.thumbnails li a:before, .jr-insta-thumb ul.thumbnails li a:after{top: 5px; left: 5px; right: 5px; bottom: 5px;}
	</style>
	<script type="text/javascript">
		function penci_demo_fix_insta() {
			var $j = jQuery;
			$j('.pllexislider' ).each( function() {
				var $this = $j(this ),
					$this_height = $this.width();
				$this.find('li' ).css( 'height', $this_height );
			} );
		}
		jQuery(window ).load( function(){
			penci_demo_fix_insta();
		} );
		jQuery(window ).resize( function() {
			penci_demo_fix_insta();
		} );
	</script>
	<?php
}

/**
 * Create demos bar for online demos
 * Add this to footer in online demo site
 * <?php do_action('penci_demos_more'); ?> in footer.php above <div id="fb-root"></div>
 * This action need remove when provide theme for clients
 *
 * @author Kang
 */
//add_action( 'penci_demos_more', 'penci_add_demos_bar' );
function penci_add_demos_bar() {
?>
	<div class="penci-soledad-demos-one-click">
		<div class="penci-button-options"><i class="fa fa-cog"></i></div>
		<div class="header-demos">Theme Demos</div>
		<p class="soledad-demos-description">With Soledad you can create your own style of blog & magazine site very easy. Here are example that can be imported with one click.</p>
		<div class="penci-soledad-skin">
			<?php
			$penci_demos_skin = array(
				'Default'             => array( 'http://pencidesign.com/soledad/', '' ),
				'Food'                => array( 'http://pencidesign.com/soledad/soledad-food/', '' ),
				'Fashion & Lifestyle' => array( 'http://pencidesign.com/soledad/soledad-fashion-lifestyle/', '' ),
				'Travel'              => array( 'http://pencidesign.com/soledad/soledad-travel/', '' ),
				'Beauty'              => array( 'http://pencidesign.com/soledad/soledad-beauty/', '' ),
				'Technology'          => array( 'http://pencidesign.com/soledad/soledad-technology/', '' ),
				'Magazine'            => array( 'http://pencidesign.com/soledad/soledad-magazine/', 'HOT' ),
				'Craft & D.I.Y'       => array( 'http://pencidesign.com/soledad/soledad-craft-diy/', 'TREND' ),
			);
			foreach( $penci_demos_skin as $k_skin => $val_skin ) {
			?>
			<div class="penci-click-demos-style">
				<a href="<?php echo $val_skin[0]; ?>">
					<?php echo $k_skin; ?>
					<?php $skin_hot_new = $val_skin[1];
					if( !empty( $skin_hot_new ) ) {
						echo '<span>'. $skin_hot_new .'</span>';
					}
					?>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
		var $j = jQuery;
		$j('.penci-soledad-demos-one-click .penci-button-options, .penci-soledad-demos-one-click .header-demos' ).on( 'click', function () {
			$j(this ).parent().toggleClass('hide-demos-bar');
		} );
	</script>
<?php
}