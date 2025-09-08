<?php

namespace core\Middlewares;


class Auth
{
    public function handle()
    {
        if (!$_SESSION['user'] ?? false) {
            header('location: /website/public');
            exit();
        };
    }
};
