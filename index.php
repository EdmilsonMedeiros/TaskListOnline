<?php
session_start();

if(isset($_SESSION['email'])){
  echo "Acesso negado";
  header("Location: home.php");
};

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Login</title>
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

        <div class="container-fluid">

        <div class="principal-header ">
            <header>
                <div class="navbar">
<!--
                    <h4>
                        Bem vindo ao seu Task Manager
                    </h4>
-->
                    <img src="img/icone.png" class="img-fluid img-icon"/>
                </div>
            </header>
        </div>

        <div class="container principal-section boasVindas">
            <section>
                <div class="row">


<!--                    <a>Bem vindo ao seu gestor de tarefas</a>-->


                </div>
            </section>
        </div>


            <div class="container-fluid container-principal">

        <div class="container principal-section form">
            <section>
                <div class="row">

                    <div class="form-login justify-content-md-center offset-lg-4 offset-sm-3 offset-md-3 offset-1 col-lg-4 col-sm-6 col-md-6 col-10">
                        <form action="scripts/login.php" method="post">
                            <h4>Entre com seu email e senha</h4>
                            <b style="color:red;">
                                <?php
                                    if(isset($_SESSION['erroLogin'])){
                                        echo $_SESSION['erroLogin'];
                                    }
                                    unset($_SESSION['erroLogin']);
                                ?>
                            </b>
                            <input type="email" class="form form-control" name="email" id="email" placeholder="Digite qui seu e-mail:" required />

                            <input type="password" class="form form-control" name="senha" id="senha" placeholder="Digite sua senha" required />
                        </br>
                            <input type="submit" class="btn btn-success" value="Fazer login"/>
                            <input type="reset" class="btn btn-danger" value="Limpar formulário"/>

                            <br>
                            <br><a class="aSenha" href="recover.php">Recuperar senha</a>
                            <a class="aConta" href="register.php">Criar conta</a>

                        </form>
                    </div>

                </div>
            </section>
        </div>

            </div>

            <footer class="footer">
            <a href="mailto:tesklist@tasklist.com.br">tesklist@tasklist.com.br</a>



            </footer>

        </div>

        <script src="js/index.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    </body>
</html>
