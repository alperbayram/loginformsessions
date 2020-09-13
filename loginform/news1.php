<?php
session_start();
function pagee()
{
    if (isset($_SESSION["adi"]) && isset($_SESSION["sifresi"])) {
        echo $_SESSION["adi"];
    } else {
        header("Location:hata.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news1</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/mainstyle.css">

</head>

<body>

    <header>
        <div class="nav">
            <h2><a href="main.php" style="text-decoration: none; color:white"> OPEN<a></h2>



            <form action="index.php" method="post">
                <button>log out
                </button>
            </form>

        </div>
    </header>

    <?php pagee(); ?>
    <div class="news1">


        <div class="news1-item">
            <a href="#" style="font-size:45px; text-decoration:none; display:grid; place-items:center; "> NEWS 1</a>

            <p>
                There once lived an old man and an old woman who were peasants and had to work hard to earn their daily bread. The old man used to go to fix fences and do other odd jobs for the farmers around, and while he was gone the old woman, his wife, did the work of the house and worked in their own little plot of land.
                "Are you getting my texts???" she texted to him. He glanced at it and chuckled under his breath. Of course he was getting them, but if he wasn't getting them, how would he ever be able to answer? He put the phone down and continued on his project. He was ignoring her texts and he planned to continue to do so.
                It was a concerning development that he couldn't get out of his mind. He'd had many friends throughout his early years and had fond memories of playing with them, but he couldn't understand how it had all stopped. There was some point as he grew up that he played with each of his friends for the very last time, and he had no idea that it would be the last.
                It was easy to spot her. All you needed to do was look at her socks. They were never a matching pair. One would be green while the other would be blue. One would reach her knee while the other barely touched her ankle. Every other part of her was perfect, but never the socks. They were her micro act of rebellion.
                There was no time. He ran out of the door without half the stuff he needed for work, but it didn't matter. He was late and if he didn't make this meeting on time, someone's life may be in danger.
                His parents continued to question him. He didn't know what to say to them since they refused to believe the truth. He explained again and again, and they dismissed his explanation as a figment of his imagination. There was no way that grandpa, who had been dead for five years, could have told him where the treasure had been hidden. Of course, it didn't help that grandpa was roaring with laughter in the chair next to him as he tried to explain once again how he'd found it.
                Sometimes that's just the way it has to be. Sure, there were probably other options, but he didn't let them enter his mind. It was done and that was that. It was just the way it had to be.
                She sat in the darkened room waiting. It was now a standoff. He had the power to put her in the room, but not the power to make her repent. It wasn't fair and no matter how long she had to endure the darkness, she wouldn't change her attitude. At three years old, Sandy's stubborn personality had already bloomed into full view.
            </p>
        </div>
    </div>


</body>

</html>