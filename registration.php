<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="p.css">
</head>
<body>
<div class="container">
    <h1>please register</h1>
    <form action="" method="post" >
        <div class="form-control">
           
            <input type="text" name="nom" required>
          <label >username</label>
      </div>
      <div class="form-control">
           
        <input type="number" name="tel" required>
      <label >Tel</label>
  </div>
        <div class="form-control relative">
            <input type="text" name="email" required>
            <label >Email</label>
            
        </div>
        <div class="form-control">
           
              <input type="password" name="mdp" required>
            <label >Password</label>
        </div>
        <button class="btn" name="submit">login</button>
        <p class="text">Already have an account ? <a href="login.php">log in</a>  </p>
    </form>
</div>
    <script src="p.js"></script>
</body>
<style>* {
    box-sizing: border-box;
}
body{
   background-image: url('h9.jpg');
   background-repeat: no-repeat;
   background-size: cover;
    color: #fff;
    font-family: 'Roboto',sans-serif;
    display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   height: 100vh;
   overflow: hidden;
   margin: 0;
}
.container{
    background-color: rgba(0,0,0,0.4);
    padding: 20px 40px;
    border-radius: 15px;


}
.container h1{
    text-align: center;
    margin-bottom: 30px;

}
.container a{
    text-decoration: none;
    color: lightblue;
}
.btn{
    cursor: pointer;
    display: inline-block;
    width: 100%;
    background: lightblue;
    padding: 15px;
    font-family: inherit;
    font-size: 16px;
    border: 0;
    border-radius: 5px;
}
.btn:focus{
    outline: 0;
}
.btn:active{
    transform: scale(0.98);
}
.text{
    margin-top: 30px;
}
.form-control{
    position: relative;
    margin: 20px 0 40px;
    width: 300px;

}
.form-control input{
    background-color: transparent;
    border: 0;
    border-bottom: 2px #fff solid;
    display: block;
    width: 100%;
    padding: 15px 0;
    font-size: 18px;
    color: #fff;
}
.form-control input:focus,
.form-control input:valid {
    outline: 0;
}</style>
<?php
include('configbd.php');
if(isset($_POST['submit'])){
 $nom=$_POST['nom'];

$email=htmlspecialchars($_POST['email']);
$password=$_POST['mdp'];
$tel=$_POST['tel'];
$datetime=date('Y/m/d');

 $nomErr  = $emailErr = $telephoneErr   = '';
 $valid = $mdpErr=true;
 
 // Si le formulaire a été soumis
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
   // Validation du nom
   if (empty($_POST["nom"])) {
     $nomErr = "Le nom est requis";
     $valid = false;
   } else if(!preg_match("/^[a-zA-Z ]*$/", $nom)) {
       $nomErr = "Seulement des lettres  sont autorisés";
       $valid = false;
     } 
     else if (strlen($nom) > 20) {
       $prenomErr = "Le nom ne doit pas dépasser 20 caractères";
       $valid = false;
   }
    
  
   // Validation de l'email
   if (empty($_POST["email"])) {
     $emailErr = "L'email est requis";
     $valid = false;
   } else 
     
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Format d'email invalide";
       $valid = false;
     }
   
 
   // Validation du téléphone
   if (empty($_POST["num"])) {
     $telephoneErr = "Le numéro de téléphone est requis";
     $valid = false;
   } 
 else if (strlen($tel) > 8) {
   $prenomErr = "le numero  ne doit pas dépasser 8 caractères";
   $valid = false;}
   
   if (isset($_POST['email'])) {
     $email = $_POST['email'];
     $nom = $_POST['nom'];
    
     $tel = $_POST['tel'];
     $password = $_POST['mdp'];
     $datetime = date('Y-m-d H:i:s');
   
     $stmt = $bdd->prepare("SELECT email FROM utilisateur WHERE email=:email");
     $stmt->bindParam(':email', $email);
     $stmt->execute();
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
     if (!$row) {
       $req = "INSERT INTO utilisateur(nom,  email, mpd, telephone, role, date_inscription)
               VALUES(:nom, :email, :mpd, :telephone, 'user', :date_inscription)";
       $stmt = $bdd->prepare($req);
       $stmt->bindParam(':nom', $nom);
       $stmt->bindParam(':email', $email);
       $stmt->bindParam(':mpd', $password);
       $stmt->bindParam(':telephone', $tel);
       $stmt->bindParam(':date_inscription', $datetime);
       $stmt->execute();
     }
   
     $sql = "SELECT * FROM utilisateur";
     $stmt = $bdd->prepare($sql);
     $stmt->execute();
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
     if ($row["role"] != "admin") {
       $reqq = "INSERT INTO utilisateur(role) VALUES('user')";
       $stmt = $conn->prepare($reqq);
       $stmt->execute();
     }
   
     $message = "Bonjour  " . $nom . "! Votre compte a été créé avec succès!!";
     $header = "MIME-Version: 1.0\r\n";
     $header .= "From: ELITEHOTEL@gmail.com\r\n";
     $header .= "Content-type: text/plain; charset=utf-8\r\n";
     mail($email, "Inscription MyHotel", $message, $header);
   }
}} 
 ?>





</html>