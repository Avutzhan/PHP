<?php

interface InputFormat
{
    public function formatText(string $text): string;
}

