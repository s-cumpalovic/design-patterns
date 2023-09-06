<?php

declare(strict_types=1);

namespace App\Models\Character;

use App\Models\Armour\ArmourInterface;
use App\Models\Weapon\WeaponInterface;

abstract class Character
{
    private WeaponInterface $weapon;
    private ArmourInterface $armour;

    public function setWeapon(WeaponInterface $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function setArmour(ArmourInterface $armour): void
    {
        $this->armour = $armour;
    }

    public function fight(): void
    {
        $this->weapon->useWeapon();
        $this->armour->useArmor();
    }
}
