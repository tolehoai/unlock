<?php

namespace Tolehoai\Mvc\Core;

class Route
{
    protected array $route = [];
    public Request $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback){
        $this->route['get'][$path] = $callback;

    }

    public function resolve()
    {
      $path = $this->request->getPath();
      $method = $this->request->getMethod();
      $callback = $this->route[$method][$path] ?? false;
      if($callback===false){
          $callback=$this->route['get']['/404'];
      }
      if(is_string($callback)){
          return $this->renderView($callback);
      }

      return call_user_func($callback);
    }

    private function renderView(string $view)
    {
       include_once __DIR__."/../View/$view.php";
    }


}