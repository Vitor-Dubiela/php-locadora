<?php

namespace src\Core;

class Views
{
    public function renderView($view)
    {
        $mainpage = file_get_contents(__DIR__ . "/../Views/Layouts/main.php");
        $title = self::getTitle($view);

        if ($view === 'notfound') {
            $layout = file_get_contents(__DIR__ . "/../Views/Err/$view.php");
            return self::getLayout($title, $layout, $mainpage);
        }

        $layout = file_get_contents(__DIR__ . "/../Views/$view.php");

        return self::getLayout($title, $layout, $mainpage);
    }

    protected static function getLayout($title, $layout, $mainpage)
    {
        return str_replace(["{{title}}", "{{content}}"], [$title, $layout], $mainpage);
    }

    protected static function getTitle($view)
    {
        switch ($view) {
            case 'home':
                return "Home";

            case 'movies':
                return "Movies";

            case 'notfound':
                return "404 Not Found";
        }
    }
}
