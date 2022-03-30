<?php 
session_start();
include ('conect.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao ,$_POST['senha']);

$query = "SELECT user_id, username FROM usuarios WHERE username = '{$usuario}' and password = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result); //return 1 para linha autenticação
if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ../view/painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');
    exit();
}