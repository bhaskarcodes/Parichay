<html>
	<head>
		<title>Profile Page</title>
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
	<body background="http://www.walldevil.com/wallpapers/a87/pattern-texture-light-background-wallpaper-flower-image.jpg">
		<?php
			$servername = "localhost";
			$username_db = "root";
			$password_db = "";
			$user_db = "users";
			$conn = new mysqli($servername,$username_db,$password_db,$user_db);
			$img_src = "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRBp8F63B-j0z_797t19b5-Olrt6atlRXXMvPrWKqMskm2zvveS3g-cIESw";
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
			if(isset($_POST['submit']))
			{ 
				    if($_POST["email"]!=""){
					$username_submitted = $_POST["email"];}
					if($_POST["password"]!=""){
					$password_submitted = $_POST["password"];}
					$query  = "SELECT * FROM student where email = '$username_submitted' AND pass = '$password_submitted'";
					$result = mysqli_query($conn,$query);
					$count = mysqli_num_rows($result);
					if(($count)>0){

						$row = mysqli_fetch_array($result);
						
						$_SESSION['user_id'] = $row['id'];
						$user_id=$row['id'];
						$_SESSION['name'] = $row['uname'];
						 $name_user = $row["uname"];
						 $email_user = $row["email"];
						
						
						$originalDate = $row["dob"];
						$dob_user  = date("d-m-Y", strtotime($originalDate));
						$about_user = $row["about"];
						$achievement_user =  $row["achievement"];
						$hobby_user =  $row["hobby"];
						$user_10_school =  $row["10school"];
						$user_10_board =  $row["10board"];
						$user_10_marks =  $row["10marks"];
						$user_12_school =  $row["12school"];
						$user_12_board =  $row["12board"];
						$user_12_marks =  $row["12marks"];
						$user_college =  $row["college"];
						$user_university =  $row["university"];
						$user_cgpa =  $row["cgpa"];
						$hobby_user =  $row["hobby"];
						$img_src = $row["img_src"];						
					}
			}
			
			else if($_SESSION['user_id']!=""){
				//echo $_SESSION['user_id'];
				$myid = $_SESSION['user_id'];
					$query  = "SELECT * FROM student where id = '$myid'";
					$result = mysqli_query($conn,$query);
					$count = mysqli_num_rows($result);
					if(($count)>0){
						$row = mysqli_fetch_array($result);
						 $name_user = $row["uname"];
						 $email_user = $row["email"];
						 $originalDate = $row["dob"];
						$dob_user  = date("d-m-Y", strtotime($originalDate));
						$about_user = $row["about"];
						$achievement_user =  $row["achievement"];
						$hobby_user =  $row["hobby"];
						$user_10_school =  $row["10school"];
						$user_10_board =  $row["10board"];
						$user_10_marks =  $row["10marks"];
						$user_12_school =  $row["12school"];
						$user_12_board =  $row["12board"];
						$user_12_marks =  $row["12marks"];
						$user_college =  $row["college"];
						$user_university =  $row["university"];
						$user_cgpa =  $row["cgpa"];
						$hobby_user =  $row["hobby"];		
						$img_src = $row["img_src"];
					}
			}
			
			else{		
	echo 
				'<script type="text/javascript">
							alert("An error occured ... redirecting to main page!")
							window.location = "intro.php"
						  </script>';
			}
	?>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">परिचय पोर्टल </a>
    </div>
      
   <!--
   session_start();
