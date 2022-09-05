<?php

namespace src;

class Task10
{
    public function main(int $input): string
    {
        $result = [];

        if ($input < 1) {
            return print_r($result);
        }
        while ($input > 1) {
            if ($input % 2 === 0) {
                $input = $input / 2;
            } else {
                $input = $input * 3 + 1;
            }
            $result[] = $input;
        }

        return print_r($result);
    }
}

$res = new Task10;
$res->main(24);
