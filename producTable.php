<?php 
$prods = require_once'Products.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<h1>Ils sont frais mes habits!!!</h1>
	<table class="ui table">
		<th>Réf</th>
		<th>Nom</th>
		<th>Prix</th>
		<th>Producteur/Marque</th>
		<th>Dlc</th>
		

		<tr>
			<?php 
			foreach ($prods as $prod) :?>
			<td><?= $prod->getId()?></td>
			<td><?= $prod->getName()?></td>
			<td><?= $prod->getPrice()?>€</td>
			<?php  if (is_a($prod, "Vegetable")): ?>
				<td><?= $prod->getProductorName()?></td>
				<td><?= $prod->getExpiresAt()?></td>
			<?php  else: ?>
				<td><?= $prod->getBrand()?></td>
			<?php endif ?>
		</tr>


	<?php endforeach;?>
</table>
</body>
</html>