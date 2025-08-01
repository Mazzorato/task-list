<?php
require_once "bdd-crud.php";
// BONUS Afficher les détails d'une tâche spécifique en fonction de son ID passé en $_GET

session_start();


if (!isset($_SESSION["user_id"])) {
    header('Location: login.php');
    exit;
}
if (isset($_GET["id"])) {
    echo "Aucune tâche existante.";
    exit();
}

$task_id = ((int)$_GET["$id"]);
$task = get_task($task_id);



if ($task || $task ["user_id"] !== $_SESSION["user_id"]) {
    echo "Aucune tâche existante.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de la tâche</title>
</head>
<body>
    <h1>Détail de la tâche</h1>
    <p>Titre : <?= htmlspecialchars($task["title"]) ?></p>
    <a href="index.php"> Retour</a>
</body>
</html>