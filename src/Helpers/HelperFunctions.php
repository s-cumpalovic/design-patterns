<?php

declare(strict_types=1);

namespace App\Helpers;

class HelperFunctions
{
    public static function dump($data): void
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
}