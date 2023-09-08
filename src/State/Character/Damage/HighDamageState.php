<?php

declare(strict_types=1);

namespace App\State\Character\Damage;

use App\Models\Character\Character;

class HighDamageState implements DamageStateInterface
{
    private const DAMAGE_AMPLIFY = 0.3;  // 30% damage increase

    public function applyDamage(Character $character): void
    {
        $weaponDamage = $character->getWeapon()->getDamage();
        $baseDamage = $character->getBaseDamage();
        $amplifiedWeaponDamage = $weaponDamage * self::DAMAGE_AMPLIFY;

        $character->setDamage((int) ($baseDamage + $weaponDamage + $amplifiedWeaponDamage));
    }
}
