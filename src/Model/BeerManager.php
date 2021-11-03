<?php

namespace App\Model;

class BeerManager extends AbstractManager
{
    public const TABLE = 'beer';

    public function insert(array $beer): void
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (name, alcool, description, country) VALUES (:name, :alcool, :description, :country)");
        $statement->bindValue('name' , $beer['name'], \PDO::PARAM_STR);
        $statement->bindValue('alcool' , $beer['alcool'], \PDO::PARAM_STR);
        $statement->bindValue('description' , $beer['description'], \PDO::PARAM_STR);
        $statement->bindValue('country' , $beer['country'], \PDO::PARAM_STR);

        $statement->execute();
    }
}