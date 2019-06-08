<?php require('include/config.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Educatie Tehnologica si aplicatii practice la gimnaziu</title>
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
									<header class="major">
										<h2>Lectii Clasa VIII</h2>
									</header>
									<div class="posts">
										<?php
											try {
											$stmt = $conn->query('SELECT id, titlu, descr, data_postare FROM clasaviii ORDER BY id DESC');
												while($row = $stmt->fetch()){
													echo '<article>';
														echo '<header>';
															echo '<h3><a href="viewpost.php?id='.$row['id'].'">'.$row['titlu'].'</a></h3>';
															echo '<p>Postat pe '.date('jS M Y H:i:s', strtotime($row['data_postare'])).'</p>';
														echo '</header>';
														$desc = substr($row['descr'],0,300);
														echo '<p>'.$desc.'</p>';
														echo '<ul class="actions">';
															echo '<li><a href="viewpost5.php?id='.$row['id'].'" class="button big">Citeste mai mult</a></li>';
														echo '</ul>';
													echo '</article>';
												}
											} catch(PDOException $e) {
												echo $e->getMessage();
											}
										?>

									</div>
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
