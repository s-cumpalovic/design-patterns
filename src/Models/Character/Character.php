<?php

declare(strict_types=1);

namespace App\Models\Character;

use App\Models\Armour\Armour;
use App\Models\Weapon\Weapon;

abstract class Character
{
    private Weapon $weapon;
    private Armour $armour;

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function setArmour(Armour $armour): void
    {
        $this->armour = $armour;
    }
}
