<?php

function custom_theme_fonts() {
    wp_enqueue_style(
        'custom-google-fonts', 
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', 
        array(), // Pas de dépendances
        null // Pas de version pour éviter les erreurs de cache
    );
}
add_action('wp_enqueue_scripts', 'custom_theme_fonts');


function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml'; // Autorise les fichiers SVG
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

