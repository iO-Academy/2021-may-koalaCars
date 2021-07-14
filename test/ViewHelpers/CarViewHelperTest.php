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
    $expected = '<div class="carCards-container"><img src="https://dev.io-academy.uk/resources/cars/Image"><div class="brand-model-container"><h1 class="make">Make</h1><h1 class="model">Model</h1></div></div>';
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
}