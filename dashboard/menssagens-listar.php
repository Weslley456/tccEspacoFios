<?php
    require_once '../login-adm/adm-verifica.php'; 
    require_once 'classes/Mensagem.php';
    require_once 'classes/Usuario.php';
    
    $usuario = new Usuario();
    $lista = $usuario->listar();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Espaço Fios - Mensagens</title>

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
        <h1 class="h2">Gerenciar Clientes</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          
      


<div class="content-wrapper">
        

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="../home.php#contact-section" class="btn btn-dark">
                                <i class="fa fa-user-plus"></i><span> Nova Mensagem</span>
                            </a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">

                            <?php
                                    $sql = "SELECT * FROM comentarios";
                                    $conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios','root','');
                                    $resultado = $conexao->query($sql);
                                    $lista = $resultado->fetchAll();
                            ?>

                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Mensagem</th>                                    
                                    <th class="acao">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lista as $linha): ?>
                                        <tr>
                                            <td><?php echo $linha['id'] ?></a></td>
                                            <td><?php echo $linha['nome'] ?></a></td>
                                            <td><?php echo $linha['email'] ?></a></td>
                                            <td><?php echo $linha['mensagem'] ?></a></td>
                                            <td>
                                            <a href="mensagens-excluir.php?id=<?php echo $linha['id'] ?>"
                                                class="btn btn-sm btn-danger">Excluir</a> 
                                            </td>
                                        </tr>
                                    <?php endforeach ?>                          
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div> <!-- fim row -->
        </section>
    </div>

    </div>
    </main>
  </div>




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>