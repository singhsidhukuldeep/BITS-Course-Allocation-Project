<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "username");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_POST['username']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$key = mysqli_real_escape_string($link, $_POST['key']);
//$name = strtoupper($name);
$chk="SELECT * FROM `user` WHERE adminkey='".$key."' AND username='".$username."' AND email='".$email."'";
$rchk = mysqli_query($link, $chk);
$nrows=mysqli_num_rows($rchk);
if($nrows > 0){ 
$row = mysqli_fetch_array($rchk);
if($row['acctype']!=0){
	$passwordused=$row['passwordused'];
	$res="1";
    header('Location: fpwd.php?result='.$res.'&key='.$key.'&username='.$username.'&email='.$email.'&passwordused='.$passwordused);
	}
else {
	$res="3";
    header('Location: fpwd.php?result='.$res.'&key='.$key.'&username='.$username.'&email='.$email);
}
	}
else if($nrows <= 0){
	$res="4";
    header('Location: fpwd.php?result='.$res.'&key='.$key.'&username='.$username.'&email='.$email);
}
else{
	$res="ERROR: Could not able to execute ". $chk." as ".mysqli_error($link);
	//$res="ERROR: Could not able to execute ". $nrows;
	header('Location: fpwd.php?result='.$res);
}




 
// close connection
mysqli_close($link);
?>