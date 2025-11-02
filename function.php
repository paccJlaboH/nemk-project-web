<?php

/**
 * Файл функцій для теми MEXA.
 * Містить хуки для підключення стилів та скриптів, 
 * а також функції для налаштування підтримки теми.
 */

// --------------------------------------------------------
// 1. ПІДКЛЮЧЕННЯ CSS ТА JS ХУКИ (enqueue)
// --------------------------------------------------------

function mexa_scripts() {
    // === CSS ===
    // Основний файл стилів
    wp_enqueue_style( 'mexa-style', get_stylesheet_uri(), array(), '1.0' );

    // Файл стилів для бургер-меню та адаптивності (якщо ви його створили окремо)
    // Використовуйте get_template_directory_uri() для посилань на файли всередині вашої теми.
    wp_enqueue_style( 'mexa-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1' );

    // === JS ===
    // Основний файл скриптів
    // 'jquery' - залежність, 'true' - завантажити у футері
    wp_enqueue_script( 'mexa-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

    // Скрипт для роботи бургер-меню (якщо ви використовуєте JS замість чистого CSS)
    // Оскільки у вашому попередньому запиті було чисте CSS-рішення, цей скрипт може бути не потрібен, 
    // але залишаємо його як приклад.
    // wp_enqueue_script( 'mexa-menu-toggle', get_template_directory_uri() . '/assets/js/menu-toggle.js', array(), '1.0', true );
}
// Хук для підключення стилів та скриптів
add_action( 'wp_enqueue_scripts', 'mexa_scripts' );


// --------------------------------------------------------
// 2. ПРАВИЛА ДЛЯ ПІДТРИМКИ ТЕМИ (theme support)
// --------------------------------------------------------

function mexa_theme_support() {
    
    // 1. Підтримка заголовків
    // Дозволяє WordPress керувати <title> у вашій темі.
    add_theme_support( 'title-tag' );

    // 2. Підтримка мініатюр (зображень постів)
    add_theme_support( 'post-thumbnails' );

    // 3. Підтримка кастомного логотипу (Custom Logo)
    // Дозволяє користувачеві завантажувати логотип через Налаштування -> Налаштувати
    add_theme_support( 'custom-logo', array(
        'height'      => 40, // Максимальна висота
        'width'       => 160, // Максимальна ширина
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    
    // 4. Підтримка стандартних форматів постів
    add_theme_support( 'post-formats', array( 
        'aside', 
        'gallery', 
        'link', 
        'image', 
        'quote', 
        'status', 
        'video', 
        'audio', 
        'chat' 
    ) );

    // 5. Підтримка HTML5 розмітки для коментарів, форм та галерей
    add_theme_support( 'html5', array( 
        'search-form', 
        'comment-form', 
        'comment-list', 
        'gallery', 
        'caption', 
    ) );
}
// Хук для налаштування теми
add_action( 'after_setup_theme', 'mexa_theme_support' );


// --------------------------------------------------------
// ДОДАТКОВІ ФУНКЦІЇ (Опціонально)
// --------------------------------------------------------

/**
 * Реєстрація областей меню (якщо потрібно)
 */
function mexa_register_nav_menus() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Головне меню', 'mexa' ),
        'footer'  => esc_html__( 'Меню у футері', 'mexa' ),
    ) );
}
add_action( 'init', 'mexa_register_nav_menus' );
?>