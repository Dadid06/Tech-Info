<?php

    // echo'hello world';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cours PHP & MySQL</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
  </head>
  <body>
    <header class="container-fluid bg-light">
            
            <img src="img/logo_tech_informatique.jpg" width="250" height="70" class="d-inline-block align-top" alt="Tech informatiuqe et smartphone">
            </a> 
            <h1>Le specialiste de la réparation Informatique et de Smartphone</h1>
            
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
                <a class="navbar-brand" href="index.php">Tech Info</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informatique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Smartphone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reparation.php">Réparation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
                    </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="recherche">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
                    </form>
                </div>
            </nav>

    </header>



