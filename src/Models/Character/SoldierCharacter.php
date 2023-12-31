<?php

declare(strict_types=1);

namespace App\Models\Character;

use App\Constants\Character\BaseDamageValue;
use App\Constants\Character\Effects\SoldierFightEffects;
use App\Models\AttackType\MeleeAttackType;

class SoldierCharacter extends Character
{
    public function getBaseDamage(): int
    {
        return BaseDamageValue::CHARACTER_SOLDIER;
    }

    public function getAttackType(): string
    {
        return MeleeAttackType::TYPE;
    }

    public function prepareAttack(): void
    {
        echo SoldierFightEffects::AXE_DRAW;
    }

    public function finishAttack(): void
    {
        echo SoldierFightEffects::AXE_PUT_BACK;
    }
}
