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
        <!-- This if condition is used so that the following piece of code will only be displayed for 'Introduction' page -->
        <?php if(is_page('introduction')){ ?>
            <div id="accordion">
                <div class="card">
                    <h4 class="card-header">
                        <div class="text-left">
                            <?php the_field('card_title'); ?>
                        <div class="btn-group" role="group">
                        <button class="btn btn-dark btn-sm" data-toggle="collapse" href="#messageCollapseEnglish" aria-expanded="true" aria-controls="messageCollapseEnglish">
                            <div data-toggle="tooltip" data-placement="top" title="Click to change the message in English">
                                EN
                            </div>
                        </button>
                        <button  class="btn btn-danger btn-sm collapsed" data-toggle="collapse" href="#messageCollapseFrench" aria-expanded="false" aria-controls="messageCollapseFrench">
                            <div data-toggle="tooltip" data-placement="top" title="Click to change the message in French">
                                FR
                            </div>
                        </button>
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
        <!-- If condition for introduction page content ends here -->
        <?php } ?>
        <?php if(is_page('Executive')) { ?>
            <div class="card">
                <div class="card-header"> 
                    <ul class="nav nav-pills card-header-pills"  id="myTab" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active test" id="first-tab" data-toggle="tab" href="#firstTab" role="tab" aria-controls="firstTab" aria-selected="true"><?php the_field('first_tab_title'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondTab" role="tab" aria-controls="secondTab" aria-selected="false"><?php the_field('second_tab_title'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#thirdTab" role="tab" aria-controls="thirdTab" aria-selected="false"><?php the_field('third_tab_title'); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="firstTab" role="tabpanel" aria-labelledby="first-tab"><?php the_content(); ?></div>
                        <div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="second-tab"><?php the_field('second_tab_content'); ?></div>
                        <div class="tab-pane fade" id="thirdTab" role="tabpanel" aria-labelledby="third-tab"><?php the_field('third_tab_content'); ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>
         <!-- If condition for Executive page content ends here -->
         <?php if(is_page('Education Awards')){ ?>
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                    <hr>
                    <h5>Documents</h5>
                        <div class="accordion" id="accordionDocYear"> 
                            <?php 
                                    /*Storing all the years for awards in the variable */
                                    $years = get_field('education_award_year');
                                    if($years){
                                        /*Foreach loop to display a button for each document year */
                                        foreach($years as $year){
                            ?>
                                        <button class="btn btn-dark btn-sm collapseId" id="<?php echo $year; ?>" type="button" data-toggle="collapse"><?php echo $year; ?></button>
                            <?php 
                            /*foreach loop ends*/
                            }
                            ?>
                                    <div id="yearCollapse" class="collapse" aria-labelledby="year" data-parent="#accordionDocYear">
                                            <div class="card-body" id="document-body">
                                            </div>
                                    </div>
                            <?php
                            }
                            ?> 
                        <!-- Accordion ends -->
                        </div> 
                <!-- Card-body division tag ends -->         
                </div>
            <!-- Card division tag ends -->
            </div>
        <!-- If condition for Education Awards page content ends here -->
        <?php } ?>
     <!-- Content Container division tag ends here -->    
    </div>
<!-- Container division tag ends here -->
</div>
 
<!-- Footer of the Website -->
<?php get_footer(); ?>