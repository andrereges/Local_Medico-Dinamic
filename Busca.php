
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Busca Local Medico</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

 <?php
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço
   do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não
   estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para
   a index.php.
*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}
	
$logado = $_SESSION['login'];

?>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Busca unidades</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><span class="glyphicon glyphicon-user"></span> <?php echo $logado; ?></li><p>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair </a></li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center main">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="#"><span class="glyphicon glyphicon-home col-xs-1"></span>Home</a></p>
                <p><a href="#"><span class="glyphicon glyphicon-search col-xs-1"></span>Busca</a></p>
                <p><a href="#"><span class="glyphicon glyphicon-phone-alt col-xs-1"></span>Contato</a></p>
                <p><a href="#"><span class="glyphicon glyphicon-info-sign col-xs-1"></span>Sobre</a></p>
            </div>
            <div class="col-sm-8 text-left">
                <div class="form-group busca">
                    <div class="input-group">
                        <input type="text" class="form-control input-lg" placeholder="Buscar unidade">
                        <div class="input-group-addon btn"><span class="glyphicon glyphicon-search"></span></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">UBS Qualquer
                            <div class="icon-panel-title"><a data-toggle="modal" href='#modal-id'><span class="glyphicon glyphicon-pencil"></span></a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>
                            <label>Endereço: </label> Rua qualquer, 100 Jardim Brasil Sao Paulo/SP
                            <label>Telefone: </label> (11) 3902-2303 / 3902-7587
                        <p>
                            <label>Ultima atualização: </label> 13/07/2016 12:01</p>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Clinico</th>
                                        <th class="text-center">Pediatra</th>
                                        <th class="text-center">Raio X</th>
                                        <th class="text-center">Eletrocardiograma</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>02</td>
                                        <td>01</td>
                                        <td><span class="glyphicon glyphicon-remove"></span></td>
                                        <td><span class="glyphicon glyphicon-ok"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <label>Obs:</label>
                        <p>Aqui iram as observações </p>
                    </div>
                </div>
            </div>
            <!--================Propagandas ==========================-->
            <div class="col-sm-2 sidenav">
                <div class="well">
                   <a href="http://www.drogariasaopaulo.com.br/" target= "_blank">
                    <p>Drogaria Sao Paulo</p>
                    <img src="img/drogariaSaoPaulo.png" class="img-thumbnail" alt="propaganda 1">
                   </a>
                </div>
                <div class="well">
                   <a href="http://www.manipulacaopaguemenos.com.br" target= "_blank">
                    <p>Pague Menos</p>
                    <img src="img/pagueMenos.png" class="img-thumbnail" alt="propaganda 1">
                   </a>
                </div>
            </div>
            <!--/propagandas -->
        </div>
    </div>
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" class="form-horizontal form-edicao" role="form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Editar Dados</h4>
                        <h4>UBS qualquer</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Qtd Med. Clinico Geral</label>
                            <select class="form-control" type="number" name="">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Qtd Med. pediatra</label>
                            <select class="form-control" type="number" name="">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Raio X</label>
                            <div class="">
                                <input type="radio" name="input-raio-x"><span class="glyphicon glyphicon-ok"></span>
                                <input type="radio" name="input-raio-x"><span class="glyphicon glyphicon-remove"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Eletrocardiograma (ECG)</label>
                            <div class="">
                                <input type="radio" name="input-ecg"><span class="glyphicon glyphicon-ok"></span>
                                <input type="radio" name="input-ecg"><span class="glyphicon glyphicon-remove"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Observações:</label>
                            <textarea name="" id="" cols="15" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="container text-center footer">
        <p>Local Medico Todos os direitos reservados 2016</p>
    </footer>
             <script type="text/javascript " src="js/bootstrap.js "></script>
             <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

</body>

</html>

