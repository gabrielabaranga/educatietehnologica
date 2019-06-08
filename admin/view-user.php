<?php //include config
require_once('../include/config.php');
require_once("session.php");
?>
<?php
require('../include/config.php');
$stmt = $conn->prepare("SELECT username FROM useri WHERE id=".$_SESSION["user_session"]);
 /*echo $_SESSION["user_session"];*/
 $stmt->execute();
 $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
 $user=$userRow['username'];
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Educatie Tehnologica si aplicatii practice la gimnaziu</title>
		<meta charset="iso-8859-2" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/main.css" />
		<script language="JavaScript" type="text/javascript">
			function delpost(id, title)
			{
				if (confirm("Esti sigur ca vrei sa stergi '" + title + "'"))
				{
						window.location.href = 'home.php?delpost=' + id;
				}
			}
		</script>
	</head>
	<body class="is-preload">

			<!-- Wrapper -->
			<div id="wrapper">

					<!-- Main -->
					<div id="main">

						<div class="inner">
							<div class="mesaj_user">Salut, <?php echo $user?> <button onclick="signOutConfirm()">Log Out</button><!-- <a href="logout.php?logout=true">&nbsp;Log Out</a> --></div>

							<?php include("../include/header.php");?>



								<?php

								if(isset($_GET['action'])){
									echo '<h3>Postare '.$_GET['action'].'.</h3>';
								}
								?>

								<table>
								<tr>
									<th>Numar user</th>
									<th>Email</th>
									<th>Operatiuni</th>
								</tr>
								<?php
									try {

										$stmt = $conn->query('SELECT id, username, email FROM useri ORDER BY id ASC');
										while($row = $stmt->fetch()){

											echo '<tr>';
											echo '<td>'.$row['id'].'</td>';
											echo '<td>'.$row['username'].'</td>';
											echo '<td>'.$row['email'].'</td>';
											?>


											<?php
											echo '</tr>';

										}

									} catch(PDOException $e) {
									    echo $e->getMessage();
									}
								?>
								</table>

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
			<script src="../js/app.js"></script>

	</body>
</html>
