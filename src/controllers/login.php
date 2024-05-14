<?php

echo "<title>Tulokset</title>
<link rel='stylesheet' href='/taitaja/resources/login.css'>
</head>
<body>
    
    <div class='wrapper'>
        <form id='login-form' class='border full' action='/api/login' method='post'>
            <div class='logo-container'>
                <img src='/taitaja/resources/logo.png' class='logo' alt='logo with dark background'>
            </div>
            <div id='login-inputs'>
                <div class='input-wrapper'>
                    <label for='username'>Käyttäjän nimi</label>
                    <input type='text' placeholder='Käyttäjänimi' class='login-text-input' name='username' id='username'>
                </div>
                <div class='input-wrapper'>
                    <label for='password'>Salasana</label>
                    <input type='password' placeholder='Salasana' class='login-text-input' name='password'>
                </div>
                <div class='form-buttons'>
                    <input type='submit' value='Kirjaudu'>
                    <a href='/taitaja/signup'>Haluan luoda käyttäjän</a>
                </div>
            </div> 
            <div class='bottom-banner'></div>   
        </form>
    </div>
</body>";
