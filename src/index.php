<?php

declare(strict_types=1);

require '../vendor/autoload.php';

use App\Strategy\Armour\HeavyArmour;
use App\Strategy\Armour\RingArmour;
use App\Strategy\Character\KingCharacter;
use App\Strategy\Character\TrollCharacter;
use App\Strategy\GameplayService;
use App\Strategy\Weapon\MachineGunWeapon;
use App\Strategy\Weapon\SwordWeapon;

class Main
{
    public function __construct(
    ) {
    }

    public static function run(){
        $gameplayService = new GameplayService();

        $king = new KingCharacter();
        $king->setWeapon(new SwordWeapon());
        $king->setArmour(new HeavyArmour());

        $troll = new TrollCharacter();
        $troll->setWeapon(new MachineGunWeapon());
        $troll->setArmour(new RingArmour());

        $gameplayService->duel($king, $troll);
    }
}

Main::run();
