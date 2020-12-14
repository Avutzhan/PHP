<?php

include_once("Interfaces/InputFormat.php");

class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}