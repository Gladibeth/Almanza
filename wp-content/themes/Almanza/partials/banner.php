      <div class="main-banner" id="home">
        <div class="main-banner__content">
             <?php $args = array( 'post_type' => 'Banner', 'posts_per_page' => 6);
                  
                ?>   
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="main-banner__item">
            <div class="mask mask-light">
              <div class="main-banner__text">
                <div class="main-banner__title">
                  <h1 class="">ALMANZA</h1>
                  <span>LOTES</span>

                </div> 
                <div class="main-banner__dates main-banner__dates--first">
                  <span>Ubicación</span>
                  <p>
                    LLano Grande, Rionegro
                    El proyecto más cercano
                    al Túnel del Oriente.</p>
                </div> 
                <div class="main-banner__dates">
                  <span>Área</span>
                  <strong>Desde 180 m² </strong>
                </div> 
                <div class="main-banner__dates">
                  <span>Desde <br> <strong>$329 millones</strong>
                  </span>
                  <span class="main-banner__value">Valor impuestos incluido*</span>
                </div>
              </div>
            </div>
            <div class="main-banner__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
          </div>
        <?php endwhile; ?>
        </div>
        <a class="angle__down" href="#contacto-proyecto">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
      </div>

      <div class="main-oneform" id="contacto-proyecto">
        
        <div class="container-fluid p-0">
          <div class="main-oneform__content">
            <div class="main-oneform__item">
              <p class="main-oneform__title">Te llamamos para darte <br>
                  <span>una asesoría completa</span>
                </p>
            </div>
            <div class="main-oneform__item">
              <form action="">
                <div class="main-form__item">
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput" placeholder="Nombre completo*" type="text">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput" placeholder="Teléfono*" type="tel">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput2" placeholder="Email*" type="email">
                  </div>
                </div>
                <div class="main-form__item">
                  <div class="form-group">
                    <textarea name="" placeholder="Comentarios" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group form-check mb-2">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label font-general main-oneform__text">
                        Acepto
                        <a href="<?php echo get_template_directory_uri();?>/assets/pdf/MANUAL_DE_POLITICAS_PROMOTORA.pdf" target="blank">Políticas y Privacidad</a>
                      </label>
                    </div>
                  <div class="">
                    <a class="btn_custom btn--small btn--filled" href="#">
                      Enviar
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    
      </div>