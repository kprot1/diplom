<?php

namespace AppBundle\Constants;

class DistributionType
{
    public const AGREE = 1;
    public const DISAGREE = 0;

    public const ALL_TYPES = [
        self::AGREE => 'Согласен',
        self::DISAGREE => 'Не согласен'
    ];

    public static function getHumanizedType(int $type)
    {
        if (array_key_exists($type, self::ALL_TYPES)) {
            return self::ALL_TYPES[$type];
        }
        return 'Неизвестно';
    }
}