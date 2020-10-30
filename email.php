<?php



if (isset($_POST['email']) && !empty($_POST['email'])) {
	# code...
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "annefrance_costa@outlook.com";
$subject ="Contato - Programador Br";
$body = "Nome:  ".$nome. "\r\n".
	"Email:  ".$email. "\r\n".
	"Mensagem:  ".$mensagem;

$header ="From:annefrance.costa@gmail.com"."\r\n"
."Reply-To:".$email."\r\n"
."X=Mailer:PHP/".pdpversion();

if(mail($to, $subject,$body,$header){
	echo ("Email enviado com sucesso");
}else{
	t_echo ("O email não pôde ser enviado");
}









}




?>