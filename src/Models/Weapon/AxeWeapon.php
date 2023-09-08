<?php

declare(strict_types=1);

namespace App\Models\Weapon;

use App\Constants\Weapon\WeaponDamageValue;
use App\Models\AttackType\MeleeAttackType;

class AxeWeapon extends Weapon
{
    public function getAttackType(): string
    {
        $meleeAttackType = new MeleeAttackType();
        return $meleeAttackType->getType();
    }

    public function getDamage(): int
    {
        return WeaponDamageValue::AXE;
    }
}
