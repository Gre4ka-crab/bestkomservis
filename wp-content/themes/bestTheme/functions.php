<?php

//Функция для деабага
function debug($arg, $die = false)
{
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
    if ($die) die();
}

function menu_refactor($menu_id)
{

    $menu_arr = [];
    $menu_items = wp_get_nav_menu_items($menu_id, [
        'output_key' => 'menu_order',
    ]);
    foreach ($menu_items as $key => $menu_item){
        if ($menu_item->menu_item_parent == '0'){
            $menu_arr[$menu_item->ID] = [
                'id' => $menu_item->ID,
                'title' => $menu_item->title,
				'href' =>  $menu_item->url,
                'type' => $menu_item->type,
            ];
        }else{
            $menu_arr[$menu_item->menu_item_parent]['children'][] = [
                'id' => $menu_item->ID,
                'title' => $menu_item->title,
				'href' =>  $menu_item->url,
                'type' => $menu_item->type
            ];
        }
    }
    return $menu_arr;
}

//Миниатюры постов
if (!function_exists('main_setup')) :
    function main_setup()
    {
        /**
         * Enable support for Post Thumbnails on posts and pages.
         * @link //developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
    }
endif;
add_action('after_setup_theme', 'main_setup');

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_enqueue_scripts', 'script_theme');

function style_theme()
{
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/plugins/fancybox/jquery.fancybox.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}

function script_theme()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/plugins/fancybox/jquery.fancybox.min.js');
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js');

}


add_theme_support('title-tag');
