<?php

$request = curl_init("https://dev.io-academy.uk/resources/cars/data.json");
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($request);
$data = json_decode($response);

$db = new PDO('mysql:host=127.0.0.1;dbname=koalaCars', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $db->prepare("DROP TABLE IF EXISTS cars");
$query->execute();
$query = $db->prepare(
    "CREATE TABLE `cars` (
      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
      `make` varchar(255) NOT NULL DEFAULT '',
      `model` varchar(255) NOT NULL DEFAULT '',
      `year` int(4) NULL,
      `color` varchar(10) NULL DEFAULT '',
      `location` varchar(255) NOT NULL DEFAULT '',
      `image` varchar(10) NOT NULL DEFAULT '',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;"
);
$query->execute();

foreach ($data as $car) {

    $query = $db->prepare("INSERT INTO `cars` (`id`, `make`, `model`, `year`, `color`, `location`, `image`) 
            VALUES (:id, :make, :model, :year, :color, :location, :image)");
    $query->execute([':id' => $car->id,
        ':make' => $car->make,
        ':model' => $car->model,
        ':year' => $car->year,
        ':color' => $car->color,
        ':location' => $car->location,
        ':image' => $car->image
    ]);
}