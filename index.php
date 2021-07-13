<?php
require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();

if (empty($_GET['make'])) {
    $cars = \KoalaCars\Hydrators\CarHydrator::getCars($dbConnection);
} else {
    $cars =  \KoalaCars\Hydrators\CarHydrator::getCarsByMake($dbConnection, $_GET['make']);
}

$makes =  \KoalaCars\Hydrators\CarHydrator::getMakes($dbConnection);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php
    echo \KoalaCars\ViewHelpers\FiltersViewHelper::displayMakes($makes);
    ?>
    <button><a href="index.php">All cars</a></button>
</div>
<div class="container">
    <?php
    echo \KoalaCars\ViewHelpers\CarViewHelper::displayCars($cars);
    ?>
</div>
</body>
</html>