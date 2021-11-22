<?php

namespace App\Model;

use App\Model\AbstractManager;

class ArgonauteManager extends AbstractManager
{
    /*
        add new Argonaute in database
    */
    public function addArgonaute($name): void
    {
        $name = strtolower($name);
        $name = ucwords($name);
        $statement = $this->pdo->prepare("INSERT INTO " . static::TABLE . " (`name`) VALUES (:name);");
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->execute();
    }

}
