<?php
require_once __DIR__ . "/../../config/db.php";


function getPdoInstance(): PDO
{
    $dsn = DSN;
    $user = USER;
    $pass = PASS;
    try {
        $pdo = new PDO($dsn, $user, $pass);
    } catch (PDOException $e) {
        throw $e;
    }
    return $pdo;
}

function login($login, $password)
{
    global $pdo;
    $query = "SELECT * FROM users WHERE email=:login AND pass=:password";
    $statement = $pdo->prepare($query);
    $statement->execute(
        array(
            'login' => $login,
            'password' => $password
        )
    );
    return $statement->rowCount() >= 1 ? true : false;
}

function getUsers()
{
    global $pdo;
    if ($pdo !== null) {
        try {
            return $pdo->query('SELECT * from users');
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

function contact($email, $message)
{
    global $pdo;
    $query = "INSERT INTO `contact`(`email`, `message`) VALUES (:email,:message)";
    $statement = $pdo->prepare($query);
    $statement->execute(
        array(
            'email' => $email,
            'message' => $message
        )
    );
}
