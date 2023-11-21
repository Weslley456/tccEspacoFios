<?php
  require_once '../dashboard/classes/Produtos.php';
  require_once '../login-user/user-verifica.php';
  $id = $_GET['id'];
  $produtos = new Produtos($id);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Espaço Fios - <?php echo $produtos->titulo ?></title>

    
    <link rel="stylesheet" href="assets/css/style-products.css">

    
    <!-- https://www.myscreen.com.br/?gclid=EAIaIQobChMIourKw62A-gIV_BXUAR3O_gZVEAAYASAAEgLwSvD_BwE -->
    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
 <div class="allProducts">   
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <!-- Main Header -->

  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="logo.png"  width="100px" height="50px" class="me-2" viewBox="0 0 118 94"></img>
        <span class="fs-4">Vitrine</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="../home.php">Home</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="produtos.php">Produtos</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="localizacao.php">Localização</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="../login-user/">Login</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="../login-user/user-logout.php">sair</a>
      </nav>
    </div>

      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal"><?php echo $_SESSION['user_logado']?><hr></h1>
      <p class="fs-5 text-muted">Veja mais sobre o produto selecionado e descubra suas novas tecnologias</p>
    </div>
  </header>


  <!-- Produtos -->

  <div class="container">
    <article class="row produtos-compra">
      <figure class="col-md-5"> 
        <?php echo "<img src='../dashboard/uploads/".$produtos->imagem."' class='img-thumbnail'>" ?>
      </figure>
      <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
        <article class="produtos-conteudo"> 
          <h1>
          <?php echo $produtos->titulo ?>
        </h1>
        </article>
        <article class="produtos-preco">
          <p class="fs-5 text-muted">
            <?php echo $produtos->descricao ?>
          </p>
        </article>
        <article class="produtos-preco">
          <strong> 
            R$ <?php echo $produtos->preco ?> <p>(100 gramas)</p>
          </strong>
        </article>
      </section>
    </article>
  </div>

  <!-- Main Header -->

  <?php include_once "main-footer.html" ?>


</div>
</div>


    
  </body>
</html>
