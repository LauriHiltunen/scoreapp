<?php
const PATHS = [
    "/taitaja/" => __DIR__ . "/src/controllers/home.php",
    "/taitaja/login" => __DIR__ . "/src/controllers/login.php",
    "/taitaja/register" => __DIR__ . "/src/controllers/register.php",
    "/taitaja/api/getUser" => __DIR__ . "/src/controllers/getUser.php",
    "/taitaja/api/register" => __DIR__ . "/src/controllers/regUser.php",
    "/taitaja/api/login" => __DIR__ . "/src/controllers/logUser.php"
];
const DB_HOST = "localhost";
const DB_NAME = "taitaja";
const DB_USER = "root";
const DB_PASSWORD = "";