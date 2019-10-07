<?php 

namespace App\Service;

use App\Provider\IProvider;


class UserService
{
    private $userProvider;

    public function __construct(IProvider $IProvider)
    {
            $this->userProvider = $IProvider;
    }
    public function findAll(): array
    {

        return $this->userProvider->findAll();
    }
}