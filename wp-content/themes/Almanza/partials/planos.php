      <section  class="main-maps">
          <img class="mask__maps" src="<?php echo get_template_directory_uri();?>/assets/img/maks.jpg" alt="">
           <div class="main-title__general bg-title-planos">
              <p class="container-fluid">
                  Planos del<br>
                <strong>proyecto</strong>
              </p>
            </div>
        <div class="container-fluid">
          <div class="main">
            <div class="slider slider-for">

                 <?php $args = array( 'post_type' => 'planos');
                    $planosCount2 = 1;
                ?>   
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div>
                <style type="text/css">
                .slider-for .slick-dots li:nth-child(<?php echo $planosCount2; ?>):after {
                 content: '<?php the_field('niveles'); ?>';
                    }
              </style>
            </div>
                    <?php $planosCount2++; endwhile; ?>
           

            </div>
            <div class="slider slider-nav">


                  <?php $args = array( 'post_type' => 'planos');
                    $galeriaCount2 = 1;
                ?>   
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="main-slidernav__boxcontent">
                <div class="main-slidernav__content">
                  <div class="main-slidernav__item">
                    <div class="main-slidernav__img" onclick="openModal1();currentSlide1(<?php echo  $galeriaCount2; ?>)">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                  </div>
                  <div class="main-slidernav__item">
                    <?php if (get_field('detalle_1')): ?>
                      <div class="main-zone__list wow fadeIn" data-wow-delay='0.1s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/icon.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><strong><?php the_field('detalle_1'); ?></strong></p>
                        </div>
                      </div>
                    <?php endif; ?>

                          <?php if (get_field('detalle_2')): ?>
                            <div class="main-zone__list wow fadeIn" data-wow-delay='0.2s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-1.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_2'); ?></p>
                        </div>
                      </div> <?php endif;?>
                          <?php if (get_field('detalle_3')): ?>
                            <div class="main-zone__list wow fadeIn" data-wow-delay='0.3s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-2.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_3'); ?></p>
                        </div>
                      </div> <?php endif;?>
                          <?php if (get_field('detalle_4')): ?>
                            <div class="main-zone__list wow fadeIn" data-wow-delay='0.4s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-3.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_4'); ?></p>
                        </div>
                      </div> <?php endif;?>
                          <?php if (get_field('detalle_5')): ?>
                            <div class="main-zone__list wow fadeIn" data-wow-delay='0.5s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-4.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_5'); ?></p>
                        </div>
                      </div> <?php endif;?>
                          <?php if (get_field('detalle_6')): ?>
                            <div class="main-zone__list wow fadeIn" data-wow-delay='0.6s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-5.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_6'); ?></p>
                        </div>
                      </div> <?php endif;?>
                             <?php if (get_field('detalle_7')): ?>
                              <div class="main-zone__list wow fadeIn" data-wow-delay='0.7s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-5.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_7'); ?></p>
                        </div>
                      </div> <?php endif;?>
                             <?php if (get_field('detalle_8')): ?>
                              <div class="main-zone__list wow fadeIn" data-wow-delay='0.8s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-5.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_8'); ?></p>
                        </div>
                      </div> <?php endif;?>
                             <?php if (get_field('detalle_9')): ?>
                              <div class="main-zone__list wow fadeIn" data-wow-delay='0.9s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-5.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_9'); ?></p>
                        </div>
                      </div> <?php endif;?>
                             <?php if (get_field('detalle_10')): ?>
                              <div class="main-zone__list wow fadeIn" data-wow-delay='0.9s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-5.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_10'); ?></p>
                        </div>
                      </div> <?php endif;?>
                         
                  </div>
                </div>
              </div>

                <?php $galeriaCount2++; endwhile; ?>                   
            </div>
          </div>
        </div>
      </section>