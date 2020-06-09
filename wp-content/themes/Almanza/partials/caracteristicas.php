
<?php $args = array( 'post_type' => 'caracteristicas', 'posts_per_page' => 1);?>   
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <section class="main-zone" id="caracteristica-proyecto">
    <div class="container-fluid">
      <div class="main-zone__content">
        <div class="main-zone__item">
          <div class="main-title__general">
            <p>
                características  <br>
              <strong>del proyecto</strong>
            </p>
          </div>
          <div class="main-zone__list main-zone__list--first">
            <div class="main-zone__listimg">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/icon.png" alt="">
            </div>
            <div class="main-zone__description">
              <p><?php the_field('caracteristicas_1'); ?></p>
            </div>
          </div>
          <div class="main-zone__list">
            <div class="main-zone__listimg">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/icon2.png" alt="">
            </div>
            <div class="main-zone__description">
              <p><?php the_field('caracteristicas_2'); ?></p>
            </div>
          </div>
          <div class="main-zone__list">
            <div class="main-zone__listimg">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/icon3.png" alt="">
            </div>
            <div class="main-zone__description">
              <p><?php the_field('caracteristicas_3'); ?></p>
            </div>
          </div>
          <div class="main-zone__list">
            <div class="main-zone__listimg">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/icon4.png" alt="">
            </div>
            <div class="main-zone__description">
              <p><?php the_field('caracteristicas_4'); ?></p>
            </div>
          </div>

        </div>
        <div class="main-zone__item">
          <div class="main-zone__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>
          <img class="mask__img__zone" src="<?php echo get_template_directory_uri();?>/assets/img/maks.png" alt="">
        </div>
        <div id="planos-proyecto"></div>
      </div>
    </div>
  </section>
<?php endwhile; ?>