<?php
    function rcmp_imports(){
        //Css
        wp_enqueue_style('rcmp_ottawa_main_style',get_theme_file_uri('/assets/css/bootstrap.min.css'));
        wp_enqueue_style('rcmp_ottawa_main_footer_style',get_theme_file_uri('/assets/css/footer.min.css'));     
        wp_enqueue_style('rcmp_ottawa_main_font_icons_style','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('rcmp_custom_content_style',get_stylesheet_uri());
        
        // Ajax Support
        wp_enqueue_script('ajax_scripts',get_template_directory_uri() . '/assets/javascript/ajax_scripts.js',array('jquery'));
        // The wp_localize_script allows us to output the ajax_url path for our script to use.
        wp_localize_script('ajax_scripts', 'ajax_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

        //Javascripts
        /*wp_enqueue_script('custom_script',get_stylesheet_directory_uri().'/assets/javascript/scripts.js', array('jQuery') , '1.0', true);        
        wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',  array(), '4.0.0', true);
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.js',  array(), '3.3.1', true);
        wp_enqueue_script('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',  array(), '1.12.9', true);*/

    }

     /*Ajax function for displaying documents on education award page */
     function education_award(){
        if(isset($_REQUEST['docYear'])){
            $docYear = $_REQUEST['docYear'];
            $searchName_firstParam = $docYear."-E";
            $searchName_secondParam = $docYear."-F";
            $educationAward = new WP_Query('pagename=education-awards');
            
            while($educationAward->have_posts()){
                $educationAward->the_post();
                /*Name of the meta box */
                $meta_name = 'education_awards';
                /*Name of the custom field */
                $field_name = 'all_years_documents';
                $doc_title = array();
                $doc_url = array();
                /*Looping through the entire list of documents to find each document for each year*/
                    foreach(get_cfc_meta($meta_name) as $key => $value){
                        $docs = get_cfc_field($meta_name,$field_name,false,$key);
                        $yearCheckOne = strpos($docs["title"],$searchName_firstParam);
                        $yearCheckTwo = strpos($docs["title"],$searchName_secondParam);
                        if($yearCheckOne !== false OR $yearCheckTwo!== false){
                            echo "<a role='button' href='".$docs["url"]."' target='_blank' class='btn btn-danger btn-sm'>".$docs["title"]."</a>&nbsp;";
                        }
                    }
            }
        }
        die();
    }

    function title_setup(){
        add_theme_support('title_tag');
    }

    /* This action is used to call the function which will import all the necessary css and js required for the project */
    add_action('wp_enqueue_scripts','rcmp_imports');
    /*This action is used to call the function which will set the title of each page according to its name in the database */
    add_action('after_setup_theme','title_setup');
    /*Ajax actions*/
    add_action('wp_ajax_my_action','education_award');
    add_action('wp_ajax_nopriv_my_action','education_award');
?>