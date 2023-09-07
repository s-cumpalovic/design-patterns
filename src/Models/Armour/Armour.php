<?php

declare(strict_types=1);

namespace App\Models\Armour;

abstract class Armour
{
    private int $protection;

    public function getProtection(): int
    {
        return $this->protection;
    }

    protected function setProtection(int $protection): void
    {
        $this->protection = $protection;
    }
}
