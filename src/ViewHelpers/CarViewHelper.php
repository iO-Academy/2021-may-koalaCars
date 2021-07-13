<?php

namespace KoalaCars\ViewHelpers;

class CarViewHelper
{
    public static function displayAllCars(array $cars): string
    {
        $output = '';
        foreach ($cars as $car) {
            if (is_object($car)) {
                $output .= '<div class="carCards-container"><img src="https://dev.io-academy.uk/resources/cars/' . $car->getImage() . '">';
                $output .= '<div class="brand-model-container"><h1 class="make">' . $car->getMake() . '</h1>';
                $output .= '<h1 class="model">' . $car->getModel() . '</h1></div>';
                $output .= '<div class="link"><a href="#">More Details</a></div></div>';
            } else {
                return 'invalid information';
            }
        }
        return $output;
    }
}
