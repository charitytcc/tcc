<!DOCTYPE html>
<html>
<head>
	<title>Pagina Inicial</title>
</head>
<body>

<?php
$nome = $_POST["nome-ong"];
$cnpj  = $_POST['cnpj'];
$senha = $_POST['senha-ONG'];
$confirm = $_POST['confirm-senhaONG'];
$email = $_POST['email-ONG'];
$cpf = $_POST['CPF-ONG'];
$tel = $_POST['telefone-ONG'];
$cat = $_POST['categoria'];

echo 'Seus seguintes dados foram cadastrados' . '<br \>';
echo'Representante: ' .$nome . '<br \>';
echo 'CNPJ:' .$cnpj . '<br \>';
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
	}
	$query = "INSERT INTO ong (nome,cnpj,email,senha,telefone,foto,tipo_usuario) values ('$nome','$cnpj','$email','$senha','$tel','sem','ong');";
	if ( mysqli_query($conexao,$query)){
	echo "inserido com suscesso";
 
}else {

	die( "Falha ao inserir".mysqli_connect_error());
}

mysqli_close($conexao);


?>
<button  onclick="window.location.href='AnuncioONG.html'">confirmar</button>

 </body>
 </html>