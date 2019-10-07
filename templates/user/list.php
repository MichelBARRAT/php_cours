<?php
require_once __DIR__ . "/../../vendor/autoload.php";

use App\View;
?>

<div class="container fluid">
    <div class="row">
        <div class="w-100 d-flex flex-row justify-content-around align-items-center">
            <?php foreach ($users as $profile) {
                echo View::render(
                    "templates/user/card.php",
                    ["profile" => $profile]
                );
            } ?>
        </div>