<?php 

$sct_id = (isset($_GET['sctid']))? $_GET['sctid'] : '%' ; 

$cmd = "select * from produit where 
        prd_del = '0' and 
        prd_sct_id like '$sct_id' 
        
        ; ";

$res = $dbs->query($cmd);
$data = $res->fetchAll();


foreach ($data as $line ){
   echo "<h2>". $line['prd_nom']. "</h2>";
   echo "<p>". $line['prd_desc']. "</p>";
   echo "<hr>"; 
}




?>