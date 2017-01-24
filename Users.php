<?php 
require_once 'Client.php';



$client1 = new Client('bobEwing@southfork.us','1', '14/03/1978');
$client2 = new Client('jrEwing@southfork.us','2', '14/10/1977');

$clientTab = [$client1, $client2];
return $clientTab;