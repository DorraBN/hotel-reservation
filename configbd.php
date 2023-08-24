<?php 


try {
  $bdd = new PDO('mysql:host=localhost;dbname=reservation_hotel', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}






?>