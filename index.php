<?php

declare(strict_types=1);

require_once __DIR__. '/vendor/autoload.php';

$employee = new classes\Employee();
$employee->name = 'Petya';
echo $employee->name;

class Employee
{
    public $name;
    public $salary;

    public function doubleSalary()
    {
        $salary=$this->salary*2;
        return $salary;
    }

}

$employee1=new Employee();
$employee1->name='Иван';
$employee1->salary=5000;

echo $employee1->name;
echo $employee1->doubleSalary();