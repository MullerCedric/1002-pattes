<?php

include(__DIR__ . '/core/Menus/Container.php');
include(__DIR__ . '/core/Menus/Item.php');

function assets($path){
    return get_template_directory_uri() . '/' . trim($path, '/');
}

$pattes = new \stdClass();

register_nav_menu('main', 'mon menu principal');

function pattes_get_menu($location)
{
    global $pattes;
    if(!$pattes);
    if(!isset($pattes->menus)) $pattes->menus = [];
    if(!isset($pattes->menu[$location])) $pattes->menus[$location] = new Container($location);
    return $pattes->menus[$location];

}

function pattes_get_bem($base, $classes)
{
    $string = $base;
    if (!is_array($classes)) $classes = [$classes];
    foreach ($classes as $modifier) {
        $string .= ' ' . $base . '--' . $modifier;
    }
    return $string;
}

function pattes_register_image_sizes(){
    add_image_size('pattes-thumbnail', 480,220, true);
    add_image_size('pattes-big', 1024,520, true);
}

add_action('init', 'remove_fields');

function remove_fields(){
    remove_post_type_support('page', 'editor');
}

function pattes_images($arrImg, $size = 'full') {
    if(is_array($arrImg) && isset($arrImg['sizes'][$size])){
        return $arrImg['sizes'][$size];
    }
    return $arrImg['url'] ?? null;
}

