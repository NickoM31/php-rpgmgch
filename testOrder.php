<?php 

require 'Client.php';
require_once 'Products.php';
$client1 = require_once 'Users.php';

var_dump($client1);


// $client1->buy($fruit1);

// $client2->buy($cloth2);
// $client2->buy($fruit2);



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
<h1>Commande n° 666</h1>
	<table class="ui table">
		<th>Réf</th>
		<th>Email</th>
		<th>Date création</th>
		<?php foreach ($client1 as $bobby):?>
		<tr>
			<td><?= $bobby->getId()?></td>
			<td><?= $bobby->getEmail()?></td>
			
		</tr>
		<?php endforeach;?>
	</table>
</body>
</html>









