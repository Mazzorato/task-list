<?php
require_once "bdd-crud.php";

session_start();
if (isset($_SESSION["user_id"]) == false) {
    header('Location: login.php');
    exit;

    if(isset($_POST["title"]))
    $database = new PDO ("mysql:host=127.0.0.1;dbname=app-database"; "root", "root");
    $request = $database->prepare("INSERT INTO Task (title.user_id) VALUES (?,?)");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tâche</title>
</head>
<body>
    <!-- TODO Formulaire pour ajouter une tâche -->
 <form action="" method="post">
    <input type="text" name="title">
    <button>Ajouter la tâche</button>
 </form> 
 
 <?php if($isSuccess):?>
    <p>Nouvelle Tâche ajoutée !</p>
    <a href="index.php"> Voir toute les tâches ? </a>
    <?php endif;?>
</body>
</html>