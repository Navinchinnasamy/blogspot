<?php
/**
 * Created by PhpStorm.
 * User: navin
 * Date: 11/23/2016
 * Time: 12:51 PM
 */
require_once("config.php");
	spl_autoload_register( function ( $class_name ) {
		include 'classes/' . $class_name . '.php';
	} );
	$fn   = functions::getInstance();
?>

<head>

    <!-- Basic -->
    <title>Navin | Home</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Navin - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

    <!-- Navin CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/jade.css" title="jade" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/peach.css" title="peach" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/sky-blue.css" title="sky-blue" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- Navin JS  -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="js/jquery-redirect/jquery.redirect.js"></script>
</head>