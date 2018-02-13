<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package red-strips
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="theme-color" content="#fff">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="img/favicon2.png" type="image/png">
	<link rel="stylesheet" media="all" href="css/app.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet"> 




	<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
	<!--begin out-->
	<div class="out">
		<header class="header" style="margin-top: 30px">
			<!--begin l-->
			<div class="l">
				<!--begin header__inner-->
				<div class="header__inner">
					<div class="header__logo"> 
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_template_directory_uri();?>/build/img/logo.png" alt="logo">
						</a>
						<p><span>Российская</span><br>экспресс диагностика</p>
					</div>
					<!--begin header__right-->
					<div class="header__right">
						<!--begin header__top-->
						<div class="header__top">
							<div class="header__langs"> <a class="is-active" href="#">Ru</a> <a href="#">En</a> </div> <a class="header__link" href="mailto:<?php the_field('e-mail', 'option')?>">
								<i>
									<svg class="icon icon-letter"><use xlink:href="<?php echo get_template_directory_uri();?>/build/img/sprite.svg#icon-letter"></use></svg>
								</i>
								<?php the_field('e-mail', 'option')?>
							</a> <a class="header__link" href="tel:<?php 
							$phoneString = get_field('main-phone', 'option'); 
							$clearPhoneString = str_replace([' ','(',')','-'],'',$phoneString); 
							echo $clearPhoneString ;?>">
							<i>
								<svg class="icon icon-phone"><use xlink:href="<?php echo get_template_directory_uri();?>/build/img/sprite.svg#icon-phone"></use></svg>
							</i>
							<?php the_field('main-phone', 'option')?>
						</a> 
					</div>

					<?php wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'menu'            => 'primary-menu', 
						'container'       => '', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						'items_wrap'      => '<ul id="%1$s" class="%2$s header__nav">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
						) );?>
						<!--end header__top-->
					</div>
					<!--end header__right-->
				</div>
				<!--end header__inner-->
			</div>
			<!--end l-->
		</header>


