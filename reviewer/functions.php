<?php

function my_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	foreach ($pieces as $piece) {
			if (preg_match($pattern_contents, $piece, $matches)) {
					$new_content .= $matches[1];
			} else {
					$new_content .= wptexturize(wpautop($piece));
			}
	}

	return $new_content;
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );
remove_filter('the_content', 'wptexturize');
remove_action( 'wp_head', 'rsd_link' );

add_filter('the_content', 'my_formatter', 99);
add_filter('xmlrpc_enabled', '__return_false');

add_action( 'after_setup_theme', 'mainMenu' );
add_theme_support( 'post-thumbnails' );

function mainMenu() {
	register_nav_menu( 'main', 'Основное меню' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts(){
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'owl-slide', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js', array(), '2.3.4', true );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );
function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.css' );
	wp_enqueue_style( 'owl-slide', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css' );
}

add_action( 'init', 'register_post_types' );
function register_post_types() {

    register_post_type( 'Rivals', [
		'label'  => null,
		'labels' => [
			'name'               => 'Бойцы', 
			'singular_name'      => 'Боец', 
			'add_new'            => 'Добавить бойца', 
			'add_new_item'       => 'Добавление бойца', 
			'edit_item'          => 'Редактирование бойца', 
			'new_item'           => 'Новые бойцы', 
			'view_item'          => 'Смотреть бойца', 
			'search_items'       => 'Искать бойцов', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Бойцы',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'comments' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

add_shortcode( 'fighter', 'fighter_shortcode' );
function fighter_shortcode( $atts ){
	global $post;
	$rg = (object) shortcode_atts( [
		'id' => null
	], $atts );
	if( ! $post = get_post( $rg->id ) )
		return '';
	$out = '
		<div class="fighters-card-item">
			<a href="'.get_permalink($item->ID).'">
				<div class="fighters-card-item-title"> 
					<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>
					<span>'.get_the_title().'</span>
				</div>
			</a>
			<div class="fighters-card-item-info">
				<span class="fighters-card-item-info-left">Бои</span>
				<span class="fighters-card-item-info-right">'.get_field('fight').'</span>
			</div>
			<div class="fighters-card-item-info">
				<span class="fighters-card-item-info-left">Победы</span>
				<span class="fighters-card-item-info-right">'.get_field('wins').'</span>
			</div>
			<div class="fighters-card-item-info">
				<span class="fighters-card-item-info-left">Поражения</span>
				<span class="fighters-card-item-info-right">'.get_field('defeat').'</span>
			</div>
			<div class="fighters-card-item-info">
				<span class="fighters-card-item-info-left">Ничьи</span>
				<span class="fighters-card-item-info-right">'.get_field('draws').'</span>
			</div>
		</div>
';
	wp_reset_postdata();
	return $out;
}

//take away feed
function fb_disable_feed() {
	wp_redirect(get_option('siteurl'));
}
add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
