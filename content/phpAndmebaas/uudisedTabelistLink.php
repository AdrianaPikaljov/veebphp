<?php
require "config.php";
global $connect;
if(isset($_REQUEST['uusuudis']))
if(isset($_REQUEST['nimi'])&& $_REQUEST['nimi']!==0){
    $paring=$connect->prepare("INSERT INTO uudised(pealkiri, kuupaev,kirjeldus,tuju) Values(?,?,?,?)");
    $paring->bind_param("ssss",$_REQUEST['nimi'], $_REQUEST['kuupaev'], $_REQUEST['kirjeldus'], $_REQUEST['tuju']);
    $paring->execute();
    $paring->close();
    //header("Location:uudisedTabelist.php");
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Uudised SQL andmebaasist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Uudiste loend</h1>
<div id="menyy">
    <ul>
    <?php
    global $connect;
    $paring=$connect->prepare("SELECT uudisId, pealkiri from uudised");
    $paring->bind_result($id, $pealkiri);
    $paring->execute();

    while($paring->fetch()) {
        echo "<li><a href='?id=$id'>" .$pealkiri. "</li>";

        echo "<li><a href='?lisamine=jah?'>Lisa uudis</a></li>";
    }
    ?>

    </ul>
</div>
<div id="sisu">
    <?php
    global $connect;
    if(isset($_REQUEST['id'])) {
        $paring = $connect->prepare("SELECT uudisId, pealkiri, kuupaev, kirjeldus, tuju from uudised where uudisId = ?");
        $paring->bind_result($id, $pealkiri, $kuupaev, $kirjeldus, $tuju);
        $paring->bind_param("i", $_REQUEST['id']);
        $paring->execute();

        if ($paring->fetch()) {
            echo"<h2>".$pealkiri."</h2>";
            echo"<div>".$kuupaev.",".$tuju,",".$kirjeldus."</div>";
            echo"<img src='$kirjeldus' alt='pilt'>";
        }
    }
    if(isset($_REQUEST['lisamine'])) {
    ?>
    <form action="">
        <input type="hidden" value="jah" name="uusuudis" >
        <label for="nimi">Pealkiri</label>
        <input type="text" name="nimi" id="nimi">
        <br>
        <label for="kuupaev">Kuupaev</label>
        <input type="date" name="kuupaev" id="kuupaev">
        <br>
        <label for="kirjeldus">Kirjeldus</label>
        <input type="text" name="kirjeldus" id="kirjeldus">
        <br>
        <label for="tuju">Tuju</label>
        <input type="color" name="tuju" id="tuju">
        <input type="submit" value="lisa">
    </form>
    <?php
    }
   ?>
</div>

<a href="uudisedTabelistLink.php">Uudiste loend</a>
</body>
</html>