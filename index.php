<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Login Local Medico</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <?php
/*
   Este código serve para exibir mensagem de erro de usuário e senha, no caso da SESSION é diferente de zero(0).
*/
      $erro="";
      session_start();
      if((!isset ($_SESSION['erro']) == 0))
      {
                 $erro ="<span class='red'>*Usuario e/ou Senha Incorreto(s)</span>";
      }
    ?>
</head>

<body>

    <div class="container">
        <!--======================Panel de Login==========================================-->
        <div class="panel panel-default panel-login">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Login</h3>
                <div class="text-center"><img class="img-thumbnail" src="img/logomarca.png" alt="logo"></div>
            </div>
            <div class="panel-body">
                <form action="seguranca.php" method="POST" class="form-horizontal" role="form">

                    <div class="form-group">
                        <label class="col-sm-10 control-label"><?php echo $erro; ?></label>
                        </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-email-login">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="dreeh.silva@hotmail.com" name="input-email-login" placeholder="usuario@empresa.com.br" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-senha-login">Senha:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" value="abc123" name="input-senha-login" placeholder="******" required pattern="(?=.*\d)(?=.*[a-z]).{6,6}" maxlength="6" data-toggle="tooltip" title="A senha deve conter seis caracteres misturando letras e numeros">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="button-login">Fazer Login</button>
                    <a class="" data-toggle="modal" href='#modal-recuperar-senha'>Esqueceu a senha?</a>
                    <a class="btn btn-info btn-block" data-toggle="modal" href='#modal-id'>Cadastre-se</a>
                </form>
            </div>
        </div>
        <!--/panel de login-->
        <!--======================Modal de recuperação de senha==========================================-->
        <div class="modal fade" id="modal-recuperar-senha">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Recuperar senha</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-cpf">CPF:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-cpf" placeholder="CPF">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-data-nascimento">Dat. Nasc:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="input-data-nascimento" placeholder="01/01/1999">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-email">E-Mail:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="input-email" placeholder="usuario@empresa.com.br">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" id="button-cadastrar">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--/modal recuperação de senha-->
        <!--======================Modal de cadastro==========================================-->
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-header-info">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Cadastre-se</h4>
                    </div>
                    <form action="#" method="POST" class="form-horizontal" id="form-cadastro" role="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-cpf">CPF:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-cpf" placeholder="999.999.999-99" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-cpf">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-nome" placeholder="Nomr e Sobrenome" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-data-nascimento">Dat. Nasc:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="input-data-nascimento" placeholder="01/01/1990" required pattern=(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" title="Exemplo: 01/01/1999">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-email">E-Mail:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="input-email" placeholder="usuario@empresa.com.br" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-senha">Senha:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="input-senha" placeholder="******" required pattern="(?=.*\d)(?=.*[a-z]).{6,6}" maxlength="6" data-toggle="tooltip" title="A senha deve conter seis caracteres misturando letras e numeros">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default text-right" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary text-left" id="button-cadastrar">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/modal cadastro -->
    </div>
    <!--/container-->
</body>
<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $('#form-cadastro').find('[id="input-data-nascimento"]').mask('99/99/9999');

    $('#form-cadastro').find('[id="input-cpf"]').mask("000.000.000-00");

});
</script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="http://oss.maxcdn.com/jquery.mask/1.11.4/jquery.mask.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</body>

</html>

