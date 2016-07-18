<?php

error_reporting(0);   // com zero, com isso nenhum erro é reportado
ini_set(“display_errors”, 0 );     // com valor zero, poderia ser também true ou false, um e zero, respectivamente. O código acima fará com que o PHP não exiba nenhum tipo de erro na tela.

    $tamanho = 512000; //define o tamanho máximo do arquivo, em bytes, aqui definido em 512000 bytes, ou seja, 500KB
#inclui a classe PHPMAILER


include("class.phpmailer.php");

#instancia o objeto
$mail = new PHPMailer();
#mensagem aceita caracteres especiais
$mail->CharSet = 'utf-8';
#enviar via SMTP
$mail->IsSMTP();
#seu servidor smtp / dominio no meu caso "mail" mas pode mudar verifique o seu!
$mail->Host = "smtps.bol.com.br";
#habilita smtp autenticado
$mail->SMTPAuth = true;
//usuário deste servidor smtp. Aqui esta a solucao
$mail->Username = "support.technology@bol.com.br";  // seu email
$mail->Password = "Sup0rt3"; // sua senha do email
//email utilizado para o envio, pode ser o mesmo de username
$mail->From = "support.technology@bol.com.br"; // seu email, destinatário
$mail->FromName = "Local M�dico";

#recebendo os dados do formulario
if(isset($_POST['nome'])){
$nome     = $_POST['nome'];
$email    = $_POST['email'];
$titulo   = $_POST['titulo'];
$mensagem = $_POST['mensagem'];
$arquivo  = $_FILES['arquivo'];

#Define os destinatário(s)
$mail->AddAddress("support.technology@bol.com.br",$nome);
#$mail->AddAddress("outroEmail@SEUDOMINIO.com.br","Financeiro");
#$mail->AddCC('3dmaster@uol.com.br', 'Eu'); // Copia
#$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

#wrap seta o tamanhdo do texto por linha
$mail->WordWrap = 50;

$mail->IsHTML(true); //enviar em HTML

#informando a quem devemos responder. o mail inserido no formulario
//$mail->AddReplyTo("$email","$nome");

#criando o codigo html para enviar no email, voce pode utilizar qualquer tag html
$msg = " Nome: $nome\n";
$msg .= "<p> E-mail: $email\n</p>";
$msg .= "<p>Titulo: $titulo\n</p>";
$msg .= " <p>Mensagem: $mensagem\n</p>";
//$msg .= "Arquivo:"$arquivo\n";
}


$mail->Subject = "CONTATO - LOCAL MÉDICO";
#adicionando o html no corpo do email
$mail->Body = $msg;

#$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']); //adiciona o anexo

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

#enviando e retornando o status de envio
if(!$mail->Send())
{
echo "houve um erro ao  enviar o email! erro: $mail->ErrorInfo";
#$mail->ErrorInfo informa onde ocorreu o erro, o uso opcional
exit;
}
echo "Mensagem enviada ok";
?>
