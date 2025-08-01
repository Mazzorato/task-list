<?php
require_once "bdd-crud.php";

// TODO Suppréssion d'une tâche en fonction de son ID passé en $_GET

session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$taskId = isset($_GET["id"]) ? (int)$_GET["id"] : 0;

if ($taskId > 0) {
    $task = get_task($taskId);

    if ($task) {

        delete_task($taskId);
    }
}


header("Location: index.php");
exit;
?>