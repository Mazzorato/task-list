<?php
require_once "bdd-crud.php";
// TODO Connection Utilisateur via la session
session_start();

//Test connexion
if (isset($_SESSION["user_id"]) == true) {
    header("Location: index.php");
    exit();

}
$error = false;
if (
    isset($_POST["email"]) && $_POST["email"] != "" &&
    isset($_POST["password"]) && $_POST["password"] != ""
) {
    $database = connect_database();
    $request = $database->prepare("SELECT * FROM users WHERE email = ?");
    $request->execute([$_POST["email"]]);
    $user = $request->fetch(PDO::FETCH_ASSOC);

    // Authentification password
    if (
        $user && password_verify($_POST["password"], $user["password"])
    ) {
        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php");
        exit();
    } else {
        $error = true;
    }
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
    <form action="" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <button>Se connecter</button>
    </form>
    <a href="inscription.php"> S'inscrire</a>
    <?php if ($error): ?>
        <p>Email ou mot de passe incorrect.</p>
    <?php endif; ?>
</body>

</html>