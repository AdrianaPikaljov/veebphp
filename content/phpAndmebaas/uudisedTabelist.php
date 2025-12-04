<?php
require("config.php");
//kustutamine
global $connect;
if(isset($_REQUEST["kustuta"])){
    $paring=$connect->prepare("DELETE FROM uudised WHERE uudisId=?");
    $paring->bind_param("i",$_REQUEST["kustuta"]);
    //i-integer, s-string, d-double
    $paring->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Uudised SQL andmebaasist</title>
    <link rel="stylesheet" href="style.css">
    <table>
        <tr>
            <th>JRK</th>
            <th>pealkiri</th>
            <th>kuupaev</th>
            <th>kirjeldus</th>
            <th>tuju</th>
        </tr>

</head>
<body>
<h1>Uudiste tabeli sisu</h1>
<?php
global $connect;
$paring=$connect->prepare("SELECT uudisId, pealkiri, kuupaev, kirjeldus, tuju from uudised");
$paring->bind_result($id, $pealkiri, $kuupaev, $kirjeldus, $tuju);
$paring->execute();

while($paring->fetch()) {
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td bgcolor='$tuju'>" . $pealkiri . "</td>";
    echo "<td>" . $kuupaev . "</td>";
    echo "<td>" . $kirjeldus . "</td>";
    echo "<td>" . $tuju . "</td>";
    echo "<td><a href='?kustuta=$id'>kustuta</a></td>";
    echo "</tr>";
}
?>
</table>
<a href="lisauudis.php">Lisa uudis</a>
<a href="uudisedTabelistLink.php">Uudiste loend</a>
</body>
</html>