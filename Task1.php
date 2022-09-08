<?php

namespace src;

class Task1
{
    public function main(int $inputNumber): string
    {
        $result1 = 'More than 30';
        $result2 = 'More than 20';
        $result3 = 'More than 10';
        $result4 = 'Equal or less than 10';

        $result = $inputNumber > 30 ?
            $result1 :
            ($inputNumber > 20 ?
                $result2 :
                ($inputNumber > 10 ?
                    $result3 :
                    $result4));

        return $result;
    }
}
