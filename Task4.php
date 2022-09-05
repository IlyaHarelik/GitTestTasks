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
        echo $editedText;

        return $editedText;
    }
}

$example = new Task4();
$example->main('The quick-brown_fox jumps over the_lazy-dog');
