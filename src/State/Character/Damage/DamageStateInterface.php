<?php

declare(strict_types=1);

namespace App\State\Character\Damage;

use App\Models\Character\Character;

interface DamageStateInterface
{
    public function applyDamage(Character $character): void;
}
