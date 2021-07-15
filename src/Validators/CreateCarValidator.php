<?php

namespace KoalaCars\Validators;

class CreateCarValidator
{
    public static function validateCar(array $carDetails)
    {
        try {
            self::validateCarMake($carDetails['make']);
            self::validateCarModel($carDetails['model']);
            self::validateCarYear($carDetails['year']);
            self::validateCarColor($carDetails['color']);
            self::validateCarLocation($carDetails['location']);
            return true;
        } catch(\Exception $e) {
            return $e->getCode();
        }
    }

    private static function validateCarMake(string $make): bool
    {
        $make = trim($make);
        $regex = '/[A-Za-z][a-z]+/';
        $result = preg_match($regex, $make);
        if (is_string($make) && $result == 1) {
                 return true;
        } else {
            throw new \Exception('Please enter a valid make!', 1);
        }
    }

    private static function validateCarModel(string $model): bool
    {
        $model = trim($model);
        if (is_string($model)) {
            return true;
        } else {
            throw new \Exception('Please enter a valid model!', 2);
        }
    }

    private static function validateCarYear(string $year): bool
    {
        $year = trim($year);
        $year = intval($year);
        if (is_int($year) && $year > 1930 && $year < 2100) {
            return true;
        } else {
            throw new \Exception('Please enter a valid year!', 3);
        }
    }

    private static function validateCarColor(string $color): bool
    {
        $color = trim($color);
        $regex = '/[A-Za-z][a-z]+/';
        $result = preg_match($regex, $color);
        if (is_string($color) && $result == 1) {
            return true;
        } else {
            throw new \Exception('Please enter a valid colour!', 4);
        }
    }

    private static function validateCarLocation(string $location): bool
    {
        $location = trim($location);
        $regex = '/[A-Za-z][a-z]+/';
        $result = preg_match($regex, $location);
        if (is_string($location) && $result == 1) {
            return true;
        } else {
            throw new \Exception('Please enter a valid location!', 5);
        }
    }
}