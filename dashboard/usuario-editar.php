<?php
	require_once 'classes/Usuario.php';
    require_once '../login-adm/adm-verifica.php';
	$id = $_GET['id'];
  	$usuario = new Usuario($id);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Espaço Fios - Editar Usuario</title>

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

    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('inputRua').value=("");
            document.getElementById('inputBairro').value=("");
            document.getElementById('inputCidade').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('inputRua').value=(conteudo.logradouro);
            document.getElementById('inputBairro').value=(conteudo.bairro);
            document.getElementById('inputCidade').value=(conteudo.localidade);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('inputRua').value="...";
                document.getElementById('inputBairro').value="...";
                document.getElementById('inputCidade').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

  </head>
  <body>
    
<!-- Main Header -->

<?php include_once "main-header.html" ?>

<!-- Main Header -->

<?php include_once "main-sidebar.html" ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="content-wrapper">
        <section class="content-header">
            <h1 class="titulo">Gerenciar Usuarios</h1>
            <ol class="breadcrumb">
                
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="box">

                        <div class="nav-tabs-custom">
                            

                            <div class="tab-content">
                                <div class="tab-pane active" id="pessoais">
                                    <div class="post"><br>
                                        <form id="form1" name="form1" class="form-horizontal" action="usuario-editar-gravar.php?id=<?php echo $usuario->id ?>" method="post" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="hidden" name="inputId" value="<?php echo $usuario->id ?>">

                                                    <div class="form-group">
                                                        <label for="inputNome" class="col-md-2 control-label">Nome:</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="inputNome" id="inputNome" value="<?php echo $usuario->nome ?>">
                                                        </div>
                                                        <label for="inputEmail" class="col-md-1 control-label">Email:</label>
                                                        <div class="col-sm-7">
                                                            <input type="email" class="form-control" name="inputEmail" id="inputEmail" value="<?php echo $usuario->email ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputSenha" class="col-md-2 control-label">Senha:</label>
                                                        <div class="col-sm-7">
                                                            <input type="password" class="form-control" name="inputSenha" id="inputSenha" value="<?php echo $usuario->senha ?>">
                                                        </div>
                                                        <label for="inputCpf" class="col-md-1 control-label">CPF:</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="inputCpf" id="inputCpf" value="<?php echo $usuario->cpf ?>">
                                                        </div>
                                                    </div>                                                                                                                                                    
                                                    <div class="form-group">
                                                        <label for="inputCidade" class="col-md-2 control-label">Cidade:</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="inputCidade" id="inputCidade" value="<?php echo $usuario->cidade ?>">
                                                        </div>
                                                        
                                                        <label for="inputCelular" class="col-md-1 control-label">Celular:</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="inputCelular" id="inputCelular" value="<?php echo $usuario->celular ?>">
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
                </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()    
    //Date picker
    $('#datepicker').datepicker({ autoclose: true })
    //Timepicker
    $('.timepicker').timepicker({ showInputs: false })
  })
</script>

</body>
</html>