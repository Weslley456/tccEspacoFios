<?php
  require_once '../dashboard/classes/Produtos.php';
  require_once '../login-user/user-verifica.php';
  $produto = new Produtos();
  $lista = $produto->consFio();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Espaço Fios - Vitrine</title>

    
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

  <?php include_once "main-header.html" ?>


  <!-- Produtos -->

  <main>
    <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
      
    <?php foreach ($lista as $linha): ?>
        <div class="col-lg-3">
        <div class="card mb-4 rounded-3 shadow-sm border-dark">
          <div class="card-header py-3 text-bg-dark border-dark">
              
          <h5 class="h5-center my-0"><?php echo $linha['titulo']; ?></h5>

            </div>
            <a href="produtoexpandir.php?id=<?php echo $linha['id'] ?>" class="pg"><?php echo "<img src='../dashboard/uploads/".$linha['imagem']."' width='200px'>" ?></a>
            <div class="detail-box">
              
              <div class="price_box">
                <br>
                <abbr class="circulor">R$</abbr>
                <span class="price_heading"><?php echo $linha['preco']  ?></span>
              </div>
            </div>
          </div>
      </div>

      <?php endforeach ?>
            
        
      </div>
    </div>
    
  </main>

  <!-- Main Header -->

  <?php include_once "main-footer.html" ?>


</div>
</div>


    
  </body>
</html>
