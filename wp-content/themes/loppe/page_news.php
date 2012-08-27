<?php
/**
 * Template Name:News template
 *
 * text area above logo
 *
 */
get_header(); ?>
	<script>
   		$("#news").fadeTo(1000, 1, function () {
		$(this).fadeTo(20000, 0);
        });
	</script>
		<div id="container" class="one-column">
			<div id="content" class="news" role="main">
				<?php get_template_part( 'loop', 'page' ); ?>
			

   			<script type="text/javascript" src="<?php echo home_url( '/wp-content/themes/loppe/scripts/fade.js' ); ?>"></script>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
