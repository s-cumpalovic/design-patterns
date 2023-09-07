<?php

declare(strict_types=1);

namespace App\Models\AttackType;

class RangeAttackType implements AttackTypeInterface
{
    public const TYPE = 'range';

    public function getType(): string
    {
        return self::TYPE;
    }
}
