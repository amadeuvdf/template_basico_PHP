<?php

include ('conect.php');

$usuario = 'admin';
$senha = 'admin';

$query = "INSERT INTO usuarios (username, password) VALUES('".$usuario."','".md5($senha)."');";


if ($conexao->query($query) === TRUE) {
    echo "Novo usuario criado com sucesso!";
} else {
    echo "Error: " . $query . "<br>" . $conexao->error;
}


?>