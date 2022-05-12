<?php

$dataArray = [
    "name" => "zaw zaw",
    "phone" => "09234234234",
    "user_id" => rand(1,3)
];

print_r(join(",",array_keys($dataArray)));
echo "\n";
$dataArrayValues = array_values($dataArray);
$b = array_map(function ($i){
    return "'$i'";
},$dataArrayValues);

print_r(join(",",$b));

//insert into contact (name,phone,user_id) values ('zaw zaw','0923423324','5');