<?php
    function rcmp_imports(){
        wp_enqueue_style('rcmp_ottawa_main_style',get_theme_file_uri('/assets/css/bootstrap.min.css'));
        wp_enqueue_style('rcmp_ottawa_main_footer_style',get_theme_file_uri('/assets/css/footer.min.css'));
        wp_enqueue_style('rcmp_custom_content_style',get_theme_file_uri('/assets/css/style.css'));        
        wp_enqueue_style('rcmp_ottawa_font_style','//fonts.googleapis.com/css?family=Merriweather');

    }

    add_action('wp_enqueue_scripts','rcmp_imports');
?>