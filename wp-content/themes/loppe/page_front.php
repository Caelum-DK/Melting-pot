<?php
/**
 * Template Name:Frontpage template
 *
 * Fade-in menu
 *
 */
get_header(); ?>
			<script>
   				$("#news").fadeTo(0,0);
				$(document).ready(function() {
     				$(".menu a").css("display", "none");
				});
				$('#logo').click(function() {
					$(".menu a").fadeIn(1000);
				});
			</script>
		<div id="container" class="one-column">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>
			


			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
