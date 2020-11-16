<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O trabalho e a vida das mulheres na pandemia</title>
    <!-- <meta property="og:title" content="O trabalho e a vida das mulheres na pandemia | <?php the_title() ?>">
    <meta property="og:image" content="http://mulheresnapandemia.sof.org.br/wp-content/uploads/2020/07/200729_banner-principal-cópia-cópia.png"/>
    <meta property="og:site_name" content="O trabalho e a vida das mulheres na pandemia">
    <meta property="og:url" content="http://mulheresnapandemia.sof.org.br"/>
    <meta name="twitter:card" content="summary">
    <meta name="witter:url" content="http://mulheresnapandemia.sof.org.br">
    <meta name="twitter:title" content="O trabalho e a vida das mulheres na pandemia | <?php the_title() ?>">
    <meta name="twitter:description" content="Sem parar: O trabalho e a vida das mulheres na pandemia">
    <meta name="twitter:image" content="http://mulheresnapandemia.sof.org.br/wp-content/uploads/2020/07/200729_banner-principal-cópia-cópia.png"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68410630-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-68410630-3');
    </script>

    <?php wp_head(); ?>

</head>

<body>

<header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-menu">

          <a href="<?php bloginfo( 'url' ); ?>" class="d-none d-md-block"><div class="title">O trabalho e a vida das mulheres na pandemia</div></a>
          <a href="<?php bloginfo( 'url' ); ?>" class="d-md-none">
            <img class="icon-graphic" src="<?php bloginfo('template_url'); ?>/photos/grafico.svg" alt="">
          </a>
          <div class="d-flex">
            <a href="http://mulheresnapandemia.sof.org.br/wp-content/uploads/2020/08/Relatorio_Pesquisa_SemParar.pdf" target=_blank><div class="button"><div class="button-download">Baixe o relatório</div></div></a>
            <!-- <a href=""><div class="button-play"></div></a> -->
            <nav role="navigation">
              <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <?php wp_nav_menu() ?>
              </div>
            </nav>
          </div>
          
          <!-- <?php wp_nav_menu() ?> -->
        </div>
      </div>
    </div>
  </div>
</header>

