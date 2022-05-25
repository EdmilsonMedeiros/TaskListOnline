<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width-device-width, inicial-scale=1"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.css"/>
        <!--Style-->
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        
    </head>
    
    <body>
        
        <div class="container-fluid">
        
        <div class="principal-header ">
            <header>
                <div class="navbar">

                    <img src="img/icone.png" class="img-fluid img-icon"/>
                </div>
            </header>
        </div>
            
        <div class="container principal-section boasVindas">
            <section>
                <div class="row">

                    
                    

                </div>
            </section>
        </div>
        

            <div class="container-fluid container-principal">
                
                        <div class="container principal-section form">
            <section>
                <div class="row">

                    <div class="form-login justify-content-md-center offset-lg-4 offset-sm-3 offset-md-3 offset-1 col-lg-4 col-sm-6 col-md-6 col-10">
                        <form action="scripts/register.php" method="POST">
                            <h4>Por favor preencha todos os campos</h4>
                            
                            <br><input type="name" class="form form-control" name="nome" id="nome" placeholder="Digite qui o seu nome:" required />
                            
                            <label for="dataNascimento">Data de nascimento</label>
                            
                            <br><input type="date" class="form form-control" name="dataNascimento" id="dataNascimento" placeholder="12/05/2022" required />
                            
                            <br><input type="email" class="form form-control" name="email" id="email" placeholder="Digite qui seu e-mail:" required />
                            
                            <br><input type="password" class="form form-control" name="senha" id="senha" placeholder="Crie sua senha" required />
                            
                            <br><input type="submit" class="btn btn-success" value="Finalizar cadastro"/>
                            
                            <input type="reset" class="btn btn-danger" value="Limpar formulário"/>
                            
                            <br>
<!--                            <a class="aSenha" href="home.html">Esqueci a senha</a>-->
                            <br><a class="aConta" href="index.php">Já possuo conta, ir para login.</a>
                            
                        </form>
                    </div>

                </div>
            </section>
        </div>
                
            </div>
        
        <footer class="footer">
        Task List Online
        </footer>
            
        </div>
    
        <script src="js/index.js"></script>
    </body>
</html>