<?php


namespace KoalaCars\ViewHelpers;


class CarViewHelper
{
    public static function displayAllCars(array $cars): string
    {
        $output = '';
        foreach ($cars as $car) {
            if (is_object($car)) {
                $output .= '<div class="car_image"><img src="' . $car->image . '"</div>';
                $output .= '<div><h1>Make: </h1>' . $car->make . '</div>';
                $output .= '<div><h1>Model: </h1>' . $car->model . '</div>';
                $output .= '<div><h1>See more</h1></div>';
            } else {
                return 'invalid information';
            }
        }
        return $output;
    }
}
