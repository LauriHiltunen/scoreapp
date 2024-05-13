<?php
namespace Core;
include("router.php");

$paths = ["/taitaja/add" => "controllers/add.php"];

$url = parse_url($_SERVER["REQUEST_URI"])["path"];



