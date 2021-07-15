<?php

namespace KoalaCars\ViewHelpers;

class RegisterCarViewHelper
{
    public static function displayValidationError(int $error): string
    {
        switch ($error) {
            case 1:
                return 'Please enter a valid make!';
            case 2:
                return 'Please enter a valid model!';
            case 3:
                return 'Please enter a valid year!';
            case 4:
                return 'Please enter a valid colour!';
            case 5:
                return 'Please enter a valid location!';
            case 6:
                return 'Car couldn\'t be added. Please try again later!';
            default:
                return 'Unexpected error returned';
        }
    }
}