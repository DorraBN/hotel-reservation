<?php

include "configbd.php"; // Using database connection file here

$id=$_GET["id"]; // get id through query string

$valid="Confirmed";
    $req = "UPDATE  reservation SET validation=:valid WHERE id_reservation = :id";
    $stmt = $bdd->prepare($req);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':valid', $valid);
    if ($stmt->execute()) {
        header("location:mybooking.php");
        exit;	
    } else {
        echo "Error ";
    }

?>