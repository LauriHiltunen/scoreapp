<?php

echo "<title>Tulokset</title>
<link rel='stylesheet' href='/taitaja/resources/users.css'>
</head>
<body>
    
    <div class='wrapper'>
        <form id='main-form' class='border full' action='/taitaja/api/login' method='post'>
            <!-- <div class='logo-container'>
                <img src='/taitaja/resources/logo.png' class='logo' alt='logo with dark background'>
            </div> -->
            <div id='login-inputs'>
                <div class='input-wrapper'><h1>Kirjaudu</h1></div>
                <div class='input-wrapper'>
                    <label for='username'>Käyttäjän nimi</label>
                    <input type='text' placeholder='Kirjoita käyttäjänimi' class='login-text-input' name='username' id='username'>
                </div>
                <div class='input-wrapper'>
                    <label for='password'>Salasana</label>
                    <input type='password' placeholder='Kirjoita salasana' class='login-text-input' name='password'>
                </div>
                <div class='form-buttons'>
                    <a href='/taitaja/register'>Haluan luoda käyttäjän</a>
                    <input type='submit' value='Kirjaudu'>
                </div>
            </div> 
            <div class='bottom-banner'></div>   
        </form>
    </div>
</body>";
