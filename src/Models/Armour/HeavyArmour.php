<?php

declare(strict_types=1);

namespace App\Models\Armour;

class HeavyArmour implements ArmourInterface
{
    public function useArmor(): void
    {
        echo 'Heavy Armour: *ching* *ching*';
    }
}
