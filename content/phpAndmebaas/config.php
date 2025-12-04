<?php
//kasutame kohalik arvuti
//$serverinimi='localhost';
//$kasutajanimi="adrianapikaljov";
//$parool='adri123';
//$andmebaasinimi='adrianapikaljov';
//$connect=new mysqli($serverinimi,$kasutajanimi,$parool,$andmebaasinimi);
//$connect->set_charset("utf8");
//zone.ee kasutaja
$serverinimi='d141136.mysql.zonevs.eu';
$kasutajanimi="";
$parool='';
$andmebaasinimi='d141136_baasphp';
$connect=new mysqli($serverinimi,$kasutajanimi,$parool,$andmebaasinimi);
$connect->set_charset("utf8");