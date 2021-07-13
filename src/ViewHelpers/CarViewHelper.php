<?php

namespace KoalaCars\ViewHelpers;

class CarViewHelper
{
    public static function displayAllCars(array $cars): string
    {
        $output = '';
        foreach ($cars as $car) {
            if (is_object($car)) {
                $output .= '<div class="car_image"><img src="' . $car->getImage() . '"</div>';
                $output .= '<div><h1>Make: </h1>' . $car->getMake() . '</div>';
                $output .= '<div><h1>Model: </h1>' . $car->getModel() . '</div>';
                $output .= '<div><h1>See more</h1></div>';
            } else {
                return 'invalid information';
            }
        }
        return $output;
    }
}