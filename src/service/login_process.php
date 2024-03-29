<?php
require_once __DIR__ . "../../Db/function.php";
require_once __DIR__ . "../../../vendor/autoload.php";

use App\Utils;
use App\Session;

try {
    $pdo = getPdoInstance();
} catch (PDOException $e) {
    echo "Erreur lors de la connexion a la base de donnees";
    die;
}

$session = Session::getInstance();
$login = $_POST["email"];
$password = $_POST["mdp"];

$session->isLogged = login($login, $password);
echo $session->isLogged ? Utils::redirect('/index.php') : 'error';