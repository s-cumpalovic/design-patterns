<?php

declare(strict_types=1);

namespace App\Models\Armour;

use App\Constants\Armour\ArmourProtectionValue;

class RingArmour extends Armour
{
    public function __construct()
    {
        $this->setProtection(ArmourProtectionValue::RING_ARMOUR);
    }
}
