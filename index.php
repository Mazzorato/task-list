<?php
require_once "bdd-crud.php";
// TODO Redirection vers la page de connexion si l'utilisateur n'est pas connecté
session_start();
if(isset($_SESSION["user_id"]) == false) {
    header("Location: login.php");
    exit();
}
$tasks =  get_all_task($_SESSION["user_id"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Voir les taches</title>
</head>
<body>
    <header>
        <a href="logout.php">Déconnexion</a>
        <a href="add-task.php">Ajouter une tâche</a>
        
    </header>
    <h1>Liste des tâches</h1>


    
        <!-- TODO Afficher la liste des tâches de l'utilisateur connecté -->
    <?php foreach($tasks as $task):?>
        <div class="task">
    <p class="task_title"><?= $task["title"]?> </p>
    <a href="delete-task.php?id=<?= $task["id"]?>">Supprimer</a>

    </div>
    <?php endforeach; ?>

    
</body>
</html>