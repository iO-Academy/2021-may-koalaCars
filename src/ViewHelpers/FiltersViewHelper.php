<?php

namespace KoalaCars\ViewHelpers;

class FiltersViewHelper
{
    public static function displayMakes(array $makes): string
    {
        $output = '<div class="make-container">';

        foreach ($makes as $make) {
            if (is_object($make)) {
                $output .= '<button class="make-btn"><a href="index.php?make=' . $make->getMake() . '">' . $make->getMake() . '</a></button>';
            } else {
                return 'invalid information';
            }
        }
         $output.= '</div> ';
        return $output;
    }
}