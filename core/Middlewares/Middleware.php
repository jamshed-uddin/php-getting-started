<?php

namespace core\Middlewares;

class Middleware
{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class,
    ];



    public static function resolve($key)
    {

        if (!$key) {
            return;
        }
        $middlware = static::MAP[$key] ?? false;
        if (!$middlware) {
            throw new \Exception("No middleware found for key {$key}");
        };

        // dd($middlware);

        (new $middlware)->handle();
    }
}
