<?php

declare(strict_types=1);

namespace App\Models\Character;

use App\Models\Armour\Armour;
use App\Models\Weapon\Weapon;
use App\State\Character\Damage\DamageStateInterface;
use App\State\Character\Damage\HighDamageState;
use App\State\Character\Damage\LowDamageState;

abstract class Character
{
    private int $damage;
    private Weapon $weapon;
    private Armour $armour;
    private DamageStateInterface $damageState;

    abstract public function getBaseDamage(): int;
    abstract public function getAttackType(): string;
    abstract protected function prepareAttack(): void;
    abstract protected function finishAttack(): void;

    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    public function getArmour(): Armour
    {
        return $this->armour;
    }

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;

        switch ($weapon->getAttackType()) {
            case $this->getAttackType():
                $this->damageState = new HighDamageState();
                break;
            default:
                $this->damageState = new LowDamageState();
                break;
        }

        $this->damageState->applyDamage($this);
    }

    public function setArmour(Armour $armour): void
    {
        $this->armour = $armour;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    final public function attack(): int
    {
        $damageDealt = $this->damage;

        $this->prepareAttack();
        echo $damageDealt;
        $this->finishAttack();

        return $damageDealt;
    }
}
