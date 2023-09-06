<?php

declare(strict_types=1);

namespace App\Strategy\Weapon;

class SwordWeapon implements WeaponInterface
{
    public function useWeapon(): void
    {
        echo "*stab* *stab* *stab*" ;
    }
}