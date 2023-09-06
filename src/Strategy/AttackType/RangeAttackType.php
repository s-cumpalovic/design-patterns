<?php

declare(strict_types=1);

namespace App\Strategy\AttackType;

class RangeAttackType implements AttackTypeInterface
{
    public const TYPE = 'range';

    public function getAttackType(): string
    {
        return self::TYPE;
    }
}
