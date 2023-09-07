<?php

declare(strict_types=1);

namespace App\Models\AttackType;

class MeleeAttackType implements AttackTypeInterface
{
    public const TYPE = 'melee';

    public function getType(): string
    {
        return self::TYPE;
    }
}
