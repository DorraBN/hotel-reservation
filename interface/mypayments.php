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
								<h4 class="card-title float-left mt-2"> Payments</h4>
                               
                            </div>
						</div>
					</div>
				</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="table-responsive">
<table class="datatable table table-stripped">
<thead>
<tr>
<th>Display</th>
<th>Booking ID</th>
<th>Room ID</th>
<th>Room type</th>
<th>Duration</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<?php 
include("configbd.php");
$id1=0;
$valid="Confirmed";
$sql="SELECT DISTINCT * FROM chambre
INNER JOIN faire ON faire.id_chambre = chambre.id_chambre
INNER JOIN reservation ON faire.id_reservation = reservation.id_reservation
INNER JOIN utilisateur ON faire.email = utilisateur.email
INNER JOIN payer ON payer.id_reservation = reservation.id_reservation
INNER JOIN paiement ON payer.id_paiement = :id 
WHERE utilisateur.email=:email and reservation.validation=:valid
GROUP BY chambre.id_chambre
ORDER BY reservation.date_arrv ASC";

$stmt = $bdd->prepare($sql);
$stmt->bindParam(':email', $_SESSION["email"]);
$stmt->bindParam(':id', $id1);
$stmt->bindParam(':valid', $valid);
$stmt->execute();

$count=1;
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($rows as $result) {
?>
   <td class="px-4 py-3 text-sm">
        <?php echo $count; ?>
    </td>
    <td class="px-4 py-3 text-sm">
        <?php echo htmlentities($result['id_reservation']); ?>
    </td>
    <td class="px-2 py-3 text-xs">
        <?php echo htmlentities($result ['id_chambre']); ?>
    </td>
    <td class="px-4 py-3 text-sm">
        <?php echo htmlentities($result ['type']); ?>
    </td>
	<td class="px-4 py-3 text-sm">
        <?php 
		 $timestamp_arrivee = strtotime($result ["date_arrv"]);
$timestamp_sortie = strtotime($result["date_sortie"]);

$nb_jours = floor(($timestamp_sortie - $timestamp_arrivee) / (60 * 60 * 24));

echo $nb_jours; ?> Days
    </td>
	
	
	<td> 
	<a href="pay.php?id=<?php echo $result["id_reservation"]?>">
                        <button name="payer" id="myBtn" >PAY</button>
                      
	</td>
	</tr>	
<?php $count++;}?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<style>
#myBtn{
    padding: 2px 4px;
  background: #8de02c;
  color: var(--white);
  border-radius: 4px;
  font-size: 10px;
  font-weight: 500;
  width:50px;
  height:20px;
  }  </style>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script> -->
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