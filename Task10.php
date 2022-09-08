<?php

namespace src;

use InvalidArgumentException;

class Task10
{
    public function main(int $input): string
    {
        if($input <= 1) {
            throw new InvalidArgumentException;
        }
        $result = [];

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
