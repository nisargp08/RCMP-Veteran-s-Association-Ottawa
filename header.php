<!DOCTYPE html>
<html>

<head>
    <title><?php echo bloginfo('title')?></title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Navigation Bar Begins -->
    <header>
    <!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Navigation Bar Begins -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2a2c32;">
            <a class="navbar-brand mb-0 h1" href="/"><?php bloginfo('title') ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php wp_nav_menu(array('theme_location' => 'menu-1')); ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Navigation Bar Ends --> 
    </header>
    <!-- Navigation Bar Ends --> 