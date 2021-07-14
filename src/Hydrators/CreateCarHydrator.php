<?php


namespace KoalaCars\Hydrators;


class CreateCarHydrator
{
    public static function createCar(\PDO $db, array $carDetails)
    {
        $query = $db->prepare('INSERT INTO `cars` (`make`, `model`, `year`, `color`, `location`, `image`)
                VALUES (:make, :model, :year, :color, :location, :image)');
        $query->execute([':make' => $carDetails['make'],
        ':model' => $carDetails['model'],
        ':year' => $carDetails['year'],
        ':color' => $carDetails['color'],
        ':location' => $carDetails['location'],
        ':image' => $carDetails['image']]);
        return $query;
    }
}