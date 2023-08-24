<?php include("configbd.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>
    
    <header>
	
        <nav class="navigation" >
            
            <div class="logo"> <h1>ELITEHOTEL</h1> </h1> </div>
            <div class="menu">
               
                <a href="home.php" style="font-size:20px">HOME</a>
                <a href="reservation.php" >Services</a>
             
                <a href="#" >contact</a>
             
            </div> <form class="search-form" action="#" method="get">
                <input type="text" name="search" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form></nav>
    
</header>
  
    <style>
         .navigation a{
              position: relative;
              font-size: 1em;
              color: #fff;
              text-decoration: none;
              font-weight: 500;
              margin-left: 40px;
            }
            .navigation .btnlogin-popup{
              width: 130px;
              height: 50px;
              background: transparent;
              border: 2px solid #fff;
              outline: none;
              border-radius: 6px;
              cursor: pointer
            ;
            font-size: 1.1em;
            color: #fff;
            font-weight: 500;
            margin-left: 40px;
            transition: .5s;
            }
            .navigation .btnlogin-popup:hover{
              background: #fff;
              color: #162938;
            }
            .input-box .icon{
              position: absolute;
              right: 8px;
              font-size: 1.2em;
              color: #162938;
              line-height: 57px;
            }
            .navigation a::after{
              content: ''
              ;
              position: absolute;
              left: 0;
              bottom: -6px;
              width: 80%;
              height: 2px;
              background: #fff;
              border-radius: 8px;
        
        transform: scaleX(0); transition: transform .5s ease; }
        .navigation a:hover::after{
        transform-origin: left;
        transform:scaleX(1);
        }
          
          nav .menu a:first-child {
            color: #8aecd8;
          }
          .navigation{
          background:transparent ;
         box-shadow:0 50px 50px 0px #3937374f;
       
        }
      nav{
                background: #1a1a11;
                width: 100%;
                padding: 10px 10%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                position: relative;
            }
        
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Josefin Sans", sans-serif;
          }
          
       
         
          nav {
            width: 100%;
            height: 2vh;
            background: rgba(0, 0, 0, 0.2);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-transform: uppercase;
          }
          .navigation {
          display: flex;
          justify-content: space-between;
          align-items: center;
          height: 40px;
        
          color: white;
          padding: 0 20px;
        }
        
        .search-form {
          position: relative;
          display: flex;
          align-items: center;
        }
        
        .search-form input[type="text"] {
          width: 200px;
          padding: 5px 10px;
          margin-right: 5px; /* adjust this value to bring the input closer to the button */
          border-radius: 20px;
          border: none;
          outline: none;
          font-size: 16px;
        }
        
        .search-form button[type="submit"] {
          background-color: transparent;
          border: none;
          outline: none;
          cursor: pointer;
        }
        
        .search-form button[type="submit"] i {
          font-size: 16px;
        }
        
        .search-form button[type="submit"]:hover i {
          color: #ffc107;
        }
        
          
          nav .logo {
            width: 25%;
            text-align: center;
            margin-top: 0;
            /*background: red;*/
          }
          
          nav .menu {
            width: 40%;
            display: flex;
            justify-content: space-around;
          }
          
          nav .menu a {
            width: 25%;
            text-decoration: none;
            color: white;
            font-weight: bold;
          }
      
      
      
      
          .navigation{
        
          height: 70px;
         box-shadow:0 50px 50px 0px #3937374f;
       
        }
      
     
        .btn{
    padding: 0.6rem 1.3rem;
    background-color: #fff;
    border: 2px solid #fafafa;
    font-size: 0.95px;
    color: #1abc9c;
    line-height: 1;
    border-radius: 15px;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    margin: 0;
    width: 70px;
    font-size: 17px;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    align-items: center;
    padding-left: 15px;
}
.btn:hover{
    background-color: transparent;
    color: #1705a3;
}

        .form{
    width: 150%;
    max-width: 920px;
margin-left: 300px;


    border-radius: 10px;
   
    z-index: 1000;
    overflow: hidden;
    display: grid;
    grid-template-columns: repeat(2,1fr);
}

.contact-form{
background-color: #fafafadb;
box-shadow: 54px 54px 0px 0px  #000;


    border-radius: 25px;
    position: relative;
    width: 700px;
}

