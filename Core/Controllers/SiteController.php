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
        $params = [
            'name' => 'Its Fumas'
        ];
        return $this->viewService->renderView('home', 'Home', $params);
    }

    public function movies()
    {
        return $this->viewService->renderView('movies', 'Movies');
    }

    public function handleMovie()
    {
        return "Handling movie...";
    }
}
