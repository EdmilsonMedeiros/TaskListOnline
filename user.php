<?php
session_start();
if(!(isset($_SESSION['email']))){
  header("Location: index.php");
};
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	   	<title>Usuário</title>
        <meta charset="UTF-8"/>
        <link rel="icon" href="img/icone.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.css"/>
        <!--Style-->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <!--JQuery-->
        <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="container-fluid container-principal">
        <div class="principal-header">
            <header>
            <!--Dropdown-->
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/icone.png" class="img-fluid img-icon"/>
                Task List Online
                </button>

                <ul class="dropdown-menu">

                  <li><a href="">Alterar dados</a></li>
                  <li><a href="">Sobre</a></li>
                  <li><a href="">Ajuda</a></li>
                  <li><hr class="dropdown-divider"><a href="scripts/logout.php" id="btn-sair">SAIR</a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                </ul>
            <!--Dropdown-->
                <div class="">
                </div>
            </header>
        </div>
        <div class="container principal-section form">
            <section>
                <div class="row">
                    <div class="form-login justify-content-md-center offset-lg-4 offset-sm-3 offset-md-3 offset-1 col-lg-4 col-sm-6 col-md-6 col-10">
                        <form action="scripts/user_edit.php" method="POST">
                            <h4>Atualização cadastral</h4>
                            <input type="text" class="form form-control" name="nome" id="nome" placeholder="Nome:" value="<?php require("scripts/user.php"); retornaNome(); ?>" required />
                            <input type="email" class="form form-control" name="email" id="email" placeholder="E-mail:" value="<?php retornaEmail(); ?>" required />
                            <input type="date" class="form form-control" name="dataNascimento" id="dataNascimento" placeholder="" value="<?php retornaDataNascimento(); ?>" required />
                        </br>
                        <b>
                        	<?php
                        	if (isset($_SESSION['success'])) {
                        		echo "<p style='color: #b4e9b4; background-color:#000; padding:0.3em;'>".$_SESSION['success']."</p>";
                        	}
                        	if (isset($_SESSION['no-success'])) {
                        		echo "<p style='color: red'>".$_SESSION['no-success']."</p>";
                        	} 
                        	unset($_SESSION['no-success']);
                        	unset($_SESSION['success']);
                        	?>
                    	</b>
                            <input type="submit" class="btn btn-success" value="Salvar alterações"/>
                            <br>
                        </form>

                    </div>
                </div>
            </section>
        </div>
</div>
        <script src="js/index.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>