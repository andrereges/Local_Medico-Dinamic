<?php

// session_start inicia a sessão
session_start();

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['input-email-login'];
$senha = $_POST['input-senha-login'];
// conectar com o bando de dados.
include_once('conexao.php');
// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$consulta= "SELECT * FROM autentica WHERE usuarioAutentica = '".$login."' AND senhaAutentica='".$senha."'";
$result= $mysqli->query($consulta) or die ($mysqli->error);

echo mysqli_num_rows ($result);
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:busca.php');

}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	$_SESSION['erro'] = 0;
	header('location:index.php');

	}
?>

