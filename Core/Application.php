<?php

namespace src\Core;

use src\Core\Services\ViewService;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public ViewService $viewService;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->viewService = new ViewService();
        $this->router = new Router($this->request, $this->response, $this->viewService);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
