<?php

/* echo "<pre>";
var_dump($_POST);
echo "</pre>"; */
$nombre = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$htmlentities = htmlentities($nombre);
$addslashes = addslashes($username);
$onlywords = preg_replace("/\d/", "", $username);
$onlynumbers = preg_replace("/\D/", "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de usuario</title>
</head>
<body>

    <p>Nombre:</p>
    <?= $htmlentities ?>

    <p>Username:</p>
    <?= $addslashes ?>

    <p>Username sin numeros:</p>
    <?= $onlywords ?>

    <p>Username sin letras:</p>
    <?= $onlynumbers ?>

    <p>Email:</p>
    <?= $email ?>

    <p>Edad:</p>
    <?= $age ?>

</body>
</html>