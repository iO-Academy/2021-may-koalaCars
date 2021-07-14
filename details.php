<?php
require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();
$car = \KoalaCars\Hydrators\CarHydrator::getCar($dbConnection, $_GET['id']);

if (empty($car)) {
    header('Location: index.php');
}
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
    <div class="link-details">
        <a class="details-link" href="index.php">Back to list</a>
    </div>
    <div class="main-container">
            <?php
            echo \KoalaCars\ViewHelpers\CarViewHelper::displayCarDetails($car);
            ?>
        </div>
    </body>
</html>