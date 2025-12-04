<?php
function clearVarsExcept($url, $varname)
{
    $url = basename($url);
    if(str_starts_with($url, '?')){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];

}
echo "<div class='uuscontainer'>";
echo "<h3>Tekstfunktsioonid</h3>";
$tekst = 'Php on skriptikeel serveripoolne';
echo $tekst;
echo "<br>";
echo "teksti pikkus - strlen() = ".strlen($tekst). "tähemärgi";
echo "<br>";
echo "esimesed 6 tähte -substr() = ".substr("$tekst",0,6);
echo "<br>";
echo "alates 6 tähest = ".substr("$tekst",6);
echo "<br>";
echo "sõnade arv lauses -str_word_count() = ".str_word_count("$tekst"). " sõna lauses";
echo "<br>";
echo "kõik tähed on suured strtoupper() = ".strtoupper("$tekst");

echo "<br>";
echo "kõik tähed on väikesed strtolower() = ".strtolower("$tekst");
echo "<br>";
echo "iga sõna algab suure tähega ucwords() = ".ucwords("$tekst");
echo "<br>";
echo "".ucwords(strtolower("$tekst"));
$tekst2 = '            Php on skriptikeel serveripoolne           ';
//trim, ltrim, rteim
echo "|".$tekst2."|";
echo "<br>";
echo "eemaldab tekstist tühikuid paremalt ja vasakult trim () = ".trim($tekst2);
echo "<br>";
echo "eemaldab tekstist tühikuid  vasakult trim () = ".ltrim($tekst2);
echo "<br>";
echo "eemaldab tekstist tühikuid paremalt  trim () = ".rtrim($tekst2);
echo "<br>";
echo "</div>";
echo "<div class='uuscontainer'>";
echo "<h3> Tekst kui massiiv</h3>";
echo "$'tekst'[0] - 1. täht massiivis : ".$tekst[0];
echo "<br>";
echo "$'tekst'[5] - 5. täht massiivis : ".$tekst[4];
echo "<br>";

print_r(str_word_count($tekst,1));
//Array ( [0] => Php [1] => on [2] => skriptikeel [3] => serveripoolne )
//määrab iga sõna nagu eraldi element
$syna = str_word_count($tekst,1);

echo "<br>";
echo "massiivist 2 sõna - ".$syna[2];
echo "<br>";

print_r(str_word_count($tekst,2));
//Array ( [0] => Php [4] => on [7] => skriptikeel [19] => serveripoolne )
//määrab mis sümbol on iga sõna alguses

echo "<br>";
echo "</div>";
echo "<div class='uuscontainer'>";
echo "<h2>Teksti asendamine - replace</h2>";
echo "<br>";
$asendus= 'JavaScript';

echo substr_replace($tekst,$asendus,0,3);
echo "<br>";
//ise vaheta serveripoolne -kliendipoolne
$otsi=array('PHP','serveripoolne');
$asendav = array('Javascript','kliendipoolne');
echo str_replace($otsi,$asendav, $tekst);
echo "<br>";
echo "</div>";
echo "<div class='uuscontainer'>";
echo "<h2>Mõistatus.Arva ära Eesti linnanimi</h2>";
echo "<br>";
//tee 5 -6 tekstfunkts mis aitavad aru saada miline linnanimi oli.


// Linnanimi
$linn = "Tartu";


echo "<ol>";

// 1 Pikkus
echo "<li>Linnanimi sisaldab " . strlen($linn) . " tähte.</li>";

// 2 Esimene ja viimane täht
echo "<li>Esimene täht: " . substr($linn, 0, 1) . "
     viimane täht: " . substr($linn, -1) . "</li>";

// 3 Suur tähtedega/väike
echo "<li>Suur tähtedega: " . strtoupper($linn) . "</li>";
echo "<li>Väike tähtedega: " . strtolower($linn) . "</li>";

// 4 Tagurpidi
echo "<li>Tagurpidi:" . strrev($linn) . "</b></li>";

// 5 Segatud tähed
echo "<li>Tähed segamini: " . str_shuffle($linn) . "</li>";

//6 Massiivv
print_r(str_word_count($linn,2));
//7
echo "<li>"."Mitu tähte on sõnades ühesugused Tartu ja Tallinn : ".similar_text($linn,"Tallinn"."</li>");
echo "</ol>";
echo "</div>";
?>
    <form name ="tekstkontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method = "post"
    <label for ="linn">Sisesta linnanimi</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">

    </form>
<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"] == "Tartu"){
        echo $_REQUEST["linn"]." on õige";
    }else{
        echo $_REQUEST["linn"]." on vale!";
    }
}