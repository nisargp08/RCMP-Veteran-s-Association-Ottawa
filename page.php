<html>
<head>
<!-- Header of the Website -->
<?php get_header(); ?>
</head>
<body>
<div class="image-span" style="background-image: url(<?php the_field('background_image')?>);">
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
        <div id="accordion">
            <div class="card">
                <h4 class="card-header">
                    <div class="text-left">
                        <?php the_field('card_title'); ?>
                    <div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="Click to change the message in the language">
                    <button class="btn btn-dark btn-sm" data-toggle="collapse" href="#messageCollapseEnglish" aria-expanded="true" aria-controls="messageCollapseEnglish">EN</button>
                    <button  class="btn btn-danger btn-sm collapsed" data-toggle="collapse" href="#messageCollapseFrench" aria-expanded="false" aria-controls="messageCollapseFrench">FR</button>
                    </div>
                    </div>
                </h4>
                <div class="card-body bg-light">
                    <div class="collapse show" id="messageCollapseEnglish" data-parent="#accordion">
                        <?php the_content() ?>
                    </div>
                    <div class="collapse" id="messageCollapseFrench" data-parent="#accordion">
                        <?php the_field('french_message'); ?><hr>
                    </div>
                        <?php the_field('ottawa_message'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
   
<!-- Footer of the Website -->
<?php get_footer(); ?>