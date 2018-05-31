<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 030 30.05.18
 * Time: 0:12
 */

namespace AppBundle\Constants;

class Role
{
    public const ROLE_PARTICIPANT = 1;
    public const ROLE_SELLER = 2;
    public const ROLE_OPERATOR = 3;
    public const ROLE_ADMINISTRATOR = 4;

    public const ALL_ROLES = [
        self::ROLE_PARTICIPANT      => 'Покупатель',
        self::ROLE_SELLER           => 'Продавец',
        self::ROLE_OPERATOR         => 'Оператор',
        self::ROLE_ADMINISTRATOR    => 'Администратор'
    ];
}