<?php

require_once '../../src/ViewHelpers/CarViewHelper.php';
require_once '../../src/Entities/CarEntity.php';
require_once '../../src/Abstracts/VehicleAbstract.php';


use PHPUnit\Framework\TestCase;


class CarViewHelperTest extends TestCase
{

    public function testDisplayCars_success()
    {
    $carEntityMock = $this->createMock(CarEntity::class);
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
    $expected = '';
    $this->assertEquals($output, $expected);
    }
}