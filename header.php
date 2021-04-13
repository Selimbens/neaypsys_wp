
<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Required meta tags-->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php  wp_head();?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo(get_template_directory_uri()); ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo(get_template_directory_uri()); ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo(get_template_directory_uri()); ?>/img/favicons/favicon-16x16.png">
    <!-- Web fonts-->


</head>

<body <?php body_class('theme-dark'); ?>>
<!-- Preloader-->
<div class="preloader">
    <div class="preloader-block">
        <div class="preloader-icon"><span class="loading-dot loading-dot-1"></span><span class="loading-dot loading-dot-2"></span><span class="loading-dot loading-dot-3"></span></div>
    </div>
</div>
<div id="overlay-effect"></div>
<svg class="half-logo" width="80" height="159" viewBox="0 0 80 159" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M79.5 0V159C79.5 115.072 43.9284 79.5 0 79.5C43.8544 79.5 79.5 43.8544 79.5 0Z" fill="#F4C500"/>
</svg>

<!-- Navbar-->
<nav class="navbar-expand-md navbar fixed-top" id="navbar"><a class="navbar-brand" data-scroll="" href="#home-area">
        <!-- Navbar Logo-->
        
        <img class="img-fluid" src="<?php echo(get_template_directory_uri()); ?>/img/Neapsys_logo-bg-sombre.png" alt="Logo"></a>
    <span class="navbar-menu ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button"><span class="btn-line"></span></span>
    <div class="collapse navbar-collapse order-1 order-lg-0" id="navbarSupportedContent">
        <!-- Navbar menu-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#about">A propos</a></li>
            <li class="nav-item"><a class="nav-link" href="#expertises">Nos expertises</a></li>
            <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#join">Nous rejoindre</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>