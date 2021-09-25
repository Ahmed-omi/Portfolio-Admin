<?php
require 'db.php';
$sql = 'SELECT * FROM projects';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport"    content="width=device-width, initial-scale=1.0">

		<title>Admin</title>


		<link rel="shortcut icon" href="assets/images/logo.png">

		<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">


	</head>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Projects</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Short description</th>
					<th>Long description</th>
          <th>Category</th>
          <th>Images</th>
          <th>Delete</th>
          <th>Action</th>
          <th>Create</th>

        </tr>

      <?php

      include "clients.php";

        foreach($clients as $key => $value){
          echo
          "<tr>
          <td>". $clients[$key]['id']. "</td>
          <td>". $clients[$key]['name']. "</td>
          <td>". $clients[$key]['short_desc']. "</td>
          <td>". $clients[$key]['long_desc']. "</td>
          <td>". $clients[$key]['category']. "</td>
          <td>". $clients[$key]['images']. "</td>


          <td> <a href=\"delete.php?id= ". $clients[$key]['id'] ." \">Suprimer</a> </td>
          <td> <a href=\"edit.php?id= ". $clients[$key]['id'] ." \">Edit</a> </td>
          <td> <a href=\"create.php?id= ". $clients[$key]['id'] ." \">Create</a> </td>

          </tr>";

        };
      ?>
    </table>
  </div>
</div>
</div>

<?php require 'footer.php'; ?>
