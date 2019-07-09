<?php
  include('db_connect.php');
  $nom = $_POST['nom_modifier'];
  $prenom = $_POST['prenom_modifier'];
  $login = $_POST['login_modifier'];
  $mdp = $_POST['mot_de_passe_modifier'];
  $email = $_POST['email_modifier'];
  $id_user = $_POST['id_modifier'];
  $dep = $_POST['dep_modifier'];
  $ville = $_POST['ville_modifier'];
  $tel = $_POST['telephone_modifier'];


  $dbs->exec("UPDATE utilisateur 
  SET usr_nom = '$nom',
  usr_prenom = '$prenom',
  usr_login = '$login',
  usr_pass = '$mdp',
  usr_email = '$email',
  usr_dep = '$dep',
  usr_ville = '$ville',
  usr_tel = '$tel'
  WHERE usr_id = '$id_user';");

  header("Location: gestion_utilisateurs.php");
  exit;
?>