<?php

require_once 'vendor/autoload.php';

$dbConnection = \KoalaCars\DbConnector::getDb();

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
        <button class="make-btn register"><a href="index.php" role="button">Back to homepage</a></button>
    </nav>
</header>

<div class="add_car">
    <h1>Add A Car</h1>
    <form action="addCarToDB.php" method="post">
    <label for="make">Make:</label>
    <input type="text" id="make" name="make" required>
    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required>
    <label for="year">Year:</label>
    <input type="number" id="year" name="year" min="1000" max="2500">
    <label for="color">Color:</label>
    <input type="text" id="color" name="color">
    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required>
    <label for="image">Image:</label>
    <select id="image"" name="image">
        <option value="image1.png">Truck</option>
        <option value="image2.png">Convertible</option>
        <option value="image3.png">Sporty Macorty</option>
        <option value="image4.png">Hatchback</option>
        <option value="image5.png">Smarty Pants</option>
        <option value="image6.png">Estate</option>
        <option value="image7.png">SUV</option>
        <option value="image8.png">Mike's Car</option>
    </select>
    <button class="submit_button">Submit</button>
    </form>
    <div>
        <p class="errorMessage"><?php
        if (isset($_GET['error'])) {
            \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError($_GET['error']);
        }
        ?></p>
    </div>

</div>
<main>
</main>
</body>
