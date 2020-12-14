<?php

interface Notification
{
    public function send(string $title, string $message);
}

