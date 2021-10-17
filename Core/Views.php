<?php

namespace src\Core;

class Views
{
    public function renderView($view)
    {
        $layout = self::getLayout();

        if ($view === 'notfound') {
            $layoutContent = file_get_contents(__DIR__ . "/../Views/Err/$view.php");
            return self::renderNotFound("404 Not Found", $layoutContent, $layout);
        }

        $title = self::getTitle($view[1]);
        return $this->renderContent($title, $view);
    }

    public function renderContent($title, $view)
    {
        $layout = self::getLayout();
        $layoutContent = call_user_func($view);
        return str_replace(["{{title}}", "{{content}}"], [$title, $layoutContent], $layout);
    }

    protected static function renderNotFound($title, $layoutContent, $layout)
    {
        return str_replace(["{{title}}", "{{content}}"], [$title, $layoutContent], $layout);
    }

    protected static function getLayout()
    {
        return file_get_contents(__DIR__ . "/../Views/Layouts/main.php");
    }


    public function getLayoutContent($view)
    {
        return file_get_contents(__DIR__ . "/../Views/$view.php");
    }

    protected static function getTitle($title)
    {
        switch ($title) {
            case 'home':
                return "Home";

            case 'movies':
                return "Movies";

            case 'handleMovie':
                return "Movies";

            case 'notfound':
                return "404 Not Found";
        }
    }
}
