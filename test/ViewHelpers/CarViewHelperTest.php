<?php



require_once '../../src/Abstracts/VehicleAbstract.php';
require_once '../../src/ViewHelpers/CarViewHelper.php';
require_once '../../src/Entities/CarEntity.php';

use PHPUnit\Framework\TestCase;

class CarViewHelperTest extends TestCase
{
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
        $expected = '<div class="carCards-container"><div class="brand-model-container"><h1 class="make"><span>Make:</span>Make</h1><h1 class="model"><span>Model:</span>Model</h1><h1 class="year"><span>Year:</span>12</h1><h1 class="color"><span>Color:</span>Color</h1><h1 class="location"><span>Location:</span>Location</h1></div><img class="car-img" src="https://dev.io-academy.uk/resources/cars/Image"></div>';
        $this->assertEquals($expected, $output);
    }

        public function testDisplayCarDetails_malformed()
    {
        $this->expectException(TypeError::class);
        \KoalaCars\ViewHelpers\CarViewHelper::displayCarDetails(22);
    }
}