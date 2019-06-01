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
		<title>Educatie Tehnologica si aplicatii practice</title>
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

                       	//if form has been submitted process it
                       	if(isset($_POST['submit'])){

                       		$_POST = array_map( 'stripslashes', $_POST );

                       		//collect form data
                       		extract($_POST);


                       		if(!isset($error)){

                       			try {

                       				//insert into database
                       				$stmt = $conn->prepare('UPDATE postari SET titlu = :titlu, descr = :descr WHERE id = :id') ;
                       				$stmt->execute(array(
                       					':titlu' => $titlu,
                       					':descr' => $descr,
                       					':id' => $id
                       				));

                       				header('Location: home.php?action=actualizat');
                       				exit;

                       			} catch(PDOException $e) {
                       			    echo $e->getMessage();
                       			}

                       		}

                       	}

                       	?>


                       	<?php
                       	if(isset($error)){
                       		foreach($error as $error){
                       			echo $error.'<br />';
                       		}
                       	}

                       		try {

                       			$stmt = $conn->prepare('SELECT id, titlu, descr FROM postari WHERE id = :id') ;
                       			$stmt->execute(array(':id' => $_GET['id']));
                       			$row = $stmt->fetch();

                       		} catch(PDOException $e) {
                       		    echo $e->getMessage();
                       		}

                       	?>

                       	<form action='' method='post'>
                       		<input type='hidden' name='id' value='<?php echo $row['id'];?>'>

                       		<h1>Titlu<h1/>
                       		<input type='text' name='titlu' value='<?php echo $row['titlu'];?>'></p>

                       		<h1>Descriere</h1>
                       		<textarea name='descr' cols='60' rows='10'><?php echo $row['descr'];?></textarea></p>

                       		<p><input type='submit' name='submit' value='Actualizeaza'></p>

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
			<script src="../js/app.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.6/tinymce.min.js"></script>
      <script>
              tinymce.init({
                  selector: "textarea",
                  plugins: [
                      "advlist autolink lists link image charmap print preview anchor",
                      "searchreplace visualblocks code fullscreen",
                      "insertdatetime media table contextmenu paste"
                  ],
                  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
              });
      </script>

	</body>
</html>
