<?php
/**
 * The Header for the Baker Design Baseline Theme
 *
 * Displays all of the header and navigation
 *
 * @package WordPress
 * @subpackage Baker Design Theme 1.0
 * @since 2.0
 */

global $module;
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title><?php echo bloginfo( "name"); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- force IE out of compatability mode for any version -->
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<!-- force mobile view 100% -->
  <meta name="viewport" content="width=device-width">
  <!-- <link rel="stylesheet" href=""> -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>  
<?php?>

<header class="site-header">
    <a class="logo" href="<?php bloginfo('url') ?>">
      <?php echo get_bloginfo('name'); ?>
    </a>
    <button class="hamburger btn btn-outline-primary">Menu</button>
    <nav class="primary"> 
      <?php 
        $cats = get_categories();  
        foreach($cats as $cat) : ?>
        <a href="/category/<?php echo $cat->slug; ?>">
          <?php echo $cat->name; ?>
        </a><?php 
       endforeach; ?>
    </nav>
</header>
<main class="basic-grid site-layout" id="maincontent"> <!-- Site container --> 


