<?php

namespace src\Core;

class Views
{
    public function renderView($view)
    {
        if ($view === 'notfound') {
            return file_get_contents(__DIR__ . "/../Views/Err/notfound.php");
        }
        
        $template = file_get_contents(__DIR__ . "/../Views/Templates/$view.php");
        $mainpage = file_get_contents(__DIR__ . "/../Views/main.php");
        $title = self::getTitle($view);

        return self::getTemplate($title, $template, $mainpage);
    }

    protected static function getTemplate($title, $template, $mainpage)
    {
        return str_replace(["{{title}}", "{{content}}"], [$title, $template], $mainpage);
    }

    protected static function getTitle($view)
    {
        switch ($view) {
            case 'home':
                return "Home";
        }
    }
}
