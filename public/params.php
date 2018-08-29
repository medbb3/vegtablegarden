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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Vegetable Garden</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="public/dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="public/params.php">Params</a>
      </li>
    </ul>
  </div>
</nav>


<pre>
<center>
<form name="donner" method="post" action="">
      <label for="adresse">Lanature de la legume</label>
                 <select name="nature" id="nature">
                    <option value="racine">Racine</option>
                    <option value="feuille">feuille</option>
                    <option value="fruit">fruit</option>
                  </select>
                </datalist>
        <label >Entre Nom de la légume </label>
        <input type="text" name="legumes"/><br/>
              <label >Surface allouée </label>
        <input type="number" name="surface"/><br/>
         <label >valeur PH </label>
        <input type="number" name="PH"/><br/>
        <input type="submit" name="valider" value="OK"/>
</form>
</center>
</pre>

<?php 
// récupérer les champs

if (!(empty($_POST))) {
    switch ($_POST['nature']) {
        case 'racine':
             $Racine=new Legumeracine($_POST['legumes'],$_POST['PH'],
             $_POST['surface']);
             $nature='racine';
             $reponse=$db->saveLegume($nature,$Racine);

          
            break;
        case 'feuille':
            $feuille=new LegumeFeuille($_POST['legumes'],$_POST['PH'],$_POST['surface']);
            $nature='feuille';
            $reponse=$db->saveLegume($nature,$feuille);
            break;
         case 'fruit':
            $fruit=new LegumeFruit($_POST['legumes'],$_POST['PH'],$_POST['surface']);
            $nature='fruit';
           $reponse=$db->saveLegume($nature,$fruit);
            break;

    }

}






//condition sur la formulaire 
/*if(empty($nature)){
  echo '<h2><font color="red"> Attention, la nature non defini </font></h2>'; 
} elseif (empty($legumes)) {

  echo '<h2><font color="red">Attention, il faut saisir le nom du legume</font><h/2>';
}elseif (empty($surface)&& $surface<0) {
  echo '<h2><font color="red"> Attention,il faut saisir la surface allouée </font></h2>';
} elseif (empty($PH) && ($PH<0) && ($PH<14)) {
  echo '<h2><font color="red"> Attention, PH non saisi ou bien non entre 0 et 14 </font></h2>';
 } else 
  { 
            
                    


    echo '<h2><font color="green">Vous pouvez ajouter un autre legumes</font></h2>';

}*/


?>
  <table class="table">
    <tr>
        <th>nature</th>
        <th>Légume</th>
        <th>Surface allouée (m2)</th>
        <th>PH</th>
    </tr>
    </table>
<?php 

while ($donnees = $reponse->fetch())
{
?>
  
  <table class="table">
    <tr>
        <td><?php echo $donnees['nature'];?></td>
        <td><?php echo $donnees['nom']; ?></td>
        <td><?php echo $donnees['surface']; ?> </td>
        <td> <?php echo $donnees['PH']; ?> </td>
    </tr>
    
</table>
<?php
}
   

$reponse->closeCursor(); 

?>



</body>
</html>

