<?php
    session_start();
    include_once('../scripts/function.php');

    if ($_SESSION['UserName'] == null){
        $Error = 'Acesso negado!!!';
        Invalid($Error);
    }

    $data = $_SESSION['DateNasc'];
?>
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
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <ul>
                                    <li>
                                        Nome do usuário: <?php echo $_SESSION['UserNome'] ?>
                                    </li>
                                    <li>
                                        Username da conta: <?php echo $_SESSION['UserName'] ?>
                                    </li>
                                    <li>
                                        Data de nascimento do usuário: <?php echo date('d/m/Y', strtotime($_SESSION['DateNasc'])); ?>
                                    </li>
                                    <li>
                                        Idade do usuário: <?php Age($data); ?> anos
                                    </li>
                                    
                                    <div class="form-group">
                                        <a href="../scripts/logout.php"><button type="submit" class="form-control btn btn-danger rounded submit px-3">Sair</button></a>
                                    </div>
                                </ul>


                            </div>
                                
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