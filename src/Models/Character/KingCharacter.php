<?php

declare(strict_types=1);

namespace App\Models\Character;

use App\Constants\Character\BaseDamageValue;
use App\Constants\Character\Effects\KingFightEffects;
use App\Models\AttackType\MeleeAttackType;

class KingCharacter extends Character
{
    public function getBaseDamage(): int
    {
        return BaseDamageValue::CHARACTER_KING;
    }

    public function getAttackType(): string
    {
        return MeleeAttackType::TYPE;
    }

    public function prepareAttack(): void
    {
        echo KingFightEffects::SWORD_DRAW;
    }

    public function finishAttack(): void
    {
        echo KingFightEffects::SWORD_PUT_BACK;
    }
}
