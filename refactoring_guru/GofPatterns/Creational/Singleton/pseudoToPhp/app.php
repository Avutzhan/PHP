<?php

include_once("Classes/Database.php");

class Application
{
    public function main()
    {
        $database = new Database();
        $foo = $database->getInstance();
        $foo->query("select... \n");
        var_dump($foo);
        $bar = $database->getInstance();
        var_dump($bar);

    }
}