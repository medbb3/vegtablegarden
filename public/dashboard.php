<?php
session_start(); 
require_once __DIR__. '/../vendor/autoload.php';
require_once __DIR__. '/../src/database.php';
require_once __DIR__. '/../src/Legumesracine.php';
require_once __DIR__. '/../src/Legumefeuille.php';
require_once __DIR__. '/../src/Legumefruit.php';
$db=Database::create();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vegetable Garden</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="container">
<?php

?>


<br />
<h2>Votre simulateur de jardinage</h2>


<table class="table">
    <tr>
        <th>Légume</th>
        <th>Au potager</th>
        <th>Récoltés</th>s
    </tr>

    <tr>
        <td>Carotte</td>
        <td>0
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br />
            <a class="btn btn-primary pull-right disabled" href="#" role="button">Récolter</a></td>
        <td>0</td>
    </tr>
    <tr>
        <td>Tomate</td>
        <td>0&nbsp;

<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<br />
<a class="btn btn-primary pull-right" href="#" >Récolter</a></td>
        <td>0</td>
    </tr>
    <tr>
        <td>Pomme de terre</td>
        <td>0&nbsp;

          <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
<br />
                <a class="btn btn-primary pull-right disabled" href="#">Récolter</a>
        </td>
        <td>0</td>
    </tr>
    <tr>
        <td>Epinard</td>
        <td>
            <a class="btn btn-success pull-right" href="#">Semer / Planter</a>
        </td>
        <td>0</td>
    </tr>
</table>

</body>
</html>
