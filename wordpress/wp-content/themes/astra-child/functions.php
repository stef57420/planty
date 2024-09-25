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

// Ajouter le lien "Admin", au menu principal
function add_custom_links_to_menu($items, $args) {
    //if ($args->theme_location === 'primary') {
        
        // Créer le lien
        $admin_link = '<li class="menu-item"><a class="menu-admin" href="' . admin_url() . '">Admin</a></li>';
       
        // On insère le lien si l'utilisateur est connecté et que le lien n'existe pas
        if ((is_user_logged_in()) && (strpos($items, 'menu-admin') === false) ){
            
                $items .= $admin_link;
          
            
        }
        
    
    //}
    return $items;
}
add_filter('wp_nav_menu_items', 'add_custom_links_to_menu', 10, 2);

// Permet la prise en charge des menus
add_theme_support('menus');




?>






