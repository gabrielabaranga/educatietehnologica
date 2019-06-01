<?php require('include/config.php');

$stmt = $conn->prepare('SELECT id, titlu, descr, data_postare FROM postari WHERE id = :id');
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch();

if($row['id'] == ''){
	header('Location: ./');
	exit;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Educatie Tehnologica si aplicatii practice</title>
		<meta charset="iso-8859-2" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="is-preload">

			<!-- Wrapper -->
			<div id="wrapper">

					<!-- Main -->
					<div id="main">
						<div class="inner">

							<?php include("include/header.php");?>

								<!-- Section -->
								<section>
									<?php
										echo '<div class="content">';
										    echo '<header>';
												echo '<h1>'.$row['titlu'].'</h1>';
												echo '<p>Postat pe '.date('jS M Y', strtotime($row['data_postare'])).'</p>';
											echo '</header>';
											echo '<p>'.$row['descr'].'</p>';
											echo '<ul class="actions">';
												echo '<li><a href="index.php" class="button big">Inapoi la prima pagina</a><li>';
											echo '</ul>';
										echo '</div>';
									?>
								</section>
						</div>
					</div>
				<?php include("include/sidebar.php");?>
			</div>

			<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>
