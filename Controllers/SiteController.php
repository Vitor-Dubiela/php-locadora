<?php

namespace src\Controllers;

use src\Core\Views;

class SiteController
{
    public function home()
    {
        $views = new Views();
        return $views->getLayoutContent('home');
    }

    public function movies()
    {
        $views = new Views();
        return $views->getLayoutContent('movies');
    }

    public function handleMovie()
    {
        return "Handling movie...";
    }
}
