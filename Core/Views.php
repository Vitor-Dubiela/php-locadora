<?php

namespace src\Core;

class Views
{
    public function renderView($view, $title, $params = [])
    {
        $layout = $this->getLayout();

        if ($view === 'notfound') {
            $layoutContent = file_get_contents(__DIR__ . "/../Views/Err/$view.php");
            return self::renderNotFound($title, $layoutContent, $layout);
        }

        $layoutContent = $this->getLayoutContent($view, $params);
        return str_replace(["{{title}}", "{{content}}"], [$title, $layoutContent], $layout);
    }

    protected static function renderNotFound($title, $layoutContent, $layout)
    {
        return str_replace(["{{title}}", "{{content}}"], [$title, $layoutContent], $layout);
    }

    public function getLayoutContent($view, $params = [])
    {
        var_dump($params);
        exit;
        return file_get_contents(__DIR__ . "/../Views/$view.php");
    }

    public function getLayout()
    {
        return file_get_contents(__DIR__ . "/../Views/Layouts/main.php");
    }
}
