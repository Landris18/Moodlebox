<?php

if (isset($_POST['passw'])){
	$mdp = md5($_POST['passw']);
	$mdp_admin = "24109b73defbf52c9bad6783f37cca52";
	if ($mdp == $mdp_admin){
		$diso = "<script>$('#modalConfirmDelete').modal('show');</script>";
	}
	else{
		$diso = "Le mot de passe est incorrect";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eteindre</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/LOGO-OSP-MENETP.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
<!--===============================================================================================-->

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</head>
<body>


		<!--Modal: modalConfirmDelete-->
	<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
			<!--Content-->
			<div class="modal-content text-center">
				<!--Header-->
				<div class="modal-header d-flex justify-content-center" style="background-color: #ff3547;">
					<p class="heading" style="color: #ffffff;">Vous êtes sûr ?</p>
				</div>

				<!--Body-->
				<div class="modal-body">

					<i class="fa fa-times" style="font-size: 60px; color: #ff3547;"></i>
					<p> Etes vous sûr de vouloir éteindre le serveur ?</p>

				</div>

				<!--Footer-->
				<div class="modal-footer" style="justify-content: center;">
					<form method="POST">
						<button class="btn  btn-outline-danger" style="color: #ff3547; border-color: #ff3547" name="ekena">Oui</button>
					</form>
					<a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal" style="background-color: #ff3547; color: #ffffff; border-color: #ff3547; cursor: pointer;">Non</a>
				</div>
			</div>
			<!--/.Content-->
		</div>
	</div>
	<!--Modal: modalConfirmDelete-->
	
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/penci.jpg);">
					<span class="login100-form-title-1">
						Eteindre le serveur
					</span>
				</div>

				<form class="login100-form validate-form" style="margin-left: -5%;" method="POST">
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100"><i class="fa fa-user"></i></span>
						<input class="input100" style="font-weight:bold;" type="text" name="username" placeholder="" value = "Admin" disabled>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Le mot de passe est réquis">
						<span class="label-input100"><i class="fa fa-lock"></i></span>
						<input class="input100" style="font-weight:bold;" type="password" name="passw" placeholder="Entrer le mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<p style="color:#ff3547; font-weight:bold; margin-left:18%">
							<?php echo $diso?>
						</p>
					</div>

					<div class="container-login100-form-btn" style="margin-top: 2%; margin-bottom: -10%; margin-left: 26%;">
						<button class="login100-form-btn">
							<i class="fa fa-power-off"> <span class="eteindre" >Eteindre </span> </i> 
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


</body>
</html>

<?php 

if (isset($_POST['ekena'])){
	shell_exec("python3 script.py");
}

?>
