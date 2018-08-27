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
        <a class="nav-link" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="params.php">Params</a>
      </li>
    </ul>
  </div>
</nav>

<br />
<h2>Paramètrage de votre potager</h2>

<table class="table">
    <tr>
        <th>Légume</th>
        <th>Surface allouée (m2)</th>
        <th>PH</th>
    </tr>

    <tr>
        <td>Carotte</td>
        <td><input type="text" class="form-control"></td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Tomate</td>
        <td><input type="text" class="form-control"></td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Pomme de terre</td>
        <td><input type="text" class="form-control"></td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Epinard</td>
        <td><input type="text" class="form-control"></td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td colspan="3">
            <input type="submit" value="Sauvegarder le paramètrage" class="btn btn-primary">
        </td>
    </tr>
</table>
</body>
</html>

