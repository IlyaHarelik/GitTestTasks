<?php

namespace src;

class Task1
{
    public function main(int $inputNumber): string
    {

        $result1 = 'More than 30';
        $result2 = 'More than 20';
        $result3 = 'More than 10';
        $result4 = "Equal or less than 10";

        $inputNumber > 30 ? $result = $result1 :
            ($inputNumber > 20 ? $result = $result2 :
                ($inputNumber > 10 ? $result = $result3 :
                    $result = $result4)
            );

        return $result;
    }
}

$res = new Task1;
echo $res->main(22);
