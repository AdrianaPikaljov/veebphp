<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tööd</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="js/muusikud.js" defer></script>

    <script src="js/ajafunk.js"></script>
</head>
<body>



<script src="js/raamatukogu.js"></script>

</body>
</html>
<?php
//päis
include("header.php");
?>
<?php
//navigeerimidmenüü
include("nav.php");
?>
<div class = "container">
    <div>
        <?php
        if (isset($_GET['link'])){
            include('content/'.$_GET['link']);
        }else{
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/nagu.png" alt="pilt vabal valikul">
        <table id = "synipaev">
            <tr>
                <td>
                    <input type="button" value="TÄNA ON" onclick="tana()">
                    <input type="button" value="Minu sünnipäevani 2007,07,26" onclick="synnipaev()">
                    <div id="tulemus"></div>

                </td>
            </tr>
        </table>
    </div>

</div>

<?php
//jalus
include("footer.php");
?>

<script src="js/raamatukogu.js"></script>

</body>
</html>