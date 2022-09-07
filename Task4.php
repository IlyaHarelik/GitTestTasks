<?php

namespace src;

class Task4
{
    public function main(string $text): string
    {
        $chars = ['-', '_'];

        $editedText = str_replace($chars, ' ', $text);
        $editedText = ucwords($editedText);
        $chars = [' '];
        $editedText = str_replace($chars, '', $editedText);

        return $editedText;
    }
}
