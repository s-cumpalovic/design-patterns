<?php

declare(strict_types=1);

namespace App\Models\Weapon;

class MachineGunWeapon implements WeaponInterface
{
    public function useWeapon(): void
    {
        echo "*GRAAATATATA* *GRAAATATATA* *GRAAATATATA*" ;
    }
}
