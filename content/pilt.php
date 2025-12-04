<?php
function clearVarsExcept($url, $varname)
{
    $url = basename($url);
    if(str_starts_with($url, '?')){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
?>
    <form name ="pilt" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method = "post">
        <select name="pildid">
            <option value="">Vali pilt</option>
            <?php
            $kataloog = 'image/pildid';
            $asukoht=opendir($kataloog);
            while($rida = readdir($asukoht)){
                if($rida!='.' && $rida!='..'){
                    echo "<option value='$rida'>$rida</option>n";
                }
            }
            ?>
        </select>
        <input type="submit" value="Vaata">
    </form>
<?php

if (!empty($_POST['pildid'])) {

    $pilt = $_POST['pildid'];
    $pildi_aadress = 'image/pildid/' . $pilt;

    $pildi_andmed = getimagesize($pildi_aadress);

    $laius = $pildi_andmed[0];
    $korgus = $pildi_andmed[1];
    $formaat = $pildi_andmed[2];

    $max_laius = 120;
    $max_korgus = 90;

    if ($laius <= $max_laius && $korgus <= $max_korgus) {
        $ratio = 1;
    } elseif ($laius > $korgus) {
        $ratio = $max_laius / $laius;
    } else {
        $ratio = $max_korgus / $korgus;
    }

    $pisi_laius = round($laius * $ratio);
    $pisi_korgus = round($korgus * $ratio);


    echo "<h3>Originaal pildi andmed</h3>";
    echo "Laius: $laius px<br>";
    echo "Kõrgus: $korgus px<br>";
    echo "Formaat: $formaat<br>";

    echo "<h3>Uue pildi andmed</h3>";
    echo "Arvutatud suhe: $ratio<br>";
    echo "Laius: $pisi_laius px<br>";
    echo "Kõrgus: $pisi_korgus px<br><br>";

    echo "<img width='$pisi_laius' height='$pisi_korgus' src='$pildi_aadress'><br>";
}
?>