<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 031 31.05.18
 * Time: 1:13
 */

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
}