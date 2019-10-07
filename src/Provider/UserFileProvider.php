<?php 

namespace App\Provider;

class UserFileProvider implements IProvider
{
    public function findAll(): array
    {
        require_once __DIR__."/../../data/users.php";
        return $users;
    }
}
