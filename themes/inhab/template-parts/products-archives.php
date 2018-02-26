

<article id="post-<?php the_ID(); ?>" <?php post_class('shop-item'); ?>>
  
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'large' ); ?>
  <?php endif; ?>
  
  <div class="shop-item-text">
    <?php the_title( sprintf( '<h2 class="shop-item-title"><a href="%s" rel="bookmark">', 
    esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <span class="shop-item-ellipses"></span>
    <span><?php echo CFS()->get( 'price' ); ?></span>
  </div>
  
</article><!-- #post-## -->