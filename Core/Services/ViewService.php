<?php

namespace src\Core\Services;

class ViewService 
{
    protected string $VIEWS_DIR = (__DIR__ . "/../../Core/Views/");

    public function renderView($view, $title, $params = [])
    {
        $layout = $this->getLayout();

        if ($view === 'notfound') {
            $layoutContent = file_get_contents($this->VIEWS_DIR."Err/$view.php");
            return str_replace(["{{title}}", "{{content}}"], [$title, $layoutContent], $layout);
        }

        $layoutContent = $this->getLayoutContent($view, $params);
        return str_replace(["{{title}}", "{{content}}"], [$title, $layoutContent], $layout);
    }

    public function getLayoutContent($view, $params = [])
    {
        return file_get_contents($this->VIEWS_DIR."$view.php");
    }

    public function getLayout()
    {
        return file_get_contents($this->VIEWS_DIR."Layouts/main.php");
    }
}