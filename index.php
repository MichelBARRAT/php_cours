<?php require_once "vendor/autoload.php";
require_once "templates/header.php";
require_once "templates/nav.php";

use App\Provider\UserDbProvider;
use App\Provider\UserFileProvider;
use App\Service\UserService;
use App\View; 

$userService = new UserService(new UserDbProvider());

echo View::render(
  "templates/user/list.php",
  ["users" => $userService->findAll()]
);

require_once "templates/footer.php"; ?>