<?php

declare(strict_types=1);

require_once __DIR__. '/vendor/autoload.php';

$employee = new classes\Employee();
$employee->name = 'Petya';
echo $employee->name;
