<?php

declare(strict_types=1);

namespace App\Models\Weapon;

use App\Constants\Weapon\WeaponDamageValue;
use App\Models\AttackType\RangeAttackType;

class BowWeapon extends Weapon
{
    public function __construct()
    {
        $this->setAttackType(new RangeAttackType());
        $this->setDamage(WeaponDamageValue::BOW);
    }
}
