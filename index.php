<?php
require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();
$cars = \KoalaCars\Hydrators\CarHydrator::getCars($dbConnection);
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
</div>
<div class="container">
    <?php
    echo \KoalaCars\ViewHelpers\CarViewHelper::displayAllCars($cars);
    ?>
</div>
</body>
</html>