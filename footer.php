<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package red-strips
 */

?>



<footer class="footer">
	<!--begin l-->
	<div class="l">
		<!--begin footer__inner-->
		<div class="footer__inner">
			<!--begin footer__left-->
			<div class="footer__left">
				<!--begin footer__logo-->
				<div class="footer__logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri();?>/build/img/logo-white.png" alt="logo">
				</a>
				<p> <span>Российская</span><br> экспресс диагностика </p>
			</div>
			<!--end footer__logo-->
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
				'items_wrap'      => '<ul id="%1$s" class="%2$s footer__nav">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
				) );?>
				<p class="footer__copy"> © РЭД. <?= date('Y')?>. Все права защищены </p>
			</div>
			<!--end footer__left-->
			<!--begin footer__center-->
			<div class="footer__center">
				<div class="footer__map" id="footer-map"></div>
			</div>
			<!--end footer__center-->
			<!--begin footer__right-->
			<div class="footer__right">
				<p><?php the_field('main-address', 'option')?></p>
				<p>Тел : <a href="tel:<?php 
				$phoneString = get_field('main-phone', 'option'); 
				$clearPhoneString = str_replace([' ','(',')','-'],'',$phoneString); 
				echo $clearPhoneString ;?>"><?php the_field('main-phone', 'option')?></a>
			</p>
			<p>E-mail : <a href="mailto:<?php the_field('e-mail', 'option')?>"><?php the_field('e-mail', 'option')?></a></p>
			<p>Сайт : <?php the_field('footer-site', 'option')?></p>
		</div>
		<!--end footer__right-->
	</div>
	<!--end footer__inner-->
</div>
<!--end l-->
</footer>

</div>
<!--end out-->





<?php 

$mapStr = get_field('map-coord', 'option');
$mapLat = $mapStr[lat];
$mapLng = $mapStr[lng];



?>
<script>
	/*begin map*/
	var map;
	var initMap = function()
	{
		map = new google.maps.Map(document.getElementById('footer-map'),
		{
			center:
			{
				lat: <?= $mapLat ?>,
				lng: <?= $mapLng ?>
			},
			zoom: 15,
			scrollwheel: false,
			zoomControl: true,
			scaleControl: false
		});
		var marker = new google.maps.Marker(
		{
			position:
			{
				lat: <?= $mapLat ?>,
				lng: <?= $mapLng ?>
			},
			map: map,
			title: '<?php the_field('map-marker-title', 'option')?>'
		});
	}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA04VMqMvV-ifF4mtvOnsUkf3Lw9F9ivAg&callback=initMap" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>
