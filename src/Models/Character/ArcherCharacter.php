<?php

declare(strict_types=1);

namespace App\Models\Character;

use App\Constants\Character\BaseDamageValue;
use App\Constants\Character\Effects\ArcherFightEffects;
use App\Models\AttackType\RangeAttackType;

class ArcherCharacter extends Character
{
    public function getBaseDamage(): int
    {
        return BaseDamageValue::CHARACTER_ARCHER;
    }

    public function getAttackType(): string
    {
        return RangeAttackType::TYPE;
    }

    public function prepareAttack(): void
    {
        echo ArcherFightEffects::ARROW_DRAW;
    }

    public function finishAttack(): void
    {
        echo ArcherFightEffects::BOW_PUT_BACK;
    }
}
