<?php

namespace src\Core;

class Router
{
    protected array $routes = [];

    public Request $request;
    public Response $response;
    public Views $views;

    public function __construct($request, $response, $views)
    {
        $this->request = $request;
        $this->response = $response;
        $this->views = $views;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->views->renderView("notfound");
        }

        return $this->views->renderView($callback);
    }
}
