<?php

require_once '../../src/Abstracts/VehicleAbstract.php';
require_once '../../src/ViewHelpers/FiltersViewHelper.php';
require_once '../../src/Entities/CarEntity.php';

use PHPUnit\Framework\TestCase;

class FiltersViewHelperTest extends TestCase
{
    public function testDisplayMakesSuccess()
    {
        $array = ['Ford', 'Volkswagen', 'Chevrolet'];
        $string = 'Ford';
        $result = '<div class="make-container"><button class="make-btn  active"><a href="index.php?make=Ford">Ford</a></button><button class="make-btn "><a href="index.php?make=Volkswagen">Volkswagen</a></button><button class="make-btn "><a href="index.php?make=Chevrolet">Chevrolet</a></button></div> <button class="all-cars-btn "><a href="index.php">All cars</a></button>';
        $output = \KoalaCars\ViewHelpers\FiltersViewHelper::displayMakes($array, $string);
        $this->assertEquals($output, $result);
    }

    public function testDisplayMakesFailure()
    {
        $array = [];
        $string = '';
        $result = '<div class="make-container"></div> <button class="all-cars-btn  active"><a href="index.php">All cars</a></button>';
        $output = \KoalaCars\ViewHelpers\FiltersViewHelper::displayMakes($array, $string);
        $this->assertEquals($output, $result);
    }

    public function testDisplayMakesMalformed()
    {
        $this->expectException(TypeError::class);
        \KoalaCars\ViewHelpers\FiltersViewHelper::displayMakes('ford', 4);
    }
}