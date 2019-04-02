<html>

<head>
    <!-- Header of the Website -->
    <?php get_header(); ?>
</head>

<body>

    <?php 
        $banner_image = new WP_Query(array('post_type' => 'Banner Images'));
        while($banner_image->have_posts()){
            $banner_image->the_post();?>
           <h1><?php post_type_archive_title(); ?></h1>
       <?php }
    ?>
   <html>

<head>
    <!-- Header of the Website -->
    <?php get_header(); ?>
</head>

<body>
    <?php
    $banner_image = new WP_Query(array('post_type' => 'banner_images','posts_per_page'=> -1));
    while ($banner_image->have_posts()) {
        $banner_image->the_post();
        $post_title = get_the_title();
        if ($post_title == 'Index') {
            $backgroundImage = get_field('background_image');
        }
        wp_reset_postdata();
    }
    ?>
    <div class="introduction-image-span" style="background-image: url('<?php echo $backgroundImage; ?>')">
        <div class="banner-text-index">
            <h3>Welcome / Bienvenue</h3>
            <h5> to Ottawa Division</h5>

        </div>

    </div>
    <div class="container">

        <!-- Start of 2 events -->
        <br><br>
        <hr>
        <h2>Upcoming Events..</h2>

        <?php 
        /*Looping variable so that the modal id is unique for each iteration*/
        $i = 1;
        $events = new WP_Query(array('post_type' => 'Events'));

        while ($events->have_posts()) {
                $events->the_post();
                if ($i > 2) {

                    break;
                }
                ?>
        <div class="card card-body bg-light">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img class="card-img-top" src="<?php get_stylesheet_directory_uri(the_field('event_image')); ?>"></img>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <p class="card-text"><?php the_content() ?></p>
                    <!-- Button trigger modal starts here -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eventDetailModal<?php echo $i ?>">
                        Get Details..
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="eventDetailModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="eventDetailModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="eventDetailModalTitle"> Events - <?php the_title(); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4>Description:</h4> <?php the_field('event_description') ?>
                                    <h4>Venue:</h4> <?php the_field('event_venue') ?>
                                    <h4><br>Date:</h4> <?php the_field('event_date') ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal ends here -->
                </div>

            </div>
        </div><br>

        <!-- WHile loop for displaying events ends -->
        <!-- Incrementing value of 'i' so that modal object data can be displayed for next event -->




        <?php 
        $i++;
    }
?>
        <a class="btn btn-danger" href="/events/" role="button">Goto All Events</a>
        <hr>

        <!-- Start of Post................................................................................... -->
        <br><br>
        <h2>News & Posts..</h2>

        <?php 
        if (get_query_var('paged')) $paged = get_query_var('paged');
        if (get_query_var('page')) $paged = get_query_var('page');

        $id = 1;
        $query = new WP_Query(array('post_tpe' => 'events', 'paged' => $paged, 'posts_per_page' => 2));

        if ($query->have_posts()) { ?>

        <?php while ($query->have_posts()) {
            $query->the_post();
            ?>
        <div class="jumbotron">

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img class="card-img-top" src="<?php get_stylesheet_directory_uri(the_field('post_image')); ?>" alt=""></img>
                </div>
                <div class="col-md-8 col-sm-8">

                    <br>
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <p class="card-text"><?php the_content() ?></p>
                    <!-- Button trigger modal starts here -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eventDetailModal<?php echo $id ?>">
                        Get Details..
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="eventDetailModal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="eventDetailModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="eventDetailModalTitle"> <?php the_title(); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4>Description:</h4> <?php the_field('post_description') ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal ends here -->
                    <br><br>
                    <div>
                        <div class="fa fa-user"> Published by: <?php echo the_field('post_publish_by') ?></div>
                        <b>|</b>
                        <div class="fa fa-calendar"> On <?php the_field('post_date') ?></div>
                    </div>
                </div>

            </div>
        </div>


        <?php wp_reset_postdata();
        $id++;
    } ?>
        <?php 
    } ?>



    </div>

    </div>



    <!-- Footer of the Website -->
    <?php get_footer(); ?> 