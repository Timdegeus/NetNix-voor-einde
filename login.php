<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    header("Location: gebruikerspaneel.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetNix</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id = "container">
        <nav>
            <a href="#"><img src="img/netnix.svg" alt="logo" id="logo"></a>
        </nav>
        <h1>Inloggen gebruikerspaneel</h1>
        <form action="login.php" method="post">
            <div>
                <label for="email">E-mailadres</label>
                <input type="text" placeholder="Vul e-mailadres in" name="email" id="email" value="">
            </div>
            <div>
                <label for="password">Wachtwoord</label>
                <input type="password" placeholder="Vul wachtwoord in" name="password" id="password" value="">
            </div>
            <div>
            <button type="submit" name="submit">Inloggen</button>
            </div>
        </form>    
    </div>
</body>
</html>

