<?php
require_once "bdd-crud.php";
//email, password
var_dump($_POST);
if(
    isset($_POST["email"]) &&
    isset($_POST["password"])
) {
    //Inscription
    $database = new PDO("mysql:host=127.0.0.1;dbname=app-database","root","root");
    var_dump($database);
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
   <!-- TODO Formulaire pour s'inscrire (créer un utilisateur) -->
</body>

</html>