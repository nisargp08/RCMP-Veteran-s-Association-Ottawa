<?php
    function rcmp_imports(){
        wp_enqueue_style('rcmp_ottawa_main_style',get_theme_file_uri('/assets/css/bootstrap.min.css'));
        wp_enqueue_style('rcmp_ottawa_main_footer_style',get_theme_file_uri('/assets/css/footer.min.css'));     
        wp_enqueue_style('rcmp_ottawa_main_font_icons_style','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('rcmp_custom_content_style',get_stylesheet_uri());

    }

    add_action('wp_enqueue_scripts','rcmp_imports');
?>