<?php

declare(strict_types=1);

namespace App\Models\Weapon;

use App\Constants\Weapon\WeaponDamageValue;
use App\Models\AttackType\MeleeAttackType;

class AxeWeapon extends Weapon
{
    public function __construct()
    {
        $this->setAttackType(new MeleeAttackType());
        $this->setDamage(WeaponDamageValue::AXE);
    }
}
