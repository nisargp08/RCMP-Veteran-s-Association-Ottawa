<html>
<head>
<!-- Header of the Website -->
<?php get_header(); ?>
</head>
<body>
    <div class="image-span" style="background-image: url(<?php the_field('event_image')?>);">
    <?php
        while(have_posts()){
            the_post();
        ?>
            <div class="banner-text"><?php 
            $postTypeName = get_post_type(get_the_ID());
            echo ucfirst($postTypeName);
            ?>
            </div>
    </div>
     <?php   
        }
    ?>
     <div class="container">
        <div class="content-container">
                <div class="card card-body bg-light">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img class="card-img-top" src="<?php get_stylesheet_directory_uri(the_field('event_image'));?>" alt="" style="height:25%;"></img>
                        </div> 
                        <div class="col-md-8 col-sm-8">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <p class="card-text"><?php the_content() ?></p>
                        </div>
                    </div>
                </div>   
        </div>
    </div>


<!-- Footer of the Website -->
<?php get_footer(); ?>