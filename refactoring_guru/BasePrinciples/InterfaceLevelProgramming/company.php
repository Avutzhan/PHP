<?php

//before
class Company0 {
    public $soft;

    public function createSoftware($designer, $programmer, $tester)
    {
        $soft = "{$designer->designArchitecture()} {$programmer->writeCode()} {$tester->testSoftware()}";
        return "soft is ready {$soft}";
    }
}

class Designer0 {
    public function designArchitecture()
    {
        return "architecture";
    }
}

class Programmer0 {
    public function writeCode()
    {
        return "code";
    }
}

class Tester0 {
    public function testSoftware()
    {
        return "test";
    }
}

$designer = new Designer0();
$programmer = new Programmer0();
$tester = new Tester0();

$company = new Company0();
echo $company->createSoftware($designer, $programmer, $tester);

//with encapsulation better but code still depends to other classes

class Company1 {
    public $soft;

    public function createSoftware()
    {
        $employees = [
            new Designer1(),
            new Programmer1(),
            new Tester1(),
        ];
        $soft = "";
        foreach ($employees as $employee) {
            $soft .= $employee->doWork();
        }
        return $soft;
    }
}

interface Employee1 {
    public function doWork();
}

class Designer1 implements Employee1 {
    public function doWork()
    {
        return "architecture";
    }
}

class Programmer1 implements Employee1 {
    public function doWork()
    {
        return "code";
    }
}

class Tester1 implements Employee1 {
    public function doWork()
    {
        return "test";
    }
}

$company = new Company1();
echo $company->createSoftware();


//after


// the main company class code became independent from employees class. Specific employees create specific classes of companies.
//fabric method pattern
abstract class Company
{
    public $soft;

    public function createSoftware()
    {
        $employees = $this->getEmployees();
        $soft = "";
        foreach ($employees as $employee) {
            $soft .= $employee->doWork();
        }
        return $soft;
    }

    abstract public function getEmployees();
}

interface Employee
{
    public function doWork();
}

class Designer implements Employee
{
    public function doWork()
    {
        return "architecture";
    }
}

class Programmer implements Employee
{
    public function doWork()
    {
        return "code";
    }
}

class Tester implements Employee
{
    public function doWork()
    {
        return "test";
    }
}

class GameDevCompany extends Company
{
    public function getEmployees()
    {
        return [
            new Designer(),
            new Programmer(),
        ];
    }
}

class OutsourcingCompany extends Company
{
    public function getEmployees()
    {
        return [
            new Designer(),
            new Programmer(),
            new Tester(),
        ];
    }
}

$game = new GameDevCompany();
// echo $game->createSoftware();
$outsorce = new OutsourcingCompany();
echo $outsorce->createSoftware();

