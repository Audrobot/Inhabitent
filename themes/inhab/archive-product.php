<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
					
			<section class="shop-header">
				<?php the_archive_title( '<h1 class="shop-header-title">', '</h1>' ); ?>
				<?php
					$terms = get_terms ( array(
						'taxonomy' => 'product_type',
						'hide_empty' => 0,
					));

					if ( ! empty ($terms) ):
				?>

					<div class="product-type-links">

						<?php foreach ( $terms as $term ):?>

							<div class="product-type-link">
								<p>
									<a href="<?php echo get_term_link( $term ); ?>"
										class="btn"><?php echo $term->name; ?></a>
								</p>
							</div>

						<?php endforeach; ?>

					</div>
				<?php endif; ?>	
			</section>

			<?php if ( have_posts() ) : ?>
				
				<div class="products-wrapper">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/products-archives', 'none' ); ?>

					<?php endwhile; ?>
				</div>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main>
	</div>

<?php get_footer(); ?>