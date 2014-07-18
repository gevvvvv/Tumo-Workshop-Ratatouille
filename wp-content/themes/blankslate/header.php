<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>

    <title>Ratatouille</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src=js/bootstrap.js></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src=js/jquery-2.0.2.js></script>
    <script src=js/bootstrap.js></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.10.custom.js"></script>
    <link rel="icon" href="logo/favicon (1).ico" type="image/x-icon">


    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/app.js"></script>


</head>


<body id="<?php echo page_body_id(); ?>" <?php body_class(); ?>>

<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>

<div class="background">