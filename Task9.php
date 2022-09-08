<?php

namespace src;

use InvalidArgumentException;

class Task9
{
    public function main(array $arr, int $number): string
    {
        if (count($arr) < 3) {
            throw new InvalidArgumentException;
        }

        foreach ($arr as $elem) {
            if (!(gettype($elem) === 'integer')) {
                throw new InvalidArgumentException;
            }
        }

        $count = count($arr) - 2;
        $result = [];

        for ($x = 0; $x < $count; $x++) {
            $sum = $arr[$x] + $arr[$x + 1] + $arr[$x + 2];
            if ($sum == $number) {
                $result[] = "{$arr[$x]} + {$arr[$x + 1]} + {$arr[$x + 2]} = $number";
            }
        }

        return print_r($result);
    }
}
