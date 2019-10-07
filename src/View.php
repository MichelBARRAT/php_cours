<?php 

namespace App;

class View
{
    public static function render(string $path, array $data = null)
    {
        ($data) ? extract($data) : null;

        ob_start();
        include($path);
        $template = ob_get_contents();
        ob_end_clean();
        return $template;
    }
}