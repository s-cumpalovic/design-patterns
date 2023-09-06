<?php

declare(strict_types=1);

namespace App\Strategy\AttackType;

class MeleeAttackType implements AttackTypeInterface
{
    public const TYPE = 'melee';

    public function getAttackType(): string
    {
        return self::TYPE;
    }
}
