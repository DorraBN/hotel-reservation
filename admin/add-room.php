<?php session_start();
 include("configbd.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title> Add-room </title>
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
                     <span class="logoclass">ELITEHOTEL</span> 
                    
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
<h3 class="page-title mt-5">Add Room</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<form action=" " method="POST">
<label>Room ID</label>
<input class="form-control" type="text"  name="id">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Room Type</label>
<select class="form-control" id="sel1" name="sellist1">
<option>Select</option>
<option value="Single">Single</option>
<option value="Double">Double</option>
<option value="Quad">Quad</option>
<option>King</option>
<option>Suite</option>
<option>Villa</option>

</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>AC/NON-AC</label>
<select class="form-control" id="sel2" name="sellist2">
<option>Select</option>
<option>AC</option>
<option>NON-AC</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Options</label>
<select class="form-control" id="sel3" name="sellist3">
<option>Select</option>
<option value="Free Breakfast">Free Breakfast</option>
<option value="Free Wifi">Free Wifi</option>
<option value="Parking">Parking</option>
<option value="Laundry">Laundry</option>



</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Bed Count</label>
<select class="form-control" id="sel4" name="sellist4">
<option>Select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Charges For cancellation</label>
<select class="form-control" id="sel5" name="sellist4">
<option>Select</option>
<option>Free</option>
<option>5% Before 24Hours</option>
<option>No Cancellation Allow</option>
</select>
</div>
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

$id=$_POST["id"];

$type=$_POST["sellist1"];
$option=$_POST["sellist3"];
$statut="disponible";
if(isset($_POST["add"])){
 $req = "INSERT INTO chambre (id_chambre, type, option_chambre, statut) VALUES (:id, :type, :option, :statut)";
    $stmt = $bdd->prepare($req);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':option', $option);
    $stmt->bindParam(':statut', $statut);
    if($stmt->execute()){ 
        $message = "Add successful";
        echo "<script>alert('$message');</script>";
    }
}
?>
<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>

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