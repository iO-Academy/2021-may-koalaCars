<?php

require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();
$car = \KoalaCars\Hydrators\CarHydrator::getCar($dbConnection);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <?php
    echo \KoalaCars\ViewHelpers\CarViewHelper::displayCarDetails($car);
    ?>
</div>
</body>
</html>