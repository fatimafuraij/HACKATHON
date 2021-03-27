<?php
include_once 'connection.php'
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>



    
<?php 
	if (!empty($_POST['Lemail'])) {
		$e = mysqli_real_escape_string ($link, $_POST['Lemail']);
	} else {
		$e = FALSE;
		echo '<p >You forgot to enter your email address!</p>';
	}
	
	// Validate the password:
	if (!empty($_POST['Lpassword'])) {
		$p = mysqli_real_escape_string ($link, $_POST['Lpassword']);
	} else {
		$p = FALSE;
		echo '<p >You forgot to enter your password!</p>';
	}




if ($e && $p) {
$sql="SELECT * FROM customer WHERE (Email='$e' AND Password='$p' );";



$resulte=mysqli_query($link,$sql)or trigger_error("Query: $sql\n<br />MySQL Error: " . mysqli_error($link));


if (@mysqli_num_rows($resulte) == 1) { // A match was made.

			// Register the values:
			$_SESSION = mysqli_fetch_array ($resulte, MYSQLI_ASSOC); 
			mysqli_free_result($resulte);
			mysqli_close($link);





 ?>
<script> location.replace("Homepage.html") </script>

    <?php }
 else{ ?>
     <script> location.replace("login_signup.html") </script>


     <?php    }} } ?>






</body>
</html>

