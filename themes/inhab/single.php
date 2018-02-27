<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="journal-primary" class="single-journal">
		<main id="journal-main" class="single-journal-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
				
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<div class="journal-buttons">
				<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i>LIKE</a>
				<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-twitter"></i>TWEET</a>
				<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-pinterest"></i>PIN</a>
			</div>
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
