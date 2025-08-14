<?php

// Esta función carga los estilos y scripts del tema.
function twa_theme_scripts() {
    // Cargar la hoja de estilos principal del tema.
    wp_enqueue_style('twa-style', get_stylesheet_uri());

    // Cargar Tailwind CSS desde el CDN.
    wp_enqueue_script('tailwind-css', 'https://cdn.tailwindcss.com', array(), null, false);

    // Cargar Google Fonts.
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null);
}

// Añadir la función a la acción 'wp_enqueue_scripts' de WordPress.
add_action('wp_enqueue_scripts', 'twa_theme_scripts');

?>
