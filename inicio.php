<!DOCTYPE html>
<html>

<head>
	<title>Pagina Inicial</title>
</head>
<body>

<?php

$nome = $_POST["nome"];
$usuario  = $_POST['usuario'];
$senha = $_POST['senha'];
$confirm = $_POST['confirmsenha'];
$email = $_POST['email'];
$cpf = $_POST['CPF'];
$tel = $_POST['telefone'];


echo 'Seus seguintes dados foram cadastrados' . '<br \>';
echo'Nome completo:' .$nome . '<br \>';
echo 'Nome de usuario:' .$usuario . '<br \>';
echo 'Email:' .$email . '<br \>';
echo 'Cpf:' .$cpf . '<br \>';
echo 'Telefone'.$tel;




$msg = 'Nome: '.$nome.' Usuario: '.$cnpj.' Email: '.$email.' CPF: '.$cpf.' Telefone: '.$tel;
$destinatario = 'aryssonmenezes@gmail.com';
$remetente= 'aryjr41@gmail.com';
$assunto = 'Pedido de cadstro';
mail($remetente, $assunto, $msg ,'from:aryssonmenezes@gmail.com');


	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "charity";
	$conexao = mysqli_connect($server, $user,$pass, $db);
	mysqli_set_charset($conexao,"utf8");
	if (!$conexao) {

		# code..
		die("Falha na conexao".mysqli_connect_error());
	}else
	{echo "conectado";}



$query = "INSERT INTO doador (nome,usuario,cpf,email,senha,telefone,foto,tipo_usuario) values ('$nome','$usuario','$cpf','$email','$senha','$tel','sem','doador');";

if ( mysqli_query($conexao,$query)){
	echo "inserido com suscesso";
 
}else {

	die( "Falha ao inserir".mysqli_connect_error());
}

mysqli_close($conexao);

?>
<button  onclick="window.location.href='AnuncioDoador.html'">confirmar</button>


 </body>
 </html>