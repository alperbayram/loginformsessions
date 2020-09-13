<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/indexstyle.css">

</head>

<body>

    <header>
        <div class="nav">
            <h2><a href="index.php" style="text-decoration: none; color:white"> OPEN<a></h2>

            <form action="login.php" method="post">
                <button> log out
                </button>
            </form>
        </div>
    </header>

    <div class="hatasayfasi">
        <div class="mesaj">BU SAYFAYA ERİŞİMİNİZ YOKTUR!</div>
    </div>


</body>

</html>