<?php
$db = "stati";
$l = "";
$p = "";


$setup1 = R::setup('mysql:host=localhost;dbname='.$db, $l, $p);
R::addDatabase('stati','mysql:host=localhost;dbname=stati', $l, $p);
?>