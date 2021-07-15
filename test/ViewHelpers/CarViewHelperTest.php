<?php

require_once '../../src/Abstracts/VehicleAbstract.php';
require_once '../../src/ViewHelpers/CarViewHelper.php';
require_once '../../src/Entities/CarEntity.php';

use PHPUnit\Framework\TestCase;

class CarViewHelperTest extends TestCase
{

    public function testDisplayCars_success()
    {
    $carEntityMock = $this->createMock(\KoalaCars\Entities\CarEntity::class);
    $carEntityMock->expects($this->once())
        ->method('getModel')
        ->willReturn('Model');
    $carEntityMock->expects($this->once())
        ->method('getMake')
        ->willReturn('Make');
    $carEntityMock->expects($this->once())
        ->method('getImage')
        ->willReturn('Image');
    $array[] = $carEntityMock;
    $expected = '<div class="carCards-container"><img src="https://dev.io-academy.uk/resources/cars/Image"><div class="brand-model-container"><h1 class="makeCard">Make</h1><h1 class="modelCard">Model</h1></div><div class="link"><a class="index-link" href="details.php?id=0">More Details</a></div></div>';
    $output = \KoalaCars\ViewHelpers\CarViewHelper::displayCars($array);
    $this->assertEquals($expected, $output);
    }

    public function testDisplayCars_malformed()
    {
        $this->expectException(TypeError::class);
        \KoalaCars\ViewHelpers\CarViewHelper::displayCars(22);
    }

    public function testDisplayCars_failure()
    {
        $array = [1,2,3];
        $output = \KoalaCars\ViewHelpers\CarViewHelper::displayCars($array);
        $expected = '';
        $this->assertEquals($output, $expected);
    }

    public function testDisplayCarDetails_success()
    {
        $carEntityMock = $this->createMock(\KoalaCars\Entities\CarEntity::class);
        $carEntityMock->expects($this->once())
            ->method('getMake')
            ->willReturn('Make');
        $carEntityMock->expects($this->once())
            ->method('getModel')
            ->willReturn('Model');
        $carEntityMock->expects($this->once())
            ->method('getYear')
            ->willReturn(12);
        $carEntityMock->expects($this->once())
            ->method('getColor')
            ->willReturn('Color');
        $carEntityMock->expects($this->once())
            ->method('getLocation')
            ->willReturn('Location');
        $carEntityMock->expects($this->once())
            ->method('getImage')
            ->willReturn('Image');
        $output = \KoalaCars\ViewHelpers\CarViewHelper::displayCarDetails($carEntityMock);
        $expected = '<div class="details-carCards-container"><div class="brand-model-container-details"><h1 class="make"><span>Make:</span>Make</h1><h1 class="model"><span>Model:</span>Model</h1><h1 class="year"><span>Year:</span>12</h1><h1 class="color"><span>Color:</span>Color</h1><h1 class="location"><span>Location:</span>Location</h1></div><img class="car-img" src="https://dev.io-academy.uk/resources/cars/Image"></div>';
        $this->assertEquals($expected, $output);
    }

    public function testDisplayCarDetails_malformed()
    {
        $this->expectException(TypeError::class);
        \KoalaCars\ViewHelpers\CarViewHelper::displayCarDetails(22);
    }
}