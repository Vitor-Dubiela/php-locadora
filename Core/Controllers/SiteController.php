<?php

namespace src\Core\Controllers;

use src\Core\Models\Account;
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

    public function renderForm()
    {
        return $this->viewService->renderView('contact-form', 'Sign Up');
    }
}
