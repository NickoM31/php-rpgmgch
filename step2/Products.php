<?php  
require_once 'Vegetable.php';
require_once 'Cloth.php';


$fruit1 = new Vegetable('1', 'Babylone seed', 'Framboise', '2018','5');
$fruit2 = new Vegetable('2', 'Babylone seed','Ananas','2018', '50');

$cloth1 = new Cloth('3','Pippo & Poppi','Sweat','100');
$cloth2 = new Cloth('4','Dolce Banana','Chausettes','200');
$cloth3 = new Cloth('5','Hermies','Pull','500');

$clothables = [$fruit1, $fruit2, $cloth1, $cloth2, $cloth3];
return $clothables;



