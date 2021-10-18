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
        foreach ($params as $key => $value) {
            $$key = $value;     //key => name / double variable => $variable = $key; 
        }
        ob_start();
        include_once $this->VIEWS_DIR."$view.php";
        return ob_get_clean();
    }

    public function getLayout()
    {
        ob_start();
        include_once $this->VIEWS_DIR."Layouts/main.php";
        return ob_get_clean();
    }
}