<?php
require_once "bdd-crud.php";

session_start();


if (isset($_SESSION["user_id"]) == false) {
    header('Location: login.php');
    exit;
}
$isSuccess = false;


if(isset($_POST["title"])){
    $task_id = add_task($_POST["title"], $_SESSION["user_id"]);
    if ($task_id !== null) {
        $isSuccess = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une tâche</title>
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