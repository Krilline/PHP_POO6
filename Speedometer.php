<?php


class Speedometer
{
    const convert = 0.621;

    public static function convertKmToMiles(int $parameter)
    {
        $result = $parameter * self::convert;
        return round($result, 2);
    }

    public static function convertMilesToKm(int $parameter)
    {
        return round($parameter / self::convert);
    }
}