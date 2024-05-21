<?php

/*
  This script stores all essential variables
*/

const ROOT_DIR = __DIR__;

const ROOT_URL = "/taitaja/";

const DB_HOST = "localhost";
const DB_NAME = "taitaja";
const DB_PASSWORD = "";
const DB_USER = "root";

// The next variable holds all file paths to the scripts which are intended to be ran for certain urls
const PATHS = [
    ROOT_URL => ROOT_DIR . "/src/controllers/home.php",
    ROOT_URL . "login" => ROOT_DIR . "/src/controllers/login.php",
    ROOT_URL . "register" => ROOT_DIR . "/src/controllers/register.php",
    ROOT_URL . "api/getUser" => ROOT_DIR . "/src/controllers/getUser.php",
    ROOT_URL . "api/register" => ROOT_DIR . "/src/controllers/regUser.php",
    ROOT_URL . "api/login" => ROOT_DIR . "/src/controllers/logUser.php",
    ROOT_URL . "profile" => ROOT_DIR . "/src/controllers/profile.php"
];

