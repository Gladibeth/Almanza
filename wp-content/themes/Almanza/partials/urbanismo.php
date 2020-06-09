<?php $args = array( 'post_type' => 'urbanismo', 'posts_per_page' => 1);?>   
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<section class="main-zone urbanismo" id="urbanismo">
  <div class="container-fluid">
    <div class="main-title__general main-title__general--medium">
      <p>
        
        <strong>Urbanismo</strong>
      </p>
    </div>
    <div class="main-zone__content">
      <div class="main-zone__item">
        <div class="main-zone__img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
      </div>
      <div class="main-zone__item">
        
        <div class="main-title__general main-title__general">
          <p>
                
            <strong>65 lotes </strong><br>
            urbanizados
          </p>
        </div>
        <div class="main-description__general">
          <p><?php the_content(); ?></p>
          <div class="main-urbanismos__grados">
            <strong><?php the_field('grados') ?></strong>
            <br>
            <strong><?php the_field('metros') ?></strong>
          </div>
        </div>

      </div>
      <div id="planos-proyecto"></div>
    </div>
  </div>
</section>
<?php endwhile; ?>