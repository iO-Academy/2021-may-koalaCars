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
        ->method('getId')
        ->willReturn(1);
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
    $output = \KoalaCars\ViewHelpers\CarViewHelper::displayCars($array);
    $expected = '<div class="car_image"><img src="https://dev.io-academy.uk/resources/cars/Image"></div><div><h1>Make: </h1>Make</div><div><h1>Model: </h1>Model</div><div><a href="details.php?id=1">See more</a></div>';
    $this->assertEquals($output, $expected);
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
}