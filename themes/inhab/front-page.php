<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

  <div class='front-header'>
		<img src="<?php echo get_template_directory_uri() . '/images/home-hero.jpg'; ?>" class="hero-image" alt="Hero" />
    <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class="full-logo" alt="Logo" />
  </div>


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



 

<section class="product-info container">
  <h2>Shop Stuffs</h2>
  <?php
  $terms = get_terms ( array(
    'taxonomy' => 'product_type',
    'hide_empty' => 0,
  ));

  // debug with Kint
  // d($terms);

  if ( ! empty ($terms) ):
    ?>

    <div class="product-type-wrapper">

      <?php foreach ( $terms as $term ):?>

      <div class="product-type-blocks">
      <img class="shop-logo" src="<?php echo get_template_directory_uri() . 
      '/images/product-type-icons/' . $term->slug; ?>.svg"
            alt="<?php echo $term->name; ?>"/>
                    <p><?php echo $term->description; ?></p>
                    <p>
                        <a href="<?php echo get_term_link( $term ); ?>"
                          class="btn"><?php echo $term->name; ?> Stuff</a>
                    </p>
                </div>

            <?php endforeach; ?>

        </div><!-- product-type-wrapper -->
    <?php endif; ?>
</section>





  <section class="home-journal">
    <h1>Inhabitent Journal</h1>

  <?php
    $args = array( 
      'post_type' => 'post', 
      'order' => 'ASC', 
      'posts_per_page' => 3 
      );
    
      $journal_posts = get_posts( $args ); 

      if ( !empty( $journal_posts) ):
        ?>
      
      <div class="journal-wrapper">
      <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
        
        <article class="journal-entry">
        <h2><?php the_title();?></h2>

        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>

        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        
        <div class="entry-meta">
          <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        </div><!-- .entry-meta -->
        </article>
      <?php endforeach; wp_reset_postdata(); ?>

    </div>
      <?php
    endif;
?>
  </section>



	
	<div class="adventures">
  <h1> Latest Adventures </h1>
		<div class="adventure-1"><a class="pic-link" 
		href="#"> Getting Back to Nature in a Canoe</a><a href="#" class="button">Read More</a></div>
		<div class="adventure-2"><a class="pic-link" 
		href="#">A Night With Friends at the Beach</a><a href="#" class="button">Read More</a></div>
		<div class="adventure-3"><a class="pic-link" 
		href="#">Taking in the View at Big Mountain</a><a href="#" class="button">Read More</a></div>
		<div class="adventure-4"><a class="pic-link" 
		href="#">Star-Gazing at the Night Sky</a><a href="#" class="button">Read More</a></div>
	</div>
    </div>


  </div>


	</div><!-- #primary -->

<?php get_footer(); ?>