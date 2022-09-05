<?php

namespace src;

use DateTime;

class Task2
{
    public function main(string $date): string
    {
        date_default_timezone_set('UTC+3');
        $dateBirth = date_create_from_format("j.m.Y", $date);
        $currentDate = new DateTime('now');
        $diff = date_diff($currentDate, $dateBirth);

        return $diff->format('%R%a days');
    }
}

$birthdayCountdown = new Task2;

echo $birthdayCountdown->main('21.02.2025');
