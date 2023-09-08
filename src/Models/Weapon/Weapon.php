<?php

declare(strict_types=1);

namespace App\Models\Weapon;

abstract class Weapon
{
    abstract public function getAttackType(): string;
    abstract public function getDamage(): int;
}
