<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'password');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);

if ($conexao->connect_error) {
    die('Connect Error: ' . $conexao->connect_error);
}