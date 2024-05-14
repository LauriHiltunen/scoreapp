<?php
namespace Core;

class Router
{

    function path_to_controller($path, $paths, $not_found)
    {
        if (array_key_exists($path, $paths)) {
            require_once $paths[$path];
        } else {
            require_once $not_found;
        }
    }
}
