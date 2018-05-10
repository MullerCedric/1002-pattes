<?php
include(__DIR__ . '/core/Maison1002pattes.php');
include(__DIR__ . '/core/Menus/Container.php');
include(__DIR__ . '/core/Menus/Item.php');
include(__DIR__ . '/core/Post_types/remove_undesirable.php');
include(__DIR__ . '/core/Post_types/employee.php');
include(__DIR__ . '/core/Post_types/job.php');
include(__DIR__ . '/core/Post_types/disease.php');
include(__DIR__ . '/core/Post_types/partner.php');
include(__DIR__ . '/core/Post_types/question.php');

$Maison1002pattes = new Maison1002pattes();

/**
 * Theme navigation menus
 */
function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Navigation affichée dans l\'en-tête du site'),
        'footer-menu' => __('Navigation affichée dans le pied de page du site')
    ]);
}

add_action('init', 'register_my_menus');

// Menus controllers
function Maison1002pattes_get_menu($location) {
    global $Maison1002pattes;
    if(!isset($Maison1002pattes->menus)) $Maison1002pattes->menus = [];
    if(!isset($Maison1002pattes->menus[$location])) $Maison1002pattes->menus[$location] = new Container($location);
    return $Maison1002pattes->menus[$location];
}
