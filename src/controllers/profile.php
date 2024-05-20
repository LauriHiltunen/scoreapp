<?php
session_start();

if(isset($_SESSION['user'])) {
    try {
       $userModel = new \Models\UserModel;

        $user = $userModel->getUser() ;
    }
    catch(Exception $e) {
        echo "VIRHE " + $e->getCode();
    }
    
}



echo "<title>Profiili</title>
<link rel='stylesheet' href='/taitaja/resources/profile.css'>
</head>
<body>
    <div class='wrapper'>
        <form>

        </form>
    </div>
    
</body>";