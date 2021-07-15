<?php

namespace KoalaCars\ViewHelpers;

class FiltersViewHelper
{
    public static function displayMakes(array $makes, string $selectedMake): string
    {
        $output = '<div class="make-container">';
        foreach ($makes as $make) {
            $class = '';
            if ($selectedMake == $make) {
                $class = ' active';
            }
            $output .= '<button class="make-btn '.$class.'" type="submit" name="make" value="'.$make.'">' . $make . '</button>';
        }
        $output .= '</div> ' . self::displayAllCarsButton($selectedMake);
        return $output;
    }

    private static function displayAllCarsButton(string $selectedMake): string
    {
        $class = '';
        $output = '';
        if (empty($selectedMake)) {
            $class = ' active';
        }
        $output .= '<button class="all-cars-btn ' . $class . '" type="submit">All cars</button>';

        return $output;
    }

    public static function displayDropDownListYear(array $years): string
    {
        $output = '<label class="filter-btn-title">Filter By Year:
                        <select name="year" class="filter-button">
                          <option value="">Select Year</option>';
        foreach ($years as $year) {
            $output .= '<option value="' . $year . '">'. $year .'</option>';
        }
        $output .= '</select></label>';
        return $output;
    }

}