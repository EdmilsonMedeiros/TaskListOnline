<?php
session_start();
if(!(isset($_SESSION['email']))){
  echo "Acesso negado";
  header("Location: index.php");
};
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Home</title>
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
        <!--Modal: -->
<div class="modal" tabindex="-1" id="modalVer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Visualizar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal" tabindex="-1" id="modalEditar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Salvar edição</button>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal" tabindex="-1" id="modalExcluir">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Sim, excluir</button>
      </div>
    </div>
  </div>
</div>
<!---->
<div class="modal" tabindex="-1" id="modalTarefa">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nova tarefa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form form-group">
          <form action="scripts/task_save.php" method="POST">
            <input type="text" name="titulo" id="titulo"  class="form-control" maxlength="50" placeholder="Titulo" required/>
            <input type="date" name="dataTarefa" id="dataTarefa" class="dataTarefa form-control" required/>
            <textarea class="form-control col-12" id="conteudo" name="conteudo" placeholder="Conteúdo da tarefa" rows="12" required></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Salvar tarefa</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
        <!--Modal: -->
        <div class="container-fluid">
        <div class="principal-header">
            <header>
            <!--Dropdown-->
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/icone.png" class="img-fluid img-icon"/>
                Task List Online
                </button>
                <ul class="dropdown-menu">
                  <li><a href="index.php">Início</a></li>
                  <li><a href="user.php">Conta</a></li>
                  <li><a href="about.php">Sobre</a></li>
                  <!-- <li><a href="#email">Ajuda</a></li> -->
                  <!-- <li></li> -->
                  <li><hr class="dropdown-divider"><a href="scripts/logout.php" id="btn-sair">SAIR</a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                </ul>

              </div>
            <!--Dropdown-->
            </header>
        </div>
        <div class="container quadro">
              <div class="container filtro-tarefas">
                <div class="col-row">
                  <div class="col-12">
                    <form action="" method="POST">
                      <a><input type="date" name="filter-date" id="filter-date"> a <input type="date" name="filter-date-2" id="filter-date-2"></a> 
                          <button type="submit" name="consult" class="btn btn-success btn-filtar float-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                          </button>

                      <button type="button" class="btn btn-success btn-Add" data-bs-toggle="modal" data-bs-target="#modalTarefa">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                      </svg>
                      </button>

                  </form>
                  </div>
                </div>
              </div>
                      <!--Card-->
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="card cardTarefa">
                              <div class="card-body">
                                <a href="" data-bs-toggle="modal" data-bs-target="#modalVer">99/99/9999 - Segunda-feira</a><br>
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <!-- <a href="#" class="btn btn-success">Go somewhere</a> -->
                                  <button type="submit" class="btn btn-danger btn-excluir" value="" data-bs-toggle="modal" data-bs-target="#modalExcluir">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg>
                                  </button>
                                  <button type="submit" class="btn btn-success btn-editar" value="" data-bs-toggle="modal" data-bs-target="#modalEditar">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                      </svg>
                                  </button>

                              </div>
                            </div>
                          </div>
                          <!--Card-->
                        <br>
                        </div>

          <br><br>
        <footer class="footer fixed-bottom">
        <a id="email" href="mailto:tesklist@tasklist.com.br">tesklist@tasklist.com.br</a>
        </footer>
        </div>


        <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    </body>
</html>
