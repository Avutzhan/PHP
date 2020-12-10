<?php

include_once("app.php");
include_once("Classes/Win/WinFactory.php");
include_once("Classes/Mac/MacFactory.php");

class ApplicationConfigurator
{
    public function main()
    {
        $config = "windows";

        if ($config === "windows") {
            $factory = new WinFactory();
        } else if ($config === "mac") {
            $factory = new MacFactory();
        } else {
            throw new Exception("error");
        }

        return new Application($factory);
    }
}