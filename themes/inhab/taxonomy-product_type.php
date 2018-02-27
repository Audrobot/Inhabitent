<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

			<header class="taxonomy-page-header">
				<?php
					the_archive_title( '<h1 class="taxonomy-page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );?>	

			</header><!-- .page-header -->
				
			<div class="taxonomy-product-wrapper">
					<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/products-archives' );?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/products-archives', 'none' ); ?>

				<?php endif; ?>
			</div>	
			
  

  </a>

		</main>
		
	</div>	

<?php get_footer(); ?>