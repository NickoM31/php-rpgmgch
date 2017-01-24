<?php 
require 'Client.php';
require_once 'Products.php';
require_once 'Users.php';




$client1->buy($fruit1);

$client2->buy($cloth2);
$client2->buy($fruit2);


echo $client1->getBillAmount();

echo $client2->getBillAmount();








 