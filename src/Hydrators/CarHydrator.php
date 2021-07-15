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

    public static function getCar(\PDO $db, $id): ?CarEntity
    {
        $query = $db->prepare('SELECT `make`, `model`, `year`,`color`,`location`,`image` FROM `cars` WHERE `id` = ?');
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS, CarEntity::class);
        $result = $query->fetch();
        if ($result === false) {
            return null;
        }
        return $result;
    }

    public static function getMakes(\PDO $db): array
    {
        $query = $db->prepare('SELECT `make` FROM `cars` GROUP BY `make` ORDER BY COUNT(`make`) DESC;');

        $query->execute();
        return $query->fetchAll(\PDO::FETCH_COLUMN);
    }

    public static function getCarsByMake(\PDO $db, $make)
    {
        $query = $db->prepare('SELECT `id`, `make`, `model`, `image` FROM `cars` WHERE `make` = ?');
        $query->execute([$make]);
        $query->setFetchMode(\PDO::FETCH_CLASS, CarEntity::class);
        return $query->fetchAll();
    }

    public static function getYears(\PDO $db): array
    {
        $query = $db->prepare('SELECT `year` FROM `cars` GROUP BY `year` ORDER BY `year` ASC ;');
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_COLUMN);
    }

    public static function getCarsByYear(\PDO $db, int $year): array
    {
        $query = $db->prepare('SELECT `id`, `make`, `model`,`year`, `image` FROM `cars` WHERE `year` = ?');
        $query->execute([$year]);
        $query->setFetchMode(\PDO::FETCH_CLASS, CarEntity::class);
        return $query->fetchAll();
    }
}