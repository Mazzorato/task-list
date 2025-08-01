<?php
require_once "bdd-crud.php";

//Essaie de s'inscrire
$isSuccess = false;

//name,email, password
if ( 
    isset($_POST["email"]) && $_POST ["email"]!= "" &&
    isset($_POST["password"]) && $_POST["password"] != "" 
) {   
    $userID = create_user($_POST["email"],$_POST["password"]);
    //var_dump(($userID))

   if ($userID !== null) {
    $isSuccess = true;
   }
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
     <h1>Créer un compte</h1>
    <form action="" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <button>S'inscrire</button>
    </form>
    <a href="login.php">Se connecter</a>
    <?php if($isSuccess):?>
        <p>Création du compte réussi.</p>
    <?php endif;?>
</body>
</html>