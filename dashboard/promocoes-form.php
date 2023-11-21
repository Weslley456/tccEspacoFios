<?php
require_once '../login-adm/adm-verifica.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Espaço Fios - Nova Promoção</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<!-- Main Header -->

<?php include_once "main-header.html" ?>

<!-- Main Header -->

<?php include_once "main-sidebar.html" ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gerenciar Promoções</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          
      


<div class="content-wrapper">
        

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="box">

                        <div class="nav-tabs-custom">

                            <div class="tab-content">
                                <div class="tab-pane active" id="pessoais">
                                    <div class="post"><br>
                                        <form id="form1" name="form1" class="form-horizontal" action="promocoes-gravar.php" method="post" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="hidden" name="inputId" value="">

                                                    <div class="form-group">
                                                        <label for="inputTitulo" class="col-md-2 control-label">Título:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputTitulo" name="inputTitulo" >
                                                        </div>                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputNomeCliente" class="col-md-2 control-label">Nome do Cliente:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputNomeCliente" name="inputNomeCliente" >
                                                        </div>                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputSenha" class="col-md-2 control-label">Senha:</label>
                                                        <div class="col-sm-9">
                                                            <input type="password" class="form-control" id="inputSenha" name="inputSenha" >
                                                        </div>                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputProduto" class="col-md-2 control-label">Produto:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputProduto" name="inputProduto" >
                                                        </div>                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputPreco" class="col-md-2 control-label">Preco:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputPreco" name="inputPreco" >
                                                        </div>                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputQtdeProdutos" class="col-md-2 control-label">Quantidade Produtos:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputQtdeProdutos" name="inputQtdeProdutos" >
                                                        </div>                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputObservacoes" class="col-md-2 control-label">Observações:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputObservacoes" name="inputObservacoes" >
                                                        </div>                                                        
                                                    </div>                                         

                                                </div>
                                            </div>
                                            <!-- Fim da primeira linha -->

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="box-footer">
                                                        <label for="groupButton"></label>
                                                        <div class="col-sm-3 col-sm-offset-2 pull-left">
                                                            <button type="submit" id="groupButton" class="btn btn-danger " title="Salvar as alterações">
                                                                <i class="fa fa-save"></i> Salvar dados
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Fim da div tab content -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    </div>

    </div>
    </main>
  </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>