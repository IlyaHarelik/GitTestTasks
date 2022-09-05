<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position)
    {
        unset($arr[$position]);

        $keys = [0];
        for ($i = 1; $i < count($arr); $i++) {
            $keys[] = $i;
        }

        $arr = array_combine($keys, $arr);

        var_dump($arr);
    }
}


$result = new Task7;
$result->main([1, 2, 3, 4, 5, 4, 21, 4321, 32, 3, 23, 2123], 5);
