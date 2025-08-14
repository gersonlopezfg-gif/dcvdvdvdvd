<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-100 text-gray-800'); ?>>

    <!-- Header / Navigation -->
    <header class="bg-white/90 backdrop-blur-lg sticky top-0 z-50 shadow-md">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-3xl font-extrabold text-gray-900 nav-link" data-page="home">TWA</a>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300 nav-link" data-page="home">Inicio</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300 nav-link" data-page="services">Servicios</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300 nav-link" data-page="about">Nosotros</a>
                <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-blue-700 transition duration-300 nav-link" data-page="contact">Contacto</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden text-gray-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 nav-link" data-page="home">Inicio</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 nav-link" data-page="services">Servicios</a>
            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 nav-link" data-page="about">Nosotros</a>
            <a href="#" class="block mt-2 text-center bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 nav-link" data-page="contact">Contacto</a>
        </div>
    </header>
