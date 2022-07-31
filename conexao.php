<?php
define('HOST', '45.151.120.13');
define('USUARIO', 'u983367950_registrospag');
define('SENHA', 'Ns@P9w49');
define('DB', 'u983367950_registrospag');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);

if (!$conexao) {
    die("FALHA: " . mysqli_connect_error());
}