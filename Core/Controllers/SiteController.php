<?php

namespace src\Core\Controllers;

use src\Core\Services\ViewService;

class SiteController
{
    protected ViewService $viewService;

    public function __construct()
    {
        $this->viewService = new ViewService();
    }

    public function home()
    {
        return $this->viewService->renderView('home', 'Home');
    }

    public function movies()
    {
        $params = [
            'name' => 'Its Fumas'
        ];
        return $this->viewService->renderView('movies', 'Movies', $params);
    }

    public function handleMovie()
    {
        return "Handling movie...";
    }
}
