
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="../vue/main.css"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<!-- Google fonts header  -->
        <link rel="shortcut icon" href="favicon.ico" type="x-icon">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Fredericka+the+Great|Sacramento|Dosis" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<!-- Google fonts header  -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
   </head>

<body>

<header>

<h1>Software and Telecom</h1>


<!-- deconnexion forms -->
<div class="login">
<a href="formController.php" class="btn decxbtn mt-5">deconnexion</a>

</div>
<!-- password -->

<div id="administrateur" class="text-center">
	 <form action="formController.php" method="post" accept-charset="utf-8"><strong>
         User name:</strong>
         <input type="text" name="user">
         <strong>User password:</strong>

        <input type="password" name="psw">
	    <input type="submit" value=" connect" />

	 </form>

<div class="connexion-button col  mr-0">
<?php
  if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))

 {

echo '<a href="deconnexion.php" target="_blank"> <input type="button"  class="btn" value="Déconnexion'.$_SESSION['pseudo'].'"> </a>';

  }
  ?>
  </header>
