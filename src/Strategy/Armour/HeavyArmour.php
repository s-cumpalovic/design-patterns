<?php

declare(strict_types=1);

namespace App\Strategy\Armour;

class HeavyArmour implements ArmourInterface
{
    public function useArmor(): void
    {
        echo 'Heavy Armour: *ching* *ching*';
    }
}