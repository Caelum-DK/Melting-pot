<?php
/**
 * Template Name:About template
 *
 * A page template right-aligned narrow text row.
 *
 */

get_header(); ?>
		<script type="text/javascript">
   			$("#news").fadeTo(0,0);
		</script>

		<div id="container" class="one-column">
			<div id="content" class="content_about" role="main">

			<?php get_template_part( 'loop', 'page' ); ?>
			<script type="text/javascript" src="<?php echo home_url( '/wp-content/themes/loppe/scripts/fade.js' ); ?>"></script>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>

