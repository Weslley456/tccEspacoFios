<?php
require_once 'login-user/user-verifica.php';
require_once 'dashboard/classes/Usuario.php'; 
?>

<!DOCTYPE html>
<!--
	Salient by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Espaço Fios - Home</title>

  <!-- Custom Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,300,700' rel='stylesheet' type='text/css'>
  <link href="http://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon" />


  <!-- Bootstrap CSS Style -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Template CSS Style -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Animate CSS  -->
  <link rel="stylesheet" href="assets/css/animate.css">

  <!-- FontAwesome 4.3.0 Icons  -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!-- et line font  -->
  <link rel="stylesheet" href="assets/css/et-line-font/style.css">

  <!-- BXslider CSS  -->
  <link rel="stylesheet" href="assets/css/bxslider/jquery.bxslider.css">

  <!-- Owl Carousel CSS Style -->
  <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="assets/css/owl-carousel/owl.transitions.css">

  <!-- Magnific-Popup CSS Style -->
  <link rel="stylesheet" href="assets/css/magnific-popup/magnific-popup.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	
</head>
<body>

  <!-- Preload the Whole Page -->
  <div id="preloader">      
    <div id="loading-animation">&nbsp;</div>
  </div>

  <!-- Barra de navegação -->
  <header class="header">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <img src="Logo.png" width="120px" height="60px">
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a class="section-scroll" href="#wrapper">Home</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Empresa ▼
            </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="main">
                <a class="dropdown-item" href="#landing-offer">Quem somos?</a>
                <a class="dropdown-item" href="#features-section">Sobre</a>       
                <a class="dropdown-item" href="#localizacao">Localização</a>
              </div></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produtos ▼
            </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="main">
              <a class="dropdown-item" href="#produtos-section">Principais produtos</a>
              <a class="dropdown-item" href="products/produtos.php">Vitrine de produtos</a>
              </div></li>
            <li><a href="#banner-services">Promoções</a></li>
            <li><a href="#destaques-section">Feito por clientes</a></li>
            <li><a href="#contact-section">Comentários</a></li>
            <li><a href="dashboard/index.php">Painel Geral</a></li>
            <a href="login-user/"><img class="alinhar-esquerda" src="assets/images/icone-usuário.png" alt="cadastro"></a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  </header>
  <!-- Fim Barra de navegação -->

  <div id="wrapper">

  <!-- Hero
  ================================================== -->
    <section>
      <div id="hero-section" class="landing-hero" data-stellar-background-ratio="0">
        <div class="hero-content">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">

              <div class="col-sm-8 col-sm-offset-2">
                <!-- <p class="video-head">Bem vindo(a)</p> -->
                <p class="video-head"><?php echo $_SESSION['user_logado']?></p>
                <hr>
              </div>

                <div class="hero-text">
                  <div class="herolider">
                    <ul class="caption-slides">

                      <li class="caption">
                        <h1>QUALIDADE</h1>
                        <div class="div-line"></div>
                        <p class="hero">fios &amp; linhas</p>
                      </li>

                      <li class="caption">
                        <h1>RAPIDEZ</h1>
                        <div class="div-line"></div>
                        <p class="hero">produção &amp; entrega</p>
                      </li>

                      <li class="caption">
                        <h1>CONFIABILIDADE</h1>
                        <div class="div-line"></div>
                        <p class="hero">custo &amp; durabilidade</p>
                      </li>

                    </ul>
                  </div> <!-- end herolider -->
                </div> <!-- end hero-text -->

                <div class="hero-btn">
                  <a href="login-user/user-logout.php" class="btn btn-clean">Sair</a>
                </div> <!-- end hero-btn -->

              </div> <!-- end col-md-6 -->
            </div> <!-- end row -->
          </div> <!-- End container -->
        </div> <!-- End hero-content -->
      </div> <!-- End hero-section -->
    </section>
    <!-- End hero section -->
    
    <!-- Empresa
    ================================================== -->
    <section>
      <div id="landing-offer" class="pad-sec">
        <div class="container">

          <div class="title-section big-title-sec animated out" data-animation="fadeInUp" data-delay="0">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="big-title">Seja bem vindo(a) <?php echo $_SESSION['user_logado']?></h2>
                <h1 class="big-subtitle">Espaço para todos os gostos</h1>
                <hr>
                <p class="about-text">Uma empresa jovem e dinâmica, que vem se destacando no mercado com seus produtos e serviços. Unindo o know-how de nossa equipe, com investimentos em equipamentos modernos e de tecnologia avançada, está apta a oferecer produtos de qualidade, com agilidade na entrega e com os melhores preços do mercado.</p>
              </div>
            </div> <!-- End row -->
          </div> <!-- end title-section -->

          <div class="offer-boxes">

            <div class="row">
            <div class="col-sm-4">
              <div class="offer-post text-center animated out" data-animation="fadeInLeft" data-delay="0">
                <div class="offer-icon">
                  <span class="icon-desktop"></span>
                </div>
                <h4>Desde 1994</h4>
                <p>Empresa criada por Pedro Lain, com o objetivo de expandir sua qualidade, rapidez e bom desempenho no mercado de trabalho com malhas.</p>
              </div> <!-- End offer-post -->
            </div> <!-- End col-sm-4 -->

            <div class="col-sm-4">
              <div class="offer-post text-center animated out" data-animation="fadeInUp" data-delay="0">
                <div class="offer-icon">
                  <span class="icon-piechart"></span>
                </div>
                <h4>Atendendo mais de 1000 clientes</h4>
                <p>Atualmente a empresa tem tido ótimo resultados com suas vendas. Sempre entregando produtos de ótima qualidade, além de um bom atendimento.</p>
              </div> <!-- End offer-post -->
            </div> <!-- End col-sm-4 -->

            <div class="col-sm-4">
              <div class="offer-post text-center animated out" data-animation="fadeInRight" data-delay="0">
                <div class="offer-icon">
                  <span class="icon-lifesaver"></span>
                </div>
                <h4>Equipe dedicada e profissionalizada</h4>
                <p>Empresa cheia de profissionais competentes, que trabalham com muita dedicação para sempre entregar o melhor para seus clientes.</p>
              </div> <!-- End offer-post -->
            </div> <!-- End col-sm-4 -->

            </div> <!-- End row -->

          </div> <!-- End offer-boxes -->
        </div> <!-- End container -->
      </div> <!-- End landing-offer-section -->
    </section>
    <!-- Fim empresa -->

    <section>
      <div class="sep-section"></div>
    </section>

    

    <!-- Video
    ================================================== -->
    <section>
      <div id="video-section" data-stellar-background-ratio="0">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="video-section-content text-center">
                <a href="http://vimeo.com/channels/staffpicks/116829150" class="video-pop-up"><i class="fa fa-play"></i></a>
                <div class="video-head">Video base da loja</div>
                <div class="video-sub-heading">Veja mais sobre a nossa loja</div>
              </div>
            </div> <!-- end col-sm-6 -->
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div>
    </section>
    <!-- Fim Video -->

    <!-- Produtos
    ================================================== -->
    <section>
      <div id="produtos-section" class="pad-sec">
        <div class="container">
          <div class="title-section animated out" data-animation="fadeInUp" data-delay="0">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2>Principais produtos</h2>
                <hr>
                <p>Produtos mais procurados por nossos clientes.</p>
              </div>
            </div> <!-- End row -->
          </div> <!-- end title-section -->

          <div class="team-members">
            <div class="row">

              <!-- produto-1 -->
              <div class="col-sm-4">
                <div class="member-team animated out" data-animation="fadeInLeft" data-delay="0">
                  <img src="https://cacula.vteximg.com.br/arquivos/ids/551143-600-600/T-1810.png?v=637829511860230000" alt="">
                  <div class="magnifier">
                    <div class="magnifier-inner">
                      <h3>LINHA DE COSTURA</h3>
                      <p>A primeira linha para costura doméstica sustentável!</p>
                      <p>Para costura de camisas, lingeries, malhas, blusas, agasalhos, em tecidos leves e médios, de composição mista ou sintética.</p>
                      <ul class="social-icons">

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>

                      </ul>
                    </div> <!-- End magnifier-inner -->
                  </div> <!-- End magnifier -->
                </div> <!-- End member-team -->
              </div> <!-- End col-sm-4 -->

              <!-- produto-2 -->

              
              <div class="col-sm-4">
                <div class="member-team animated out" data-animation="fadeInUp" data-delay="0">
                  <img src="https://www.armarinhosaojose.com.br/octopus/design/images/94/products/b/linha-ancora-perle-4592.jpg" alt="">
                  <div class="magnifier">
                    <div class="magnifier-inner">
                      <h3>CROCHE</h3>
                      <p>Para profissionais e iniciantes</p>
                      <p>Anchor Perlé 8 é uma linha de bordar bem torcida a 2 cabos, brilhante e sedosa. São novelos de 85m, feitos com o melhor algodão do mundo, importado do Egito. Essa linha possui um torcimento suave e um brilho excepcional, sendo apropriada para o ponto cruz, vagonite, bordado livre.</p>
                      <ul class="social-icons">

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>

                      </ul>
                    </div> <!-- End magnifier-inner -->
                  </div> <!-- End magnifier -->
                </div> <!-- End member-team -->
              </div> <!-- End col-sm-4 -->

              <!-- produto-3 -->
              <div class="col-sm-4">
                <div class="member-team animated out" data-animation="fadeInRight" data-delay="0">
                  <img src="assets/images/team/m3.jpg" alt="">
                  <div class="magnifier">
                    <div class="magnifier-inner">
                      <h3>FIO LUREX</h3>
                      <p>Especifico para Malharia e Tecelagem.</p>
                      <p>Ideal para acessórios de moda, macramê, tricô, crochê, decoração e artesanatos. O fio é feito com fio de lurex com alta resistência, deixando as tramas ainda mais brilhosas e sofisticadas.</p>
                      <ul class="social-icons">

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>

                        <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>

                      </ul>
                    </div> <!-- End magnifier-inner -->
                  </div> <!-- End magnifier -->
                </div> <!-- End member-team -->
              </div> <!-- End col-sm-4 -->

            </div>
          </div> <!-- End team-members -->
        </div> <!-- End container -->
      </div> <!-- End team-section -->
    </section>
    <!-- Fim Produtos -->

    <!-- Vendas
    ================================================== -->
    <section>
      <div id="about-team">
        <div class="container">
            <div class="row">

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="title-section">
                  <h3>Consumo</h3>
                </div>
                <p>Este gráfico indica o consumo médio de linha/fio, em metros, necessário para a confecção das peças indicadas, incluindo 5 a 10% de desperdício. As variações de tamanho, modelagem, tipo, estilo, espessura de tecido, densidade de pontos, tensões das linhas, maquinário utilizado, etc..., poderão causar diferenças nos consumos em relação às metragens indicadas. Todas as peças estão baseadas em um tamanho médio.</p>
              </div> <!-- end col-md-6 -->

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="progress-bars">
                  
                  <!-- skillbar -->
                  <div class="p-bar">
                    <!-- meta -->
                    <div class="progress-meta">
                      <h6 class="progress-title">Blazer</h6>
                      <h6 class="progress-value">117m</h6>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" aria-valuenow="74" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div> <!-- end p-bar -->

                  <!-- skillbar -->
                  <div class="p-bar">
                    <!-- meta -->
                    <div class="progress-meta">
                      <h6 class="progress-title">Moletom</h6>
                      <h6 class="progress-value">125m</h6>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div> <!-- end p-bar -->

                  <!-- skillbar -->
                  <div class="p-bar">
                    <!-- meta -->
                    <div class="progress-meta">
                      <h6 class="progress-title">Camisa Manga longa</h6>
                      <h6 class="progress-value">92m</h6>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" aria-valuenow="58" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div> <!-- end p-bar -->

                  <!-- skillbar -->
                  <div class="p-bar">
                    <!-- meta -->
                    <div class="progress-meta">
                      <h6 class="progress-title">Calça</h6>
                      <h6 class="progress-value">244m</h6>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" aria-valuenow="98" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div> <!-- end p-bar -->
                  <!-- skillbar -->
                  <div class="p-bar">
                    <!-- meta -->
                    <div class="progress-meta">
                      <h6 class="progress-title">Vestido</h6>
                      <h6 class="progress-value">100m</h6>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" aria-valuenow="65" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div> <!-- end p-bar -->
                  <!-- skillbar -->
                  <div class="p-bar">
                    <!-- meta -->
                    <div class="progress-meta">
                      <h6 class="progress-title">Biquini-conjunto</h6>
                      <h6 class="progress-value">25m</h6>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" aria-valuenow="35" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div> <!-- end p-bar -->

                </div> <!-- end skills-bars -->
              </div> <!-- end col-md-6 -->
            </div> <!-- end row -->
        </div>
      </div>
    </section>
    <!-- Fim Vendas -->

    <!-- Banner-Desconto
    ================================================== -->
    <section>
      <div id="banner-services" data-stellar-background-ratio="0">
        <div class="container">
          <div class="row">

            <div class="col-sm-6">
              <div class="banner-content animated out" data-animation="fadeInUp" data-delay="0">
                <h3 class="banner-heading">Promoções exclusivas</h3>
                <div class="banner-decription">
                  Uma das vantagens de ser nosso cliente são as grandes promoções que nossa empresa oferece exclusivamente para vocês.
                </div> <!-- end banner-decription -->
                <div>
                  <a href="#discounts-section" class="btn btn-sm btn-clean">Clique aqui</a>
                </div>
              </div> <!-- end banner-content -->
            </div> <!-- end col-sm-6 -->

            <div class="col-sm-6">
              <div class="banner-image animated out" data-animation="fadeInUp" data-delay="0">
                <img src="assets/images/temp/imgpromo.png" alt="">
              </div> <!-- end banner-image -->
            </div> <!-- end col-sm-6 -->
            
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div>
    </section>
    <!-- Fim Banner-Desconto -->

    <section>
      <div class="sep-section"></div>
    </section>

    <section>
      <div class="sep-section"></div>
    </section>

