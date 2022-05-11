<?php

include_once "auto-load.php";

//$p1 = new Person("HHZ",28,"male");
//print_r($p1);
//print_r($p1->intro());
//
//echo "\n";
//
//$p2 = new Person("Su Su",26,"female");
//print_r($p2);
//print_r($p2->intro());

//$st1 = new Student("Kyaw Kyaw",20,"male","WAD",8,32);
//print_r($st1);

//$db = new Database();
//print_r($db);
//
$t1 = new TextFilter("aaaMin <h1>Hacker Gyi</h1> Ga Lar Parbbb");
print_r($t1->makeTrim("a")->makeTrim("b")->makeEntity()->makeStripSlash()->text);

//$test1 = new Test();
//print_r($test1->one()->three()->two()->one()->two());