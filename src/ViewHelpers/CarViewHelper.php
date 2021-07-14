<?php
namespace KoalaCars\ViewHelpers;

use KoalaCars\Abstracts\VehicleAbstract;
use KoalaCars\Entities\CarEntity;

class CarViewHelper
{
    private static function displayCar(CarEntity $car): string
    {
        $output = '';
        $output .= '<div class="carCards-container"><img src="https://dev.io-academy.uk/resources/cars/' . $car->getImage() . '">' .
            '<div class="brand-model-container"><h1 class="make">' . $car->getMake() . '</h1>' .
            '<h1 class="model">' . $car->getModel() . '</h1></div>' .
            '<div class="link"><a href="details.php?id='.$car->getId().'">More Details</a></div></div>';

        return $output;
    }

    public static function displayAllCars(array $cars): string
    {
        $output = '';
        foreach ($cars as $car) {
            $output .= self::displayCar($car);
        }
        return $output;
    }

    public static function displayCarDetails(VehicleAbstract $car): string
    {
        $details = '';
        $details .= '<div class="carCards-container"><div class="brand-model-container">' .
            '<h1 class="make"><span>Make:</span>' . $car->getMake() . '</h1>'.
            '<h1 class="model"><span>Model:</span>'.$car->getModel() .'</h1>'.
            '<h1 class="year"><span>Year:</span>'.$car->getYear() .'</h1>'.
            '<h1 class="color"><span>Color:</span>'.$car->getColor() .'</h1>'.
            '<h1 class="location"><span>Location:</span>'.$car->getLocation() .'</h1></div>'.
            '<img class="car-img" src="https://dev.io-academy.uk/resources/cars/' . $car->getImage(). '"></div>';

        return $details;
    }
}