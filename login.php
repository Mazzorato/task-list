<?php
require_once "bdd-crud.php";
// TODO Connection Utilisateur via la session
session_start();
//Test connexion
if (isset($_SESSION["user_id"]) == true) {
    header("Location: index.php");
    
     
}


    // Request
    $request = $database->prepare("SELECT * FROM tasklist WHERE email=?");
    $request->execute([
        $_SESSION["user_id"]
    ]);
    

     // Reponse
    $user = $request->fetch(PDO::FETCH_ASSOC);
    //var_dump($user);
    if($_POST["password"] == $user["password"]) {
        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-list</title>
</head>
<body>
    <h1>Connexion</h1>
    <!-- TODO Formulaire de connexion -->
     <form action= ""  method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <button>Se connecter</button>
    </form>

</body>
</html>