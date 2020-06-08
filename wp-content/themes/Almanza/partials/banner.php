<div class="main-banner" id="home">
  <?php $args = array( 'post_type' => 'Banner');?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="main-banner__content">
    <div class="main-banner__item">
      <div class="mask mask-light">
        <div class="main-banner__text">
          <div class="main-banner__title">
        <?php the_content(); ?>
        </div>
      </div>
      <div class="main-banner__img">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
      </div>
    </div>
  </div>
  </div>
  <?php endwhile; ?>