<?php

use Hashing\Hash;
use Hashing\Hashing;


if (! function_exists("Hashing")){
    function Hashing($method, ...$args)
    {
        $hash = new Hash();
        return $hash->$method(...$args);
    }
}

if (! function_exists("str_hash")){
    function str_hash(string $string): string
    {
        return Hashing::generate($string);
    }
}

if (! function_exists("int_hash")){
    function int_hash(string $string): string
    {
        return Hashing::numerical($string);
    }
}

if (! function_exists("numerical")){
    function numerical(string $string): string
    {
        return Hashing::numerical($string);
    }
}

if (! function_exists("checkHash")){
    function checkHash(string $string, string $hashed, ?bool $numerical = false): bool
    {
        return Hashing::checkHash($string, $hashed, $numerical);
    }
}

