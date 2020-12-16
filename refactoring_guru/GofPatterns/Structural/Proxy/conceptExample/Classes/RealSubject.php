<?php

include_once("Interfaces/SubjectInterface.php");

class RealSubject implements Subject
{
    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}