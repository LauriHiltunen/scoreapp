<?php

echo "<title>Tulokset</title>
<link rel='stylesheet' href='/taitaja/resources/users.css'>

</head>
<body>
    
    <div class='wrapper'>
        <form id='main-form' class='border full' action='/api/login' method='post'>
            <div class='logo-container'>
                <img src='/taitaja/resources/logo.png' class='logo' alt='logo with dark background'>
            </div>
            <div id='login-inputs'>
                <div class='input-wrapper'>
                    <label for='username'>Käyttäjän nimi</label>
                    <input type='text' placeholder='Kirjoita käyttäjänimi' class='login-text-input' name='username' id='username'>
                </div>
                <div class='input-wrapper'>
                    <label for='password'>Salasana</label>
                    <input type='password' placeholder='Kirjoita salasana' class='login-text-input password-input' name='password'>
                </div>
                <div class='input-wrapper'>
                    <label for='password'>Vahvista salasana</label>
                    <input type='password' placeholder='Kirjoita salasana uudelleen' class='login-text-input password-input' name='password'>
                </div>
                <div class='input-wrapper'>
                    <p id='passwordsWrongP' style='display:none;margin:0;font-size:0.8rem;'></p>
                </div>
                <div class='form-buttons'>
                    <a href='/taitaja/login'>Minulla on jo käyttäjä</a>
                    <input type='submit' value='Luo käyttäjä'>
                </div>
            </div> 
        </form>
    </div>
    <script type='module' src='/taitaja/resources/register.js'></script>
</body>";
