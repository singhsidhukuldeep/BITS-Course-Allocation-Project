<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forgot Password</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text">
                            <h1><strong>User</strong> Password Recovery</h1>
                            <div class="description">
                            	<p>
	                            	BITS Pilani 
	                            	<strong>Hyderabad Campus</strong>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Password Recovery</h3>
                            		<p>Enter your username and authentication code here</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="fpwdbackend.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" required autocomplete="off" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Email Id</label>
			                        	<input type="email" required autocomplete="off" name="email" placeholder="BITS Email Id..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Admin Authentication Code</label>
			                        	<input type="password" name="key" placeholder="Admin Authentication code..." class="form-password form-control" id="form-password">
			                        </div>
                                    <?php
									  //$result=$_GET['result']; echo $result;
									  if(isset($_GET['result'])){
											$result=$_GET['result'];
										
										if ($result=="1"){
											$username=$_GET['username'];
											$email=$_GET['email'];
											$passwordused=$_GET['passwordused'];
											$adminkey=$_GET['key'];
											echo 'Password for  Username:'.$username.' and Email:'.$email.' is:<br>  <i>'.$passwordused.'</i><br> </strong><a href="index.php"><strong>Please LogIn here!</strong></a><br>';
										}
										elseif ($result=="3"){
											$username=$_GET['username'];
											$email=$_GET['email'];
											//$passwordused=$_GET['passwordused'];
											$adminkey=$_GET['key'];
											echo 'Password for  Username:'.$username.' and Email:'.$email.' <i> CANNOT BE RECOVERED</i> as<br> <i>Your account has been terminated by the admin!</i><br> </strong><a href="sup.php"><strong>Please Sign Up here!</strong></a><br>';
										}
										elseif ($result=="4"){
											$username=$_GET['username'];
											$email=$_GET['email'];
											//$passwordused=$_GET['passwordused'];
											$adminkey=$_GET['key'];
											echo 'Password for  Username:'.$username.' and Email:'.$email.' <i> CANNOT BE RECOVERED</i> as<br> No password associated with the given Username and Email was found. <br> Please recheck the details or contact the admin </strong><a href="sup.php"><strong>Please Sign Up here!</strong></a><br>';
										}
										else
										{
											echo'ERROR OCCURED:<br>'.$result.'<br>Contact ADMIN';
										}}
									
								   ?>
			                        <button type="submit" class="btn">Password</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text">
                            <div class="description">
                            	<p>
	                            	<a href="index.php"><strong>Sign In!</strong></a><strong> | </strong><a href="sup.php"><strong>Sign Up!</strong></a>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>-->
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>