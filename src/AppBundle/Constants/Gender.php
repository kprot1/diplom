<?php

namespace AppBundle\Constants;

class Gender
{
    public const GENDER_MALE = 'm';
    public const GENDER_FEMALE = 'f';
    public const GENDER_ANY = 'a';
    public const GENDER_NONE = 'n';

    public const ALL_GENDERS = [
        'Мужской' => self::GENDER_MALE,
        'Женский' => self::GENDER_FEMALE,
        'Любой' => self::GENDER_ANY
    ];

    /**
     * @param string $type
     * @return false|int|string
     */
    public static function getHumanizedGender(string $type)
    {
        if (in_array($type, self::ALL_GENDERS)) {
            return array_search($type, self::ALL_GENDERS);
        }
        return 'Неизвестно';
    }
}