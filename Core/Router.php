<?php

namespace src\Core;

use src\Core\Services\ViewService;

class Router
{
    protected array $routes = [];

    public Request $request;
    public Response $response;
    public ViewService $viewService;

    public function __construct($request, $response, $viewService)
    {
        $this->request = $request;
        $this->response = $response;
        $this->viewService = $viewService;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? false;
        
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->viewService->renderView("notfound", '404 Not Found');
        }
        if (is_array($callback)) {
            $callback[0] = new $callback[0]();
        }

        return call_user_func($callback, $this->request);
    }
}
