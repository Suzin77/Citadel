<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Citadel of blood aka Labirynt śmierci</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!--own css-->
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    
    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>public/js/application.js"></script>
</head>
<body>
<!-- header -->
<div class="container">    
    <h1></h1>       
    <!-- navigation -->
    <div class="nav navigation">
        <ul>
            <!-- same like "home" or "home/index" -->
            <li class = "btn btn-default""><a href="<?php echo URL; ?>">home</a></li>
            <li class = "btn btn-default""><a href="<?php echo URL; ?>admin/index">Admin</a></li>
            <li class = "btn btn-default""><a href ="<?php echo URL; ?>data/search">Search in DB</a></li>
            <li class = "btn btn-default""><a href ="<?php echo URL; ?>steamAPI/search">Search by API</a></li>
        </ul>
    </div>
    <!-- simple div for javascript output, just to show how to integrate js into this MVC construct -->
   
</div>
