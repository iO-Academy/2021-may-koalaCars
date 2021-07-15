<?php

require_once 'vendor/autoload.php';

$validation = \KoalaCars\Validators\CreateCarValidator::validateCar($_POST);

if ($validation === true) {

    $dbConnection = \KoalaCars\DbConnector::getDb();
    $query = \KoalaCars\Hydrators\CreateCarHydrator::createCar($dbConnection, $_POST);

    if ($query == true) {
        header('Location: index.php');
    } else {
        header('Location: register.php?error=6');
    }
} else {
    header('Location: register.php?error=' . $validation);
}



