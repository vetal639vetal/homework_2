<?php
echo "Hi people!";

$array=[5,7,8,10,16,2,4,5,6,7,8];
$lastKey=array_key_last($array);
echo $lastKey;
//result - 10

echo 'Хешированный пароль по-Argon2i: ';
echo password_hash('Pizburg17', PASSWORD_ARGON2I);
//*i$v=19$m=1024,t=2,p=2$dXpEdWNxOXJnd25OaHNNRA$ymoRW7nlKe1e+ow2804CHotIJC/zpli+YDWOkuR1xv0

echo 'обьявление типа возвращаемого значения';
function sum($a, $b): float {
    return $a + $b;
}

// Будет возвращаться значение типа float.
var_dump(sum(1, 2));
//result: float(3)

//добавление модификаторов видимости для констант в классе...
class Something
{
//обычная константа - имеет паблик модификатор
    const SOME_CONST = 0;
    //константы с разными областями видимости
    private const SOMEOTHER_CONST = 0;
    protected const SOMEONE_CONST = 0;
}

//в свойствах класса теперь есть типы
class Worker
{
    public float $salary;
    public string $name;
}

//можно перезаписывать абстрактные функции
abstract class A
{
    abstract function check (string $s);
}

abstract class B extends A
{
    abstract function check ($s) : int;
}

//Можно определить константу типа array с помощью функции define().
//В PHP 5.6 такие константы можно было задавать только с помощью const.

define('CARS', [
    'dogge',
    'ford',
    'volkswagen'
]);

echo ANIMALS[3]; // выводит "cat"


