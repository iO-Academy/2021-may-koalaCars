<?php


class CreateCarValidator
{
    private static function validateMake(string $make): bool
    {
        $make = trim($make);
        if (is_string($make)) {
            $regex = '/[A-Za-z]/';
        }

    }
}