<?php 
$users = require('users.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>POO</h1>
	<table>
       <thead>
         <tr>
           <td>Id</td>
           <td>Email</td>
           <td>Créé le</td>
         </tr>
       </thead>
       <tbody>
         <?php
         foreach ($users as $key => $user) :
           ?>
           <tr>
             <td>
               <?= $user->getId(); ?>
             </td>
             <td>
               <?= $user->getEmail(); ?>
             </td>
             <td>
               <?= $user->getCreatedAt(); ?>
             </td>
           </tr>
        <?php
          endforeach;
         ?>
       </tbody>
     </table>
</body>
</html>