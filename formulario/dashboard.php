<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='main.php';<script>";
    }
    
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            print "Ola, " . $_SESSION["firsname"];
        ?>
         <img src="https://st3.depositphotos.com/1104088/17529/i/1600/depositphotos_175298816-stock-photo-portrait-of-funny-and-smiling.jpg">
    </body>
</html>