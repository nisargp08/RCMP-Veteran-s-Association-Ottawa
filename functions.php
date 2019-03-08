<?php
    function rcmp_imports(){
        wp_enqueue_style('rcmp_ottawa_main_style',get_theme_file_uri('/assets/css/bootstrap.min.css'));
        wp_enqueue_style('rcmp_ottawa_main_footer_style',get_theme_file_uri('/assets/css/footer.min.css'));     
        wp_enqueue_style('rcmp_ottawa_main_font_icons_style','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('rcmp_custom_content_style',get_stylesheet_uri());
    }

    function title_setup(){
        add_theme_support('title_tag');
    }
  
    /* This action is used to call the function which will import all the necessary css and js required for the project */
    add_action('wp_enqueue_scripts','rcmp_imports');
    /*This action is used to call the function which will set the title of each page according to its name in the database */
    add_action('after_setup_theme','title_setup');
?>