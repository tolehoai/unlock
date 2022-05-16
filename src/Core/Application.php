<?php

namespace Tolehoai\Mvc\Core;

class Application
{
    public Route $route;
    public Request $request;
    public static string $ROOT_DIR;
    public function __construct($rootPath)
    {
        $this->request = new Request();
        $this->route = new Route($this->request );
    }
    public function run(){
        $this->route->resolve();
    }
}