<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Session;

$session = Session::getInstance();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/src/view/contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <?php if (!empty($session->connected) && $session->connected) { ?>
                    <a class="nav-link" href="/src/view/logout.php">Déconnexion</a>
                <?php } else { ?>
                    <a class="nav-link" href="/src/view/login.php">Connexion</a>
                <?php } ?>
            </li>
        </ul>
    </div>
</nav>