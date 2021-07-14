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
        $output .= '<h1 class="model">' . $car->getModel() . '</h1></div></div>';

        return $output;
    }

    public static function displayCars(array $cars): string
    {
        $output = '';
        foreach ($cars as $car) {
            try {
                $output .= self::displayCar($car);
            } catch(\TypeError $e) {
                return '';
            }
        }
        return $output;
    }
}