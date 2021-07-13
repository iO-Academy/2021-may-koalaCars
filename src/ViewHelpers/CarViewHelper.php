<?php

namespace KoalaCars\ViewHelpers;

class CarViewHelper
{
    public static function displayAllCars(array $cars): string
    {
        $output = '';
        foreach ($cars as $car) {
            if (is_object($car)) {
                $output .= '<div class="car_image"><img src="https://dev.io-academy.uk/resources/cars/' . $car->getImage() . '"</div>';
                $output .= '<div><h1>Make: </h1>' . $car->getMake() . '</div>';
                $output .= '<div><h1>Model: </h1>' . $car->getModel() . '</div>';
                $output .= '<div><h1>See more</h1></div>';
            } else {
                return 'invalid information';
            }
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