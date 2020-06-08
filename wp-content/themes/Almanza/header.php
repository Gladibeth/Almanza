
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Almanza</title>

  <!-- Behavioral Meta Data -->
	<meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#24272c">
	
	<!-- Google Meta Data -->
	<meta name='description', content=''>
	<meta name='keywords', content=''>
	<meta name="robots" content="index, follow">

	<!-- Blog Meta Data -->
	<meta name="dc.language" content="es">
	<meta name="dc.source" content="">
	<meta itemprop="url" content="">

	<!-- Twitter Card Meta Data -->
	<meta content='summary' name='twitter:card'>
	<meta content='Almanza' name='twitter:site'>
	<meta content='Almanza' name='twitter:title'>
	<meta content='Almanza' name='twitter:description'>

	<!-- Open Graph Meta Data -->
	<meta content='website' property='og:type'>
	<meta content='' property='og:image'>
	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta content='' property='og:description'>
	<meta property="og:type" content="">
	<meta property="og:image" content="">

  <!-- Links -->
  <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/animation.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/animate.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/offcanvas.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">
  <?php wp_head(); ?>
</head>
<body>

  <div class="padd_top">
    <header id="home">
        <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
          <div class="container-fluid">
            <div class="main-brand" >
              <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="">
                </a>
              <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
            <div class="navbar-collapse offcanvas-collapse">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link nav-link__mobile" href="#detalles-proyecto">Detalles del proyecto</a>
                </li>
                <li class=" nav-item">
                  <a class="nav-link nav-link__mobile" href="#planos-proyecto">
                    PLANOS DEL PROYECTO
                  </a>
                </li>
                <li class=" nav-item">
                  <a class="nav-link nav-link__mobile" href="#galeria-proyecto">
                    GALERÍA 
                  </a>
                </li>
                <li class=" nav-item">
                  <a class="nav-link nav-link__mobile" href="#ubicacion">
                    UBICACIÓN
                  </a>
                </li>
                <li class=" nav-item">
                  <a class="nav-link nav-link__mobile" href="#contacto">
                    contacto
                  </a>
                </li>
              
          
              </ul>
            </div>
          </div>
        </nav>
      </header>