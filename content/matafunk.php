<?php
function clearVarsExcept($url, $varname)
{
    $url = basename($url);
    if(str_starts_with($url, '?')){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];

}
echo "<h1>Matemaatika funktsioonid</h1>";
echo "<div class='uuscontainer'>";
echo "<div>";
echo "<h2>Matemaatilised tehted</h2>";
$arv1= 1.16;
$arv2= 2.82;
echo "Esimene arv on ".$arv1." teine arv on ".$arv2;
echo "<br>";
echo "Liitmise tulemus + :(".$arv1+$arv2.")"."<br>";
echo "Lahutamise tulemus - :(".$arv1-$arv2.")"."<br>";
echo "Korrurise tulemus * :(".$arv1*$arv2.")"."<br>";
echo "Jagatise tulemus / :(".$arv1/$arv2.")"."<br>";
echo "</div>";
echo "<div>";
echo "<h2>Matemaatilised funktsioonid</h2>";
echo"Väiksem arv: ";
echo min($arv1, $arv2);
echo"<br>";
echo"Suurem arv: ";
echo max($arv1, $arv2);
echo"<br>";
echo "Ümardamine täisarvani - funk round()(arv) : ";
echo round($arv1);
echo"<br>";
echo "Ümardab jargmise arvuni ";
echo ceil($arv1);
echo"<br>";
echo "Ümardab allapoole täisarvani - floor(arv1):  ";
echo floor($arv1);
echo"<br>";
echo "Ümardab ühe komma kohtani - round(arv1, 1): ";
echo round($arv1, 1);
echo"<br>";
echo "Min 1 Max 100 juhuslik arv - rand(1, 100) : ";
echo rand(1, 100);
echo"<br>";
echo "Asendamine - pow(arv1, 2): ";
echo pow($arv1, 2);
echo"<br>";
echo "Ruutjuurt - sqrt(arv1): ";
echo sqrt($arv1);
echo"<br>";
echo "Pi arv: ";
echo pi();
echo"<br>";
echo "</div>";
echo "<div>";
echo "<h2> Omistamise operaatorid</h2>";
$x = 10;
$y = 20;
$x ++;// $x = $x+1
echo "Suurendamine ühe võrra";
echo $x;
echo "<br>";
echo "Vahendamine ühe võrra";
$x --;
echo $x;
echo "<br>";
$x*=$y;// x = x*y
echo $x;
echo "<br>";
$x/=$y;// x = x/y
echo $x;
echo "<br>";
$nimi = 'Adriana';
$perenimi = 'Pikaljov';
//$nimi .= $perenimi;
echo $nimi;
echo "<br>";
$format ='Tere, %s %s, arv x: %d';
printf($format, $perenimi,$nimi, $x);
echo "<br>";
echo "</div>";
echo "<div>";
echo "<h2>Arv mõistatus. Arva ära 2 arvu</h2>";
echo "<br>";

$num1 = 7.5;
$num2 = 2.2;

echo "<ol>";
// 1  Summa
echo "<li>Kahe arvu summa on: " . ($num1 + $num2) . "</li>";
// 2  Ruutjuured
echo "<li>Esimese arvu ruutjuur: " . sqrt($num1) .
    " ja teise arvu ruutjuur: " . sqrt($num2) . "</li>";
// 3  Korrutis
echo "<li>Arvude korrutis on: " . ($num1 * $num2) . "</li>";
// 4  Lahutades
echo "<li>Teise arvu jagamine esimesega: " . ($num1 / $num2)."</li>";
// 5  Vahe
echo "<li>Arvude vahe on: " . ($num1 - $num2) . "</li>";
// 6  Ruut
echo "<li>Esimese arvu ruut: " . $num1 *$num1.
    " ja teise arvu ruut: " . $num2*$num2 . "</li>";
echo "</ol>";
echo "</div>";
echo "</div>";
?>
    <form name ="num1kontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method = "post"
    <label for ="num1">Sisesta esimene arv</label>
    <input type="text" id="num1" name="num1">
    <input type="submit" value="Kontrolli">
    </form>

<?php
if(isset($_REQUEST["num1"])){
    if($_REQUEST["num1"] == "7.5"){
        echo $_REQUEST["num1"]." on õige";
    }else{
        echo $_REQUEST["num1"]." on vale!";
    }
}
?>
    <form name ="num2kontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method = "post"
    <label for ="num2">Sisesta teine arv</label>
    <input type="text" id="num2" name="num2">
    <input type="submit" value="Kontrolli">

    </form>
<?php
if(isset($_REQUEST["num2"])){
    if($_REQUEST["num2"] == "2.2"){
        echo $_REQUEST["num2"]." on õige";
    }else{
        echo $_REQUEST["num2"]." on vale!";
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";