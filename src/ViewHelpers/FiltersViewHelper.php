<?php

namespace KoalaCars\ViewHelpers;

class FiltersViewHelper
{
    public static function displayMakes(array $makes, string $selectedMake): string
    {
        $output = '<div class="make-container">';

        foreach ($makes as $make) {
            if (is_object($make)) {
                $class = '';
                if ($selectedMake == $make->getMake()) {
                    $class = ' active';
                }
                $output .= '<button class="make-btn' . $class . '"><a href="index.php?make=' . $make->getMake() . '">' . $make->getMake() . '</a></button>';
            } else {
                return 'invalid information';
            }
        }
        $output .= '</div> ';
        $class = '';
        if (empty($selectedMake)) {
            $class = ' active';
        }
        $output .= '<button class="all-cars-btn ' . $class . '"><a href="index.php">All cars</a></button>';
        return $output;
    }
}