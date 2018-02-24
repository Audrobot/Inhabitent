<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
					
			<section class="product-info-container">

				<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
				</header><!-- .page-header -->

				<?php
				$terms = get_terms ( array(
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
				));

				if ( ! empty ($terms) ):
					?>

					<div class="product-type-wrapper">

						<?php foreach ( $terms as $term ):?>

						<div class="product-type-blocks">
									<p>
											<a href="<?php echo get_term_link( $term ); ?>"
												class="btn"><?php echo $term->name; ?></a>
									</p>
							</div>

									<?php endforeach; ?>

							</div><!-- product-type-wrapper -->
					<?php endif; ?>
			</section>




		<?php if ( have_posts() ) : ?>

			

			<?php /* Start the Loop */ ?>
			<div class="products-wrapper">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/products-archives', 'none' ); ?>


			<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>