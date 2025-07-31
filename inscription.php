<?php
require_once "bdd-crud.php";

//Essaie de s'inscrire
$isSuccess = false;

//name,email, password
if ( 
    isset($_POST["email"]) &&
    isset($_POST["password"]) 
) {   
    create_user($_POST["email"],$_POST["password"]);

    $request = $database->prepare("INSERT INTO tasklist (email,password) VALUES (?,?)");
    $isSuccess = $request->execute([
        $_POST["email"],
    
    ]);
   
   
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
   <!-- TODO Formulaire pour s'inscrire (créer un utilisateur) -->
    <h1>Inscription</h1>
    <a href="inscription.php"> S'inscrire</a>
    <a href="login.php">Se connecter</a>
   <form method="post">
    <input type="text" name="name" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button> S'inscrire</button>
   </form>
   <?php if ($isSuccess == true): ?>
    <p>Utilisateur ajouté</p>
    <?php var_dump($_POST["password"]); ?>
    <?php endif; ?>
</body>

</html>