<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 030 30.05.18
 * Time: 20:18
 */

namespace AppBundle\Constants;


class RestrictionType
{
    public const RESTRICTION_ACCRUAL = 1;

    public const RESTRICTION_USE = 2;

    public const RESTRICTION_DISCOUNT = 3;

    public const ALL_RESTRICTIONS = [
        'Начисление' => self::RESTRICTION_ACCRUAL,
        'Списание' => self::RESTRICTION_USE,
        'Скидка' => self::RESTRICTION_DISCOUNT
    ];

    public static function getHumanizedRestriction(int $type)
    {
        if (in_array($type, self::ALL_RESTRICTIONS)) {
            return array_search($type, self::ALL_RESTRICTIONS);
        }
        return 'Неизвестно';
    }
}