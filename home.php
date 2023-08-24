<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    

</head>
<body>
    <header>
	
        <nav class="navigation" >
            
            <div class="logo"><img src="oli.png" alt=""> <h1>ELITEHOTEL</h1> </h1> </div>
            <div class="menu">
               
                <a href="#" style="font-size:20px">HOME</a>
                <a href="reservation.php" >Services</a>
             
                <a href="contact.php" >contact</a>
             
            </div> 
          <form class="search-form" action="#" method="get">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form></nav>
          <main ><!--<div class="dot dot1"></div>
            <div class="dot dot2"></div>
            <div class="dot dot3"></div>
            <div class="dot dot4"></div>
            <div class="dot dot5"></div><br><br><br><br>-->
            <section >
              <h3>Welcome To our hotel </h3>
              <h1>RESERVE NOW <br>AND<br> ENJOY YOUR HOLIDAY <span class="change_content">
                 </span> <span style="margin-top: -10px;">  </span> </h1>
              <p>"enjoy your adventure"</p> 
             <br><br>
              <a href="registration.php" class="btntwo">sign up here</a>
            </section>
          </main>




           
          <style>
              p{
  font-size: 12px ;
  font-display: flex;
  position: relative;
}
 main p {
    font-size: 25px;
    word-spacing: 2px;
  color: black;
    text-shadow: 1px 1px 1px black;
    text-align: center;
    margin-top: 100px;
  }
            .container1 {
      margin-top: 10px;
        display: flex;
    margin-left: 20px;

     
      }

      .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        animation: move 1s ease-in-out infinite;
        margin: 0 5px;
        margin-top: 350px;
    
      
      }

      @keyframes move {
        0% { transform: translateX(0); }
        100% { transform: translateX(100%); }
      }
      
      .dot1 { background-color: #3498db; }
      .dot2 { background-color: #9b59b6; animation-delay: 0.2s; }
      .dot3 { background-color: #e67e22; animation-delay: 0.4s; }
      .dot4 { background-color: #16a085; animation-delay: 0.6s; }
      .dot5 { background-color: #f1c40f; animation-delay: 0.8s; }
              section a {
    padding: 12px 30px;
    border-radius: 4px;
    outline: none;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 1px;
    transition: all 0.5s ease;
  }
              main {
    width: 100%;
    height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
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
          
          header {
            width: 100%;
            height: 100vh;
            background-image: 
              url("h9.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
          }
         
          nav {
            width: 100%;
            height: 11vh;
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
          height: 80px;
          background-color: #3fb8c5;
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
        
        transform: scaleX(0); transition: transform .5s; }
        .navigation a:hover::after{
        transform-origin: left;
        transform:scaleX(1);
        }
          
          nav .menu a:first-child {
            color: #8aecd8;
          }
          
          main {
            width: 100%;
            height: 85vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
          }
          
          section h3 {
            font-size: 35px;
            font-weight: 200;
            letter-spacing: 3px;
            text-shadow: 1px 1px 2px black;
          }
          
          section h1 {
            margin: 30px 0 20px 0;
            font-size: 55px;
            font-weight: 700;
            text-shadow: 2px 1px 5px black;
            text-transform: uppercase;
          }
          
         
          section a {
            padding: 12px 30px;
            border-radius: 4px;
            outline: none;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            letter-spacing: 1px;
            transition: all 0.5s ease;
          }
          
        
         
          section .btntwo {
            background: #2335f3;
            color: white;
            border-radius: 15px;
          
            margin-left: 15px;
            margin-top: 300px;
          }
          
          .btntwo:hover {
            background: #fff;
            color: #000;
            font-weight: 800;
          }
          
        
        
         
        
    
        .navigation{
          background:transparent ;
         box-shadow:0 50px 50px 0px #3937374f;
       
        }
        
            </style>
        
        </header>
</body>
</html>