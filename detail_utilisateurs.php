<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bs431/css/bootstrap.min.css">

    <title>Home</title>
    
  </head>

  <body>

  <?php 
    include('db_connect.php');

    $id = $_GET['row_id'];

    $reponse = $dbs->prepare("SELECT * FROM utilisateur WHERE usr_id=:id");
    $reponse->execute(['id' => $id]); 
    $user = $reponse->fetch();
    //print_r($user);
  ?>

  <!-- Begin Page Content -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="row">
      <div class="col">
        <a href="gestion_utilisateurs.php" class="previous">&laquo; Previous</a>
      </div>
        Détails Utilisateur
    </div>
  </nav>

  <br>

  <div class="container-fluid">
    <form action ="bdd_modifier_utilisateurs.php" method="post">
      <div class="form-row">
        <input type="text" class="form-control" id="validationDefault00" name="id_modifier" placeholder="ID" value="<?php echo $user['usr_id'] ?>" disabled>

      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationDefault01">Prenom</label>
          <input type="text" class="form-control" id="validationDefault01" name="prenom_modifier" placeholder="Prenom" value="<?php echo $user['usr_prenom'] ?>" disabled>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefault02">Nom</label>
          <input type="text" class="form-control" id="validationDefault02" name="nom_modifier" placeholder="Nom" value="<?php echo $user['usr_nom'] ?>" disabled>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationDefaultUsername">Login</label>
          <div class="input-group">
            <input type="text" class="form-control" id="validationDefaultUsername" name="login_modifier" placeholder="Login" value="<?php echo $user['usr_login'] ?>" aria-describedby="inputGroupPrepend2" disabled>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">email</label>
          <input type="email" class="form-control" id="validationDefault03" name="email_modifier" placeholder="email" value="<?php echo $user['usr_email'] ?>" disabled>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault04">Mot de Passe</label>
          <input type="password" class="form-control" id="validationDefault04" name="mot_de_passe_modifier" placeholder="MDP" value="<?php echo $user['usr_pass'] ?>" disabled>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault05">Répeter mot de passe</label>
          <input type="password" class="form-control" id="validationDefault05" name="repeter_mot_de_passe_modifier" placeholder="MDP" value="<?php echo $user['usr_pass'] ?>"disabled>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationDefault06">Departement</label>
          <input type="text" class="form-control" id="validationDefault06" name="dep_modifier" placeholder="Departement" value="<?php echo $user['usr_dep'] ?>" disabled>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault07">Ville</label>
          <input type="text" class="form-control" id="validationDefault07" name="ville_modifier" placeholder="Ville" value="<?php echo $user['usr_ville'] ?>" disabled>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault08">Téléphone</label>
          <input type="text" class="form-control" id="validationDefault08" name="telephone_modifier" placeholder="+33" value="<?php echo $user['usr_tel'] ?>"disabled>
        </div>
      </div>

    
    </form>
  </div>

  </body>
</html>