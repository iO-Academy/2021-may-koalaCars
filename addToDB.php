<?php

require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();
\KoalaCars\Hydrators\AddCarToDB::addToDB($dbConnection, $_GET);