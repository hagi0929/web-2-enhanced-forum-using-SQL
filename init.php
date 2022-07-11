<?php
function connect(): bool|mysqli
{
    $f = fopen('key.txt', 'r');
    $hostname = trim(htmlspecialchars(fgets($f)));
    $username = trim(htmlspecialchars(fgets($f)));
    $password = trim(htmlspecialchars(fgets($f)));
    $database = trim(htmlspecialchars(fgets($f)));
    return mysqli_connect(
        $hostname,
        $username,
        $password,
        $database
    );
}

function top($title): void
{
    echo '
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="main.js"></script>
    <title>' . $title . '</title>
</head>
<body>';
}

function headerInit(): void
{
    echo '<header class="header">
    <div>
        <a href="index.php"> <h1>Forum Board</h1> </a>
    </div>
</header>';
}

function navBar($type): void
{
}

function footerInit(): void
{
    echo '
<footer>

</footer>
</body>
</html>
';
}

function loadJS(): void
{
    echo "<script src='main.js'></script>";
}

?>