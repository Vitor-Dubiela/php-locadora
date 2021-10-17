<?php

namespace src\Core;

class Views
{
    public function renderView($view)
    {
        $layout = self::getLayout();
        $title = self::getTitle($view);

        if ($view === 'notfound') {
            $layoutContent = file_get_contents(__DIR__ . "/../Views/Err/$view.php");
            return self::renderLayout($title, $layoutContent, $layout);
        }

        $layoutContent = file_get_contents(__DIR__ . "/../Views/$view.php");

        return self::renderLayout($title, $layoutContent, $layout);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = call_user_func($viewContent);
        $layout = self::getLayout();
        return str_replace("{{content}}", $layoutContent, $layout);
    }

    protected static function renderLayout($title, $layoutContent, $layout)
    {
        return str_replace(["{{title}}", "{{content}}"], [$title, $layoutContent], $layout);
    }

    protected static function getLayout()
    {
        return file_get_contents(__DIR__ . "/../Views/Layouts/main.php");
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
