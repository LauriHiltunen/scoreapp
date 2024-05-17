<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username']) && isset($_POST['password'])) {

        try {

            $userModel = new \Models\UserModel(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);

            $userModel->login($_POST['username'], $_POST['password']);

            echo "Onnistui";

        } catch (\Exception $e) {
            echo $e->getMessage();
        }



        // header('/taitaja/');
    } else {

        // header('/taitaja/');
    }
}