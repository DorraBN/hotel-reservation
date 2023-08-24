

 


<?php

include "configbd.php"; // Using database connection file here

$id=$_GET["id"]; // get id through query string


    $req = "DELETE FROM utilisateur WHERE telephone = :id";
    $stmt = $bdd->prepare($req);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        header("location:all-customer.php");
        exit;	
    } else {
        echo "Error deleting record";
    }

?>