<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

/* $query = "select usuario from usuarios where usuario = '{$usuario}' and senha = md5('{$senha}')"; */
$query = "select usuario from usuarios where usuario = '{$usuario}' and senha = '{$senha}' and pagina = 'brasbinance'";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	
	/* NOVO REGISTRO COM O IP DO USUÁRIO */	
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		echo $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		echo $ip = $_SERVER['REMOTE_ADDR'];
	}
	$query = "INSERT INTO loginip (usuario, pagina, ip) VALUES ('{$usuario}', 'inter', '{$ip}')";

	if (mysqli_query($conexao, $query)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $query . "<br>" . mysqli_error($conexao);
	}
	/* NOVO REGISTRO COM O IP DO USUÁRIO */

	header('Location: index_en.html');
	exit();

} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}