<?php

namespace src;

use InvalidArgumentException;

class Task8
{
    public function main(string $json): string
    {
        $jsonString = json_decode($json, true);

        if ((is_array($jsonString)) === false) {
            throw new InvalidArgumentException;
        }

        $result ='';
        array_walk_recursive($jsonString, function ($value, $key) use (&$result) {
            $result .= "$key: $value" . '</br>';
        });

        return $result;
    }
}
