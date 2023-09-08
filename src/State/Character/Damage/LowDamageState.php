<?php

declare(strict_types=1);

namespace App\State\Character\Damage;

use App\Models\Character\Character;

class LowDamageState implements DamageStateInterface
{
    public const DAMAGE_REDUCE = 0.8;

    public function applyDamage(Character $character): void
    {
        $weaponDamage = $character->getWeapon()->getDamage();
        $baseDamage = $character->getBaseDamage();
        $reducedWeaponDamage = $weaponDamage * self::DAMAGE_REDUCE;

        $character->setDamage((int) ($baseDamage + $reducedWeaponDamage));
    }
}
