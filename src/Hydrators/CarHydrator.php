<?php


namespace KoalaCars\Hydrators;

use KoalaCars\Entities\CarEntity;

class CarHydrator
{
    public static function getCars(\PDO $db): array
    {
        $query = $db->prepare('SELECT `id`, `make`, `model`, `image` FROM `cars`;');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, CarEntity::class);
        return $query->fetchAll();
    }

    public static function getCar(\PDO $db): CarEntity
    {
        $id = $_GET['id'];
        $query = $db->prepare('SELECT `make`, `model`, `year`,`color`,`location`,`image` FROM `cars` WHERE `id` = ?');
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS, CarEntity::class);
        return $query->fetch();
    }
}