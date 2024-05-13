<?php
namespace Core;
function path_to_controller($path, $paths, $not_found)
{
    if (array_key_exists($path, $paths)) {
        return $paths[$path];
    } else {
        return $not_found;
    }
}