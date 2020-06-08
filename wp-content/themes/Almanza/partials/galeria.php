      <section id="galeria-proyecto" class="main-gallery">
        <div class="container-fluid">
          <div class="main-title__general">
            <p>
                Galería del <br>
              <strong>proyecto</strong>
            </p>
          </div>
          <div class="main-gallery__content">
            <div class="main-gallery__item">
                <?php $args = array( 'post_type' => 'galeria', 'posts_per_page' => 6);
                      $galeriaCount = 1;
                ?>   
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="main-gallery__img" onclick="openModal();currentSlide(<?php echo $galeriaCount; ?>)">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
              <?php $galeriaCount++; endwhile; ?>
            </div>

           <div class="main-gallery__item">
                <?php $args = array( 'post_type' => 'galeria', 'posts_per_page' => 6);
                      $galeriaCount2 = 1;
                ?>   
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="main-gallery__img" onclick="openModal();currentSlide(<?php echo $galeriaCoun2; ?>)">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
              <?php $galeriaCount2++; endwhile; ?>
            </div>
    
          </div>
        </div>
      </section>
    