<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="single-journal">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
				
			<?php get_template_part( 'template-parts/content', 'single' ); ?>

				

			
				<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i>LIKE</a>
				<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-twitter"></i>TWEET</a>
				<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-pinterest"></i>PIN</a>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
