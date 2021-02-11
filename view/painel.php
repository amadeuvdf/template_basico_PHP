<?php
session_start();

include('../controller/verifica_login.php');

print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
    <!-- bulma.io  framework css -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="./view/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="./view/css/login.css">
</head>

<body>
   <h2><a href="../controller/logout.php">Sair</a></h2>
</body>

</html>
