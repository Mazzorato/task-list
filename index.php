<?php
require_once "bdd-crud.php";
// TODO Redirection vers la page de connexion si l'utilisateur n'est pas connecté
session_start();
if(isset($_SESSION["user_id"]) == false) {
    header("Location: login.php");
    exit();
}

// TODO Afficher la liste des tâches de l'utilisateur connecté


$tasks = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir les taches</title>
</head>
<body>
    <header>
        <a href="login.php">Se connecter</a>
        <a href="logout.php">Déconnexion</a>
        
    </header>
    <h1>Liste des tâches</h1>
    <a href="add-task.php"> Ajouter une tâche </a>
        <!-- TODO Afficher la liste des tâches de l'utilisateur connecté -->
    <?php foreach($task as $tasks):?>
        <div class="task">
    <p class="task_title"><?= $task["title"] ?> </p>
    </div>
    <?php endforeach; ?>

    
</body>
</html>