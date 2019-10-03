<?php

require_once __DIR__ . "/../../config/db.php";

/**
 * Creats and returns a new PDO instance based on the given parameters.
 * 
 * @param string $dsn
 * @param string $user
 * @param string $pass
 * @return PDO
 * @throws PDOException throw if connection failed
 */
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
