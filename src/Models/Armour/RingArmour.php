<?php

declare(strict_types=1);

namespace App\Models\Armour;

class RingArmour implements ArmourInterface
{
    public function useArmor(): void
    {
        echo 'Ring Armour: *tsk* *tsk*';
    }
}
