<?php

namespace src;

use InvalidArgumentException;

class Task5
{
    public function main(int $n): string
    {
        if ($n <= 0) {
            throw new InvalidArgumentException;
        }

        $fib1 = '0';
        $fib2 = '1';
        $reverseFib3 = '';

        do {
            $reverseFib1 = strrev($fib1);
            $reverseFib2 = strrev($fib2);

            for ($i = 0; strlen($reverseFib2) >= $i; $i++) {
                $reverseFib1int = intval((substr($reverseFib1, $i, 1)));
                $reverseFib2int = intval((substr($reverseFib2, $i, 1)));
                $reverseFib2int = isset($b) ? $reverseFib2int + $b : $reverseFib2int;
                $b = intval(($reverseFib1int + $reverseFib2int) / 10);
                $reverseFib3int = $reverseFib1int + $reverseFib2int - $b * 10;
                $reverseFib3 .= $reverseFib3int;
            }

            $fib3 = strrev($reverseFib3);
            $fib3 = ltrim($fib3, '0');
            $fib1 = strrev($reverseFib2);
            $fib2 = $fib3;
            $reverseFib3 = '';
        } while (strlen($fib2) < $n);

        return $fib2;
    }
}
