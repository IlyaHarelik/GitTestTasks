<?php

namespace src;

class Task3
{
    public function main(int $digit): int
    {
        $digitArray = str_split($digit);

        do {
            echo ' = ' . implode(' + ', $digitArray);
            echo ' = ';
            $digitArray = array_sum($digitArray);
            echo $digitArray;
            $digitArray = str_split($digitArray);
            $count = count($digitArray);
        } while ($count > 1);


        return implode('', $digitArray);
    }
}

$result = new Task3();
$result->main(4998887777989443242);
