<?php

declare(strict_types=1);

namespace App\Strategy\Character;

use App\Strategy\Armour\ArmourInterface;
use App\Strategy\Weapon\WeaponInterface;

abstract class AbstractCharacter
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