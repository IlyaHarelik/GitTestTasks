<?php

namespace src;

use InvalidArgumentException;

class Task3
{
    public function main(int $digit): int
    {
        if ($digit <= 0) {
            throw new InvalidArgumentException;
        }

        $digitArray = str_split($digit);

        do {
            $digitArray = array_sum($digitArray);
            $digitArray = str_split($digitArray);
            $count = count($digitArray);
        } while ($count > 1);

        return intval($digitArray[0]);
    }
}

$res = new Task3();

echo $res->main(0);