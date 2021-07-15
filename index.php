<?php
require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();

if (empty($_GET['make'])) {
    $cars = \KoalaCars\Hydrators\CarHydrator::getCars($dbConnection);
} else {
    $cars = \KoalaCars\Hydrators\CarHydrator::getCarsByMake($dbConnection, $_GET['make']);
}

if (empty($_GET['year'])) {
    $cars = \KoalaCars\Hydrators\CarHydrator::getYears($dbConnection);
} else {
    $cars = \KoalaCars\Hydrators\CarHydrator::getCarsByYear($dbConnection, $_GET['year']);
}
$makes =  \KoalaCars\Hydrators\CarHydrator::getMakes($dbConnection);

$years= \KoalaCars\Hydrators\CarHydrator::getYears($dbConnection);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/normalise.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>KoalasCars</title>
</head>
<body>
<header>
    <nav id="navbar">
        <img class="logo" src="images/Logo.png" alt="KoalasCars">
        <h1 class="title-logo">Koalas Cars</h1>
    </nav>
</header>
<div>
    <?php
    if (empty($_GET['make'])) {
        echo \KoalaCars\ViewHelpers\FiltersViewHelper::displayMakes($makes, '');
    } else {
        echo \KoalaCars\ViewHelpers\FiltersViewHelper::displayMakes($makes, $_GET['make']);
    }
    echo \KoalaCars\ViewHelpers\FiltersViewHelper::displayDropDownListYear($years);
    ?>
</div>
<main>
    <?php
    echo \KoalaCars\ViewHelpers\CarViewHelper::displayCars($cars);
    ?>
</main>
<div class="home-scroller">
    <a href="#navbar">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
</body>
</html>