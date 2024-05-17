<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_verify'])) {

        try {

            $userModel = new \Models\UserModel(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);

            $userModel->reg_user($_POST['username'], $_POST['password'], $_POST['password_verify']);

            echo "Onnistui";

        } catch (\Exception $e) {
            echo $e->getMessage();
        }



        // header('/taitaja/');
    } else {

        // header('/taitaja/');
    }
}