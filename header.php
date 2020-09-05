<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ;?>
</head>
<body <?php body_class('test') ;?>>
<header class= "header primary" >
<h1 class="logo">Logo</h1>
<input type="checkbox" id="nav-toggle">
    <?php 
    wp_nav_menu( 
        array(
            'theme-location' => 'top-menu',
            'container' => 'nav',  
            'container_class' => 'menu-desplegable'
        )
    );?>
<label for="nav-toggle" class="nav-toggle-label">
    <span></span>
</label>
</header>
    