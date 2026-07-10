<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="absolute top-0 left-0 w-full z-50 flex justify-between items-center py-8 px-12 text-white">
    <div class="border border-white/30 px-6 py-3 hover:border-white transition-all">
        <a href="<?php echo home_url(); ?>" class="text-xl font-bold tracking-[0.2em] uppercase">ecco</a>
    </div>

    <div class="flex items-center gap-12">
        <nav>
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary', 
                'container' => false,
                'menu_class' => 'flex gap-10 text-sm uppercase tracking-wider font-medium'
            )); 
            ?>
        </nav>

        <div class="flex gap-6 items-center">
            <a href="#" class="flex items-center gap-1 hover:text-gray-300 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="text-xs">0</span>
            </a>
            <a href="#" class="hover:text-gray-300 transition-colors">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
</a>
        </div>
    </div>
</header>