<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Envio de E-mail</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div>
		      		<img src="" alt="">
		      	</div>
		      	<h3 class="text-center mb-4">Envio de E-mail promoções</h3>
						<form action="enviar.php" name="form" id="form" method="POST">
		      		<div class="form-group">
		      			<input type="text" id="Nome" name="Nome" class="form-control rounded-left" placeholder="Nome" required="required">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="email" id="Email" name="Email" class="form-control rounded-left" placeholder="Email" required="required">
	            </div>
                <div class="form-group d-flex">
                    <input type="text" id="Assunto" name="Assunto" class="form-control rounded-left" placeholder="Assunto" required="required">
                  </div>
                  <div class="form-group d-flex">
                    <textarea name="Mensagem" cols="30" rows="4" class="form-control rounded-left" placeholder="Mensagem" required="required"></textarea>
                  </div>
                
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">ENVIAR</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

</div>
      </div>
    </form>
  </div>
</div>
</body>
</html>