<?php
			$servername = "localhost";
			$username_db = "root";
			$password_db = "";
			$user_db = "users";
			$conn = new mysqli($servername,$username_db,$password_db,$user_db);
			$img_src = "";
			$name_user = "आपका नाम ";
			$email_user = "आपका ईमेल आईडी ";
			$dob_user = "आपका जन्मदिन  ";
			$about_user = "अपने बारे में दी गयी जानकारी ";
			$achievement_user = "आपके द्वारा दर्ज़ की गयी उपलब्धियां ";
			$hobby_user = "आपके द्वारा दर्ज़ किये गए रुचिकर्म ";
			$username_submitted = "";
			$password_submitted = "";
			$dob_user  = "";
			$about_user = "";
			$achievement_user = "";
			$hobby_user =  "";
			$user_10_school = "";
			$user_10_board = "";
			$user_10_marks = "";
			$user_12_school = "";
			$user_12_board = "";
			$user_12_marks = "";
			$user_college = "";
			$user_university = "";
			$user_cgpa = "";
			$hobby_user = "";	
			$user_id= "";
			session_start();
		       $user_id = $_SESSION["user_id"];
			   $name_user = $_POST["name"];
			   $about_user = $_POST["about"];
			   $dob_user = $_POST["dob"];
			   $user_10_board = $_POST["10board"];
			   $user_10_school = $_POST["10school"];
			   $user_10_marks = $_POST["10marks"];
			   $user_12_marks = $_POST["12marks"];
			   $user_12_board = $_POST["12board"];
			   $user_12_school = $_POST["12school"];
			   $user_university = $_POST["university"];
			   $user_college = $_POST["college"];
			   $user_cgpa = $_POST["cgpa"];
			   $achievement_user = $_POST["achievements"];
			   $hobby_user = $_POST["hobbies"];
			   $img_src = $_POST["img_src"];
			   //echo "$img_src";			   
		
		$sql = "update student set uname='$name_user', about='$about_user', dob = '$dob_user',10board='$user_10_board',10school='$user_10_school',10marks='$user_10_marks' where id='$user_id' ";
		 
				if (mysqli_query($conn, $sql)) {
					//echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
		$sql = "update student set 12board = '$user_12_board', 12school='$user_12_school',12marks='$user_12_marks' where id='$user_id' ";
		 			if (mysqli_query($conn, $sql)) {
					//echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
			$sql = "update student set university = '$user_university', college='$user_college',cgpa='$user_cgpa' where id='$user_id' ";
			if (mysqli_query($conn, $sql)) {
				//	echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
			 
		 	$sql = "update student set achievement = '$achievement_user', hobby='$hobby_user',img_src='$img_src' where id='$user_id' ";
			if (mysqli_query($conn, $sql)) {
				//	echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
		 	
				
				
			?>
			   
			   <html>
				   <head>
							<meta http-equiv="refresh" content="0; url=login.php" />
							<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
							<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				   </head>
				   <body>
				   
				
				   </body>
			   </html>
			   