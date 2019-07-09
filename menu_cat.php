<?php 

$cmd = "select * from categorie where cat_del = '0'; ";
$res = $dbs->query($cmd);
$data = $res->fetchAll();
?>




<ul class="nav nav-pills nav-stacked">
  <?php 
  foreach ($data as $line){
      echo "<li role=\"presentation\"><a href=\"#\">".$line['cat_nom']."</a></li>";
      
      $cmd = "select * from sous_categorie 
              where 
              sct_del = '0' and 
              sct_cat_id = '". $line['cat_id']."';";
      
      $res1  = $dbs->query($cmd);
      $data1 = $res1->fetchAll();
      echo "<ul class=\"nav nav-pills nav-stacked\">";       
      foreach ($data1 as $line1){
          echo "<li role=\"presentation\"><a href=\"index.php?sctid=".$line1['sct_id']."\">---> ".$line1['sct_nom']."</a></li>";
      }
      echo "</ul>";
      
      
  }
  ?>
  <li role=\"presentation\"><a href="index.php"> Tous les produits</a></li>
  <li role=\"presentation\"><a href="connexion.php"> Connexion</a></li>
</ul>




