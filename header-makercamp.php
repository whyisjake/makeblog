<?php
/**
 * Maker Camp header template.
 *
 * @package    makeblog
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Cole Geissinger <cgeissinger@makermedia.com>
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Maker Camp</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
	
		<!-- Le styles -->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<?php wp_head( 'makercamp' ); ?>

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">

	</head>
	<body <?php body_class( 'makercamp' ); ?>>
		<header>
			<div class="navbar navbar-blue navbar-fixed-top">
				<div class="navbar-inner">
					<nav class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="http://makezine.com/">MAKE</a>
						<div class="nav-collapse in collapse">
							<ul class="nav clearfix">
								<li class="active"><a href="http://blog.makezine.com/volume/make-34/">Magazine</a></li>
								<li><a href="http://blog.makezine.com/">Blog</a></li>
								<li><a href="http://makerfaire.com/">Maker Faire</a></li>
								<li><a href="http://www.makershed.com/Default.asp">Maker Shed</a></li>
							</ul>
							<form class="navbar-search pull-right">
								<input type="text" class="search-query" placeholder="Search">
							</form>
						</div><!--/.nav-collapse -->
					</nav>
				</div>
			</div>

			<div class="black-bar hidden-phone">
				<div class="container">
					<?php
						// all Navigational items are controlled in Appearance > Menus : Maker Camp Nav
						wp_nav_menu( array(
							'theme_location' => 'mc-header-menu',
							'container' => '',
							'menu_class' => 'nav nav-inline pull-left',
						) );
					?>
					<p class="pull-right"><a href="register-summer-program.html">Include Maker Camp in your Summer Program</a></p>
				</div>
			</div>
		</header>
