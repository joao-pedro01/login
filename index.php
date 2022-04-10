<!doctype html>
<html lang="pt-br">
<head>
  	<title>Resgistro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						
							<div class="login-wrap p-4 p-md-5">
								<div class="d-flex">
									<div class="w-100">
										<h3 class="mb-4">Cadastrar</h3>
									</div>
									<div class="w-100">
										<p class="social-media d-flex justify-content-end">
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
										</p>
									</div>
								</div>
								<form action="scripts/register.php" method="post" class="signup-form">
                                    <div class="form-group mt-3">
										<input type="text" class="form-control" name="name" required>
										<label class="form-control-placeholder" for="name">Nome completo</label>
									</div>
                                    <div class="form-group mt-3">
										<input type="text" class="form-control" name="username" required>
										<label class="form-control-placeholder" for="username">Username</label>
									</div>
                                    <div class="form-group mt-3">
										<input type="email" class="form-control" name="email" required>
										<label class="form-control-placeholder" for="name">Email</label>
									</div>
                                    <div class="form-group mt-3">
										<input type="text" class="form-control"  onfocus="(this.type='date')" onblur="(this.type='text')" name="datanasc" required>
										<label class="form-control-placeholder" for="datanac">Data de nascimento</label>
									</div>
									<div class="form-group">
										<input id="password-field" type="password" class="form-control" name="password" required>
										<label class="form-control-placeholder" for="password">Senha</label>
										<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
									</div>
                                    <div class="form-group">
										<input id="confirmpassword-field" type="password" class="form-control" name="confirmpassword" required>
										<label class="form-control-placeholder" for="confirmpassword">Confirme sua senha</label>
										<span toggle="#confirmpassword-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
									</div>
									<div class="form-group">
										<button type="submit" class="form-control btn btn-primary rounded submit px-3">Cadastrar</button>
									</div>
									<div class="form-group d-md-flex">
										<div class="w-50 text-left">
											<label class="checkbox-wrap checkbox-primary mb-0">Lembre-me de mim
												<input type="checkbox" checked>
												<span class="checkmark"></span>
											</label>
										</div>
									</div>
								</form>
								<p class="text-center">Já é cadastrado? <a href="pages/login.php">Entrar</a></p>
							</div>
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