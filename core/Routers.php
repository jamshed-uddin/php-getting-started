<?php

namespace core;

class Routers
{
    protected $routes = [];

    public function add($uri, $method, $controller)
    {
        $this->routes[] = compact('uri', 'method', 'controller');
    }

    public function get($uri, $controller)
    {
        $this->add($uri, 'GET', $controller);
    }
    public function post($uri, $controller)
    {
        $this->add($uri, 'POST', $controller);
    }
    public function put($uri, $controller)
    {
        $this->add($uri, 'PUT', $controller);
    }
    public function patch($uri, $controller)
    {
        $this->add($uri, 'PATCH', $controller);
    }
    public function delete($uri, $controller)
    {
        $this->add($uri, 'DELETE', $controller);
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
        foreach ($this->routes as $route) {

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                return require base_path($route['controller']);
            };
        }
        $this->abort();
    }
}
