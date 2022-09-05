<?php

namespace src;

class Task9
{
    public function main(array $arr, int $number): string
    {
        $count = count($arr) - 2;
        $result = [];

        for ($x = 0; $x < $count; $x++) {
            $sum = $arr[$x] + $arr[$x + 1] + $arr[$x + 2];
            if ($sum == $number) {
                $result[] = "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $number";
            }
        }

        return print_r($result);
    }
}

$result = new Task9;
$result->main([1, 9, 6, 5, 5, 7, 21, 3, 2, 5], 16);
