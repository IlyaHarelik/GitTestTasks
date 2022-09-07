<?php

namespace src;

use InvalidArgumentException;

class Task7
{
    public function main(array $arr, int $position): array
    {
        if(count($arr) < 1 || $position >= count($arr) || $position < 0 ){
            throw new InvalidArgumentException;
        }
        unset($arr[$position]);

        $keys = [];
        for ($i = 0; $i < count($arr); $i++) {
            $keys[] = $i;
        }

        return array_combine($keys, $arr);
    }
}

$result = new Task7;
