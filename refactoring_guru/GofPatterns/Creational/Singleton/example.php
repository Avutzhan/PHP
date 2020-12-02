<?php

class Database
{
    private $instance;
    public $sql;

    public function getInstance()
    {
        if ($this->instance == null) {
            $this->instance = new Database();
        }

        return $this->instance;
    }

    public function query($sql)
    {
        $this->sql = $sql;
    }
}

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

$app = new Application();
$app->main();