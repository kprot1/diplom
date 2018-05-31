<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 001 01.06.18
 * Time: 0:08
 */

namespace AppBundle\Constants;


class ActionReward
{
    public const REWARDS = [
        'Начисление бонусов' => 1,
        'Увеличение процента начисления бонусов' => 2,
        'Увеличение процента списания бонусов' => 3,
        'Увеличение процента скидки' => 4
    ];
}