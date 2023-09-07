<?php

declare(strict_types=1);

namespace App\Strategy\Weapon;

interface WeaponInterface
{
    public function useWeapon(): void;
}