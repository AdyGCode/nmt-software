<?php

namespace App\Http\Helpers;

class HumanReadable
{

    static function toShort(int $value, $decimals = 2): string
    {
        $size = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $factor = ($value === 0) ? 0 : floor(log($value, 1024));
        return sprintf("%.{$decimals}f", $value / pow(1024, $factor)).@$size[$factor];
    }
}
