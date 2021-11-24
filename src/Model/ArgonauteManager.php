<?php

namespace App\Model;

use App\Model\AbstractManager;

class ArgonauteManager extends AbstractManager
{

    /*
         add new Argonaute in databases
    */
    public function addArgonaute($name): void
    {
        $name = strtolower($name);
        $name = ucwords($name);
        $statement = $this->pdo->prepare("INSERT INTO " . static::TABLE . " (`name`) VALUES (:name);");
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->execute();
    }

    /*
        update name of Argonaute in databases
    */

    public function updateArgonaute(int $id, string $name): void
    {
        $name = strtolower($name);
        $name = ucwords($name);
        $statement = $this->pdo->prepare("UPDATE " . static::TABLE . " SET name = :name WHERE id = :id ;");
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

    /*
        delete Argonaute from databases
    */
    public function deleteArgonaute(int $id): void
    {
        $statement = $this->pdo->prepare("DELETE FROM " . static::TABLE . " WHERE id = :id ;");
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }
}
