<?php 
$login =  (isset($_POST['login']))? $_POST['login'] : '' ;
$pass  =  (isset($_POST['passwd']))? $_POST['passwd'] : '' ;

if(($login == "admin") and ($pass == "admin")){
    header('Location: admin.php');
}
else{
    header('Location: connexion.php');
}


?>