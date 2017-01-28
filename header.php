<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>" />
		<title><?php
				if (is_home()) {
					bloginfo('name');
					echo ' - ';
					bloginfo('description');
				} else {
					wp_title(' - ', true, 'right');
					bloginfo('name');
				} ?></title>
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="接棒啟蒙是一個非營利組織志工計畫，一個匯集社會善意轉化成高中學生了解自我價值的「平台」。志工來自各行各業，有不同專長及一份對於台灣教育的熱忱。">
		<meta property="og:title" content="接棒啟蒙計劃"></meta>
		<meta property="og:type" content="website"></meta>
		<meta property="og:description" content="接棒啟蒙是一個非營利組織志工計畫，一個匯集社會善意轉化成高中學生了解自我價值的「平台」。志工來自各行各業，有不同專長及一份對於台灣教育的熱忱。"></meta>
		<meta property="og:image" content="http://thebatonproject.org/wp-content/uploads/2016/12/接棒啟蒙LOGO-_白底黑字-288x300.png"></meta>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/semantic.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/flexslider.css">
		<link href="<?php bloginfo('template_directory') ?>/style.css" media="screen" rel="stylesheet" type="text/css" />
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-52975966-1', 'auto');
		ga('send', 'pageview');

		</script>
	</head>
	<body>
		<header>
			<nav>
				 <div class="ui grid">
					<div class="computer only row">
						<div class="four wide column">
							<a href="<?php bloginfo('url'); ?>" class="logo">
								<img src="<?php bloginfo('template_directory'); ?>/image/logo.png" alt="logo">
							</a>
						</div>
						<div class="twelve wide column">
							<div class="navbar">
								<?php /* Primary navigation */
								wp_nav_menu(array('theme_location' => 'primary-menu','depth' => 2,'menu_class'=>'menu' ));
								?>
							</div>
						</div>
					</div>
					<div class="mobile tablet only row">
						<div class="four wide column">
			                <a href="/" class="logo">
			                	<img src="<?php bloginfo('template_directory'); ?>/image/logo.png" alt="logo">
			                </a>
			            </div>
			            <div class="twelve wide column">
			            	<a href="" class="fa fa-2x fa-bars"></a>
			            </div>
                        <div class="ui right wide sidebar vertical menu">
                        <a class="fa fa-chevron-right fa-2x"></a>
                        <div class="clearfix"></div>
            				<?php /* Primary navigation */
            				wp_nav_menu(array('theme_location' => 'primary-menu','depth' => 2,'menu_class'=>'sidebarMenu' ));
            				?>
                        </div>
	        		</div>
        		</div>
			</nav>
		</header>