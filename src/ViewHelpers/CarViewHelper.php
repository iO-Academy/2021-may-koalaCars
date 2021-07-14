<?php
namespace KoalaCars\ViewHelpers;
use KoalaCars\Entities\CarEntity;

class CarViewHelper
{
    private static function displayCar(CarEntity $car): string
    {
        $output = '';
        $output .= '<div class="carCards-container"><img src="https://dev.io-academy.uk/resources/cars/' . $car->getImage() . '">';
        $output .= '<div class="brand-model-container"><h1 class="make">' . $car->getMake() . '</h1>';
        $output .= '<h1 class="model">' . $car->getModel() . '</h1></div>';
        $output .= '<div class="link"><a href="#">More Details</a></div></div>';

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

    public static function displayCarDetails(object $car): string
    {
        $details = '';
        if (is_object($car)) {
            $details .= '<div class="details"><h1>Make: </h1>' . $car->getMake() .
                '<h1>Model: </h1>' . $car->getModel() .
                '<h1>Year: </h1>' . $car->getYear() .
                '<h1>Color: </h1>' . $car->getColor() .
                '<h1>Location: </h1>' . $car->getLocation() . '</div>';
            $details .= '<div class="car"><img src="https://dev.io-academy.uk/resources/cars/' . $car->getImage(). '"</div>';

        } else {
            return 'invalid information';
        }
        return $details;
    }
}