
<section class="main-about  section-detalle" id="acerca-proyecto">
  <?php $args = array( 'post_type' => 'Acerca', 'posts_per_page' => 1);
  ?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="main-about__content container-fluid">
      
      <div class="main-about__item">
        <div class="main-title__general">
          <p>
            acerca del <br>
            <strong>proyecto</strong>
          </p>
        </div>
        <div class="Almanza-de-Llanogran ">
          <p><?php the_content(); ?></p>
        </div>
      </div>
      <div class="main-about__item wow fadeInRight"  data-wow-delay='.5s'>
        <div class="main-about__img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

        </div>
        <img class="mask__img__nerby" src="<?php echo get_template_directory_uri();?>/assets/img/maks.png" alt="">
      </div>
    </div>
  <?php endwhile; ?>
</section>