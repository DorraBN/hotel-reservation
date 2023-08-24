<?php session_start();
include("configbd.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>EliteHotel | Home </title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				 <span class="logoclass">EliteHOTEL</span> 
				
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
                        <ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> 
	
											<div class="media-body">
												<p class="noti-details"><span class="noti-title"> Payment N° done with succes!!!</p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<div class="media-body">
												<p class="noti-details"><span class="noti-title"> Booking N° done with succes!!! </p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<div class="media-body">
												<p class="noti-details"><span class="noti-title"> Don't forget your reservation for tomorrow!!!We are waiting for you!! </p>
												<p class="noti-time"><span class="notification-time">10 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
									
							</ul>
						</div>
						
				</li>
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="user.png" width="60" height="37" alt="user"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
						
							<div class="user-text">
								<h6> <?php
								 $_SESSION["email"];	
							$sql = "SELECT * FROM utilisateur WHERE email=:email";
							$stmt = $bdd->prepare($sql);
							$stmt->bindParam(':email', $_SESSION["email"]);
							$stmt->execute();
							$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
							
							
							
							  foreach ($rows as $result) {
								 echo $result["nom"];}
								 ?> </h6>
								
							</div>
                            </div> <a class="dropdown-item" href="profile.php">My Profile</a> <a class="dropdown-item" >Account Settings</a> <a class="dropdown-item" href="login.php">Logout</a> </div>
				</li>
			</ul>
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
					<li class="active"> <a href="index1.php"><i class="fas fa-home"></i> <span>Home</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span>My Booking </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="mybooking.php"> All Booking </a></li>
								<li><a href="edit-booking.php"> Edit Booking </a></li>
								<li><a href="add-booking.php"> Add Booking </a></li>
								
								
							</ul>
						</li>
						
						
						
								
						
						<li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> My payments </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								
								<li><a href="mypayments.php">Payments </a></li>
								<li> <a href="pricing.php">Pricing</a>
								
								
								
							</ul>
						</li>
						
						<li>
                            <a href=""><i class="fas fa-cog"></i> <span>Settings</span></a>
                            </li>
						
					</ul>
				</div>
			</div>
		</div>
        <div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2"> Payment Form</h4>
                               
                            </div>
						</div>
					</div>
				</div>
       
        
   

        <form action="" method="POST">
            <!--Account Information Start-->
           
            <div class="input_group">
                
                    
                <div class="input_box">
                    <input type="text" placeholder="Name on Card" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
           
            
          
            <!--Account Information End-->


            <!--DOB & Gender Start-->
                     <!--DOB & Gender End-->


            <!--Payment Details Start-->
            <div class="input_group">
                <div class="input_box">
                    
                    <input type="radio" name="pay1" class="radio" id="bc1" value="credit_card">
                    <label for="bc1"><span>
                            <i class="fa fa-credit-card"></i>Credit Card</span></label>
                    <input type="radio" name="pay1" class="radio" id="bc2" value="d17">
                    <label for="bc2"><span>
                           D17</span></label>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="number" name="number" class="name" placeholder="Card Number 1111-2222-3333-4444" required>
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="password" name="code" class="name" placeholder="Card CVC 632" required>
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="number" placeholder="Exp Month" required class="name">
                        <i class="fa fa-calendar icon" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="input_box">
                    <input type="number" placeholder="Exp Year" required class="name">
                    <i class="fa fa-calendar icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="number" name="price" class="name" placeholder="Enter amount" required>
                    <i class="fa fa-banknotes icon" aria-hidden="true"></i>
                </div>
            </div>
           
            <!--Payment Details End-->

            <div class="input_group">
                <div class="input_box">
                  
                    <button type="submit" name="pay">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>
</div>
</div>
<?php 

$id = $_GET["id"];

if (isset($_POST['pay'])) {
  $id1 = uniqid();
  $id1 = rand(5000, 5999);
  $price = $_POST["price"];
  $date3=date('Y-m-d H:i:s');
  $req = "UPDATE payer SET id_paiement=:id_paiement WHERE id_reservation=:id_reservation";
  $stmt = $bdd->prepare($req);
  $stmt->bindParam(':id_paiement', $id1);
  $stmt->bindParam(':id_reservation', $id);
  $stmt->execute();
  if (isset($_POST['pay1'])) {
    $selected_option = $_POST['pay1'];


    if ($selected_option == 'credit_card') {
      $req = "INSERT INTO paiement (id_paiement,prix,moyen_paiement,date_paiement) VALUES( :id_paiement,:prix , :moyen_paiement ,:date_paiement)";
      $stmt = $bdd->prepare($req);
    
      $stmt->bindParam(':id_paiement', $id1);
      $stmt->bindParam(':prix', $price);
      $stmt->bindParam(':moyen_paiement', $selected_option);
      $stmt->bindParam(':date_paiement', $date3);
      $stmt->execute();
    } else if ($selected_option == 'D17') {
        $req = "INSERT INTO paiement (id_paiement,prix,moyen_paiement,date_paiement) VALUES( :id_paiement,:prix , :moyen_paiement ,:date_paiement)";
        $stmt = $bdd->prepare($req);
      
        $stmt->bindParam(':id_paiement', $id1);
        $stmt->bindParam(':prix', $price);
        $stmt->bindParam(':moyen_paiement', $selected_option);
        $stmt->bindParam(':date_paiement', $date3);
        $stmt->execute();
    }
      if ( $stmt->execute() ) {
        header(Location:"mypayments.php");
        $message = "Payement successful !";
        echo "<script>alert('$message');</script>";
      
    }
 

}
}

      
      

        ?>
<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    /* background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
      url("sou.jpg");
    background-repeat: no-repeat;
    background-size: cover; */
    font-family: Arial, Helvetica, sans-serif;
}

