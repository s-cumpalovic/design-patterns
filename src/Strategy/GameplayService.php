<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Strategy\Character\AbstractCharacter;

class GameplayService
{
    public function duel(AbstractCharacter $character1, AbstractCharacter $character2): void
    {
        echo "Character 1: ";
        $character1->fight();

        echo "<br>";

        echo "Character 2: ";
        $character2->fight();
    }
}