<?php

namespace src;

use DateTime;
use InvalidArgumentException;

class Task2
{
    public function main(string $date): int
    {
        if (!(preg_match("/^(0[1-9]|[12][0-9]|3[01])[\-](0[1-9]|1[012])[\-](19|20)\d\d$/", $date))) {
            throw new InvalidArgumentException();
        }
        $dateBirth = date_create_from_format("j-m-Y", $date);
        $currentDate = new DateTime('now');
        $diff = date_diff($currentDate, $dateBirth);
        $daysLeft = $diff->format('%R%a');
        $daysLeft = trim($daysLeft, $characters = "+");
        if ($daysLeft < 0) {
            throw new InvalidArgumentException();
        }
        return $daysLeft;
    }
}
