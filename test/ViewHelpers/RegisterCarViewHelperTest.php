<?php

require_once '../../src/ViewHelpers/RegisterCarViewHelper.php';

use PHPUnit\Framework\TestCase;

class RegisterCarViewHelperTest extends TestCase
{
    public function testDisplayValidationError_code1_success()
    {
        $output = \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError(1);
        $expected = 'Please enter a valid make!';
        $this->assertEquals($expected, $output);
    }

    public function testDisplayValidationError_code2_success()
    {
        $output = \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError(2);
        $expected = 'Please enter a valid model!';
        $this->assertEquals($expected, $output);
    }

    public function testDisplayValidationError_code3_success()
    {
        $output = \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError(3);
        $expected = 'Please enter a valid year!';
        $this->assertEquals($expected, $output);
    }

    public function testDisplayValidationError_code4_success()
    {
        $output = \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError(4);
        $expected = 'Please enter a valid colour!';
        $this->assertEquals($expected, $output);
    }

    public function testDisplayValidationError_code5_success()
    {
        $output = \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError(5);
        $expected = 'Please enter a valid location!';
        $this->assertEquals($expected, $output);
    }

    public function testDisplayValidationError_code6_success()
    {
        $output = \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError(6);
        $expected = 'Car couldn\'t be added. Please try again later!';
        $this->assertEquals($expected, $output);
    }

    public function testDisplayValidationError_malformed()
    {
        $array = [1,2,3];
        $this->expectException(TypeError::class);
        \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError($array);
    }

    public function testDisplayValidationError_failure()
    {
        $output = \KoalaCars\ViewHelpers\RegisterCarViewHelper::displayValidationError(56);
        $expected = 'Unexpected error returned';
        $this->assertEquals($expected, $output);
    }
}