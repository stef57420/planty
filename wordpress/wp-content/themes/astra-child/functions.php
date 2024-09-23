<?php

// Enregistrement des styles du thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/css/astra-child.css',
        array('parent-style'),
        filemtime(get_stylesheet_directory() . '/css/astra-child.css')
    );
}

// Ajouter des scripts personnalisés
function astra_child_enqueue_scripts() {
    wp_enqueue_script('astra-child-scripts', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_scripts');

// Ajouter les liens "Nous rencontrer", "Admin", et "Commander" au menu principal
function add_custom_links_to_menu($items, $args) {
    if ($args->theme_location === 'primary') {
        // Créer les liens
        $nous_rencontrer_link = '<li class="menu-item"><a href="' . home_url('/nous-rencontrer') . '">Nous rencontrer</a></li>';
        $admin_link = '<li class="menu-item"><a class="menu-admin" href="' . admin_url() . '">Admin</a></li>';
        $commander_link = '<li class="menu-item"><a class="menu-commander" href="' . home_url('/commander') . '">Commander</a></li>';

        // Assurer qu'aucun des liens n'est déjà présent
        if (strpos($items, 'menu-admin') === false) {
            $items .= $admin_link;
        }
        if (strpos($items, 'menu-commander') === false) {
            $items .= $commander_link;
        }
        // Ajouter "Nous rencontrer" au début du menu
        if (strpos($items, 'Nous rencontrer') === false) {
            $items = $nous_rencontrer_link . $items;
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_custom_links_to_menu', 10, 2);

// Permet la prise en charge des menus
add_theme_support('menus');




?>






