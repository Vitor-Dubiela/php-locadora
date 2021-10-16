<?php 

namespace src\Core;

class Views
{
    public function renderView($view)
    {
        $template = file_get_contents(__DIR__ . "/../Views/Templates/$view.php");
        $mainpage = file_get_contents(__DIR__ . "/../Views/main.php");

        return str_replace(["{{title}}", "{{content}}"], ["Not Found", $template], $mainpage);
    }
}