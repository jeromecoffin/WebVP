<?php
  include('db_connect.php');
  $nom = $_POST['nom_modal'];
  $prenom = $_POST['prenom_modal'];
  $login = $_POST['login_modal'];
  $mdp = $_POST['mdp_modal'];
  $email = $_POST['email_modal'];
  $dep = $_POST['dep_modal'];
  $ville = $_POST['ville_modal'];
  $tel = $_POST['tel_modal'];
  $dbs->exec("INSERT INTO utilisateur VALUES(0, '$nom', '$prenom', '$email', '$login', '$mdp', '$dep', '$ville', '$tel', 0)");
  header("Location: gestion_utilisateurs.php");
  exit;
?>