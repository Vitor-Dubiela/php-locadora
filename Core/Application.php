<?php

namespace src\Core;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public Views $views;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->views = new Views();
        $this->router = new Router($this->request, $this->response, $this->views);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
