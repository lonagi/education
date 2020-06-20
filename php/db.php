<?php
$db = "nvgpass";
$l = "root";
$p = "";


$setup1 = R::setup('mysql:host=localhost;dbname='.$db, $l, $p); 
R::addDatabase($db,'mysql:host=localhost;dbname='.$db, $l, $p);
R::addDatabase('stati','mysql:host=localhost;dbname=stati', $l, $p);
?>