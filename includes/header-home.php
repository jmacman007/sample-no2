<!DOCTYPE html>
<html lang="en-US">
<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<meta charset="UTF-8">
	<title><?php wp_title('•', true, 'right');
bloginfo('name');?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="John McCauley - web developer - art director">
	<meta name="keywords" content="frontend developer, web designer, frontend, front end, art director, john mccauley">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<script src="https://use.fontawesome.com/0a6c2c30f9.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
<!--[if lt IE 8]>
	<div class="alert alert-warning">
		You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
	</div>
	<![endif]-->
	<header id="top" class="header-above">
		<div class="container-fluid">
			<div class="row veryTop">
					<div class="col-sm-12 col-md-3 topLogo">
						<a href="/"><img id="jmaclogo" src="<?php echo get_template_directory_uri(); ?>/dist/img/jmacman-logo.png" alt="jmacman.com logo" title="jmacman.com">
						<p class="site-name">jmacman.com</p></a>
					</div>
					<div class="col-sm-12 col-md-6 text-center mainWords">
						<h2>Hello, <span>my name is</span></h2>
						<p class="lastName animated fadeInDown">John McCauley.</p>
						<p class="design animated fadeIn" style="letter-spacing:4px;">GRAPHIC & WEB DESIGNER</p>
						<a href="mailto:john@jmacman.com?Subject=I need help!" target="_top">E-mail Me</a>
					</div>
					<div class="col-md-3">

						<?php if (is_front_page()) {?>
							<?php wp_nav_menu(array('theme_location' => 'header-menu'));?>
						<?php } else {?>
							<?php wp_nav_menu(array('theme_location' => 'interior-menu'));?>
						<?php }?>

					</div>
			</div><!-- /row veryTop -->
		</div><!-- /container-fluid -->
	</header><!-- /header -->

	<div id="break" class="hidden-xs hidden-ms clearfix"></div>