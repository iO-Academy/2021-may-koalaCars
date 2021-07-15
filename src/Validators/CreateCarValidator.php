<?php

namespace KoalaCars\Validators;

class CreateCarValidator
{
    private const REGEX = '/[A-Za-z][a-z]+/';
    private const MINIMUMYEAR = 1930;
    private const MAXIMUMYEAR = 2100;

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
        if (!empty($make) && preg_match(self::REGEX, $make) == 1) {
            return true;
        } else {
            throw new \Exception('Please enter a valid make!', 1);
        }
    }

    private static function validateCarModel(string $model): bool
    {
        $model = trim($model);
        if (!empty($model)) {
            return true;
        } else {
            throw new \Exception('Please enter a valid model!', 2);
        }
    }

    private static function validateCarYear(string $year): bool
    {
        $year = trim($year);
        $year = intval($year);
        if (is_int($year) && $year > self::MINIMUMYEAR && $year < self::MAXIMUMYEAR) {
            return true;
        } else {
            throw new \Exception('Please enter a valid year!', 3);
        }
    }

    private static function validateCarColor(string $color): bool
    {
        $color = trim($color);
        if (!empty($color) && preg_match(self::REGEX, $color) == 1) {
            return true;
        } else {
            throw new \Exception('Please enter a valid colour!', 4);
        }
    }

    private static function validateCarLocation(string $location): bool
    {
        $location = trim($location);
        if (!empty($location) && preg_match(self::REGEX, $location) == 1) {
            return true;
        } else {
            throw new \Exception('Please enter a valid location!', 5);
        }
    }
}