<?php

declare(strict_types=1);

namespace App\Models\Weapon;

use App\Constants\Weapon\WeaponDamageValue;
use App\Models\AttackType\RangeAttackType;

class BowWeapon extends Weapon
{
    public function getAttackType(): string
    {
        $rangeAttackWeapon = new RangeAttackType();
        return $rangeAttackWeapon->getType();
    }

    public function getDamage(): int
    {
        return WeaponDamageValue::BOW;
    }
}
