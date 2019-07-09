<?php 
include 'header.php';
?>

<body>
<div class="container">

<h1></h1>
       <div class="jumbotron">
            <h1>Web VP</h1>
            <p>Bienvenue sur www.webvp.com</p>
          </div>

<div class="row">
  <div class="col-md-3">
	
  </div>


  <div class="col-md-9">
  <form action="check_connect.php" method="post">
  			
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Login">
  </div>
  <div class="form-group">
    <label for="passwd">Mot de passe</label>
    <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Mot de passe">
  </div>


  <button type="submit" class="btn btn-default">Connexion</button>
  
  </form>
  <br><br>
  <form action="" method="post">
  <button type="submit" class="btn btn-default">Créer un compte</button>
 </form>
  
  </div>
</div>



</div>
<?php 
include 'footer.php';
?>
