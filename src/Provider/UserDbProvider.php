<?php 

namespace App\Provider;

require_once  __DIR__."/../db/function.php";

class UserDbProvider implements IProvider
{
    public function findAll(): array
    {
        try{
            $pdo = getPdoInstance();
        } catch (\PDOException $e){
            throw $e;
        }
        $res = $pdo->query("SELECT * FROM users");
        return $res->fetchAll(\PDO::FETCH_ASSOC);
    }
}