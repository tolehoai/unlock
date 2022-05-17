<?php

namespace Tolehoai\Mvc\Core;

class Application
{
    public static string $ROOT_DIR;
    public Route $route;
    public Request $request;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->route = new Route($this->request);
    }

    public function run()
    {
        $this->route->resolve();
    }
}