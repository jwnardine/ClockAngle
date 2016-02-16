<?php

require_once "src/Clock.php";

class ClockTest extends PHPUnit_Framework_TestCase
{

    function test_checkAngle_Noon()
    {
        //Arrange
        $test_Clock = new Clock;
        $input1 = 6;
        $input2 = 00;

        //Act
        $result = $test_Clock->checkAngle($input1, $input2);

        //Assert
        $this->assertEquals(180, $result);
    }
    function test_checkAngle_BiggerThanOneEighty()
    {
        //Arrange
        $test_Clock = new Clock;
        $input1 = 9;
        $input2 = 00;

        //Act
        $result = $test_Clock->checkAngle($input1, $input2);

        //Assert
        $this->assertEquals(90, $result);
    }
    function test_checkAngle_BiggerThanNegativeOneEighty()
    {
        //Arrange
        $test_Clock = new Clock;
        $input1 = 5;
        $input2 = 57;

        //Act
        $result = $test_Clock->checkAngle($input1, $input2);

        //Assert
        $this->assertEquals(163.5, $result);
    }
    function test_checkAngle_lessThanNegativeOneEighty()
    {
        //Arrange
        $test_Clock = new Clock;
        $input1 = 1;
        $input2 = 57;

        //Act
        $result = $test_Clock->checkAngle($input1, $input2);

        //Assert
        $this->assertEquals(76.5, $result);
    }

}

?>
