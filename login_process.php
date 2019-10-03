<?php
require_once "src/Db/function.php";

try {
    $pdo = getPdoInstance();
} catch (PDOException $e) {
    echo "Erreur lors de la connexion a la base de donnees";
    die;
}

$email = $_POST["email"];
$password = $_POST["mdp"];

//$res = $pdo->query("SELECT * FROM users WHERE email='$email'AND pass='$password'");

$stmt = $pdo->prepare(
    "SELECT * FROM users WHERE email=:email AND pass=:mdp"
);
$res = $stmt->execute([
    'email' => $email,
    'mdp' => $password
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "L'authetification a échoué";
    die;
} else {
    echo "L'authentification a réussi";
}
