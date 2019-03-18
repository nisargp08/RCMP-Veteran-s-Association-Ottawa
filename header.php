<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
</head>
<body>
 <!-- Navigation Bar Begins -->
<header>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2a2c32;">
  <a class="navbar-brand mb-0 h1" href="/"><?php bloginfo('title')?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown"><!-- include active after nav-item to make the page active -->
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Information<!--<span class="sr-only">(current)</span>-->
            </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/introduction">Introduction</a>
                <a class="dropdown-item" href="/events">Events</a>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="/History">History</a>
                <a class="dropdown-item" href="/Executive">Executive</a>
                <a class="dropdown-item" href="#">RCMP National Memorial Cemetary</a>
                <a class="dropdown-item" href="/Education Awards">Education Awards</a>
                </div>
        </li>
        <li class="nav-item dropdown"><!-- include active after nav-item to make the page active -->
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Membership<!--<span class="sr-only">(current)</span>-->
            </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Prodcedure's Manual</a>
                <a class="dropdown-item" href="#">How To Join</a>
                </div>
        </li>
        <li class="nav-item dropdown"><!-- include active after nav-item to make the page active -->
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Resources<!--<span class="sr-only">(current)</span>-->
            </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Kit Clothing</a>
                <a class="dropdown-item" href="#">Links</a>
                <a class="dropdown-item" href="#">Laws & Regulations</a>
                </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Member's Only</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">The Spirit</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
    </ul>   
  </div>
</nav>
</header>
<!-- Navigation Bar Ends -->
