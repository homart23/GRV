<?php 
	require_once("includes/Functions.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="fr">
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gestion des rendez-vous</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/jquery.timepicker.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/daypilot/daypilot-all.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="secretaire.php">Secretaire</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="docteur.php">Docteur</a>
      </li>
       
     </div>
</nav>
<p>              </p>

<p><center><h1>GESTION DES RENDEZ-VOUS</h1></center></p>



<div class="col-lg-9"></div>
<div class="col-lg-3" id="soustitre">
	<form method="post" action="bisad.php" >
		<p>
			<label for="pseudo">Login</label> : <input type="text" name="pseudo"/>
			<label for="password">Mot de passe</label> : <input type="password" name="password"/>
			<input type="submit" value="Connexion" id="connexion"/>

            <?php 
            if(isset($_POST['connexion'])){
    header('Location: home.php');
}
?>
		</p>
	</form>
</div>








<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="./script.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/datepicker-fr.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/jquery.easing.min.js" type="text/javascript"></script>
    <script  src="js/index.js"></script>
    <script  src="js/main.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		getDateRdv(); //get rdv depending on speciality with ajax & update calendar
	</script>
</body>

	
</html>