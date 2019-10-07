<?php 

namespace App\Provider;

interface IProvider
{
    public function findAll(): array;
}