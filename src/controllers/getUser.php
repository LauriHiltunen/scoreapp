<?php
header('Content-Type: application/json; charset=utf-8');
$users = [
    'pertti' => ['username' => 'pertti', 'bestScore' => 64.2]
];
if (isset($_GET['username'])) {
    if (array_key_exists($_GET['username'], $users)) {
        echo json_encode($users[$_GET['username']]);
    }
    else {
        echo json_encode([]);
    }
}