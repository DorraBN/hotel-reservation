<?php 
 session_start();
 include("configbd.php");  
 if (isset($_POST['email']) && isset($_POST['mdp'])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['mdp']);
  
    if ($email !== "" && $password !== "") {
      $requete = "SELECT count(*) FROM utilisateur where email = :email and mpd = :password";
      $stmt = $bdd->prepare($requete);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', $password);
      $stmt->execute();
  
      $count = $stmt->fetchColumn();
  
      $sql = "select * from utilisateur where email = :email";
      $stmt = $bdd->prepare($sql);
      $stmt->bindParam(':email', $email);
      $stmt->execute();
  
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
      if ($count != 0) {
        if ($row["role"] == "admin") {
          $_SESSION["email"] = $email;
          header("Location: index.php");
          exit;
        } else if ($row["role"] == "user") {
          $_SESSION["email"] = $email;
          header("Location: interface/index1.php");
          exit;
        }
      }
    }
  }
 
  
  
  
  
  
  
   

	 
    


 
  else
	{  $message = "email or password incorrect !";
    echo "<script>alert('$message');</script>";
	
	}


    // fermer la connexion

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="p.css">
</head>
<body>
<div class="container">
    <h1>please login</h1>
    <form action="" method="post">
        <div class="form-control relative">
            <input type="text" name="email" required>
            <label >Email</label>
          
        </div>
        <div class="form-control">
           
              <input type="password" name="mdp" required>
            <label >Password</label>
        </div>
        <button class="btn">login</button>
        <p class="text">Don't have an account ? <a href="registration.php">register</a>  </p>
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
</html>