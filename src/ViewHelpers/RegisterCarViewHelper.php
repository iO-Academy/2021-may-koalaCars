<?php


namespace KoalaCars\ViewHelpers;


class RegisterCarViewHelper
{
    public static function displayValidationError($error)
    {
        switch ($error) {
            case 1:
                echo 'Please enter a valid make!';
                break;
            case 2:
                echo 'Please enter a valid model!';
                break;
            case 3:
                echo 'Please enter a valid year!';
                break;
            case 4:
                echo 'Please enter a valid colour!';
                break;
            case 5:
                echo 'Please enter a valid location!';
                break;
    }
    }

}