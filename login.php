<?php
require_once "bdd-crud.php";
// TODO Connection Utilisateur via la session
session_start();
if( 
    isset($_POST["email"]) &&
    isset($_POST["password"])
) {
    $database = new PDO("mysql.host=127.0.0.1;dbname=app-database","root","root");
    $request = $database->prepare("SELECT * FROM User WHERE email=?");
    $request->execute([
        $_POST["email"]
    ]);
    $user = $request->fetch(PDO::FETCH_ASSOC);
    //var_dump($user);
    if($_POST["password"] == $user["password"]) {
        //Je me connecte
        $_SESSION["user_id"] = $user["id"];
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Connexion</h1>
    <!-- TODO Formulaire de connexion -->

    <a href="inscription.php">Pas de compte ? S'inscrire</a>
</body>
</html>