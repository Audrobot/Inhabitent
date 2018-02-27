

<article id="post-<?php the_ID(); ?>" <?php post_class('shop-item'); ?>>
  
  <a href="<?php echo get_permalink();?>">
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'large' ); ?>
  <?php endif; ?>
  
  <div class="shop-item-text">
    <h2 class="shop-item-title"><?php the_title(); ?></h2>
    <span class="shop-item-ellipses"></span>
    <span class="shop-item-price"><?php echo CFS()->get( 'price' ); ?></span>
  </div>

  </a>
  
</article><!-- #post-## -->