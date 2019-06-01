<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()=="")
{
	$user->redirect('home.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);

		try
		{
			$stmt = $user->runQuery("SELECT username, email FROM useri WHERE username=:uname OR email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if($row['user_name']==$uname) {
				$error[] = "Numele de utilizator exista deja!";
			}
			else if($row['user_email']==$umail) {
				$error[] = "Emailul exista in baza de date!";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){
					$user->redirect('register.php?inregistrat');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Educatie Tehnologica si aplicatii practice - Inregistrea admin nou</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body>

<div class="signin-form">

<div class="container">
     	<?php include("../include/menu-admin.php");?>
        <form method="post" class="form-signin">
            <h1 class="form-signin-heading">Inregistrare user nou. </h1>
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="error">
                        <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['inregistrat']))
			{
				 ?>
                 <div class="success">
                      Inregistrare efectuata!
                 </div>
                 <?php
			}
			?>

            <input type="text" name="txt_uname" placeholder="Username" value="<?php if(isset($error)){echo $uname;}?>" />


            <input type="text" name="txt_umail" placeholder="Email" value="<?php if(isset($error)){echo $umail;}?>" />


            	<input type="password" name="txt_upass" placeholder="Parola" />



            	<button type="submit"name="btn-signup">
                	Inregistrare
                </button>

        </form>
       </div>
</div>

</div>
<?php include("../include/footer.php");?>
</body>
</html>