unset($_SESSION["nome"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
header("Location: home.php");
   
   -->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="edit.php"><span class="glyphicon glyphicon-user"></span> बदलाव करें</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> प्रस्थान करें </a></li>
    </ul>
  </div>
</nav> 
    
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src= " <?php echo $img_src; ?> " class="avatar img-circle" alt="avatar">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
	  
	    <blockquote>
	    <h4>हमारा विश्वास </h5>
		<p><b>छोटे मन से कोई बड़ा नहीं होता, टूटे मन से कोई खड़ा नहीं होता <footer>पूर्व प्रधानमंत्री श्री अटल बिहारी वाजपेयी</b></footer>
		</blockquote>
  
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">परिचय आईडी  :</label>
            <div class="col-lg-8">
               <p class="form-control-static"><?php echo $_SESSION['user_id']; ?></p>
			  
			   <p class="form-control-static">आपका परिचय प्रोफाइल  <a href = "http://localhost:8082/parichay.php?id=<?php echo $_SESSION['user_id']; ?>"> https://parichayportal.000webhostapp.com?id=<?php echo  $_SESSION['user_id'];?></a> पर देखा जा सकता है. </p>
            </div>
          </div>
		  

        
        <form class="form-horizontal" role="form">
          
		  <?php if($name_user!=""){?>
			  
		  <div class="form-group">
            <label class="col-lg-3 control-label">नाम :</label>
            <div class="col-lg-8">
               <p class="form-control-static"><?php echo "$name_user"; ?></p>
            </div>
          </div>
         <?php }
		  ?>
          
		   <?php if($about_user!=""){?>
			 
		  <div class="form-group">
            <label class="col-lg-3 control-label">मेरे बारे में:</label>
            <div class="col-lg-8">
		  <p class="form-control-static"><?php echo "$about_user"; ?></p>
		   </div>
          </div><?php }
		  ?>
		  
		  <?php if($email_user!=""){?>
			
		  <div class="form-group">
            <label class="col-lg-3 control-label">
ईमेल आईडी</label>
            <div class="col-lg-8">
              <p class="form-control-static"><?php echo "$email_user"; ?></p>
            </div>
          </div>
		  <?php }?>
		  
		  <?php if($dob_user!=""){?>
          <div class="form-group">
            <label class="col-lg-3 control-label">
जन्मदिन</label>
            <div class="col-lg-8">
              <p class="form-control-static"><?php echo "$dob_user"; ?></p>
            </div>
          </div>
		  <?php }?>
		  
<?php if(($user_10_school!="" && $user_10_board!="" && $user_10_marks!="")||($user_12_school!="" && $user_12_board!="" && $user_12_marks!="") ||($user_college!="" && $user_university!="" && $user_cgpa!=""))
{
	?>
		  <div class="form-group">
            <label class="col-md-3 control-label">
शैक्षणिक योग्यता संबंधित जानकारी:</label>
            <div class="col-md-8">
               <table class="table table-bordered">
    <thead>
      <tr>
        <th>Institution Name</th>
        <th>Board/University</th>
        <th>Score(in %/cgpa)</th>
      </tr>
    </thead>
    <tbody>
	<?php if(($user_10_school!="" && $user_10_board!="" && $user_10_board!="")){?>
	
      <tr>
        <td><?php echo "$user_10_school"; ?></td>
        <td><?php echo "$user_10_board"; ?></td>
        <td><?php echo "$user_10_marks"; ?></td>
      </tr>   
	<?php 
	}
	?>	  
	<?php if(($user_12_school!="" && $user_12_board!="" && $user_12_marks!="")){?>
	  <tr>
        <td><?php echo "$user_12_school"; ?></td>
        <td><?php echo "$user_12_board"; ?></td>
        <td><?php echo "$user_12_marks"; ?></td>
      </tr>
	<?php }?>
	<?php if(($user_college!="" && $user_university!="" && $user_cgpa!="")){?>
      <tr>
        <td><?php echo "$user_college"; ?></td>
        <td><?php echo "$user_university"; ?></td>
        <td><?php echo "$user_cgpa"; ?></td>
      </tr>
	<?php }?>
    </tbody>
  </table>
            </div>
          </div>
		  
 <?php } ?>
		<?php if($achievement_user!=""){?>  
		   <div class="form-group">
            <label class="col-lg-3 control-label">उपलब्धियां :</label>
            <div class="col-lg-8">
              <p class="form-control-static"><?php echo "$achievement_user"; ?></p>
            </div>
          </div>	
		<?php }?> 
<?php if($hobby_user!=""){?>		
		   <div class="form-group">
            <label class="col-lg-3 control-label">रुचिकर्म :</label>
            <div class="col-lg-8">
              <p class="form-control-static"><?php echo "$hobby_user"; ?></p>
            </div>
          </div>
<?php }?>
		  
		<!--<div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control" readonly>
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
			-->          
		   
          
          
        </form>
      </div>
  </div>
</div>
<hr>
 <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">© 2016 - Made with  <span class="glyphicon glyphicon-heart"></span> by Bhaskar Tejaswi.
          
      </p>
      
      <a href="http://www.beingsimpleisgood.blogspot.in" class="navbar-btn btn-danger btn pull-right">
      <span class="glyphicon glyphicon-star"></span>  Visit my blog</a>
    </div>
    
    
  </div>
	</body>
	
</html>
