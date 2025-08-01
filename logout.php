<?php
// TODO Destruction de la session pour déconnecter l'utilisateur et redirection vers la page de connexion
$_SESSION_start();
$_SESSION_destroy();

header("Location: login.php");
exit();
?>
