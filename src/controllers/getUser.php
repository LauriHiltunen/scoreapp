<?php
header('Content-Type: application/json; charset=utf-8');

if (isset($_GET['username'])) {

    $userModel = new \Models\UserModel(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
    if ($userModel->userExists($_GET['username'])) {
        echo json_encode([true]);
    } else {
        echo json_encode([]);
    }
}