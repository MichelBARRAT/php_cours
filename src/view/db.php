<?php
require_once __DIR__ . "/../../../config/db.php";
require_once __DIR__ . "/../../Db/function.php";

try {
    $pdo = getPdoInstance(DSN, USER, PASS);
} catch (PDOException $e) {
    echo "Erreur lors de la connexion a la base de données";
    die;
}

$res = getUsers();
while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}