.p{
        justify-content: center;
  
    
        font-size: 20px;
      border-spacing: 20px;
      max-width: 1800px;
      height: 10px;
      margin-left: 100px;
    
      
      
      }

 
 



.contact-form:after{
content: "";
position: absolute;
width: 26px;
height: 26px;

transform: rotate(45deg);
top: 50px;
left: -13px;
}
form{
    padding: 2.3rem 2.2rem;
    z-index: 10;
    overflow: hidden;
    position: relative;



}
.title{
    color: #fff;
    font-weight: 500;
    font-size: 1.5rem;
line-height: 1;
margin-bottom: 0.7rem;
margin-left: 50px;

}

.input-container{
    position: relative;
    margin: 1rem 0;
    margin-right:10%;
          margin-left:-20%%;
}
label{
    display: none;
}

.input{
    width: 100%;
    outline: none;
    border: 2px solid #149279;
    background: none;
    padding: 0.6rem 1.2rem;
    color: #fff;
    font-weight: 500;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    border-radius: 25px;
    transition: 0.3s;
}

textarea.input{
padding: 0.8rem 1.2rem;
min-height: 150px;
border-radius: 22px;
resize: none;
overflow-y: auto;
}
.input-container  label{
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    padding: 0 0.4rem;
    color: #fafafa;
    font-size: 0.9rem;
    font-weight: 400;
    pointer-events: none;
    z-index: 1000;
    transition: 0.5s;
    

}
        .contact-frame {
          border: 1px solid black;
          border-radius: 20px;
          padding: 10px;
          margin: 10px;
          width: 40%;
        
         align-items:center ;
          padding-left: 100px;
          background-color: rgba(255, 255, 255, 0.682);
       
       

      
        }
        body{
  
      background-image: url('h9.jpg');
      background-size: cover;
   background-repeat: no-repeat;
      
    }
      
      </style>
    </head>
    <body>
      
     
    
      <div class="contact-frame" style="margin-left: auto;margin-right: auto;" >
        
        <form action="" method="POST">
            <h3 class="title">contact us</h3>
            <div class="input-container">
                <input type="text" name="name" class="input" placeholder="username">
                <label for="">Username</label>
            </div>
            <div class="input-container">
                <label for="">Email</label>
                <input type="email" name="email" class="input" placeholder="email">
              
            </div>
            <div class="input-container">
                <input type="tel" name="phone" class="input" placeholder="phone">
                <label for="">Phone</label>
            </div>
            
            <div class="input-container textarea">
                <textarea name="message"  class="input" placeholder="message"></textarea>
                <label for="">message</label>
            </div>
<input type="submit" value="send" name="send" class="btn">
        </form>
    
        </div>
     <?php
     if(isset($_POST["send"])){
      $id=uniqid();
      $id=rand(1000,1999);
      $email=$_POST["email"];
      $meg=$_POST["message"];
      $sql="INSERT INTO commentaire VALUES(:id,:meg)";
      $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':meg', $meg);
    $stmt->execute();
    $sq="INSERT INTO contacter VALUES(:email,:id)";
    $stmt = $bdd->prepare($sq);
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':email', $email);
 if( $stmt->execute()){
  $message = "Thank you for your contact!!! we will try to answer you as well as soon!!!";
  echo "<script>alert('$message');</script>";
 }
    
     }
      ?>
    
      
      <div class="contact-frame" style="margin-top: 50px;margin-left: auto;margin-right: auto; ">
        <img src="o.png"  style="float: right;width: 25%;height: 25%;margin-top: 50px;"><br>
        <h2>contact Informations</h2><br>
        <p>
         <img src="espace-reserve.png" alt=""> Adress : Tunis,Tunisia<br><br>
        <img src="whatsapp.png" alt="">  Telephone : (+216)53143270<br><br>
         <img src="e-mail.png" alt=""> Email : elitehotel@gmail.com
        </p><br><br>
     
        <h2>social media</h2><br><br>
        <p>
        
          <li> <i class="fab fa-facebook-square fa-2x" class="img"></i>facebook</li>  
          <li> <i class="fab fa-twitter-square fa-2x"></i>twitter</li>  
          <li><i class="fab fa-instagram fa-2x"></i>instagram</li>  
         
         
      
        </p>
      </div>
     
      <br><p   style="margin-left: 38%; margin-bottom: 0px; margin-right: auto; ">&copy;2023 ELITEHOTEL.all rights are reserved.</p></div>
    </body>
    
</body>
</html>