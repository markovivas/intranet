<?php
function intranet_scripts() {
    wp_enqueue_style('intranet-style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'intranet_scripts');

function intranet_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'intranet')
    ));
}
add_action('after_setup_theme', 'intranet_menus');

// Suporte a thumbnails
add_theme_support('post-thumbnails');

// Suporte a tradução
load_theme_textdomain('intranet', get_template_directory() . '/languages');

// Registrar áreas de widgets
function intranet_widgets() {
    register_sidebar(array(
        'name'          => __('Barra Lateral', 'intranet'),
        'id'            => 'sidebar-1',
        'description'   => __('Adicione widgets para a barra lateral.', 'intranet'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Rodapé', 'intranet'),
        'id'            => 'footer-1',
        'description'   => __('Adicione widgets ao rodapé.', 'intranet'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'intranet_widgets');

// Adicionar suporte a título dinâmico
add_theme_support('title-tag');

// Personalizar o tamanho das thumbnails
add_image_size('noticia-thumb', 300, 200, true);

// Suporte a WebP
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

// Breadcrumbs
function intranet_breadcrumbs() {
    // Implementação dos breadcrumbs
}

// Lazy loading
add_filter('wp_get_attachment_image_attributes', function($attr) {
    $attr['loading'] = 'lazy';
    return $attr;
});

// Tempo de leitura estimado
if (!function_exists('estimated_reading_time')) {
    function estimated_reading_time() {
        $content = get_post_field('post_content', get_the_ID());
        $word_count = str_word_count(strip_tags($content));
        $readingtime = ceil($word_count / 200);
        return ($readingtime == 0) ? 'Menos de 1' : $readingtime;
    }
}

// Reset de CSS - Shortcode
add_filter('do_shortcode_tag', function($output, $tag) {
    if ($tag === 'mostra-calendario') {
        return '<div style="all: initial !important;">' . $output . '</div>';
    }
    return $output;
}, 10, 2);

?>
