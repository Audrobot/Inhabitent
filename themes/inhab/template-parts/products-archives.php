

<article id="post-<?php the_ID(); ?>" <?php post_class('shop-item'); ?>>
  <header class="entry-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>

    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', 
    esc_url( get_permalink() ) ), '</a></h2>' ); ?>

    <?php echo CFS()->get( 'price' ); ?>

  </header><!-- .entry-header -->

</article><!-- #post-## -->