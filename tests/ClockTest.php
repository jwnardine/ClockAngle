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

}

?>
