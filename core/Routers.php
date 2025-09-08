<?php

namespace core;

class Routers
{
    protected $routes = [];

    public function add($uri, $method, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller,
            'middleware' => null
        ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, 'GET', $controller);
    }
    public function post($uri, $controller)
    {
        return $this->add($uri, 'POST', $controller);
    }
    public function put($uri, $controller)
    {
        return $this->add($uri, 'PUT', $controller);
    }
    public function patch($uri, $controller)
    {
        return $this->add($uri, 'PATCH', $controller);
    }
    public function delete($uri, $controller)
    {
        return $this->add($uri, 'DELETE', $controller);
    }


    // public function loadWeb($filePath){
    //     require '';
    // }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }






    protected function abort($code = 404)
    {
        http_response_code($code);
        // echo 'Route not found';
        require base_path("views/{$code}.php");
        die();
    }

    public function route($uri, $method)
    {
        // dd($this->routes);

        // dd($this->routes);
        foreach ($this->routes as $route) {

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                if ($route['middleware'] === 'guest') {
                    if ($_SESSION['user'] ?? false) {
                        header('location: /website/public');
                        exit();
                    };
                };
                if ($route['middleware'] === 'auth') {
                    if (!$_SESSION['user'] ?? false) {
                        header('location: /website/public');
                        exit();
                    };
                };

                return require base_path($route['controller']);
            };
        }
        $this->abort();
    }
}