.wrapper {
    background-color: #fff;
    width: 500px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    border-radius: 18px;
   
}

.wrapper h2 {
    background-color: #fcfcfc;
    color: #4b6667;
    font-size: 24px;
    padding: 10px;
    margin-bottom: 8px;
    text-align: center;
    border: 1px dashed #21cdd3;
}

.wrapper h4 {
    padding-bottom: 5px;
    color: #21cdd3;
}

.input_group {
    margin-bottom: 8px;
    margin-left:auto;
    margin-right:auto;
    width: 60%;
    position: relative;
    display: flex;
    flex-direction: row;
    padding: 5px 0;
}

.input_box {
    width: 100%;
    margin-right: 12px;
    position: relative;
}

.input_box:last-child {
    margin-right: 0;
}

.input_box .name {
    padding: 14px 10px 14px 50px;
    width: 100%;
    background-color: #fcfcfc;
    border: 1px solid #0003;
    outline: none;
    letter-spacing: 1px;
    transition: 0.3s;
    border-radius: 3px;
    color: #333;
}

.input_box .name:focus, .dob:focus {
    -webkit-box-shadow: 0 0 2px 1px green;
    -moz-box-shadow: 0 0 2px 1px green;
    box-shadow: 0 0 2px 1px green;
    border: 1px solid green;
}

.input_box .icon {
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: #333;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000003;
    border-right: none;
}

.name:focus+.icon {
    background-color: green;
    color: #fff;
    border-right: 1px solid green;
    border: none;
    transition: 1s;
}

.dob {
    width: 30%;
    padding: 14px;
    text-align: center;
    background-color: #fcfcfc;
    transition: 0.3s;
    outline: none;
    border: 1px solid #c0bfbf;
    border-radius: 3px;
}

.radio {
    display: none;
}

.input_box label {
    width: 50%;
    padding: 13px;
    background-color: #fcfcfc;
    display: inline-block;
    float: left;
    text-align: center;
    border: 1px solid #c0bfbf;
}

.input_box label:first-of-type {
    border-top-left-radius: 3px;
    border-bottom-right-radius: 3px;
    border-right: none;
}

.input_box label:last-of-type {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.radio:checked+label {
    background-color: #586161;
    color: #fff;
    transition: 0.5s;
}

.input_box button {
    width: 100%;
    background-color: gray;
    border: none;
    color: #fff;
    padding: 15px;
    border-right: 4px;
    font-size: 16px;
    transition: all 0.3s ease;
    border-radius: 8px;
}

.input_box button:hover {
    cursor: pointer;
    background-color: #05b133;
}
      </style>

        </form>
    </div>
    
<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
	</script>
</body>
</html>