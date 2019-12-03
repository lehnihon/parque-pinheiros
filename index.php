<?php get_header(); ?>

<div id="content">
  <div class="home-options">
    <div class="container">
      <div class="box">

        <div class="row">
          <div class="col-sm-6">
            <h5>JAZIGOS FAMILIARES PARA</h5>
            <h2>Pronto Sepultamento</h2>
            <p>Conte com o Cemitério Parque dos Pinheiros para dar todo o suporte e tranquilidade a esse momento delicado.</p>
            <a href="#">COMPRAR JAZIGO</a>
          </div>
          <div class="col-sm-6">
            <h5>JAZIGOS FAMILIARES PARA</h5>
            <h2>Prevenção</h2>
            <p>Quem se antecipa faz melhores escolhas! Fale com um de nossos consultores e agende sua visita.</p>
            <a href="#">FALE CONOSCO</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="home-galeria">
    <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/galeria.jpg"; ?>"/>
  </div>
  <div class="home-produtos">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2>Nossos Produtos</h2>
        </div>
        <div class="col-sm-6">
          <ul class="cat">
            <li><a href="#">COROAS</a></li>
            <li><a href="#">JAZIGOS</a></li>
            <li><a href="#">LÁPIDES</a></li>
          </ul>
        </div>
        <div class="col-auto ml-auto">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/btn-esq.jpg"; ?>"/>
        </div>
        <div class="col-auto">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/btn-dir.jpg"; ?>"/>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/separador.jpg"; ?>"/>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-3">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/jazigo.png"; ?>"/>
          <h5>Jazigo Standart</h5>
          <p class="cat">Jazigo</p>
          <p class="preco">R$256,00</p>
        </div>
        <div class="col-sm-3">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/jazigo.png"; ?>"/>
          <h5>Jazigo Standart</h5>
          <p class="cat">Jazigo</p>
          <p class="preco">R$256,00</p>
        </div>
        <div class="col-sm-3">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/jazigo.png"; ?>"/>
          <h5>Jazigo Standart</h5>
          <p class="cat">Jazigo</p>
          <p class="preco">R$256,00</p>
        </div>
      </div>
    </div>
  </div>
  <div class="home-sobre">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h2>Sobre o Cemitério</h2>
        </div>
        <div class="col-sm-3">
          <h5>NOSSA LOCALIZAÇÃO</h5>
          <p>
            <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon1.jpg"; ?>"/>
            Rua Ushikichi Kamiya, 71 - Jaçanã
          </p>
          <p>
            <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon2.jpg"; ?>"/>
            Aberto 24h por dia, Todos os dias
          </p>
        </div>
        <div class="col-sm-3">
          <h5>MAIS INFORMAÇÕES</h5>
          <p>
            <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon3.jpg"; ?>"/>
            (11) 2241-0300 / (11) 5627-6910
          </p>
          <p>
            <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon4.jpg"; ?>"/>
            contato@cemiterioparque.com.br
          </p>
        </div>
        <div class="col-sm-3">
          <h5>RECEBA PROMOÇÕES</h5>
          <input type="text" class="form-control" placeholder="Digite seu e-mail aqui...">
          <a href="#" class="btn-green">RECEBER</a>
        </div>
      </div>
    </div>
  </div>
  <div class="home-maps">
    <div class="container">
      <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.4920858080486!2d-46.59624298554627!3d-23.44270806310509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef69e1c82a0f3%3A0x2e0a799e51ade0a6!2sR.%20Ushikichi%20Kamiya%2C%2071%20-%20Parque%20Casa%20de%20Pedra%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002323-000!5e0!3m2!1spt-BR!2sbr!4v1575402943012!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
