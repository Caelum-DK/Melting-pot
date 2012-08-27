<?php get_header(); ?>
		<script type="text/javascript">
   			$("#news").fadeTo(0,0);
		</script>
		<div id="container" class="one-column">
			<div id="content" role="main">

			<?php get_template_part( 'loop', 'page' ); ?>
			
   			<script type="text/javascript" src="<?php echo home_url( '/wp-content/themes/loppe/scripts/fade.js' ); ?>"></script>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
