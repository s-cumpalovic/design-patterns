<?php

declare(strict_types=1);

namespace App;

use App\Models\Character\KingCharacter;
use App\Models\Character\SoldierCharacter;
use App\Models\Weapon\AxeWeapon;
use App\Models\Weapon\BowWeapon;
use App\Models\Weapon\SwordWeapon;
use App\Services\GameplayService;

require '../vendor/autoload.php';

class Main
{
    private GameplayService $gameplayService;

    public function __construct(
    ) {
        $this->gameplayService = new GameplayService();
    }

    public function run() {
        $king = new KingCharacter();
        $king->setWeapon(new BowWeapon());

        $soldier = new SoldierCharacter();
        $soldier->setWeapon(new SwordWeapon());

        $this->gameplayService->duel($king, $soldier);

        $king->setWeapon(new AxeWeapon());

        $this->gameplayService->duel($king, $soldier);
    }
}

$app = new Main();
$app->run();
