<?php
	require_once("session.php");
	require('../include/config.php');
//show message from add / edit page
if(isset($_GET['delpost'])){

	$stmt = $conn->prepare('DELETE FROM postari WHERE id = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost']));

	header('Location: home.php?action=stearsa');
	exit;
}

if(isset($_GET['delpost2'])){

	$stmt = $conn->prepare('DELETE FROM clasav WHERE id = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost2']));

	header('Location: home.php?action=stearsa');
	exit;
}

if(isset($_GET['delpost3'])){

	$stmt = $conn->prepare('DELETE FROM clasav WHERE id = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost3']));

	header('Location: home.php?action=stearsa');
	exit;
}

if(isset($_GET['delpost4'])){

	$stmt = $conn->prepare('DELETE FROM clasav WHERE id = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost4']));

	header('Location: home.php?action=stearsa');
	exit;
}

if(isset($_GET['delpost5'])){

	$stmt = $conn->prepare('DELETE FROM clasav WHERE id = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost5']));

	header('Location: home.php?action=stearsa');
	exit;
}

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
			function delpost2(id, title)
			{
				if (confirm("Esti sigur ca vrei sa stergi '" + title + "'"))
				{
						window.location.href = 'home.php?delpost2=' + id;
				}
			}
			function delpost3(id, title)
			{
				if (confirm("Esti sigur ca vrei sa stergi '" + title + "'"))
				{
						window.location.href = 'home.php?delpost3=' + id;
				}
			}
			function delpost4(id, title)
			{
				if (confirm("Esti sigur ca vrei sa stergi '" + title + "'"))
				{
						window.location.href = 'home.php?delpost4=' + id;
				}
			}
			function delpost5(id, title)
			{
				if (confirm("Esti sigur ca vrei sa stergi '" + title + "'"))
				{
						window.location.href = 'home.php?delpost5=' + id;
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
							<th>Titlu</th>
							<th>Data</th>
							<th>Operatiuni</th>
						</tr>
						<?php
							try {

								$stmt = $conn->query('SELECT id, titlu, descr, data_postare FROM postari ORDER BY id DESC');
								while($row = $stmt->fetch()){

									echo '<tr>';
									echo '<td>'.$row['titlu'].'</td>';
									echo '<td>'.date('jS M Y', strtotime($row['data_postare'])).'</td>';
									?>

									<td>
										<a href="edit-post.php?id=<?php echo $row['id'];?>">Editare</a> |
										<a href="javascript:delpost('<?php echo $row['id'];?>','<?php echo $row['titlu'];?>')">Sterge</a>
									</td>

									<?php
									echo '</tr>';

								}

							} catch(PDOException $e) {
							    echo $e->getMessage();
							}
						?>
						</table>
						<table>
						<tr>
							<th>Titlu</th>
							<th>Data</th>
							<th>Operatiuni</th>
						</tr>
						<?php
							try {

								$stmt = $conn->query('SELECT id, titlu, descr, data_postare FROM clasav ORDER BY id DESC');
								while($row = $stmt->fetch()){

									echo '<tr>';
									echo '<td>'.$row['titlu'].'</td>';
									echo '<td>'.date('jS M Y', strtotime($row['data_postare'])).'</td>';
									?>

									<td>
										<a href="edit-post2.php?id=<?php echo $row['id'];?>">Editare</a> |
										<a href="javascript:delpost2('<?php echo $row['id'];?>','<?php echo $row['titlu'];?>')">Sterge</a>
									</td>

									<?php
									echo '</tr>';

								}

							} catch(PDOException $e) {
									echo $e->getMessage();
							}
						?>
						</table>
						<table>
						<tr>
							<th>Titlu</th>
							<th>Data</th>
							<th>Operatiuni</th>
						</tr>
						<?php
							try {

								$stmt = $conn->query('SELECT id, titlu, descr, data_postare FROM clasavi ORDER BY id DESC');
								while($row = $stmt->fetch()){

									echo '<tr>';
									echo '<td>'.$row['titlu'].'</td>';
									echo '<td>'.date('jS M Y', strtotime($row['data_postare'])).'</td>';
									?>

									<td>
										<a href="edit-post3.php?id=<?php echo $row['id'];?>">Editare</a> |
										<a href="javascript:delpost3('<?php echo $row['id'];?>','<?php echo $row['titlu'];?>')">Sterge</a>
									</td>

									<?php
									echo '</tr>';

								}

							} catch(PDOException $e) {
									echo $e->getMessage();
							}
						?>
						</table>
						<table>
						<tr>
							<th>Titlu</th>
							<th>Data</th>
							<th>Operatiuni</th>
						</tr>
						<?php
							try {

								$stmt = $conn->query('SELECT id, titlu, descr, data_postare FROM clasavii ORDER BY id DESC');
								while($row = $stmt->fetch()){

									echo '<tr>';
									echo '<td>'.$row['titlu'].'</td>';
									echo '<td>'.date('jS M Y', strtotime($row['data_postare'])).'</td>';
									?>

									<td>
										<a href="edit-post4.php?id=<?php echo $row['id'];?>">Editare</a> |
										<a href="javascript:delpost4('<?php echo $row['id'];?>','<?php echo $row['titlu'];?>')">Sterge</a>
									</td>

									<?php
									echo '</tr>';

								}

							} catch(PDOException $e) {
									echo $e->getMessage();
							}
						?>
						</table>
						<table>
						<tr>
							<th>Titlu</th>
							<th>Data</th>
							<th>Operatiuni</th>
						</tr>
						<?php
							try {

								$stmt = $conn->query('SELECT id, titlu, descr, data_postare FROM clasaviii ORDER BY id DESC');
								while($row = $stmt->fetch()){

									echo '<tr>';
									echo '<td>'.$row['titlu'].'</td>';
									echo '<td>'.date('jS M Y', strtotime($row['data_postare'])).'</td>';
									?>

									<td>
										<a href="edit-post5.php?id=<?php echo $row['id'];?>">Editare</a> |
										<a href="javascript:delpost5('<?php echo $row['id'];?>','<?php echo $row['titlu'];?>')">Sterge</a>
									</td>

									<?php
									echo '</tr>';

								}

							} catch(PDOException $e) {
									echo $e->getMessage();
							}
						?>
						</table>
						<button onclick="window.location.href='add-post.php';">Adauga lectie Optional</button>
						<button onclick="window.location.href='add-post2.php';">Adauga lectie Clasa V</button>
						<button onclick="window.location.href='add-post3.php';">Adauga lectie Clasa VI</button>
						<button onclick="window.location.href='add-post4.php';">Adauga lectie Clasa VII</button>
						<button onclick="window.location.href='add-post5.php';">Adauga lectie Clasa VIII</button>
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
