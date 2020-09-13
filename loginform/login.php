<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="js/login.js">

</head>

<body>

    <div class="log">
        <div class="loginpanel">
            <div class="img">
                <img src="img/log.jpg" alt="">
            </div>
            <div class="form">

                <form action="login.php" method="post">

                            <p>Kullanıcı Adı <p>
                            <input type="text" class="input" name="Kullanici" id="kullanici" placeholder="kullanıcıadı">
                            </br>
                          
                            <p>Şifre<p>
                            <input type="password" class="input" id="sifre" name="sifre" placeholder="sifre"></br>

                            <button class="btn">LOGIN</button>

                            <div class="hata">
                                <?php if($_POST && isset($_POST['Kullanici'], $_POST['sifre'])){
                                    $kullaniciadi = $_POST["Kullanici"];
                                    $sifre = $_POST["sifre"];
                                    $_SESSION["adi"]        =    $kullaniciadi;
                                    $_SESSION["sifresi"]    =    $sifre;
                                    if(!$kullaniciadi) {
                                        $errorMsg = "<p style='color:red;'>Kullanıcıadı giriniz!</p>";
                                        echo $errorMsg;
                                      } elseif(!$sifre) {
                                        $errorMsg = "<p style='color:red;'>sifre giriniz!</p>";
                                        echo $errorMsg;
                                      } 
                                      else{
                                          header("location:main.php"); 
                                      }
                                    
                                    
                                    } ?>
                            </div>

                </form>
            </div>
        </div>

    </div>

</body>

</html>