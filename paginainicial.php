
<html>
<head>
	<title>Pagina Inicial</title>
</head>
<body>

<?php
$nome = $_POST['nome_completo'];
$usuario  = $_POST['nome_usuario'];
$senha = $_POST['senha'];
$confirm = $_POST['confirm_senha'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$tel = $_POST['telefone'];


echo 'Seus seguintes dados foram cadastrados . <br \>';
echo'Nome completo:' .$nome . '<br \>';
echo 'Nome de usuario:' .$usuario . '<br \>';
echo 'Email:' .$email . '<br \>';
echo 'Cpf:' .$cpf . '<br \>';
echo 'Telefone'.$tel;
?>
 </body>
 </html>