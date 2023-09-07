<?php

declare(strict_types=1);

namespace App\Models\Weapon;

use App\Models\AttackType\AttackTypeInterface;

abstract class Weapon
{
    private AttackTypeInterface $attackType;
    private int $damage;

    public function getAttackType(): string
    {
        return $this->attackType->getType();
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    protected function setAttackType(AttackTypeInterface $attackType): void
    {
        $this->attackType = $attackType;
    }

    protected function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }
}
