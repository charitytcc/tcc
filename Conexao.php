<?php
// conectar ao BD

function conectar(){
	$server = "localhost";
	$user = "root";
	$pass = "etecia";
	$db = "charity";
	$conexao = mysqli_connect($server, $user,$pass, $db);
	return $conexao;
}