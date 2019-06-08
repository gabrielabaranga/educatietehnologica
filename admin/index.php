<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);

	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = "Datele introduse sunt gresite!";
	}
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Educatie Tehnologica si aplicatii practice la gimnaziu</title>
		<meta charset="iso-8859-2" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/main.css" />
	</head>
	<body class="is-preload">

			<!-- Wrapper -->
			<div id="wrapper">

					<!-- Main -->
					<div id="main">
						<div class="inner">

							<?php include("../include/header.php");?>

								<form class="form-signin" method="post" id="login-form">
									<h1 class="form-signin-heading">Bine ai venit la Panoul de administrare. <br> Va rugam sa va autentificati. </h1>


									 <?php
									 if(isset($error))
									 {
									 ?>
													 <div class="success">
															<?php echo $error; ?> !
													 </div>
													 <?php
									 }
									 ?>



									<input type="text"  name="txt_uname_email" placeholder="Utilizator sau email" required />
									<span id="check-e"></span>
									<input type="password" name="txt_password" placeholder="Parola" required/>
									<button type="submit" name="btn-login" >
									<i class="glyphicon glyphicon-log-in"></i> &nbsp; Login
									</button>

							  </form>

						</div>
					</div>
				<?php include("../include/sidebar.php");?>
			</div>

			<!-- Scripts -->
			<script src="../js/jquery.min.js"></script>
			<script src="../js/browser.min.js"></script>
			<script src="../js/breakpoints.min.js"></script>
			<script src="../js/util.js"></script>
			<script src="../js/main.js"></script>

	</body>
</html>
