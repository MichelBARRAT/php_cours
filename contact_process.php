<?php
require_once "src/Db/function.php";

try {
    $pdo = getPdoInstance();
} catch (PDOException $e) {
    echo "Erreur lors de la connexion a la base de donnees";
    die;
}

$email = $_POST["email"];
$message = $_POST["message"];

$stmt = $pdo->prepare(
    "INSERT INTO contact(email, message) VALUES(:email, :mess)"
);
$res = $stmt->execute([
    'email' => $email,
    'mess' => $message
]);

var_dump($_POST);

foreach ($_POST as $formField => $val) { ?>
    <p>
        <?php echo $formField; ?> : <?php echo $val; ?>
    </p>
<?php } ?>