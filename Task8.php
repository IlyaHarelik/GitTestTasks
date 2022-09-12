<?php

namespace src;

use InvalidArgumentException;

class Task8
{
    public function main(string $a): string
    {
        $jsonString = json_decode($a, true);

        if (!(json_last_error() === JSON_ERROR_NONE)) {
            throw new InvalidArgumentException;
        }
        $result ='';
        array_walk_recursive($jsonString, function ($value, $key) use (&$result) {
            $result .= "$key: $value" . '</br>';
        });

        return $result;
    }
}
