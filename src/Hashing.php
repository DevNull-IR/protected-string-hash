<?php

namespace Hashing;

/**
 * @method bool checkHash(string $string, string $hashed, ?bool $numerical = false)
 * @method string numerical(string $string)
 * @method string generate(string $string)
 */
class Hashing
{
    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public static function __callStatic($method, $args)
    {
        $hash = new Hash();

        return $hash->$method($args);
    }

}