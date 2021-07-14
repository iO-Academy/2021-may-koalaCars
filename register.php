<?php

require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();

$cars = \KoalaCars\Hydrators\CarHydrator::getCars($dbConnection);

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
<form>
    <label for="fname">Make:</label><br>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Model:</label><br><br>
    <input type="text" id="lname" name="lname">
    <label for="fname">Year:</label><br><br>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Color:</label><br><br>
    <input type="text" id="lname" name="lname">
    <label for="lname">Location:</label><br><br>
    <input type="text" id="lname" name="lname">
    <label for="lname">Image:</label><br><br>
    <input type="text" id="lname" name="lname">
</form>
<main>
</main>
</body>