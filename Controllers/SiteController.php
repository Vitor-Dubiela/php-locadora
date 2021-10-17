<?php

namespace src\Controllers;

use src\Core\Views;

class SiteController
{
    public function home()
    {
        $views = new Views();
        return $views->renderView('home', 'Home');
    }

    public function movies()
    {
        $views = new Views();
        $params = [
            'name' => 'Its Fumas'
        ];
        return $views->renderView('movies', 'Movies', $params);
    }

    public function handleMovie()
    {
        return "Handling movie...";
    }
}
