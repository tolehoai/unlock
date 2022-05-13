<?php

namespace Tolehoai\Mvc\Core;

class Application
{
    public Route $route;
    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
        $this->route = new Route($this->request );
    }
    public function run(){
        $this->route->resolve();
    }
}