<?php


session_start();    

if(!(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "true" && $_SESSION["token"])) 
{
    header("Location: login.php");
    exit;
}
else
{
    $token = $_SESSION["token"];
    ?>
        
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>NetNix</title>
                <link rel="stylesheet" href="css/adminPanel.css">
            </head>
            <body>
                <div id="container">
                    <nav>
                        <a href="#"><img src="img/netnix.svg" alt="logo" id="logo"></a>
                        <ul>
                            <li><a href="gebruikerspaneel.php"><b>Dashboard</a></li>
                            <li><a href="accounts.php">Accounts</a></li>
                            <li><a href="movies.php" id="selected">Movies</a></li>
                            <li><a href="series.php">Series</a></li>
                            <li><a href="subscription.php">Subscription</a></li>
                            <li><a href="logout.php">Uitloggen</b></a></li>
                        </ul>
                    </nav>
                    <div id="content">
                    <h1>Gebruikerspaneel</h1>

    <?php

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"https://netnix.xyz/api/v1/movie/get");
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer ".$token]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $server_output = curl_exec($ch);

    curl_close($ch); 

    $response = json_decode($server_output);


    foreach ($response as $movie)
    {

       ?>
        
            <?php var_dump($movie) ?>        
            </div id="content">
        <?php
    }
}   

?>

        </div>
    </body>
</html>


