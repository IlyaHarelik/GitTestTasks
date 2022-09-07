<?php

namespace src;

class Task3
{
    public function main(int $digit): int
    {
        $digitArray = str_split($digit);

        do {
            $digitArray = array_sum($digitArray);

            $digitArray = str_split($digitArray);
            $count = count($digitArray);
        } while ($count > 1);

        return intval($digitArray[0]);
    }
}
