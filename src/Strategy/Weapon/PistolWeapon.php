<?php

declare(strict_types=1);

namespace App\Strategy\Weapon;

class PistolWeapon implements WeaponInterface
{
    public function useWeapon(): void
    {
        echo "*POW* *POW* *POW*" ;
    }
}