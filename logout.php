<?php
// TODO Destruction de la session pour déconnecter l'utilisateur et redirection vers la page de connexion
session_start();
session_unset();
session_destroy();

header("Location: login.php");
exit();
?>
