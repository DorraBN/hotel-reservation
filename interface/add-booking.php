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
								<h6><?php
								 $_SESSION["email"];	
							$sql = "SELECT * FROM utilisateur WHERE email=:email";
							$stmt = $bdd->prepare($sql);
							$stmt->bindParam(':email', $_SESSION["email"]);
							$stmt->execute();
							$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
							
							
							
							  foreach ($rows as $result) {
								 echo $result["nom"];}
								 ?></h6>
								
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
<h3 class="page-title mt-5">Add Booking</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form action="" method="POST">
<div class="row formtype">

<div class="col-md-4">
<div class="form-group">
<label>Room Type</label>
<select class="form-control" id="sel2" name="sellist1">
<option>Select</option>
<option>Single</option>
<option>Double</option>
<option>Quad</option>
<option>King</option>
<option>Suite</option>
<option>Villa</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Options</label>
<select class="form-control" id="sel3" name="sellist2">
<option>Select</option>
<option value="Free Breakfast">Free Breakfast</option>
<option value="Free Wifi">Free Wifi</option>
<option value="Parking">Parking</option>
<option value="Laundry">Laundry</option>
<option value="All">All</option>


</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Total Members</label>
<select class="form-control" id="sel3" >
<option>Select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
</div>


<div class="col-md-4">
<div class="form-group">
<label>Arrival Date</label>
<div class="cal-icon">
<input type="text" class="form-control datetimepicker" name="date1">
</div>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Depature Date</label>
<div class="cal-icon">
<input type="text" class="form-control datetimepicker" name="date2">
</div>
</div>
</div>


<div class="col-md-4">
<div class="form-group">
<label>Message</label>
<textarea class="form-control" rows="5" id="comment" name="text"></textarea>
</div>
</div>
</div>

</div>
</div>
<button type="submit" class="btn btn-primary buttonedit ml-2" name="add">Add</button>
<button type="reset" class="btn btn-primary buttonedit">Cancel</button>
							  </form>
</div>
</div>

</div>
<?php 

include("configbd.php");
if(isset($_POST["add"])){
$id=uniqid();
$id=rand(7000,7999);
$id2=0;
$date1=$_POST["date1"];
$date2=$_POST["date2"];
$date3=date('Y-m-d H:i:s');
$type=$_POST["sellist1"];
$option=$_POST["sellist2"];
$statut="disponible";
$valid="Confirmed";
$sql = "SELECT id_chambre FROM chambre WHERE type=:type AND option_chambre=:option AND statut=:statut";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':option', $option);
$stmt->bindParam(':statut', $statut);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($result) > 0) {						
foreach ( $result as $rows) {
    $id1 = $rows['id_chambre'];
}}
$rese="INSERT INTO payer (id_reservation,id_paiement) VALUES( :id_reservation, :id_paiement)";
	$stmt = $bdd->prepare($rese);
  
    $stmt->bindParam(':id_reservation', $id);
    $stmt->bindParam(':id_paiement', $id2);
	$stmt->execute();
	
        $res = "INSERT INTO faire (email ,id_reservation,id_chambre) VALUES(:email, :id_reservation, :id_chambre)";
        $stmt = $bdd->prepare($res);
        $stmt->bindParam(':email', $_SESSION["email"]);
        $stmt->bindParam(':id_reservation', $id);
        $stmt->bindParam(':id_chambre', $id1);
        $stmt->execute();
   
 $req = "INSERT INTO reservation (id_reservation, validation, date_arrv, date_sortie,date_reservation) VALUES (:id, :valid, :date1, :date2, :date3)";
    $stmt = $bdd->prepare($req);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':valid', $valid);
    $stmt->bindParam(':date1', $date1);
    $stmt->bindParam(':date2', $date2);
	$stmt->bindParam(':date3', $date3);

    if($stmt->execute()){ 
        $message = "Add successful";
        echo "<script>alert('$message');</script>";
    }

	

	

}


?>



        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/js/chart.morris.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>