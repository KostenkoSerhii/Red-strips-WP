<?php get_header();?>
<!--begin content-block-->
<div class="content-block">
	<div class="hero" style="background-image: url('<?php echo get_template_directory_uri();?>/build/img/hero-bg.jpg');">
		<!--begin l-->
		<div class="l">
			<!--begin hero__inner-->
			<div class="hero__inner"> <img class="hero__img-left" src="<?php echo get_template_directory_uri();?>/build/img/hero-doctors.png" alt="alt"> <img class="hero__img-right" src="<?php echo get_template_directory_uri();?>/build/img/hero-strips.png" alt="alt">
				<h1 class="title-lg hero__title"> <span><?php the_field('hero-title', 'option')?></span> </h1>
				<!--begin hero__list-->
				<div class="hero__list">
					<p class="hero__list-title"><?php the_field('hero-list-title', 'option')?></p>
					<ul class="list ">
						<?php the_field('hero-list', 'option')?>
					</ul>
				</div>
				<!--end hero__list-->
				<div class="hero__btns"> <a class="btn" href="<?php get_permalink()?>">Каталог</a> </div>
			</div>
			<!--end hero__inner-->
		</div>
		<!--end l-->
	</div>
	<!--end hero-->
</div>
<!--end content-block-->




<?php get_footer();?>