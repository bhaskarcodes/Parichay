<!DOCTYPE html>
<html>
<head>
    <title>परिचय पोर्टल</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    #login-form .input-group, #login-form .form-group {
        margin-top: 30px;
    }
    
    #login-form .btn-default {
        background-color: #EEE;
    }
    
    .brand {
        color: #CCC;
    }
    </style>
</head>
 <body background="http://www.walldevil.com/wallpapers/a87/pattern-texture-light-background-wallpaper-flower-image.jpg">
				   
<div class="container" style="margin-top: 120px;">

 
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <form id="login-form" method="post" action="login.php" role="form">
                    <div class="col-md-7 col-md-offset-4"><legend>परिचय पोर्टल</legend></div>
                    <?php if (isset($_GET['err'])) { ?>
                    <div class="alert alert-danger text-center"><?php echo "Login failed! Invalid email-id or password!"; ?></div>
                    <?php } ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="text" name="email" placeholder="अपना ईमेल आईडी दर्ज़ करें " required class="form-control" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" placeholder="*************" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="आपका स्वागत है " class="btn btn-primary btn-block" />
                    </div>
                    <div class="form-group">
                        <hr/>
                        <div class="col-sm-6" style="padding: 0;">अकाउंट नहीं है ? <a href="create_user">पंजीकृत करे </a></div>    
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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