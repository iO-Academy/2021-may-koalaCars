<?php

$request = curl_init("https://dev.io-academy.uk/resources/cars/data.json");
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($request);
$data = json_decode($response);

$db = new \PDO('mysql:host=db; dbname=koalaCars', 'root', 'password');
$query = $db->prepare("DROP TABLE cars");
$query->execute();
$query = $db->prepare("CREATE TABLE cars");
$query->execute();

foreach ($data as $car) {

    $id = $car['id'];
    $make = $car['make'];
    $model = $car['model'];
    $year = $car['year'];
    $color = $car['color'];
    $location = $car['location'];
    $image = $car['image'];

    $query = $db->prepare("INSERT INTO `cars` (`id`, `make`, `model`, `year`, `color`, `location`, `image`) 
            VALUES (:id, :make, :model, :year, :color, :location. :image)");
    $query->execute([':id' => $id,
                    ':make' => $make,
                    ':model' => $model,
                    ':year' => $year,
                    ':color' => $color,
                    ':location' => $location,
                    ':image' => $image
    ]);
}