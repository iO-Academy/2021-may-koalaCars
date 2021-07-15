<?php

namespace KoalaCars\ViewHelpers;

class FiltersViewHelper
{
    public static function displayMakes(array $makes, string $selectedMake): string
    {
        $output = '<div class="make-container">';
        foreach ($makes as $make) {
            foreach ($make as $value) {
                if ($value) {
                    $class = '';
                    if ($selectedMake == $value) {
                        $class = ' active';
                    }
                    $output .= '<button class="make-btn ' . $class . '"><a href="index.php?make=' . $value . '">' . $value . '</a></button>';
                } else {
                    return 'invalid information';
                }
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