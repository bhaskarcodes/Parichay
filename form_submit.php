<html>
	<head>
		<title>Account Creation</title>
	<head>
	
	<body>
	<?php
			$servername = "localhost";
			$username_db = "root";
			$password_db = "";
			$user_db="users";
			$conn = new mysqli($servername,$username_db,$password_db,$user_db);
		if(isset($_POST['submit']))
		{
			$username_submitted = $_POST['email'];
			$password_submitted = $_POST['password'];
			if(!$conn){
				die("connection_failed".mysql_connect_no);
			}
			else{
				$sql = "INSERT into student(email,pass) values('$username_submitted','$password_submitted')";
				if(mysqli_query($conn, $sql)){
					echo '<script type="text/javascript">
							alert("Account created..You may login now!")
							window.location = "intro.php"
						  </script>';
				}
				else{
					echo "Houston, we have a problem !";
				}
			}
		}
		else 
		{ 
			echo'<script type="text/javascript">
			alert("Access Denied...Redirecting to Home Page!")
           window.location = "intro.php"
           </script>';
			
			
		}
	    mysqli_close($conn);
	?>
	</body>