<?php

namespace src;

use DateTime;
use InvalidArgumentException;

class Task2
{
    public function main(string $date): string
    {
        $dateBirth = date_create_from_format("j-m-Y", $date);
        $currentDate = new DateTime('now');
        $diff = date_diff($currentDate, $dateBirth);
        $daysLeft = $diff->format('%R%a');
        if($daysLeft < 0 )
            throw new InvalidArgumentException;
        return $daysLeft;
    }
}
