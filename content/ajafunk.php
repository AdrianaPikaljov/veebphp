<?php
echo "<h2>Ajafunktsioonid</h2>";
date_default_timezone_set('Europe/Tallinn');
echo "<div class='uuscontainer'>";
echo "<h3>Funktsioonid</h3>";
echo "<a href='https://www.content.net/manual/en/timezones.europe.content'> Time zone</a>";
echo "<br>";
echo "time() - aeg sekundides" .time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s",time());
echo "<br>";
echo "date('d.m.Y G:i:s',time())";
echo "</div>";
echo "<div class='uuscontainer'>";

echo "<h3><strong>Tähendus</strong></h3>";
echo "<pre>d- päev o1...31
m- kuu 01...12
Y- aasta - nelja kohane arv
G- 24h fromaat
i- minutid 0...59
s- sekundid 0...59
";
echo "</pre>";
echo "</div>";
echo "<div class='uuscontainer'>";
echo "<h3> <strong>Tehted kuupäevaga</strong> </h3>";
echo "+1 min = time()+60 : ".date("d.m.Y G:i:s",time()+60);
echo "<br>";
echo "+1 tunt = time()+60*60 : ".date("d.m.Y G:i:s",time()+60*60);
echo "<br>";
echo "+1 päev = time()+60*60*24 : ".date("d.m.Y G:i:s",time()+60*60*24);
echo "<br>";
echo "</div>";
echo "<div class='uuscontainer'>";
echo "<h3><strong>Kuupäeva genereerimine</strong></h3>";
echo "<br>";
echo "mktime(tuunid,minutid,kuu,päevad, aasta)";
echo "<br>";
$synd=mktime(7,05,05,02,13,2008);
echo" minu sünipäev: ".date("d.m.Y G:i:s",$synd);
echo "<br>";
echo "</div>";
echo "<div class='uuscontainer'>";
echo "<h3>Massivi abil näidata kuu  nimega</h3>";

$kuud=array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august',
    'september', 'oktoober', 'november', 'detcember');
$aasta=date("Y");
$paev=date("d");
$kuu=$kuud[date("m")];

echo "Täna on".$paev.".".$kuu." ".$aasta."a.";
echo "</div>";