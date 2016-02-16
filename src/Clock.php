<?php

class Clock
{
    function checkAngle($hour, $minute) {
        $hourOutput = ((30 * $hour) + ($minute / 2));
        $minuteOutput = ($minute * 6);
        $hourMinuteDiff = ($hourOutput - $minuteOutput);
            if ($hourMinuteDiff > 180) {
                return (360 - $hourMinuteDiff);
            } elseif (($hourMinuteDiff < 0) && ($hourMinuteDiff > -180)) {
                return abs($hourMinuteDiff);
            } elseif ($hourMinuteDiff < -180) {
                return ($hourMinuteDiff + 360);
            } else {
                return $hourMinuteDiff;
        }
    }
}

?>
