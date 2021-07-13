<?php
require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();
$cars = \KoalaCars\Hydrators\CarHydrator::getCars($dbConnection);
$car =  \KoalaCars\Hydrators\CarHydrator::getCar($dbConnection,4);

echo '<pre>';
print_r($car);
echo '</pre>';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <?php
    echo \KoalaCars\ViewHelpers\CarViewHelper::displayAllCars($cars);
    ?>
</div>
</body>
</html>