<?php

namespace core\Middlewares;


class Guest
{
    public function handle()
    {
        if ($_SESSION['user'] ?? false) {
            header('location: /website/public');
            exit();
        };
    }
}
