<!doctype html>
<!--[if lt IE 7]> <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" > <![endif]-->
<!--[if IE 7]>    <html <?php language_attributes(); ?> class="no-js ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html <?php language_attributes(); ?> class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php ci_e_title(); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow|Open+Sans' rel='stylesheet' type='text/css'>
	<meta name="apple-itunes-app" content="app-id=591553751">
	<!-- JS files are loaded via /functions/scripts.php -->

	<!-- CSS files are loaded via /functions/styles.php -->	

	<?php wp_head(); ?>

</head>

<?php
$alt_layout = ci_setting('layout')=='alt' ? ' alt ' : '';
?>
<body <?php body_class( $alt_layout ); ?>>
<?php do_action('after_open_body_tag'); ?>

<header id="header">
	<div class="pre-head show-on-mobile">
		<div class="wrap group">
			<div class="pre-head-wgt group">
				<?php dynamic_sidebar('top_bar'); ?>
			</div> <!-- .header-wgt -->
		</div>
	</div> <!-- .pre-head -->

	<div id="site-head">
		<div class="wrap group">
			<div class="header-wgt group">
				<?php dynamic_sidebar('top_bar'); ?>
			</div> <!-- .header-wgt -->
		</div> <!-- .wrap < #header -->
	</div> <!-- #site-head -->

	<nav>
		<div class="wrap group">
			<?php
				if(has_nav_menu('ci_main_menu'))
					wp_nav_menu( array(
						'theme_location' 	=> 'ci_main_menu',
						'fallback_cb' 		=> '',
						'container' 		=> '',
						'menu_id' 			=> 'navigation',
						'menu_class' 		=> 'group'
					));
				else
					wp_page_menu(array('menu_class'=>'group'));
			?>
		</div> <!-- .wrap < nav -->
	</nav>
</header>


<section id="main">
	<div class="wrap group">
