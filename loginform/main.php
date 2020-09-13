<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/mainstyle.css">

</head>

<body>

    <header>
        <div class="nav">
            <h2><a href="main.php" style="text-decoration: none; color:white"> OPEN<a></h2>

            <div class="right">
                <div class="name">
                    <?php
                        echo "Merhaba " . $_SESSION['adi'] . ", siteye giris yaptınız.<br />";
                    
                    ?>
                </div>
                <form action="index.php" method="post">
                    <button> log out
                    </button>
                </form>
            </div>
        </div>
    </header>



    <div class="section1">
        <div class="section1-item1">
            <div class="section-item-contain1">
                <a href="news1.php" style="font-size:35px; text-decoration:none; display:grid; place-items:center; "> news 1</a>
                <p>
                    He watched as the young man tried to impress everyone in the room with his intelligence. There was no doubt that he was smart. The fact that he was more intelligent than anyone else in the room could have been easily deduced, but nobody was really paying any attention due to the fact that it was also obvious that the young man only cared about his intelligence.
                </p>
            </div>
        </div>
        <div class="section1-item2">
            <div class="section-item-contain2">
                <a href="news2.php" style="font-size:35px; text-decoration:none; display:grid; place-items:center; "> news 2</a>

                <p>
                    Stranded. Yes, she was now the first person ever to land on Venus, but that was of little consequence. Her name would be read by millions in school as the first to land here, but that celebrity would never actually be seen by her. She looked at the control panel and knew there was nothing that would ever get it back into working order. She was the first and it was not clear this would also be her last.
                </p>
            </div>
        </div>
    </div>

    <div class="section2">
        <div class="section2-item1">
            <a href="news3.php" style="font-size:35px; text-decoration:none; display:grid; place-items:center; "> news 3</a>

            <p>
                Sometimes it's the first moment of the day that catches you off guard. That's what Wendy was thinking. She opened her window to see fire engines screeching down the street. While this wasn't something completely unheard of, it also wasn't normal. It was a sure sign of what was going to happen that day. She could feel it in her bones and it wasn't the way she wanted the day to begin. </p>

        </div>
    </div>
</body>

</html>