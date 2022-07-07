namespace src;
<?php

class Task1
{
    public static function main($inputNumber): string
    {
        if (gettype($inputNumber) !== 'integer' || !is_int($inputNumber)) {
            //throw new InvalidArgumentException();
            return InvalidArgumentException::class;
        }

        return $inputNumber > 30 ? 'More than 30' : ($inputNumber > 20 ? 'More than 20' : ($inputNumber > 10 ? 'More than 10' : 'Equals or less than 10'));
    }
}

print_r(Task1::main('123'));
