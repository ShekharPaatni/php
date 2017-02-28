<?php
$arr =[1,5,6,8,9];
if(is_array($arr))

$al=count($arr);
echo $al;
foreach($arr as $a)
echo $a;
$assarr=[];

$assarr["a"]="b";

$assarr["b"]="a";
foreach($assarr as $k=>$value)
echo $k."<br>".$value;

$key=array_keys($assarr);
print_r ($key);

$value=array_values($assarr);
print_r($value);
echo "<br><br>";
$key=['a','b','c'];
$value=[1,2,3];
$dekh=	($key,$value);
print_r($dekh);


?>
