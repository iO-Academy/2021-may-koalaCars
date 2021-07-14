<?php

require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();
$query = \KoalaCars\Hydrators\CreateCarHydrator::createCar($dbConnection, $_GET);

if ($query == true) {
    header('Location: index.php');
}