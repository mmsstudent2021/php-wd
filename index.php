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
//$t1 = new TextFilter("aaaMin <h1>Hacker Gyi</h1> Ga Lar Parbbb");
//print_r($t1->makeTrim("a")->makeTrim("b")->makeEntity()->makeStripSlash()->text);

//$test1 = new Test();
//print_r($test1->one()->three()->two()->one()->two());

$contacts = new Contact("contacts");
//print_r($contacts->where("id","=",3)->orWhere("user_id","=",2));
//print_r($contacts->create(["name"=>"hhh".rand(1,99),"phone"=>"09232342".rand(11,99),"user_id"=>2]));
print_r($contacts->delete(15));

//$users = new User("users");
//print_r($users->where("name","like","%s%")->get());

//select * from students where id < 10 and gender = male and age > 18
//insert into contact (columns) values (values);