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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalise.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>KoalasCars</title>
</head>
<body>
<header>
    <nav>
        <img class="logo" src="images/Logo.png" alt="KoalasCars">
        <h1 class="title-logo">Koalas Cars</h1>
    </nav>
</header>
<div>
    <?php
    echo \KoalaCars\ViewHelpers\FiltersViewHelper::displayMakes($makes);
    ?>
    <button><a href="index.php">All cars</a></button>
</div>
<div class="main-container">
    <?php
    echo \KoalaCars\ViewHelpers\CarViewHelper::displayCars($cars);
    ?>
</div>
</body>
</html>