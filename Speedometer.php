<?php


class Speedometer
{
    const kmToMiles = [
        '10' => '6,21',
        '20' => '12,42',
    ];

    const milesToKm = [
        '6,21' => '10',
        '12,42' => '20',
    ];

    public static function convertKmToMiles(string $parameter): ?string
    {
        return array_key_exists($parameter, self::kmToMiles) ? self::kmToMiles[$parameter] : null;
    }

    public static function convertMilesToKm(string $parameter): ?string
    {
        return array_key_exists($parameter, self::milesToKm) ? self::milesToKm[$parameter] : null;
    }
}