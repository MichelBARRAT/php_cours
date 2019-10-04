<?php
require_once __DIR__ . "../../Db/function.php";


try {
    $pdo = getPdoInstance();
} catch (PDOException $e) {
    echo "Erreur lors de la connexion a la base de donnees";
    die;
}

$email = $_POST['email'];
$message = $_POST['message'];
contact($email, $message);

foreach ($_POST as $formField => $val) { ?>
    <p>
        <?php echo $formField; ?> : <?php echo $val; ?>
    </p>
<?php } ?>