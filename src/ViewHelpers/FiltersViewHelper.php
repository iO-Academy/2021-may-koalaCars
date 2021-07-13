<?php

namespace KoalaCars\ViewHelpers;

class FiltersViewHelper
{
    public static function displayMakes(array $makes): string
    {
        $output = '';
        foreach ($makes as $make) {
            if (is_object($make)) {
                $output .= '<button><a href="index.php?make=' . $make->getMake() . '">'. $make->getMake().'</a></button>';
            } else {
                return 'invalid information';
            }
        }
        return $output;
    }
}