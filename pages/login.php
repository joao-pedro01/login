<!doctype html>
<html lang="pt-br">
<head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(../images/bg-1.jpg);"></div>
						
							<div class="login-wrap p-4 p-md-5">
								<div class="d-flex">
									<div class="w-100">
										<h3 class="mb-4">Entrar</h3>
									</div>
									<div class="w-100">
										<p class="social-media d-flex justify-content-end">
											<a href="https://linkedin.com/in/joao-pedro01" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"></span></a>
											<a href="https://github.com/joao-pedro01" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-github"></span></a>
										</p>
									</div>
								</div>
								<form action="../scripts/login.php" method="post" class="signin-form">
									<div class="form-group mt-3">
										<input type="text" class="form-control" name="username" required>
										<label class="form-control-placeholder" for="username">Username</label>
									</div>
									<div class="form-group">
										<input id="password-field" type="password" class="form-control" name="password" required>
										<label class="form-control-placeholder" for="password">Senha</label>
										<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
									</div>
 									<div class="form-group">
										<button type="submit" class="form-control btn btn-primary rounded submit px-3">Entrar</button>
									</div>
									<div class="form-group d-md-flex">
										<div class="w-50 text-left">
											<label class="checkbox-wrap checkbox-primary mb-0">Lembre-me
												<input type="checkbox" checked>
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="w-50 text-md-right">
											<a href="#">Esqueceu a senha?</a>
										</div>
									</div>
								</form>
								<p class="text-center">Não está cadastrado? <a href="../index.php">Registre-se</a></p>
							</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../js/jquery.min.js"></script>
  	<script src="../js/popper.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
  	<script src="../js/main.js"></script>

</body>
</html>