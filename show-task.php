<?php
require_once "bdd-crud.php";
// BONUS Afficher les détails d'une tâche spécifique en fonction de son ID passé en $_GET

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Task</title>
</head>
<body>
    
</body>
</html>