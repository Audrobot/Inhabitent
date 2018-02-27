<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="single-item-box">
			
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="single-item-img">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</div>

			<div class="single-product-info">
				
				<div class="entry-block">
					<?php the_title( '<h1>', '</h1>' ); ?> 	


				<div class="entry-price">
				  <?php echo CFS()->get( 'price' ); ?>
				</div>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
					<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i>LIKE</a>
					<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-twitter"></i>TWEET</a>
					<a class="social-button" href="<?php the_permalink(); ?>"><i class="fab fa-pinterest"></i>PIN</a>
				</div>
			</div>
		</div>
	
		<footer class="entry-footer">
			<?php red_starter_entry_footer(); ?>
		</footer>

</article>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>