<?php
require_once 'vendor/autoload.php';
$dbConnection = \KoalaCars\DbConnector::getDb();
$cars = \KoalaCars\Hydrators\CarHydrator::getCars($dbConnection);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<!--    <link rel="stylesheet" href="css/normalize.css" type="text/css">-->
<!--    <link rel="stylesheet" href="css/style.css" type="text/css">-->
</head>
<body>
<div class="container">
    <?php
    echo \KoalaCars\ViewHelpers\CarViewHelper::displayAllCars($cars);
    ?>
</div>
</body>
</html>