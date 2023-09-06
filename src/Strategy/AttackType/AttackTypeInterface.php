<?php

declare(strict_types=1);

namespace App\Strategy\AttackType;

interface AttackTypeInterface
{
    public function getAttackType(): string;
}
