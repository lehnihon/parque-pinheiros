<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon.png"; ?>" />
<?php wp_head(); ?>
</head>

<body>
  <input id="localhost" type="hidden" value="<?php echo dirname( get_bloginfo('stylesheet_url')); ?>">
  <div id="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
          <img class="img-fluid logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.png"; ?>"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav main-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">O CEMITÉRIO</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">O BLOG</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FALE CONOSCO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">COMO CHEGAR</a>
            </li>
            <li class="nav-item btn-loja dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">LOJA</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div class="banner">
        <h1>Prevenir é <span class="green">sempre</span> a melhor escolha!</h1>
        <h2>EDUCAÇÃO FINANCEIRA</h2>
      </div>
      <div class="local velorio">
        <img class="plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/plus.png"; ?>"/>
        <div class="box-local">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/foto.jpg"; ?>"/>
          <h5>Salas de Velório</h5>
          <p>03 Salas de velório com cadeiras confortáveis para seus entes queridos com apoio e segurança 24 horas por nossos profissionais.</p>
          <a class="btn-orange" href="#">MAIS DETALHES</a>
        </div>
      </div>
    </div>
  </div>
