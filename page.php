<html>
<head>
<!-- Header of the Website -->
<?php get_header(); ?>
</head>
<body>
<div class="introduction-image-span" style="background-image: url(<?php the_field('background_image')?>);">
    <?php
        while(have_posts()){
            the_post();
    ?>
            <div class="banner-text"><?php the_title() ?></div>
    <?php }
    ?>
</div>
    <div class="container">
        <div class="content-container">
            <?php the_content() ?>
        </div>
    </div>
   
<!-- Footer of the Website -->
<?php get_footer(); ?>