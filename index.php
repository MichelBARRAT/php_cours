<?php require_once "data/users.php";
require_once "templates/header.php";
require_once "templates/nav.php";
require_once "vendor/autoload.php";

use App\Session;
$session = Session::getInstance(); ?>


<div class="container fluid">
  <div class="row">
    <div class="w-100 d-flex flex-row justify-content-around align-items-center">
      <?php foreach ($users as $profile) {
        require "templates/user/card.php";
      } ?>
    </div>
    <li class="badge badge-<?php echo isset($session->isLogged) ? 'success' : 'danger' ?>">
      <?php echo isset($session->isLogged) && $session->isLogged ? "Logged" : "Not Logged"; ?>
    </li>
  </div>
</div>
<?php require_once "templates/footer.php"; ?>