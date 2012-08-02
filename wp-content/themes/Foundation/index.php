<?php get_header(); ?>

</div>


	<div id="banner">
		<div id="slider">
			<div id="featured">

				<?php SliderContent(); ?>
				
			</div>
				<img id="vignetting" src="<?php bloginfo('template_directory'); ?>/images/vignetting.png"></img>
		</div>
	</div>
	<div class="yeah"></div>
	<div class="lol"></div>


<div class="row">
<?php get_template_part( 'loop', 'index' ); ?>

<?php get_sidebar(); ?>
		


<?php get_footer(); ?>