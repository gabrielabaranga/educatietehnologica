<?php require('include/config.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Educatie Tehnologica si aplicatii practice la gimnaziu</title>
		<meta charset="iso-8859-2" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
										<h2>Test grila Clasa V</h2>
									</header>
									<div class="posts">
										<?php
											try {
											$stmt = $conn->query('SELECT id, intrebare, raspuns1, raspuns2, raspuns3, raspuns_final FROM test_grila_clasav ORDER BY id ASC');
												while($row = $stmt->fetch()){
                          echo '<article>';
                          echo '<header>';
                          echo '<h5>'.$row['intrebare'].'</a></h5>';
                          echo '</header>'; //'.$row['raspuns_final'] $row['raspuns1']','
                          echo '<div id="myButtons" class="btn-group" data-toggle="buttons">';
                          echo '<div class="btn-group" data-toggle="buttons">';
                                echo '<label class="btn btn-default">';
                                echo '<input type="radio" name="options" id="option1" onclick="myFunction('.$row['raspuns1'].','.$row['raspuns_final'].')">'.$row['raspuns1'];
                                echo  '</label>';
                                echo '<label class="btn btn-default">';
                                echo '<input type="radio" name="options" id="option1" onclick="myFunction('.$row['raspuns2'].','.$row['raspuns_final'].')">'.$row['raspuns2'];
                                echo '</label>';
                                echo '<label class="btn btn-default">';
                                echo '<input type="radio" name="options" id="option1" onclick="myFunction('.$row['raspuns3'].','.$row['raspuns_final'].')">'.$row['raspuns3'];
                                echo '</label>';
                          echo '</div>';
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

      <script language="javascript" type="text/javascript">
      function myFunction(a,b) {
        return a;
      }
      $("#myButtons :input").change(function() {
       console.log(this); // points to the clicked input button
      });
</script>

	</body>
</html>
