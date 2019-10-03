<?php
require_once "config/db.php";
require_once "src/Db/function.php";

try {
    $pdo = getPdoInstance(DSN, USER, PASS);
} catch (PDOException $e) {
    echo "Erreur lors de la connexion a la base de données";
    die;
}

$res = $pdo->query('SELECT * FROM users');
while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}
