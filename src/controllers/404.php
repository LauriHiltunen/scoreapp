<?php

echo "<title>Tulokset</title>
</head>
<body>
    <h1>404</h1>
    <h2>" . htmlspecialchars(parse_url($_SERVER["REQUEST_URI"])["path"]) . "</h2>
</body>";
http_response_code(404);