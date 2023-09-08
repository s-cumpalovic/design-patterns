<?php

declare(strict_types=1);

namespace App\Services;

use App\Helpers\HelperFunctions;
use App\Models\Character\Character;

class GameplayService
{
    public function duel(Character $character1, Character $character2): void
    {
        HelperFunctions::dump(get_class($character1));
        HelperFunctions::dump($character1->attack());

        HelperFunctions::dump(get_class($character2));
        HelperFunctions::dump($character2->attack());

        HelperFunctions::dump(get_class($character1));
        HelperFunctions::dump($character1->attack());

        HelperFunctions::dump(get_class($character2));
        HelperFunctions::dump($character2->attack());
    }
}
