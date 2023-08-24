<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title> Payments </title>
	
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
                                                    <p class="noti-details"><span class="noti-title">Ben Hlel Oumayma has payed the booking N°!!! </p>
                                                    <p class="noti-time"><span class="notification-time">2 mins ago</span> </p>
                                                </div>
                                            </div>
                                        </a>
                                        </li>
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media"> 
                                               
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Zhre Fayz has done a new booking!!!</p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media"> 
                                                
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Ben Hlel Oumayma has done a new booking!!! </p>
                                                    <p class="noti-time"><span class="notification-time">10 mins ago</span> </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    
    
                                        
                                </ul>
							</div>
							
					</li>
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="admin.png" width="31" alt="Soeng Souy"></span> </a>
						<div class="dropdown-menu">
							<div class="user-header">
							
								<div class="user-text">
									<h6>Administrator</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div> <a class="dropdown-item" href="profile.php">My Profile</a> <a class="dropdown-item" href="settings.html">Account Settings</a> <a class="dropdown-item" href="login.html">Logout</a> </div>
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
							<li class="active"> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
							<li class="list-divider"></li>
							<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
								<ul class="submenu_class" style="display: none;">
									<li><a href="all-booking.php"> All Booking </a></li>
									
									
								</ul>
							</li>
							<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
								<ul class="submenu_class" style="display: none;">
									<li><a href="all-customer.php"> All customers </a></li>
									
								</ul>
							</li>
					
							<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
								<ul class="submenu_class" style="display: none;">
									<li><a href="all-rooms.php">All Rooms </a></li>
									<li><a href="edit-room.php"> Edit Rooms </a></li>
									<li><a href="add-room.php"> Add Rooms </a></li>
								</ul>
							</li>
							
							
									
							
							<li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul class="submenu_class" style="display: none;">
									
									<li><a href="payments.php">Payments </a></li>
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
<h4 class="card-title float-left mt-2">Payments</h4>
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
<th>Paid ID</th>
<th>Customer Name</th>
<th>Booking ID</th>
<th>Payment Type</th>
<th>Paid Date</th>
<th>Paid Amount</th>
</tr>
</thead>
<tbody>
<tr>
	<?php 
include("configbd.php");

$sql="SELECT * FROM paiement
INNER JOIN payer ON payer.id_paiement = paiement.id_paiement 
INNER JOIN reservation ON reservation.id_reservation = payer.id_reservation
INNER JOIN faire ON faire.id_reservation = reservation.id_reservation
INNER JOIN utilisateur ON faire.email = utilisateur.email";

$result = $bdd->query($sql);


while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
?>
   
    <td class="px-4 py-3 text-sm">
        <?php echo htmlentities($row['id_paiement']); ?>
    </td>
    <td class="px-2 py-3 text-xs">
        <?php echo htmlentities($row['email']); ?>
    </td>
    <td class="px-4 py-3 text-sm">
        <?php echo htmlentities($row['id_reservation']); ?>
    </td>
	<td class="px-4 py-3 text-sm">
        <?php echo htmlentities($row['moyen_paiement']); ?>
    </td>
	<td class="px-4 py-3 text-sm">
        <?php echo htmlentities($row['date_paiement']); ?>
    </td>
	<td class="px-4 py-3 text-sm">
        <?php echo htmlentities($row['prix']); ?> DT
    </td>
	
	</tr>
	
<?php }?>
</tr>
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