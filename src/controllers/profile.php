<?php
session_start();

echo "<title>Profiili</title>
<link rel='stylesheet' href='/taitaja/resources/profile.css'>
</head>
<body>";
    


try {
    $userModel = new \Models\UserModel;

    $user = $userModel->getUser($_SESSION['user']);

    
}
catch(Exception $e) {
    echo "VIRHE " + $e->getCode();
}
    


echo "</body>";
