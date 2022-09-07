<?php

namespace src;

class Task8
{
    public string $a;

    public function __construct(string $a)
    {
        $this->a = $a;
    }

    public function output(): string
    {
        function arr($value, $key)
        {
            echo "$key : $value" . "</br>";
        }

        $jsonString = json_decode($this->a, true);

        return array_walk_recursive($jsonString, function ($value, $key) {
            echo "$key : $value" . "</br>";
        });
    }
}

$example = new Task8('{
    "Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
    "Publisher": "Little Brown"
    }
    }');

$example->output();
