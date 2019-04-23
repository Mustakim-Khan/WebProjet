<!DOCTYPE html>

<html>

<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $title??"" ?></title>

    <style>
        .main{width: 95%; margin: auto;}
        table th {text-align: center;}
        .table {table-layout: fixed; text-align: center;}
        .center { text-align: center }
        .center table {margin-left:auto; margin-right:auto;}
        .left {text-align: right}
        .right {text-align: left}
        body {background-color: #DEDEDE}
        .error {color: red;}
    </style>


</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Projet 5</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= $pathFor['logout'] ?>" title="Logout"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
    </ul>
  </div>
</nav>
<div class="main">