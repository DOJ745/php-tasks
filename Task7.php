<?php

namespace src;

class Task7
{
    public static function main(array $arr, int $position): array
    {
        if (gettype($arr) !== 'array') {
            throw new \InvalidArgumentException('Argument must be an array!');
        }
        array_splice($arr, $position, 1);

        return $arr;
    }
}
