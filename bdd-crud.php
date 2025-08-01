<?php
/**
 * Ce fichier contient les fonctions de CRUD pour les utilisateurs et les tâches.
 * Il est utilisé pour interagir avec la base de données.
 * Presque toutes les pages de l'application utilisent ce fichier.
 * 
 * A vous de remplir ces fonction pour qu'elles fonctionnent correctement.
 * 
 * Vous pourrez ainsi facilment les utiliser dans les autres fichiers et construire votre site sans plus vous soucis du SQL.
 */


function connect_database() : PDO{
    $database = new PDO("mysql:host=127.0.0.1;dbname=app-database","root","root");
    return $database;
}
// CRUD User
// Create (signin)
function create_user(string $email,string $password) : int | null {
    $database = connect_database();
    // TODO
 $password_hash = password_hash($password, PASSWORD_DEFAULT);
 $request = $database->prepare("INSERT INTO users (email,password) VALUES (?,?)");
 $request->execute([
        $email,
        $password_hash
    ]);

    return $database->lastInsertId();
        
}
// Read (login)
function get_user(int $id) : array | null {
    $database = connect_database();  //Connexion à la base de données
    $request = $database->prepare("SELECT * FROM users WHERE id = ?");
    $request->execute([$id]);
    return $request->fetch(PDO::FETCH_ASSOC)?: null;
    // TODO 
}

    


// CRUD Task
// Create
function add_task(string $title, int $user_id) : int | null {
    $database = connect_database();
    $request = $database->prepare("INSERT INTO tasks (title, user_id) VALUES (?,?)");
    $request->execute([$title, $user_id]);
    return $database->lastInsertId();
}

    

//Read
function get_task(int $id) : array | null {
    $database = connect_database();
    $request = $database->prepare("SELECT * FROM tasks WHERE id = ?");
    $request->execute([$id]);
    // TODO
    return $request->fetch(PDO::FETCH_ASSOC) ?: null;
}

function get_all_task(int $user_id) : array | null {
    $database = connect_database();
    $request = $database->prepare("SELECT * FROM tasks WHERE user_id = ?");
    $request->execute([$user_id]);
    // TODO
    return $request->fetchALL(PDO::FETCH_ASSOC);
}

// Delete (BONUS)
function delete_task(int $id) : bool{
    $database = connect_database();
    $request = $database->prepare("DELETE FROM tasks WHERE id = ?");
    // TODO
    return $request->execute([$id]);
}