<?php
require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();
$cars = \KoalaCars\Hydrators\CarHydrator::getCars($dbConnection);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <?php
    echo \KoalaCars\ViewHelpers\CarViewHelper::displayCars($cars);
    ?>
</div>
</body>
</html>