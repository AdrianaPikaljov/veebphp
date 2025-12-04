<?php
require "config.php";
global $connect;
if(isset($_REQUEST['nimi'])&& $_REQUEST['nimi']!==0){
    $paring=$connect->prepare("INSERT INTO uudised(pealkiri, kuupaev,kirjeldus,tuju) Values(?,?,?,?)");
    $paring->bind_param("ssss",$_REQUEST['nimi'], $_REQUEST['kuupaev'], $_REQUEST['kirjeldus'], $_REQUEST['tuju']);
    $paring->execute();
    header("Location:uudisedTabelist.php");
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Lisa uudis andmebaasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Lisa uudis</h1>
<form action="">
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
</body>
</html>