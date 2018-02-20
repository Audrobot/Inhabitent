<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->

	</div>

	<h1> Latest Adventures </h1>
	<div class="adventures">
		<div class="adventure-1"><a class="pic-link" 
		href="#"> Getting Back to Nature in a Canoe</a><a href="#" class="button">Read More</a></div>
		<div class="adventure-2"><a class="pic-link" 
		href="#">A Night With Friends at the Beach</a><a href="#" class="button">Read More</a></div>
		<div class="adventure-3"><a class="pic-link" 
		href="#">Taking in the View at Big Mountain</a><a href="#" class="button">Read More</a></div>
		<div class="adventure-4"><a class="pic-link" 
		href="#">Star-Gazing at the Night Sky</a><a href="#" class="button">Read More</a></div>
	</div>






	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>