<!-- Destaques
    ================================================== -->

    <section>
      <div id="destaques-section" class="pad-sec">
        <div class="container">
         <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2>Feitos por clientes</h2>
                <hr>
                <p>Alguns produtos feitos por nossos clientes, para representar a durabilidade, resistencia e beleza de nossos fios e malhas</p>
            </div>
          </div> <!-- End row -->

        </div> <!-- end title-section -->

        <div class="row">
          <div class="col-md-12">
            <div class="screenshots-carousel animated out" data-animation="fadeInUp" data-delay="0">

              <div class="shot">
                <div class="screen">
                  <a class="zoom" href="assets/images/clientes/clientes1.jpg"><img src="assets/images/clientes/clientes1.jpg" alt="screenshot"></a>
                </div> <!-- end screen -->
              </div> <!-- end shot -->

              <div class="shot">
                <div class="screen">
                  <a class="zoom" href="assets/images/clientes/clientes2.jpg"><img src="assets/images/clientes/clientes2.jpg" alt="screenshot"></a>
                </div> <!-- end screen -->
              </div> <!-- end shot -->

              <div class="shot">
                <div class="screen">
                  <a class="zoom" href="assets/images/clientes/clientes3.jpg"><img src="assets/images/clientes/clientes3.jpg" alt="screenshot"></a>
                </div> <!-- end screen -->
              </div> <!-- end shot -->

              <div class="shot">
                <div class="screen">
                  <a class="zoom" href="assets/images/clientes/clientes4.jpg"><img src="assets/images/clientes/clientes4.jpg" alt="screenshot"></a>
                </div> <!-- end screen -->
              </div> <!-- end shot -->


              <div class="shot">
                <div class="screen">
                  <a class="zoom" href="assets/images/clientes/clientes5.jpg"><img src="assets/images/clientes/clientes5.jpg" alt="screenshot"></a>
                </div> <!-- end screen -->
              </div> <!-- end shot -->

              <div class="shot">
                <div class="screen">
                  <a class="zoom" href="assets/images/clientes/clientes6.jpg"><img src="assets/images/clientes/clientes6.jpg" alt="screenshot"></a>
                </div> <!-- end screen -->
              </div> <!-- end shot -->

              <div class="shot">
                <div class="screen">
                  <a class="zoom" href="assets/images/clientes/clientes7.jpg"><img src="assets/images/clientes/clientes7.jpg" alt="screenshot"></a>
                </div> <!-- end screen -->
              </div> <!-- end shot -->

              <div class="shot">
                <div class="screen">
                  <a class="zoom" href="assets/images/clientes/clientes8.jpg"><img src="assets/images/clientes/clientes8.jpg" alt="screenshot"></a>
                  </div> <!-- end screen -->
                </div> <!-- end shot -->

              </div> <!-- end screenshots-carousel -->
            </div> <!-- end col-md-12 -->
          </div> <!-- end row -->
        </div><!--  end container -->
      </div>
    </section>
    <!-- Fim Destaques -->

    <!-- Parcerias
    ================================================== -->
    <section>
      <div id="clients-section" class="clients-bg" data-stellar-background-ratio="0">
        <div class="container">
          <div class="row">
             
             <!-- parceiro-1 -->
            <div class="col-xs-4 col-sm-2">
              <div class="client">
                <a href=""><img src="assets/images/clients/fiorescer.png" alt=""></a>
              </div>
            </div> <!-- end col-xs-6 -->

             <!-- parceiro-2 -->
            <div class="col-xs-4 col-sm-2">
              <div class="client">
                <a href="#"><img src="assets/images/clients/malhafios.png" alt=""></a>
              </div>
            </div> <!-- end col-xs-6 -->

             <!-- parceiro-3 -->
            <div class="col-xs-4 col-sm-2">
              <div class="client">
                <a href="#"><img src="assets/images/clients/melisatelie.png" alt=""></a>
              </div>
            </div> <!-- end col-xs-6 -->

             <!-- parceiro-4 -->
            <div class="col-xs-4 col-sm-2">
              <div class="client">
                <a href="#"><img src="assets/images/clients/mwfios.png" alt=""></a>
              </div>
            </div> <!-- end col-xs-6 -->

             <!-- parceiro-5 -->
            <div class="col-xs-4 col-sm-2">
              <div class="client">
                <a href="#"><img src="assets/images/clients/tricofios.png" alt=""></a>
              </div>
            </div> <!-- end col-xs-6 -->

             <!-- parceiro-6 -->
            <div class="col-xs-4 col-sm-2">
              <div class="client">
                <a href="#"><img src="assets/images/clients/fiorescer.png" alt=""></a>
              </div>
            </div> <!-- end col-xs-6 -->

          </div> <!-- End row -->
        </div> <!-- End container -->
      </div> 
    </section>
    <!-- Fim Parcerias -->

    <!-- Qualidade Produto
    ================================================== -->
    <section>
      <div id="features-app-section-2" class="pad-sec">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 features-app-content-left animated out" data-animation="fadeInLeft" data-delay="0">
              <div class="section_header">
                <h2>Qualidade. Durabilidade. <span>Custo.</span></h2> 
              </div> <!-- End section_header -->

                <ul class="features-app-list">

                  <!-- feature -->
                  <li>
                    <div class="feature-app-box animated out" data-animation="fadeInLeft" data-delay="0">
                      <div class="app-feature-icon pull-left"><span class="pe-7s-graph"></span></div>
                      <div class="feature-app-box-content">
                        <h6>Qualidade, </h6>
                        <p>Temos produtos com a qualidade que o cliente espera ao comprar nossos produtos. Eles são testados e aprovados em diversos testes de qualidade. </p>
                      </div>
                    </div>
                  </li>

                  <!-- feature -->
                  <li>
                    <div class="feature-app-box animated out" data-animation="fadeInLeft" data-delay="0">
                      <div class="app-feature-icon pull-left"><span class="pe-7s-config"></span></div>
                      <div class="feature-app-box-content">
                        <h6>Personalização</h6>
                        <p>A empresa disponibiliza uma venda personalizada para cada cliente, assim atendendo o que você precisa.</p>
                      </div>
                    </div>
                  </li>

                  <!-- feature -->
                  <li>
                    <div class="feature-app-box animated out" data-animation="fadeInLeft" data-delay="0">
                      <div class="app-feature-icon pull-left"><span class="pe-7s-refresh-2"></span></div>
                      <div class="feature-app-box-content">
                        <h6>Custo</h6>
                        <p>Os preços de nossos produtos foram pensados especialmete para você, consumidor final.</p>
                      </div>
                    </div>
                  </li>

                  <!-- feature -->
                  <li>
                    <div class="feature-app-box animated out" data-animation="fadeInLeft" data-delay="0">
                      <div class="app-feature-icon pull-left"><span class="pe-7s-lock"></span></div>
                      <div class="feature-app-box-content">
                        <h6>Durabilidade</h6>
                        <p>Nossos produtos são muito duráveis, podendo chegar a até x anos de uso sem um desgaste perceptível.

                        </p>
                      </div>
                    </div>
                  </li>
                  
                </ul>
            </div> <!-- End feature-content -->

            <div class="col-sm-5 col-sm-offset-1 text-center img-app-right animated out" data-animation="fadeInRight" data-delay="0">
              <figure>
                <img src="assets/images/app/phone-2.png" alt="">
              </figure>
            </div> <!-- End col-sm-8 -->

          </div> <!-- End row -->
        </div> <!-- End container -->
      </div> <!-- End feature-section -->
    </section>
    <!-- Fim Qualidade Produto -->

    <!-- Descontos
    ================================================== -->
    <section>
      <div id="discounts-section" class="pad-sec">
        <div class="container">
          <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2>Descontos especiais</h2>
                <hr>
                <p>Pensamos em nossos descontos para atender as necessidades do nosso publico.</p>
              </div>
            </div> <!-- End row -->
          </div> <!-- end title-section -->

          <div class="row">
            <div class="col-sm-4">
              <ul class="price-table animated out" data-animation="fadeInLeft" data-delay="0">
                  <li class="title-price">
                    <h3>Barbantes</h3>
                  </li>
                  <li class="price-box">
                      <p class="months">de R$52,99</p>
                      <p class="price"><span class="currency">por R$</span>47,79</p>
                      
                  </li>
                  <li><p>Barbante EuroRoma Colorido </p></li>
                  <li>
                      <p>Contém: 1 unidade com 1,8 kg</p>
                  </li>
                  <li>
                      <p>Composição: 85% Algodão e 15% Outras</p>
                  </li>
                  <li>
                      <p>Agulha Recomendada:</p>
                  </li>
                  <li><p>Crochê - 3,5mm | Tricô- 4,5mm</p></li>
                  <li>
                      <p></p>
                  </li>
                  
              </ul>
            </div> <!-- end col-sm-4 -->

            <div class="col-sm-4">
              <ul class="price-table animated out" data-animation="fadeInUp" data-delay="0">
                  <li class="title-price">
                    <h3>Cordão</h3>
                  </li>
                  <li class="price-box">
                     <p class="months">de R$30,99</p>
                     <p class="price"><span class="currency">por R$</span>23,73</p>
                  </li>
                  <li><p>Cordão Fio Náutico</p></li>
                  <li>
                      <p>Contém: 1 unidade com 50m</p>
                  </li>
                  <li>
                      <p>Composição: 66% Polipropileno, 34% Algodão</p>
                  </li>
                  <li>
                      <p>Fio ipermeável</p>
                  </li>
                  <li><p></p></li>
                  <li>
                      <p></p>
                  </li>
                  
              </ul>
            </div> <!-- end col-sm-4 -->

            <div class="col-sm-4">
              <ul class="price-table animated out" data-animation="fadeInRight" data-delay="0">
                  <li class="title-price">
                    <h3>Lã</h3>
                  </li>
                  <li class="price-box">
                     <p class="months">de R$38,99</p>
                     <p class="price"><span class="currency">por R$</span>30,04</p>
                  </li>
                  <li><p>Lã para Crochê Pingouin</p></li>
                  <li>
                      <p>Contém: 1 unidade com 40g</p>
                  </li>
                  <li>
                      <p>Composição: 100% acrílico</p>
                  </li>
                  <li>
                      <p>Agulha recomendada: Tricô: 4 a 5mm / Crochê: 3,5mm</p>
                  </li>
                  <li><p></p></li>
                  <li>
                      <p></p>
                  </li>
                  
              </ul>
            </div> <!-- end col-sm-4 -->
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div>
    </section>
    <!-- End prices section Final Minha parte -->

    <section>
      <div class="sep-section"></div>
    </section>

    <!-- Google maps
        ================================================== -->
        <section>
          <div id="localizacao" class="pad-sec">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.904411591753!2d-46.6100319305984!3d-22.2816104907291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c909e0635bf919%3A0x5c19fc09b08816d6!2sAvel%C3%A3%20Fios%20e%20Aviamentos!5e0!3m2!1spt-BR!2sbr!4v1648811645059!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </section>
    <!-- Fim Google maps -->

    <!-- Comentarios
      ================================================== -->      
      <section>
        <div id="testimonials-section">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

                <div class="testimonials-carousel">

                <hr>

                <?php
                $sql = "SELECT * FROM comentarios";
                $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios','root','');
                $resultado = $conexao->query($sql);
                $lista = $resultado->fetchAll();
                ?>

            <?php foreach ($lista as $linha): ?>
                <div>
                    <h4><?php echo $linha['nome'] ?></h4>			
                    <p><?php echo $linha['mensagem'] ?></p>
                </div>
            <?php endforeach ?>

                  <section>
                    <div class="sep-section"></div>
                  </section>

                  <div class="tc-arrows">
                     <div class="tc-arrow-left"></div>
                     <div class="tc-arrow-right"></div>
                  </div> <!-- end tc-arrows -->
                </div> <!-- end testimonials-carousel -->

              </div> <!-- end col-md-8 -->
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div>
      </section>
    <!-- end testimonial section -->
      
    <!-- Coments-section
    ================================================== -->
    <section>
      <div id="contact-section" class="pad-sec">

        <div class="container">

          <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <h2>Deixe aqui seu comentário!</h2>
                  <hr>
                  <p>Nos de sua opinião sobre o nosso site e nossa loja.</p>
              </div>
            </div> <!-- End row -->
          </div> <!-- end title-section -->

          <div class="form-wrapper">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                
                <!-- form fields -->
                <form action="mensagens/comentario-gravar.php" method="POST" name="form" id="form" class="animated out" data-animation="fadeInUp" data-delay="0">

                  <fieldset>
                    <div class="form-group">
                      <input class="form-control br-b" type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $_SESSION['user_logado']?>">
                    </div>

                    <div class="form-group">
                      <input class="form-control br-b" type="email" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                      <textarea class="form-control br-b" name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
                    </div>
                  </fieldset>
                  
                  <!-- submit button -->
                  <div class="form-group">
                    <input type="submit" name="submit" value="Enviar mensagem" id="submit" class="btn btn-sm btn-primary">
                  </div>

                  <div id="alert"></div>

                </form>

              </div> <!-- end col-md-8 -->
            </div> <!-- end row -->
          </div>  <!-- end form-wrapper -->

        </div> <!-- end container -->

      </div> <!-- Fim Coments-section -->
    </section>

      

    <section>
      <div class="sep-section"></div>
    </section>

    <!-- Contato-info
    ================================================== -->
    <section>
      <div class="contact-info">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <a href="#"><i class="pe-7s-map-marker"></i>R. ..., ..., ...</a>
            </div> <!-- End col-sm-4 -->
            <div class="col-sm-4">
            <a href="tel:+123000456"><i class="pe-7s-phone"></i>55 19 99999-9999</a>
            </div>
             <div class="col-sm-4">
              <a href="mailto:hello@hotmail.com"><i class="pe-7s-mail"></i>espaço.fios@gmail.com</a>
             </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </div> <!-- Fim Contato-info -->
    </section>

    <!-- Rodapé
    ================================================== -->
    <footer>
      <div id="footer-section" class="text-center">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <ul class="footer-social-links">
                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>
                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>
                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Instagram" href="#" data-original-title="" title=""><i class="fa fa-instagram"></i></a></li>
              </ul>
              <p class="copyright">
                &copy; 2022 Etec JMS - ETIM DS
              </p>
            </div> <!-- End col-sm-8 -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </div> <!-- End footer-section  -->
    </footer>
    <!-- Fim Rodapé -->

  </div> <!-- End wrapper -->

  <!-- Voltar ao topo
  ================================================== -->
  <div class="back-to-top">
    <i class="fa fa-angle-up fa-3x"></i>
  </div> <!-- Fim Voltar ao topo -->

  <!-- JS libraries and scripts -->
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="assets/js/jquery.appear.min.js"></script>
  <script src="assets/js/jquery.bxslider.min.js"></script>
  <script src="assets/js/jquery.owl.carousel.min.js"></script>
  <script src="assets/js/jquery.countTo.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.imagesloaded.min.js"></script>
  <script src="assets/js/jquery.isotope.js"></script>
  <script src="assets/js/jquery.placeholder.js"></script>
  <script src="assets/js/jquery.smoothscroll.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.waypoints.js"></script>
  <script src="assets/js/jquery.fitvids.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="assets/js/jquery.countdown.js"></script>
  <script src="assets/js/jquery.navbar-scroll.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="assets/js/jquery.gmaps.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>