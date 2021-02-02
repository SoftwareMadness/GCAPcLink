<?php
   if($_GET['ACTION'] == "genToken")
   {
     echo md5(uniqid(mt_rand(), true));
   }elseif ($_GET['ACTION'] == "UpdateData") {
     $fln = $_GET['AuthTKN'] . ".txt";
     echo $fln;
     file_put_contents($fln,$_GET['Data']);
   }
?>
