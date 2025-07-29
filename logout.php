<?php
// TODO Destruction de la session pour déconnecter l'utilisateur et redirection vers la page de connexion
$_SESSION_start();
$_SESSION_destroy();

if(isset($_SESSION["user_id"]) == false) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
</head>
<body>
    
</body>
</html>