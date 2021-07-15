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
            $output .= '<button class="make-btn ' . $class . '"><a href="index.php?make=' . $make . '">' . $make . '</a></button>';
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
        $output .= '<button class="all-cars-btn ' . $class . '"><a href="index.php">All cars</a></button>';

        return $output;
    }

    public static function displayDropDownListYear(array $years): string
    {
        $output = '<form action="index.php?year="><label class="all-cars-btn ">Filter By Year:
                        <select name="year">
                          <option value="#">Select Year</option>';
        foreach ($years as $year) {
            $output .= '<option value="' . $year . '">'. $year .'</option>';
        }
        $output .= '</select></label><input type="submit" value="submit"></form>';
        return $output;
    }

}