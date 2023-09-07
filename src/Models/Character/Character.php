<?php

declare(strict_types=1);

namespace App\Models\Character;

use App\Models\Armour\ArmourInterface;
use App\Models\Weapon\Weapon;

abstract class Character
{
    private Weapon $weapon;
    private ArmourInterface $armour;

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function setArmour(ArmourInterface $armour): void
    {
        $this->armour = $armour;
    }
}
