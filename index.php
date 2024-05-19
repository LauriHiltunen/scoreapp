<?php
// Including autoloader.php to load classes that are not yet required
// Including variables.php to use constant variables

include ("./autoloader.php");
include ("./variables.php");

$url = parse_url($_SERVER["REQUEST_URI"])["path"];
if (explode("/", $url)[2] != "api") {
    echo "<!DOCTYPE html>
<html lang='fi'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' type='image/png' href='/taitaja/resources/favicon.png'>";
}
// include (__DIR__."/src/core/router.php");
$router = new \Core\Router;

$router->path_to_controller($url, PATHS, __DIR__ . "/src/controllers/404.php");